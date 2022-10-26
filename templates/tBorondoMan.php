<?php
if (!isset($_SESSION['Documento'])) {
    echo "<script>alert('Debes iniciar sesión');location='login.php';</script>";
    session_destroy();
    die();
}

$document = $_SESSION['Documento'];
$users = "SELECT * FROM usuarios WHERE Documento = '$document'";
include("model/conexion.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- FONTS GOOGLE -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@500;600&display=swap" rel="stylesheet" />
    <!-- CSS STYLE -->
    <link rel="stylesheet" href="./css/BoroMan.css" />
    <link rel="stylesheet" href="./css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="./css/responsive.dataTables.min.css">
    <title>admin</title>
</head>

<body>
    <!-- CONTAINER ADMIN - IMG -->

    <div class="container-admin">
        <div class="imagen-admin">
            <div class="">
                <a href="./index.php"><img src="images/logo2.png" alt="" width="222px"/></a>
            </div>
            <div>
                <?php
                $show = mysqli_query($conx, $users);
                while ($row = mysqli_fetch_assoc($show)) { ?>


                    <h1>Datos BorondoMan</h1>
                    <h2>Documento</h2>
                    <p><?php echo $row['Documento'] ?></p>
                    <h2>Nombre</h2>
                    <p><?php echo $row["Nombres"] . ' ' . $row["Apellidos"]; ?></p>
                    <h2>Correo</h2>
                    <p><?php echo $row["Correo"]; ?></p>
                    <h2>Teléfono</h2>
                    <p><?php echo $row['Telefono'] ?></p>

                <?php } ?>
            </div>

        </div>
    </div>



</body>

</html>