<?php
include("model/conexion.php");

$Nombres=$_POST["Nombres"];
$Apellidos=$_POST["Apellidos"];
$Correo=$_POST["Correo"];
$Contraseña=$_POST["Contraseña"];
$ID_Usuario=$_POST["ID_Usuario"];

$upd="UPDATE usuarios SET Nombres='$Nombres', Apellidos='$Apellidos', Correo='$Correo', Contraseña='$Contraseña' WHERE ID_Usuario='$ID_Usuario'";
$rsl=mysqli_query($conx,$upd);

if($rsl){
    echo "<script>alert('Dato Actualizado');location='perfilusuario.php';</script>";
}else{
    echo "<script>alert('No se pudo actualizar');window.history.go(-1);</script>";
}
?>