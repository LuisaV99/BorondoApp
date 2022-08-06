<?php
session_start();
if(!isset($_SESSION['Nom_Usuario'])){
    echo "<script>alert('Debes iniciar sesion');location='login.php';</script>";
    session_destroy();
    die();
	
}
$Nom_Usuario=$_SESSION['Nom_Usuario'];
$users="SELECT * FROM usuarios WHERE Nom_Usuario='$Nom_Usuario'";
// print_r($_SESSION);

include("model/conexion.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./css/FichaTecnic.css"/>

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
    
    <div class="container">
		<div class="form">
      <div class="formdown">
            <div class="slider">
              <div class="slide">
                <div class="slide-inner">
                  <input class="slide-open" type="radio" id="slide-1" 
                        name="slide" aria-hidden="true" hidden="" checked="checked">
                  <div class="slide-item">
                    <img src="./images/lugar.jpg" class="img">
                  
                  </div>
                  <input class="slide-open" type="radio" id="slide-2" 
                        name="slide" aria-hidden="true" hidden="">
                  <div class="slide-item">
                    <img src="./images/aloja.jpg" class="img">
                    
                  </div>
                  <input class="slide-open" type="radio" id="slide-3" 
                        name="slide" aria-hidden="true" hidden="">
                  <div class="slide-item">
                    <img src="./images/trans.jpg" class="img">
                    
                  </div>
                  <label for="slide-3" class="slide-control prev control-1">‹</label>
                  <label for="slide-2" class="slide-control next control-1">›</label>
                  <label for="slide-1" class="slide-control prev control-2">‹</label>
                  <label for="slide-3" class="slide-control next control-2">›</label>
                  <label for="slide-2" class="slide-control prev control-3">‹</label>
                  <label for="slide-1" class="slide-control next control-3">›</label>
                  <!--<ol class="slide-indicador">
                    <li>
                      <label for="slide-1" class="slide-circulo">•</label>
                    </li>
                    <li>
                      <label for="slide-2" class="slide-circulo">•</label>
                    </li>
                    <li>
                      <label for="slide-3" class="slide-circulo">•</label>
                    </li>
                  </ol> -->
                </div>
              </div>
            </div>
            <div style="margin-top: 1%; margin-left:2%;">
            <h3 class="nombre">TERMALES DEL COCONUCO </h3>
            <div class="block1">
                
               
                <p class="textp">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aspernatur blanditiis tempore inventore cupiditate non ipsum deserunt. Beatae et libero sed, doloribus iure quasi earum repudiandae! Vitae iusto debitis reiciendis ipsum.
                
                <div class="character">
                  <h5 class="precio">$100000</h5>
                  <h6 class="disponibilidad">🟢DISPONIBLE</h6>
                </div>
                <center>
                <button type="button" class="btn btn-danger" style="margin-left: 10%; background-color: #468ac9; border-color:#468ac9;">Reservar</button>
                </center>

            </div>
            </div>

        </div>
        <div class="botones">

          
        </div>
        </div>
    </div>


    <?php 

include 'templates/footer.php';

?>

</body>
</html>