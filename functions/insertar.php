<?php
include("../model/conexion.php");

$document=$_POST["Documento"];
$ID_Estado_Usuario= 1;
// $Foto_Perfil=addslashes(file_get_contents($_FILES["imagen"]["tmp_name"]));
$name=$_POST["Nombres"];
$lastname=$_POST["Apellidos"];
$email=$_POST["Correo"];
$pass=$_POST["Contraseña"];
$ID_Rol= 1;


$vali1 = "SELECT * FROM usuarios WHERE Documento='$document'";
$vali2=mysqli_query($conx,$vali1);
$vali3 = mysqli_num_rows($vali2);

if ($vali3 !=0) {
    echo "<script>alert('Este documento de identidad ya está registrado');location='../Registro.php';</script>";
} else {
    $create="INSERT INTO usuarios (Documento, ID_Estado_Usuario, Nombres, Apellidos, Correo,  Contraseña, ID_Rol) VALUES ('$document','$ID_Estado_Usuario','$name','$lastname','$email','$pass','$ID_Rol')";
$result=mysqli_query($conx,$create);

if($result){
    echo "<script>alert('Registro Guardado');location='../Login.php';</script>";
}else{
    echo "<script>alert('No se pudo registrar');window.history.go(-1);</script>";
}
}

?>