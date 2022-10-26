<?php
 
 include ('../model/conexion.php');

 $id = $_GET ['id'];

 $eliminar = "DELETE FROM alojamientos WHERE ID_Alojamiento = '$id'";
 $resultado = mysqli_query($conx, $eliminar);

 if (isset($eliminar)){
    header("location: ../Adminalojamientos.php");
 }else {
    echo "Función eliminar no lograda";
 }

?>