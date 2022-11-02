<?php

include("../model/conexion.php");



$ID_Pqrs=$_POST["ID_Pqrs"];
$Asunto=$_POST["Asunto"];
$Descripcion=$_POST["Cuerpo"];
$Respuesta=$_POST["Respuesta"];
$Fecha_pqrs=$_POST["Fecha_pqrs"];
$ID_Estadopqrs=2;

$Correo=$_POST["Correo"];
$Nombres=$_POST["NombresU"];

$Nom_Tipo=$_POST["Nom_Tipo"];



$upd="UPDATE pqrs SET Respuesta='$Respuesta', Fecha_pqrs='$Fecha_pqrs', ID_Estadopqrs='$ID_Estadopqrs' WHERE ID_Pqrs='$ID_Pqrs'";
$rsl=mysqli_query($conx,$upd);



     




//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require "PHPMailer/src/PHPMailer.php";
require "PHPMailer/src/SMTP.php";
require "PHPMailer/src/Exception.php";

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);



try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'BorondoAppOfficial@gmail.com';                     //SMTP username
    $mail->Password   = 'zpovkboutcxxznmd';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
   
  


    //Recipients
    $mail->setFrom('BorondoAppOficial@gmail.com', 'BorondoApp');
    $mail->addAddress('dasanta98@misena.edu.co', ''.$Nombres.'');     //Add a recipient
    // $mail->addAddress('ellen@example.com');               //Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    // //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject =  'Pqrs Contestada' ;
    $mail->Body    = 
     '<h1>BORONDOAPP</h1> 
     <h2 style="margin-bottom:10px">Tu '.$Nom_Tipo.' ha sido contestada.</h2> 
     <h4>Detalles</h4>
     Asunto: '.$Asunto.' <br>
    Descripcion: '.$Descripcion.' 
    <br>
    <h4>Respuesta</h4>
    '.$Respuesta.'<br><br>
    <a href="http://localhost/BorondoApp/">Entrar a BorondoApp</a>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
    }
 catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

if($rsl){
    echo "<script>alert('Pqrs contestada');window.history.go(-1);</script>";
}else{
    echo "<script>alert('No se pudo actualizar');window.history.go(-1);</script>";
}
