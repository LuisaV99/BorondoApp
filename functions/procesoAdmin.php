<?php
include ("../model/conexion.php");

$Documento=$_POST["Documento"];
$Nombres=$_POST["Nombres"];
$Apellidos=$_POST["Apellidos"];
$Correo=$_POST["Correo"];
$Contraseña=$_POST["Contraseña"];
$Contraseña=hash('sha512',$Contraseña);


$update = "UPDATE usuarios set Documento='$Documento', Nombres='$Nombres', Apellidos='$Apellidos',Correo='$Correo', Contraseña='$Contraseña' WHERE Documento = '$Documento'";
$result= mysqli_query($conx, $update);

if($result){
    echo "<script>alert('Administrador Actualizado');window.history.go(-2);</script>";

}else{
    echo "<script>alert('No se pudo actualizar');window.history.go(-1);</script>";

}
?>