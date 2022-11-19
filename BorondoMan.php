<?php
session_start();
if (!isset($_SESSION['Documento'])) {
    echo "<script>alert('Debes iniciar sesión');location='InicioSesion.php';</script>";
    session_destroy();
    die();
}
$document = $_SESSION['Documento'];
$users = "SELECT * FROM usuarios WHERE Documento='$document'";
$admins = "SELECT * FROM usuarios WHERE ID_ROL ='2'";
// print_r($_SESSION);


include("model/conexion.php");
$document = $_SESSION['Documento'];

$rol = "SELECT * FROM usuarios WHERE Documento='$document' AND ID_Rol='3'";
$result = mysqli_query($conx, $rol);

if (mysqli_num_rows($result) == 1) {
} else {
    echo "<script>alert('No tienes rol de BorondoMan');location='index.php';</script>";

}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/png" href="./images/logo2.png" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- FONTS GOOGLE -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@500;600&display=swap" rel="stylesheet" />
    <!-- CSS -->
    <link rel="stylesheet" href="./css/BorondoMan.css" />

    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<link rel="stylesheet" href="./css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="./css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="./css/responsive.dataTables.min.css">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    <title>BorondoMan</title>
</head>
<?php
include 'templates/Navbar.php';
?>

<body>

    <div class="body">
        <div class="BorondoMan">
            <?php
            include 'templates/tBorondoMan.php';
            ?>

            <!-- Tabla -->
            <div class="container-table">
                <div class="container-buttons">
                    <h2>Administradores</h2>
                    <div class="abl1">
                        <a href="./AgregarAdmin.php"><button class="bperfil">Agregar Administrador</button></a>
                    </div>
                </div>
                <table class="table" id="example" class="table table-bordered display nowrap " cellspacing="0" width="100%">
                    <thead>
                        <th>Documento</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Correo</th>
                        <th>ACCIONES</th>
                    </thead>
                    <?php
                    $show = mysqli_query($conx, $admins);
                    while ($row = mysqli_fetch_assoc($show)) {
                    ?>
                        <tbody>
                            <tr>
                                <td data-label="ID"><?php echo $row['Documento'] ?></td>
                                <td data-label="ID"><?php echo $row['Nombres'] ?></td>
                                <td data-label="ID"><?php echo $row['Apellidos'] ?></td>
                                <td data-label="ID"><?php echo $row['Correo'] ?></td>
                                <td data-label="ACCIONES">
                                    <div class="Status">
                                        <a class="eliminar"><button type="button" data-bs-toggle="modal" data-bs-target="#a<?php echo $row['Documento']; ?>">Eliminar</button></a>

                                        <a class="editar" href="./AdminEditar.php?id=<?php echo $row['Documento']; ?>">Editar</a>

                                    </div>
                                </td>
                            </tr>
                        </tbody>

                        <div class="modal fade" id="a<?php echo $row['Documento']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Eliminar administrador</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">

                                        ¿Está seguro de eliminar el administrador <?php
                                                                                    echo $row['Nombres'] . ' ' . $row['Apellidos']
                                                                                    ?>?
                                    </div>
                                    <div class="modal-footer Status">
                                        <button type="button" class=" cancelar d-flex justify-content-center align-items-center" data-bs-dismiss="modal">Cancelar</button>
                                        <a class="eliminar text-center" href="./functions/delete-admin.php?id=<?php echo $row['Documento']; ?>">Eliminar</a>
                                    </div>

                                </div>
                            </div>
                        </div> <?php } ?>
                </table>
                <!-- JS -->
                <script src="./js/jquery-3.5.1.js"></script>
                <script src="./js/jquery.dataTables.min.js"></script>
                <script src="./js/dataTables.bootstrap5.min.js"></script>
                <script src="./js/dataTables.responsive.min.js"></script>

                <script src="./js/dataTables.buttons.min.js"></script>
                <script src="./js/jszip.min.js"></script>
                <script src="./js/vfs_fonts.js"></script>
                <!-- <script src="./js/buttons.html5.min.js"></script> -->
                <script src="./js/function_data.js"></script>
                <!-- <script src="./js/Admin.js"></script> -->

            </div>
        </div>
    </div>


</body>

</html>