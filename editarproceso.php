<?php
include("model/conexion.php");

$Nombres=$_POST["Nombres"];
$Apellidos=$_POST["Apellidos"];
$Correo=$_POST["Correo"];
$Telefono=$_POST["Telefono"];
$Contraseña=$_POST["Contraseña"];
$Documento=$_POST["Documento"];

$upd="UPDATE usuarios SET Nombres='$Nombres', Apellidos='$Apellidos', Correo='$Correo' , Telefono='$Telefono', Contraseña='$Contraseña' WHERE Documento='$Documento'";
$rsl=mysqli_query($conx,$upd);

if($rsl){
    echo "<script>alert('Dato Actualizado');location='perfilusuario.php';</script>";
}else{
    echo "<script>alert('No se pudo actualizar');window.history.go(-1);</script>";
}
?>