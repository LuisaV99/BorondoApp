<?php
include("./model/conexion.php");

$document=$_POST["Documento"];
// $Foto_Perfil=addslashes(file_get_contents($_FILES["imagen"]["tmp_name"]));
$Tipo=$_POST["Tipopqrs"];
$Asunto=$_POST["Asunto"];
$Cuerpo=$_POST["Cuerpo"];
$Estadopqrs= "Sin Contestar";

// $pass=hash('sha512',$pass);


$create="INSERT INTO pqrs (Documento, Tipopqrs, Asunto, Cuerpo, Estadopqrs) VALUES ('$document','$Tipo','$Asunto','$Cuerpo','$Estadopqrs')";
$result=mysqli_query($conx,$create);

if($result){
    echo "<script>alert('Pqrs enviada, Gracias por su opinion 🎇');location='index.php';</script>";
}else{
    echo "<script>alert('No se pudo registrar');location='index.php';</script>";
}
?>