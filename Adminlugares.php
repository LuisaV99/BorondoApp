<?php
session_start();
if (!isset($_SESSION['Documento'])) {
  echo "<script>alert('Debes iniciar sesion');location='login.php';</script>";
  session_destroy();
  die();
}
$document = $_SESSION['Documento'];
$users = "SELECT * FROM usuarios WHERE Documento='$document'";
$lugares = "SELECT * FROM lugares INNER JOIN `ciudades` ON lugares.ID_Ciudad=ciudades.ID_Ciudad";
// print_r($_SESSION);


include("model/conexion.php");
$document = $_SESSION['Documento'];

$rol = "SELECT * FROM usuarios WHERE Documento='$document' AND ID_Rol='2'";
$result = mysqli_query($conx, $rol);

if (mysqli_num_rows($result) == 1) {
} else {
  echo "<script>alert('No tienes rol de administrador');location='index.php';</script>";
}
?>


<!DOCTYPE html>
<html lang="en">

<head>

  <link rel="icon" type="image/png" href="./images/logo2.png" />

  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- FONTS GOOGLE -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@500;600&display=swap" rel="stylesheet" />
  <!-- CSS STYLE -->
  <link rel="stylesheet" href="./css/AdminAdmin.css" />

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <link rel="stylesheet" href="./css/dataTables.bootstrap5.min.css">
  <link rel="stylesheet" href="./css/responsive.dataTables.min.css">

  <!-- CSS only -->
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

  <title>Administrador</title>
</head>

<?php

include 'templates/Navbar.php';

?>


<body>

  <div class="body">

    <!-- CONTAINER ADMIN - IMG -->
    <div class="Administrador">

      <?php

      include 'templates/tadmin.php';

      ?>



      <!-- TABLE -->
      <div class="container-table">
        <!-- Container botones -->
        <!-- <section class="container-buttons-search"> -->




        <div class="container-buttons">
          <div class="abl1">
            <a href="./Adminpqrs.php"><button class="bperfil">Pqrs</button></a>
            <a href="./Adminusuarios.php"><button class="bperfil">Clientes</button></a>
            <a href="./Adminreservas.php"><button class="bperfil">Reservas</button></a>
            <a href="./Adminlugares.php"><button style="background-color: #F98806;" class="bperfil">Lugares</button></a>
            <a href="./vistagraficos.php"><button class="bperfil">Informes</button></a>
          </div>
        </div>

        <div style="display: flex;">
          <li class="pdf">
            <button class="bperfil" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color:white; text-decoration:none;">
              Informes pdf <i class="fa-solid fa-caret-down"></i>
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item " href="./PDF/PqrsPeticion.php" target="_blank">Más reservas</a></li>

            </ul>
          </li>

          <!-- </section> -->

          <a href="./agregarlugar.php"><button class="bperfil">Agregar nuevo</button></a>

        </div>


        <table class="table" id="example" class="table table-bordered display nowrap " cellspacing="0" width="100%">
          <thead>
            <th>ID</th>
            <th>Img Pri</th>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Costo</th>
            <th>Zona</th>
            <th>N Borondos</th>
            <th>ACCIONES</th>
          </thead>
          <tbody>
            <?php
            $show = mysqli_query($conx, $lugares);
            while ($row = mysqli_fetch_assoc($show)) { ?>
              <tr>
                <td data-label="ID"><?php echo $row['ID_Lugar'] ?></td>
                <td data-label="Img Pri"><img height="50px" src="data:image/jpg;base64, <?php echo base64_encode($row['Img1']) ?>"></td>
                <td data-label="Nombre"><?php echo $row['Nombre'] ?></td>
                <td data-label="Descripcion"><?php echo $row['Descripcion1'] ?></td>
                <td data-label="Costo" class="Email-adm"><?php echo $row['Costo'] ?></td>
                <td data-label="Calificacion"><?php echo $row['Nom_Ciudad'] ?></td>
                <td data-label="N Borondos"><?php echo $row['Num_Borondo'] ?></td>
                <td data-label="ACCIONES">
                  <div class="Status">
                    <a class="eliminar"><button type="button" data-bs-toggle="modal" data-bs-target="#a<?php echo $row['ID_Lugar']; ?>">Eliminar</button></a>
                  </div>
                </td>
              </tr>

              <div class="modal fade" id="a<?php echo $row['ID_Lugar']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header">

                      <img class="navlogo" src="images/logo2.png" alt="logo" width="50">
                      <h5 class="modal-title" id="exampleModalLabel">Eliminar Lugar</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                      ¿Estás seguro de eliminar el lugar "<?php
                                                          echo $row['Nombre']
                                                          ?>"?
                    </div>
                    <div class="modal-footer Status">
                      <button type="button" class=" cancelar d-flex justify-content-center align-items-center" data-bs-dismiss="modal">Cancelar</button>
                      <a class="eliminar text-center" href="./functions/delete-lugar.php?id=<?php echo $row['ID_Lugar']; ?>">Eliminar</a>
                    </div>
                  </div>
                </div>

              <?php } ?>
          </tbody>
        </table>





        <!-- JS -->
        <script src="./js/jquery-3.5.1.js"></script>
        <script src="./js/jquery.dataTables.min.js"></script>
        <script src="./js/dataTables.bootstrap5.min.js"></script>
        <script src="./js/dataTables.responsive.min.js"></script>

        <script src="./js/dataTables.buttons.min.js"></script>
        <script src="./js/jszip.min.js"></script>
        <script src="./js/pdfmake.min.js"></script>
        <script src="./js/vfs_fonts.js"></script>
        <script src="./js/buttons.html5.min.js"></script>
        <script src="./js/function_data.js"></script>
        <script src="./js/Admin.js"></script>
      </div>
</body>

</html>