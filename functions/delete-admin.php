<?php
include('../model/conexion.php');

$id = $_GET['id'];

$eliminar = "DELETE FROM usuarios WHERE Documento = '$id'";
$resultado = mysqli_query($conx, $eliminar);

if (isset($eliminar)) {
   header("location: ../BorondoMan.php");
} else {
   echo "No se pudo eliminar el administrador";
}
?>