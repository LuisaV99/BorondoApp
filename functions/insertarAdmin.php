<?php
include ("../model/conexion.php");

$Documento = $_POST["Documento"];
$Nombres = $_POST["Nombres"];
$Apellidos = $_POST["Apellidos"];
$Fecha_Nacimiento = $_POST["Fecha_Nacimiento"];
$Telefono = $_POST["Telefono"];
$Correo = $_POST["Correo"];
$Contraseña = $_POST["Contraseña"];
$ID_Rol= 2;


$create="INSERT INTO usuarios (Documento, Nombres, Apellidos, Fecha_Nacimiento, Telefono, Correo,Contraseña, ID_Rol) VALUES ('$Documento','$Nombres','$Apellidos','$Fecha_Nacimiento','$Telefono','$Correo','$Contraseña','$ID_Rol')";
$result=mysqli_query($conx,$create);

if($result){
    echo "<script>alert('Administrador creado');location='../BorondoMan.php';</script>";
}else{
    echo "<script>alert('No se pudo crear');window.history.go(-1);</script>";

}
?>