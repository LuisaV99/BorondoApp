<?php
    if (isset($_GET['Id_Usuario'])){
        header('Location: index.php');
    }

    include 'model/conexion.php';
    $id = $_GET['id'];

    $sentencia = $db->prepare("SELECT * FROM usuarios WHERE Id_Usuario = ?;");
    $sentencia->execute([$id]);
    $usuarios = $sentencia->fetch(PDO::FETCH_OBJ);

    // print_r($usuarios);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario</title>
</head>
<body>
    <center>
        <h3>Editar Usuario</h3>
        <form method="POST" action="editarproceso.php">
            <table>
                <tr>
                    <td>Id_Usuario: </td>
                    <td><input type="text" name="1Id" value="<?php echo $usuarios->Id_Usuario; ?>"></td>
                </tr>
                <tr>
                    <td>Nombres: </td>
                    <td><input type="text" name="1Nombre" value="<?php echo $usuarios->Nombres; ?>"></td>
                </tr>
                <tr>
                    <td>Apellidos: </td>
                    <td><input type="text" name="1Apellido" value="<?php echo $usuarios->Apellidos; ?>"></td>
                </tr>
                <tr>
                    <td>Nom_Usuario: </td>
                    <td><input type="text" name="1NomU" value="<?php echo $usuarios->Nom_Usuario; ?>"></td>
                </tr>
                <tr>
                    <td>Fecha_Naci: </td>
                    <td><input type="text" name="1FechaN" value="<?php echo $usuarios->Fecha_Naci; ?>"></td>
                </tr>
                <tr>
                    <td>Correo: </td>
                    <td><input type="text" name="1Correo" value="<?php echo $usuarios->Correo; ?>"></td>
                </tr>
                <tr>
                    <td>Contraseña: </td>
                    <td><input type="text" name="1pass" value="<?php echo $usuarios->Contraseña; ?>"></td>
                </tr>
                <tr>
                    <input type="hidden" name="oculto">
                    <input type="hidden" name="id2" value="<?php echo $usuarios->Id_Usuario; ?>">
                    <td colspan="2"><input type="submit" value="EDITAR">
                    <a href="index.php">VOLVER</a>
                </td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>