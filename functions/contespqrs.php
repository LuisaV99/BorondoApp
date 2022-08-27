<?php
include ('../model/conexion.php');


$contestar = $_POST ['contestar'];

$insertpq = "INSERT INTO pqrs_contestadas (Respuesta) VALUES ('$contestar') WHERE Id_pqrs = ";
$resul = mysqli_query($conx, $resul);

if(isset($resul)){
    echo "query ejecutada";
}else {
    echo "query fallida";
}
?>