<?php
include("../model/conexion.php");

$Nombre=$_POST["Nombre"];
$Descripcion1=$_POST["Descripcion1"];
$Descripcion2=$_POST["Descripcion2"];
$Costo=$_POST["Costo"];
$N_Cuenta=$_POST["N_Cuenta"];
$Img1 = addslashes(file_get_contents($_FILES['Img1']['tmp_name']));
$Img2 = addslashes(file_get_contents($_FILES['Img2']['tmp_name']));
$Img3 = addslashes(file_get_contents($_FILES['Img3']['tmp_name']));
$Ubicacion=$_POST["Ubicacion"];
$Nom_Ciudad=$_POST["Nom_Ciudad"];



$create="INSERT INTO lugares (Nombre, Descripcion1, Descripcion2, Costo, Img1, Img2, Img3, Ubicacion, N_Cuenta, ID_Ciudad) 
VALUES ('$Nombre','$Descripcion1','$Descripcion2','$Costo', '$Img1','$Img2','$Img3', '$Ubicacion','$N_Cuenta','$Nom_Ciudad')";
$result=mysqli_query($conx,$create);

if($result){
    echo "<script>alert('Registro Guardado');location='../Adminlugares.php';</script>";
}else{
    echo "<script>alert('No se pudo registrar');window.history.go(-1);</script>";
}
?>