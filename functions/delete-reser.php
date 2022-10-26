<?php
 
 include ('../model/conexion.php');

 $id = $_GET ['id'];

 $eliminar = "DELETE FROM reservas WHERE ID_Reserva = '$id'";
 $resultado = mysqli_query($conx, $eliminar);

 if (isset($eliminar)){
    header("location: ../Adminreservas.php");
 }else {
    echo "Función eliminar no lograda";
 }

?>