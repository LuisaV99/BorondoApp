<?php
include("../model/conexion.php");

$ID_Pqrs=$_POST["ID_Pqrs"];
$Respuesta=$_POST["Respuesta"];
$Fecha_pqrs=$_POST["Fecha_pqrs"];
$ID_Estadopqrs=2;

$upd="UPDATE pqrs SET Respuesta='$Respuesta', Fecha_pqrs='$Fecha_pqrs', ID_Estadopqrs='$ID_Estadopqrs' WHERE ID_Pqrs='$ID_Pqrs'";
$rsl=mysqli_query($conx,$upd);

if($rsl){
    echo "<script>alert('Dato Actualizado');window.history.go(-2);</script>";
}else{
    echo "<script>alert('No se pudo actualizar');window.history.go(-1);</script>";
}
?>