<?php
session_start();
if(!isset($_SESSION['Documento'])){
    echo "<script>alert('Debes iniciar sesion');location='login.php';</script>";
    session_destroy();
    die();
	
}
$document=$_SESSION['Documento'];
$users="SELECT * FROM usuarios WHERE Documento='$document'";
$pqrs="SELECT * FROM pqrs";
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

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <link rel="stylesheet" href="./css/dataTables.bootstrap5.min.css">
  <link rel="stylesheet" href="./css/responsive.dataTables.min.css">
  <title>Administrador</title>
</head>

<body>
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
        <button><a href="./Adminpqrs.php">PQRS </a></button>
        <button><a href="./Adminusuarios.php">USUARIOS</a></button>
        <button><a href="./Adminreservas.php">RESERVAS</a></button>
        </div><br>
        <div class="abl2">
        <button><a href="./Adminalojamientos.php">ALOJAMIENTOS</a></button>
        <button><a href="./Adminlugares.php">LUGARES</a></button>
        <button><a href="./Admintransportes.php">TRANSPORTES</a></button>
        </div>
      </div><br><br>
      <!-- </section> -->

      <table class="table" id="example" class="table table-bordered display nowrap " cellspacing="0" width="100%">
        <thead>
          <th>ID</th>
          <th>TIPO</th>
          <th>ASUNTO</th>
          <th>DESCRIPCIÓN</th>
          <th>DOCUMENTO</th>
          <th>ACCIONES</th>
        </thead>
        <tbody>
        <?php
			 $show=mysqli_query($conx,$pqrs);
        while($row=mysqli_fetch_assoc($show)) { ?>
            <tr>
              <td data-label="ID"><?php echo $row['ID_Pqrs'] ?></td>
              <td data-label="TIPO"><?php echo $row['Tipo'] ?></td>
              <td data-label="ASUNTO"><?php echo $row['Asunto'] ?></td>
              <td data-label="DESCRIPCIÓN"><?php echo $row['Cuerpo'] ?></td>
              <td data-label="DOCUMENTO" class="Email-adm"><?php echo $row['Documento'] ?></td>
              <td data-label="ACCIONES">
                <div class="Status">
                  <a href="" id="contestar-pqrs">Contestar</a>
                  <a href="./functions/delete-pqrs.php?id=<?php echo $row['ID_Pqrs']; ?>">Eliminar</a>
                </div>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
     


    <!-- ventana pqrs contestadas -->

    <div class="container-main-contestadas">
      <div class="container-contestadas">
        <form action="./functions/actuadmin.php" method="POST">
          <h2>CONTESTAR PQRS</h2>
          <input type="text" name="contestar" placeholder="Contestar PQRS" value="">
          <div class="container-btn">
            <button type="submit">Enviar</button>
          </div>
        </form>
      </div>
    </div>
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
</body>

</html>