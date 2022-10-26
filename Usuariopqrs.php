<?php
session_start();
if (!isset($_SESSION['Documento'])) {
  echo "<script>alert('Debes iniciar sesion');location='login.php';</script>";
  session_destroy();
  die();
}
$document = $_SESSION['Documento'];
$users = "SELECT * FROM usuarios WHERE Documento='$document'";
// print_r($_SESSION);
$pqrs="SELECT * FROM `pqrs` 
INNER JOIN `tipospqrs` ON pqrs.ID_Tipopqrs=tipospqrs.ID_Tipopqrs 
INNER JOIN `estadopqrs` ON pqrs.ID_Estadopqrs=estadopqrs.ID_Estadopqrs WHERE Documento='$document'";

include("model/conexion.php");

$inactiv="SELECT * FROM usuarios WHERE Documento='$document' AND ID_Estado_Usuario='2'";
$inactivresult= mysqli_query($conx,$inactiv);

if(mysqli_num_rows($inactivresult) == 1) {
	echo "<script>alert('Tu cuenta se encuentra deshabilitada');location='./functions/cerrar.php';</script>";
}else{
  
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link rel="icon" type="image/png" href="./images/logo2.png" />
    <!-- FONTS GOOGLE -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@500;600&display=swap" rel="stylesheet" />
  <!-- CSS STYLE -->
  <link rel="stylesheet" href="./css/Admin.css" />

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/bootstrap.min.css">

  <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="./css/dataTables.bootstrap5.min.css">
  <link rel="stylesheet" href="./css/responsive.dataTables.min.css">


  <title>Perfil de Usuario </title>

</head>

<div>

<?php 

include 'templates/navbar.php';

?>

</div>

<body>

  <div class="body2">

    <!-- CONTAINER ADMIN - IMG -->
    <div class="Administrador">

      <?php

      include 'templates/tusuario.php';

      ?>



      <!-- TABLE -->
      <div class="container-table">
        <!-- Container botones -->
        <!-- <section class="container-buttons-search"> -->
        <div class="container-buttons">
          <div class="abl1">
            <a href="./Usuarioreservas.php"><button  class="bperfil1">Mis Reservas</button></a>
            <a href="./Usuariopqrs.php"><button  style="background:orange" class="bperfil">Mis Pqrs</button></a>
          </div>
        </div>
        <!-- </section> -->


        <table class="table" id="example" class="table table-bordered display nowrap " cellspacing="0" width="100%">
          <thead>
            <th>N.Identidad</th>
            <th>Tipo</th>
            <th>Asunto</th>
            <th>Descripcion</th>
            <th>Respuesta</th>
          </thead>
          <tbody>
            <?php
            $show = mysqli_query($conx, $pqrs);
            while ($row = mysqli_fetch_assoc($show)) { ?>
              <tr>

                <td data-label="TIPO"><?php echo $row['ID_Pqrs'] ?></td>
               
                <td data-label="TIPO"><?php echo $row['Nom_Tipopqrs'] ?></td>
               

                <td data-label="ASUNTO"><?php echo $row['Asunto'] ?></td>
                <td data-label="DESCRIPCIÓN"><?php echo $row['Cuerpo'] ?></td>
                <td data-label="Respuesta">

                <div class="Status">
                  <?php 
                 if ($row['ID_Estadopqrs'] == "1") {

                  ?>
                  
                  <button class="eliminar" disabled><a style="color: white;" ><?php echo $row['Nom_Estadopqrs'] ?></a></button>
          <?php
                } else {
                  ?>
                  
                  <a class="contestar"><button type="button" data-bs-toggle="modal" data-bs-target="#a<?php echo $row['ID_Pqrs']; ?>" style="color: white;">Ver respuesta</button></a>
          
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
                                    <h5 class="modal-title" id="exampleModalLabel">Respuesta a "<?php echo $row['Asunto']; ?>"</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">

                                       <?php
                                                                    echo $row['Respuesta']
                                                                    ?>

                                    </div>
                                    <div class="modal-footer Status">
                                        <button type="button" class=" cancelar d-flex justify-content-center align-items-center btn btn-success" data-bs-dismiss="modal">Aceptar</button>
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

  </div>
  </div>




  
</body>


</html>