<?php
include("../model/conexion.php");

$document=$_POST["Documento"];
$ID_Estado_Usuario= 1;
$name=$_POST["Nombres"];
$lastname=$_POST["Apellidos"];
$phone=$_POST["Telefono"];
$birthdate=$_POST["Fecha_Nacimiento"];
$email=$_POST["Correo"];
$pass=$_POST["Contraseña"];
$ID_Rol= 1;


$vali1 = "SELECT * FROM usuarios WHERE Documento='$document'";
$vali2=mysqli_query($conx,$vali1);
$vali3 = mysqli_num_rows($vali2);

if ($vali3 !=0) {
    echo "<script>alert('Este documento de identidad ya está registrado');location='../Registro.php';</script>";
} else {
    $create="INSERT INTO usuarios (Documento, ID_Estado_Usuario, Nombres, Apellidos, Fecha_Nacimiento, Correo, Telefono, Contraseña, ID_Rol) VALUES ('$document','$ID_Estado_Usuario','$name','$lastname','$birthdate','$email','$phone','$pass','$ID_Rol')";
$result=mysqli_query($conx,$create);

if($result){
    echo "<script>alert('Registro Guardado');location='../Login.php';</script>";
}else{
    echo "<script>alert('No se pudo registrar');window.history.go(-1);</script>";
}
}

?>