<?php
include("../model/conexion.php");

$document=$_POST["Documento"];
$Tipo=$_POST["Tipopqrs"];
$Asunto=$_POST["Asunto"];
$Cuerpo=$_POST["Cuerpo"];
$Estadopqrs= "1";

if ($Tipo == 0){
    echo "<script>alert('Selecciona un tipo de pqrs valido');location='../index.php';</script>";
} else {
    $create="INSERT INTO pqrs (Documento, ID_Tipopqrs, Asunto, Cuerpo, ID_Estadopqrs) 
VALUES ('$document','$Tipo','$Asunto','$Cuerpo','$Estadopqrs')";
$result=mysqli_query($conx,$create);

if($result){
    echo "<script>alert('Pqrs enviada, Gracias por su opinión 🎇');location='../index.php';</script>";
}else{
    echo "<script>alert('No se pudo registrar');location='../index.php';</script>";
}
}

?>