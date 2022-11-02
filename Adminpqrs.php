<?php

include("model/conexion.php");

session_start();
if (!isset($_SESSION['Documento'])) {
  echo "<script>alert('Debes iniciar sesión');location='login.php';</script>";
  session_destroy();
  die();
}
$document = $_SESSION['Documento'];
$users = "SELECT * FROM usuarios WHERE Documento='$document'";
$pqrs = "SELECT * FROM `pqrs` 
INNER JOIN `tipospqrs` ON pqrs.ID_Tipopqrs=tipospqrs.ID_Tipopqrs 
INNER JOIN `estadopqrs` ON pqrs.ID_Estadopqrs=estadopqrs.ID_Estadopqrs;";

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


  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <link rel="stylesheet" href="./css/dataTables.bootstrap5.min.css">
  <link rel="stylesheet" href="./css/responsive.dataTables.min.css">
  <title>Administrador</title>
</head>
<?php

include 'templates/navbar.php';

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
            <a href="./Adminpqrs.php"><button style="background-color: #F98806;" class="bperfil1">Pqrs</button></a>
            <a href="./Adminusuarios.php"><button class="bperfil">Clientes</button></a>
            <a href="./Adminreservas.php"><button class="bperfil">Reservas</button></a>
            <a href="./Adminlugares.php"><button class="bperfil">Lugares</button></a>
            <a href="./vistagraficos.php"><button class="bperfil">Informes</button></a>
          </div>
        </div>


        <div style="display: flex; justify-content: space-around">
          <li class="pdf">
            <button class="bperfil" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color:white; text-decoration:none;">
              Informes pdf <i class="fa-solid fa-caret-down"></i>
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item " href="./PDF/PQRS/PqrsMesActual.php" target="_blank">Mes Actual</a></li>
              <li><a class="dropdown-item" href="./PDF/PQRS/PqrsMesAnterior.php" target="_blank">Mes Anterior</a></li>
              <li><a class="dropdown-item" href="./PDF/PQRS/PqrsSinContestarMAC.php" target="_blank">Sin Contestar <br> mes Actual</a></li>
              <li><a class="dropdown-item" href="./PDF/PQRS/PqrsSinContestarMAN.php" target="_blank">Sin Contestar <br> mes Anterior</a></li>

            </ul>
          </li>

          <li class="pdf">
            <button class="bperfil" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color:white; text-decoration:none;">
              Por tipo<i class="fa-solid fa-caret-down"></i>
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item " href="./PDF/PQRS/PqrsPeticion.php" target="_blank">Peticiones</a></li>
              <li><a class="dropdown-item" href="./PDF/PQRS/PqrsQueja.php" target="_blank">Quejas</a></li>
              <li><a class="dropdown-item" href="./PDF/PQRS/PqrsReclamo.php">Reclamos</a></li>
              <li><a class="dropdown-item" href="./PDF/PQRS/PqrsSugerencia.php">Sugerencias</a></li>
              <li><a class="dropdown-item" href="./PDF/PQRS/PqrsFelicitaciones.php">Felicitaciones</a></li>

            </ul>
          </li>
        </div>
        <!-- </section> -->


        <table class="table" id="example" class="table table-bordered display nowrap " cellspacing="0" width="100%">
          <thead>
            <th>ID</th>
            <th>TIPO</th>
            <th>ASUNTO</th>
            <th>DOCUMENTO</th>
            <th>FECHA</th>
            <th>ESTADO</th>
            <th>ACCIONES</th>
          </thead>
          <tbody>
            <?php
            $show = mysqli_query($conx, $pqrs);
            while ($row = mysqli_fetch_assoc($show)) { ?>
              <tr>
                <td data-label="ID"><?php echo $row['ID_Pqrs'] ?></td>


                <td data-label="TIPO"><?php echo $row['Nom_Tipopqrs'] ?></td>



                <td data-label="ASUNTO"><?php echo $row['Asunto'] ?></td>
                <td data-label="DOCUMENTO" class="Email-adm"><?php echo $row['Documento'] ?></td>
                <td data-label="FECHA" class="Email-adm"><?php echo $row['Fecha_pqrs'] ?></td>
                <td data-label="ESTADO" class="Email-adm"><?php echo $row['Nom_Estadopqrs'] ?></td>
                <td data-label="ACCIONES">
                  <div class="Status">

                    <?php

                    if ($row['ID_Estadopqrs'] == "1") {

                    ?>
                      <a class="eliminar" href="./contestarpqrs.php?id=<?php echo $row['ID_Pqrs']; ?>">Contestar</a>
                    <?php
                    } else {
                    ?>

                      <a class="contestada">Contestar</a>
                    <?php

                    }

                    ?>

                  </div>
                </td>
              </tr>

              <div class="modal fade" id="a<?php echo $row['ID_Pqrs']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header">
                      <img class="navlogo" src="images/logo2.png" alt="logo" width="50">
                      <h5 class="modal-title" id="exampleModalLabel">Eliminar Pqrs</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                      ¿Estás seguro de eliminar la pqrs radicada con el número de identificación <?php
                                                                                                  echo $row['ID_Pqrs']
                                                                                                  ?>?

                    </div>
                    <div class="modal-footer Status">
                      <button type="button" class=" cancelar d-flex justify-content-center align-items-center" data-bs-dismiss="modal">Cancelar</button>
                      <a class="eliminar text-center" href="./functions/delete-pqrs.php?id=<?php echo $row['ID_Pqrs']; ?>">Eliminar</a>
                    </div>
                  </div>
                </div>
              </div>

            <?php } ?>
          </tbody>
        </table>


      </div>


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