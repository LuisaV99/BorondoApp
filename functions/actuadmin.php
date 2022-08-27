<?php
include ('../model/conexion.php');

$nombre = $_POST ['nombre'];
$apellido = $_POST ['apellido'];
$correo = $_POST ['correo'];
$telefono = $_POST ['telefono'];


$actualizar = "UPDATE usuarios SET Nombres = '$nombre', Apellidos = '$apellido', Correo = '$correo', Telefono = '$telefono' WHERE Id_rol = 2";
$result = mysqli_query($conx, $actualizar);



if(isset($result)){
    header("location: ../Admin.php");
    // echo "cquery hecha";
}else{
    echo "query no realizada";
}



?>