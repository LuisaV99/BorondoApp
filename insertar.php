<?php
include("./model/conexion.php");

$document=$_POST["Documento"];
// $Foto_Perfil=addslashes(file_get_contents($_FILES["imagen"]["tmp_name"]));
$name=$_POST["Nombres"];
$lastname=$_POST["Apellidos"];
$phone=$_POST["Telefono"];
// $pass=hash('sha512',$pass);
$birthdate=$_POST["Fecha_Nacimiento"];
$email=$_POST["Correo"];
$pass=$_POST["Contraseña"];
$ID_Rol= 1;

$create="INSERT INTO usuarios (Documento, Nombres, Apellidos, Fecha_Nacimiento, Correo, Telefono, Contraseña, ID_Rol) VALUES ('$document','$name','$lastname','$birthdate','$email','$phone','$pass','$ID_Rol')";
$result=mysqli_query($conx,$create);

if($result){
    echo "<script>alert('Registro Guardado');location='Login.php';</script>";
}else{
    echo "<script>alert('No se pudo registrar');window.history.go(-1);</script>";
}
?>