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

$var = "SELECT * FROM tipo_pqrs";


include("model/conexion.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./css/Reservas.css"/>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">

    <title>Confirma tu Reserva</title>
</head>
<body>

<?php 

include 'templates/Navbar.php';

?>
    
    <div class="container">
		<div class="form">
      <center><h1 style="color: #468ac9; font-weight: bold;">Confirma tu reserva</h1></center>
      <div class="formdown">
            <div class="slider">
              <div class="slide">
                <div class="slide-inner">
                  <input class="slide-open" type="radio" id="slide-1" 
                        name="slide" aria-hidden="true" hidden="" checked="checked">
                  <div class="slide-item">
                    <img src="./images/lugar.jpg" class="img">
                    <div  class="text">
                      <h6>Lugar Nombre</h6>
                      <p>Este es un lugar muy bonito y bla bla bla, pasaras una gran noche con toda tu familia</p>
                    </div>
                  </div>
                  <input class="slide-open" type="radio" id="slide-2" 
                        name="slide" aria-hidden="true" hidden="">
                  <div class="slide-item">
                    <img src="./images/aloja.jpg" class="img">
                    <div  class="text">
                      <h6>Alojamiento Nombre</h6>
                      <p>Este es un lugar muy bonito y bla bla bla, pasaras una gran noche con toda tu familia</p>
                    </div>
                  </div>
                  <input class="slide-open" type="radio" id="slide-3" 
                        name="slide" aria-hidden="true" hidden="">
                  <div class="slide-item">
                    <img src="./images/trans.jpg" class="img">
                    <div  class="text">
                      <h6>Transporte Nombre</h6>
                      <p>Este es un vehiculo muy bonito y bla bla bla, pasaras una gran noche con toda tu familia</p>
                    </div>
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
            <div class="block1">
                
                <h3 style="color: #468ac9; font-weight: bold;">Detalles de tu reserva</h3>
                <p class="textp"><strong>Hospedaje:</strong> Lugar 1 <br>
                  Estrellas: 3 <br>
                  Direccion #2-3 Barrio Equis We</p>
                <!--A: Si manejamos Estrellas hay añadirla a la base de datos -->
              
                <p><strong>Destino:</strong>  Destino 1 <br>
                  Ubicacion:Ubicar #3-2 KM12 <br>
                  Salida: dd/mm/aa <br>
                  Llegada: dd/mm/aa </p>
                <!--B: Que es esto? -->
               
                <p><strong>Transporte:</strong>  Transporte 1 <br>
                  Capacidad: 5 Personas <br>
                  Cilindraje 1200 <br>
                  Tipo de carroceria:</p>
                <!--A:-->
                <p class="barr">..................................................................................................................</p>
                <div class="precios">
                <h5>SUBTOTAL: <br>
                IVA(%): <br>
                TOTAL:</h5>

                <h5 style="margin-left: 50%;">$480.000 <br>
                19% <br>
                $807.200</h5>
              </div>

            </div>
            

        </div>
        <div class="botones">
          <button type="button" class="btn btn-success" style="margin-right: 10%; background-color: #468ac9; border-color:#468ac9;">Agregar pago</button>
          <button type="button" class="btn btn-danger" style="margin-left: 10%; background-color: #468ac9; border-color:#468ac9;">Cancelar</button>
        </div>
        </div>
    </div>

    <footer>
		<!-- contenedor del footer -->
		<div class="container-parth">
			<!-- bloque #1 -->
			<div class="container-block">
				<img class="logo-boro" src="./images/logo.png" alt="Logo" />
				<p class="lema">¡A un click de tu destino!</p>
				<p class="copy">Todos los derechos reservados © 2022 Copyright</p>
			</div>

			<!-- Bloque #2 -->
			<div class="container-block">
				<p>PQRS</p>
				<form action="./templates/pqrs.php" method="POST">
					<input type="email" name="email" placeholder="Correo Electrónico" required />
					<div class="column-1">
						<input type="text" id="nombres" name="nombre" placeholder="Nombre Completo" required />
						<input class="input-down" type="number" name="telefono" placeholder="Teléfono" required />
						<select class="lista" name="tipo">
							<?php foreach ($conx->query("$var") as $values) { ?>
								<option value="<?php echo $values['ID_Tipo'] ?>"><?php echo $values['Nombre_Tipo'] ?></option>
							<?php } ?>
						</select>
						<input class="input-down" type="text" name="asunto" placeholder="Asunto" />
					</div>
					<textarea cols="30" rows="10" name="descripcion" placeholder="Escribe aquí tu PQRS"></textarea>
					<a href=""><button class="send" type="submit">Enviar</button></a>
				</form>
			</div>
			<!-- Bloque #3 -->
			<div class="container-block">
				<div class="container-list">
					<div class="list-nav-1">
						<span><a href="">Nosotros</a></span>
						<span><a href="">Lugares</a></span>
						<span><a href="">Alojamientos</a></span>
					</div>
					<div class="list-nav-1">
						<span><a href="">Transporte</a></span>
						<span><a href="">Registrarse</a></span>
						<span><a href="">Inicio de sesión</a></span>
					</div>
				</div>
				<p class="follow">Siguenos en redes sociales</p>
				<div class="social-icons">
					<a href=""><span class="insta"></span></a>
					<a href=""><span class="facebook"></span></a>
					<a href=""><span class="twitter"></span></a>
				</div>
				<p>@BorondoApp.Official</p>
				<p class="allright">Todos los derechos reservados © 2022 Copyright</p>
			</div>
		</div>
	</footer>



</body>
</html>