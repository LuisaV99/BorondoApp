<?php
include ("../model/conexion.php");

$Documento = $_POST["Documento"];
$ID_Estado_Usuario= 1;

$Nombres = $_POST["Nombres"];
$Apellidos = $_POST["Apellidos"];
$Correo = $_POST["Correo"];
$Contraseña = $_POST["Contraseña"];
$Contraseña=hash('sha512',$Contraseña);

$ID_Rol= 2;


$create="INSERT INTO usuarios (Documento, ID_Estado_Usuario, Nombres, Apellidos, Correo,Contraseña, ID_Rol) VALUES ('$Documento','$ID_Estado_Usuario','$Nombres','$Apellidos','$Correo','$Contraseña','$ID_Rol')";
$result=mysqli_query($conx,$create);

if($result){
    echo "<script>alert('Administrador creado');location='../BorondoMan.php';</script>";
}else{
    echo "<script>alert('No se pudo crear');window.history.go(-1);</script>";

}
?>