<?php
include("../model/conexion.php");

$document=$_POST["Documento"];
$Tipo=$_POST["Tipopqrs"];
$Asunto=$_POST["Asunto"];
$Cuerpo=$_POST["Cuerpo"];
$Estadopqrs= "1";

// $pass=hash('sha512',$pass);

$rol = "SELECT * FROM usuarios WHERE Documento='$document' AND ID_Rol='1'";
$result = mysqli_query($conx, $rol);

if (mysqli_num_rows($result) == 1) {

    if ($Tipo == 0){
        echo "<script>alert('Selecciona un tipo de pqrs válido');location='../index.php';</script>";
    } else {
        $create="INSERT INTO pqrs (Documento, ID_Tipopqrs, Asunto, Cuerpo, ID_Estadopqrs) 
    VALUES ('$document','$Tipo','$Asunto','$Cuerpo','$Estadopqrs')";
    $result=mysqli_query($conx,$create);
    
    if($result){
        echo "<script>alert('Pqrs enviada, Gracias por su opinión 🎇');location='../index.php';</script>";
    }else{
        echo "<script>alert('No se pudo registrar');location='../index.php';</script>";
    }
    }

} else {
  echo "<script>alert('No tienes permisos de hacer esto');location='../index.php';</script>";
}


// }

// $create="INSERT INTO pqrs (Documento, ID_Tipopqrs, Asunto, Cuerpo, ID_Estadopqrs) 
// VALUES ('$document','$Tipo','$Asunto','$Cuerpo','$Estadopqrs')";
// $result=mysqli_query($conx,$create);

// if($result){
//     echo "<script>alert('Pqrs enviada, Gracias por su opinion 🎇');location='index.php';</script>";
// }else{
//     echo "<script>alert('No se pudo registrar');location='index.php';</script>";
// }
?>