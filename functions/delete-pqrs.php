<?php
 
 include ('../model/conexion.php');

 $id = $_GET ['id'];

 $eliminar = "DELETE FROM pqrs WHERE ID_Pqrs = '$id'";
 $resultado = mysqli_query($conx, $eliminar);

 if (isset($eliminar)){
    header("location: ../Admin.php");
 }else {
    echo "Funcion eliminar no lograda";
 }

?>