<?php
include("./model/conexion.php");

$name=$_POST["Nombres"];
$lastname=$_POST["Apellidos"];
$username=$_POST["Nom_Usuario"];
// $pass=hash('sha512',$pass);
$birthdate=$_POST["Fecha_Nacimiento"];
$email=$_POST["Correo"];
$pass=$_POST["Contraseña"];
$ID_Rol= 1;

$create="INSERT INTO usuarios (Nombres, Apellidos, Nom_Usuario, Fecha_Nacimiento, Correo, Contraseña, ID_Rol) VALUES ('$name','$lastname','$username','$birthdate','$email','$pass','$ID_Rol')";
$result=mysqli_query($conx,$create);

if($result){
    echo "<script>alert('Registro Guardado');location='Login.php';</script>";
}else{
    echo "<script>alert('No se pudo registrar');window.history.go(-1);</script>";
}
?>