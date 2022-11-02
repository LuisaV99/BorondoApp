<?php
session_start();

include("../model/conexion.php");

$document=$_POST["Documento_popup"];
$email=$_POST["Correo_popup"];
// $pass=hash('sha512',$pass);

$read=mysqli_query($conx, "SELECT * FROM usuarios WHERE Documento='$document' AND Correo='$email'");
$ok=mysqli_fetch_array($read);

if($ok["ID_Rol"]==1){
    if($ok["ID_Estado_Usuario"]==2){

        $_SESSION['Documento']=$document;
        header ("location:../rehabilitar.php");

    }else{
        $_SESSION['Documento']=$document;
        header ("location:../index.php");
    }
    
}else
if($ok["ID_Rol"]==2){
    $_SESSION['Documento']=$document;
    header ("location:../Adminpqrs.php");
}else
if($ok["ID_Rol"]==3){
    $_SESSION['Documento']=$document;
    header ("location:../BorondoMan.php");}
else {
    echo "<script>alert('Documento o correo equivocado');window.history.go(-1);</script>";
}
