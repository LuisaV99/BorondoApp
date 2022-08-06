<?php
    if(!isset($_GET['id'])){
    exit();
    }    

    $codigo = $_GET['id'];
    include 'model/conexion.php';

    $sentencia = $db ->prepare("DELETE FROM usuarios WHERE Id_Usuario = ?;");
    $resultado = $sentencia->execute([$codigo]);

    if ($resultado === TRUE){
        header('location:index.php');
        //echo "Insertado correctamente";
    } else {
        echo "Ocurrió un error";
    }

?>
