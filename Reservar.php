<?php
session_start();
if (!isset($_SESSION['Documento'])) {
  echo "<script>alert('Debes iniciar sesion');location='InicioSesion.php';</script>";
  session_destroy();
  die();
}
$document = $_SESSION['Documento'];

include("model/conexion.php");



$id = $_GET['id'];

$lugares = "SELECT * FROM lugares WHERE ID_Lugar='$id'";


$inactiv = "SELECT * FROM usuarios WHERE Documento='$document' AND ID_Estado_Usuario='2'";
$inactivresult = mysqli_query($conx, $inactiv);

if (mysqli_num_rows($inactivresult) == 1) {
  echo "<script>alert('Tu cuenta se encuentra deshabilitada');location='./functions/cerrar.php';</script>";
} else {
}

$fechaActual = date('Y-m-d');
 
// print $fechaActual;

$fechamax = date("Y-m-d", strtotime($fechaActual."+ 1 days"));

// print $fechamax;


// Obteniendo la fecha actual del sistema con PHP



$rol = "SELECT * FROM usuarios WHERE Documento='$document' AND ID_Rol=!'1'";
$result = mysqli_query($conx, $rol);

if (mysqli_num_rows($result) == 1) {
} else {
  echo "<script>alert('No tienes permisos de entrar aqui');location='index.php';</script>";
}




?>
<!DOCTYPE html>
<html lang="en">

<head>

  <link rel="icon" type="image/png" href="./images/logo2.png" />
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="./css/Reservar.css" />

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=League+Gothic&display=swap" rel="stylesheet">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">

  <title>Ficha Tecnica</title>
</head>

<body>

  <?php

  include 'templates/Navbar.php';



  ?>
  <form action="./functions/pro-reservar.php" method="POST" enctype="multipart/form-data">

    <?php
    $show = mysqli_query($conx, $users);
    while ($row = mysqli_fetch_assoc($show)) { ?>
      <input class="inputsu" type="number" name="Documento" minlength="2" maxlength="40" required pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+" value="<?php echo $row['Documento'] ?>">

    <?php } ?>

    <?php
    $show = mysqli_query($conx, $lugares);
    while ($row = mysqli_fetch_assoc($show)) { ?>

<div class="limiter">
		<!-- Formulario -->
		<div class="contenedor-formulario">
			<div class="wrap-formulario">
        <div class="block1">


          <input class="inputsu" type="number" name="Costo_Unidad" minlength="2" maxlength="40" required pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+" value="<?php echo $row['Costo'] ?>">


          <input class="inputsu" type="number" name="ID_Lugar" minlength="2" maxlength="40" required pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+" value="<?php echo $row['ID_Lugar'] ?>">


          <input class="inputsu" type="text" name="Nombre" minlength="2" maxlength="40" required pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+" value="<?php echo $row['Nombre'] ?>">

          <input class="inputsu" type="text" name="Nombre" minlength="2" maxlength="40" required pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+" value="<?php echo $row['Nombre'] ?>">


          <input class="inputsu" type="text" name="Num_Borondo" minlength="2" maxlength="40" required value="<?php echo $row['Num_Borondo'] ?>">





          <div class="titulo">
            <h3 class="nombre" style="text-align: center;"><?php echo $row['Nombre'] ?></h3>
          </div>
          <div>
            <p class="descrip1"><?php echo $row['Descripcion1'] ?></p>
          </div>
          <div class="slider">
            <div class="slide">
              <div class="slide-inner">
                <input class="slide-open" type="radio" id="slide-1" name="slide" aria-hidden="true" hidden="" checked="checked">
                <div class="slide-item">
                  <img src="data:image/jpg;base64, <?php echo base64_encode($row['Img1']) ?>" class="img">

                </div>
                <input class="slide-open" type="radio" id="slide-2" name="slide" aria-hidden="true" hidden="">
                <div class="slide-item">
                  <img src="data:image/jpg;base64, <?php echo base64_encode($row['Img2']) ?>" class="img">

                </div>
                <input class="slide-open" type="radio" id="slide-3" name="slide" aria-hidden="true" hidden="">
                <div class="slide-item">
                  <img src="data:image/jpg;base64, <?php echo base64_encode($row['Img3']) ?>" class="img">

                </div>
                <label for="slide-3" class="slide-control prev control-1">‹</label>
                <label for="slide-2" class="slide-control next control-1">›</label>
                <label for="slide-1" class="slide-control prev control-2">‹</label>
                <label for="slide-3" class="slide-control next control-2">›</label>
                <label for="slide-2" class="slide-control prev control-3">‹</label>
                <label for="slide-1" class="slide-control next control-3">›</label>
              </div>
            </div>
          </div>
          <div>
            <p class="descrip1"><?php echo $row['Descripcion2'] ?></p>
          </div>
          <div>

            <p class="descrip1">Costo por unidad es de: $<?php echo $row['Costo'] ?> COP</p>
            <p class="descrip1" style="margin-bottom: 0;"><a href="<?php echo $row['Ubicacion'] ?>" target="_blank"><img src="./images/mapa.png" alt="" width="30"> Ver Ubicacion</a></p>
          </div>
          <div class="form">

            <div id="inputfecha" class="wrap-input100 validate-input" data-validate="Ingresa una fecha válida">
              <label for="">Fecha:</label>
              <input class="input100" type="date" name="Fecha" placeholder="Fecha" min="<?php echo $fechamax ?>" required pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+">
              <span class="focus-input100"></span>
              <span class="symbol-input100">
                <i aria-hidden="true"></i>
              </span>
            </div>


            <div id="inputfecha" class="wrap-input100 validate-input" data-validate="Ingresa un Apellido válido">
              <label for="">N°Entradas:</label>
              <select class="input100" name="N_Entradas">
                <option disabled selected value="0">N°</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
                <option>7</option>
                <option>8</option>
                <option>9</option>
                <option>10</option>

              </select>
            </div>

          </div>

          <div class="botones">
            <button type="submit" class="btn btn-primary" style="margin-right: 1%;">Reservar</button>
            <a href="./Cards-LugaresP.php" class="btn btn-danger">Cancelar</a>


          </div>

            </div>

  </div>
  </div>
  </div>


  </form>



<?php } ?>

<?php

include 'templates/footer.php';

?>
</body>

</html>