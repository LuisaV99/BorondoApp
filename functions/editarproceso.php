<?php
include("../model/conexion.php");

$Nombres=$_POST["Nombres"];
$Apellidos=$_POST["Apellidos"];
$Correo=$_POST["Correo"];
$Contraseña=$_POST["Contraseña"];
$Contraseña=hash('sha512',$Contraseña);

$Documento=$_POST["Documento"];
$FechaRg=$_POST["FechaRg"];

$upd="UPDATE usuarios SET Nombres='$Nombres', Apellidos='$Apellidos', Correo='$Correo', Contraseña='$Contraseña', FechaRgU='$FechaRg' WHERE Documento='$Documento'";
$rsl=mysqli_query($conx,$upd);

if($rsl){
    echo "<script>alert('Dato Actualizado');window.history.go(-2);</script>";
}else{
    echo "<script>alert('No se pudo actualizar');window.history.go(-1);</script>";
}
?>