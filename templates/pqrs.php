<?php

include('../model/conexion.php');

$correo = $_POST['email'];
$nombres = $_POST ['nombre'];
$telefono = $_POST['telefono'];
$tipo = $_POST['tipo'];
$asunto = $_POST['asunto'];
$descripcion = $_POST['descripcion'];



$pqrs = "INSERT INTO pqrs (Correo_Remitente, Nombres, Telefono, Id_tipo, Asunto, Descripcion) VALUES ('$correo','$nombres','$telefono','$tipo','$asunto','$descripcion')";
$resultado = mysqli_query($conx,$pqrs);

if(isset($resultado)){
    echo "<script>alert('PQRS ENVIADA');location='../index.php';</script>";
}else{
    echo "<script>alert('No se pudo enviar la PQRS');window.history.go(-1);</script>";
}