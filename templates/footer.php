<?php 



include("model/conexion.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Footer</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="./images/Logo.png"/>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Coming+Soon&family=Lobster&display=swap" rel="stylesheet">


	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util-reg.css">
	<link rel="stylesheet" type="text/css" href="./css/footer.css">
<!--===============================================================================================-->
</head>
<footer>
  
<a name="footer" id="footer"></a>
      <!-- container footer -->
      <div class="container-parth">
        
        <!-- bloque 1 -->
        <div class="container-block"><center>
          <a href="./index.php"><img class="logo-boro" src="./images/Logo.png" alt="Logo" /></a></center>
          <p class="lema">¡A un click de tu destino!</p>
          <p class="copy">Todos los derechos reservados © 2022 Copyright</p>
        </div>
        <!-- bloque 2 -->
        <div class="container-block">
        
        <?php
		if ($_SESSION){

			
			include 'templates/pqrs.php';


		}
		else {

			include 'templates/opina.php';

		}
		
		
		?>
        </div>
        <!-- bloque 3 -->
        <div class="container-block">
            <div class="container-list">
                <div class="list-nav-1">
                    <span><a  href="./Registro.php">Nosotros</a></span>
                    <span><a href="Cards-Lugaresp.php">Lugares</a></span>
                  </div>
                  <div class="list-nav-1">
                    <span><a href="./registro.php">Registro</a></span>
                    <span><a href="./InicioSesion.php">Inicio Sesión</a></span>
                  </div>
            </div>
            
            <div class="cucumelo">
					<h2 class="texbloc1" style="font-size: calc(1.325rem + -0.1vw);">SÍGUENOS EN REDES SOCIALES </h2></br>
					<div class="social">
						<div class="imgsocial">
						<a href="#"><img class="rdi" src="images/insta.png" alt="instagram" width="34px"></a>
						<a href="#"><img class="rdi" src="images/face.png" alt="facebook" width="34px"></a>
						<a href="#"><img class="rdi" src="images/twit.png" alt="linkedin" width="34px"></a>
					</div>
					</div>
					</div>
          <p>@BorondoApp.Official</p>

        </div>
      </div>
    </footer>

    <!-- JS -->
    <script src="/JS/Footer.js"></script>
  </body>
</html>


  	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
        <script src="vendor/bootstrap/js/popper.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
        <script src="vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
        <script src="vendor/tilt/tilt.jquery.min.js"></script>
        <script >
            $('.js-tilt').tilt({
                scale: 1.1
            })
        </script>
    <!--===============================================================================================-->
        <script src="js/main.js"></script>
    