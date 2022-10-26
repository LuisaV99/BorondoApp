<?php
 
 include ('../model/conexion.php');

 $id = $_GET ['id'];

 $eliminar = "DELETE FROM lugares WHERE ID_Lugar = '$id'";
 $resultado = mysqli_query($conx, $eliminar);

 if (isset($eliminar)){
    header("location: ../Adminlugares.php");
 }else {
    echo "Función eliminar no lograda";
 }

?>