<?php

if (!isset($_SESSION['Documento'])) {
  echo "<script>alert('Debes iniciar sesion');location='login.php';</script>";
  session_destroy();
  die();
}
$document = $_SESSION['Documento'];
$users = "SELECT * FROM usuarios WHERE Documento='$document'";
// print_r($_SESSION);

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
  <link rel="stylesheet" href="./css/Admin.css" />

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <link rel="stylesheet" href="./css/dataTables.bootstrap5.min.css">
  <link rel="stylesheet" href="./css/responsive.dataTables.min.css">
  <title>Usuario</title>
</head>

<body>
  <!-- CONTAINER ADMIN - IMG -->

  <div class="container-admin">
    <div class="imagen-admin">
      <div class="">
        <a href="./index.php"><img src="images/logo2.png" alt="" width="222px" /></a>
      </div>
      <div>
        <?php
        $show = mysqli_query($conx, $users);
        while ($row = mysqli_fetch_assoc($show)) { ?>


          <h1>Datos Usuario</h1>
          <h2>Documento</h2>
          <p><?php echo $row['Documento'] ?></p>
          <h2>Nombres</h2>
          <p><?php echo $row["Nombres"] . ' ' . $row["Apellidos"]; ?></p>
          <h2>Correo</h2>
          <p><?php echo $row["Correo"]; ?></p>
        <?php } ?>
      </div>

      <div style="display: flex; justify-content:space-evenly; margin-top:4%">

        <div class="Status">

          <a href="./Usuarioeditar.php"><button type="button" class="btn btn-primary">Editar</button></a>
          <a><button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Eliminar</button></a>

          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <img class="navlogo" src="images/logo2.png" alt="logo" width="50">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Deshabilitar Perfil</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  ¿Estás seguro de deshabilitar tu cuenta? De esta manera no serás visible para BorondoApp
                  <p>Nota: Una vez deshabilitado podrás habilitarlo nuevamente iniciando sesión de manera usual.</p>
                </div>
                <div class="modal-footer" style="display: flex; justify-content:space-evenly">
                  <a><button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button></a>
                  <a href="./functions/hiden-user.php"><button type="button" class="btn btn-danger">Confirmar</button></a>
                </div>
              </div>
            </div>
          </div>

        </div>




      </div>



    </div>
  </div>


</body>


</html>