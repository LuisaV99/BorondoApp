<?php
session_start();
if (!isset($_SESSION['Nom_Usuario'])) {
}

$var = "SELECT * FROM tipo_pqrs";
// print_r($_SESSION);

include("model/conexion.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>BorondoApp</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="./images/Logo.png" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<!--===============================================================================================-->
</head>

<body>

	<?php

	include './templates/Navbar.php';

	?>

	<div class="slider">
		<ul>
			<li>
				<img src="images/VDC.jpg" alt="" class="imgslider">
			</li>
			<li>
				<img src="images/PP.jpg" alt="">
			</li>
			<li>
				<img src="images/SRC.jpg" alt="">
			</li>
			<li>
				<img src="images/RC.jpg" alt="">
			</li>
			<li>
				<img src="images/IS.jpg" alt="">
			</li>
			<li>
				<img src="images/CW.jpg" alt="">
			</li>


		</ul>
	</div>
	</br>


	<li class="btn2">
		<div class=""><a class="botones" href="Reservas.php"> <img src="images/Reserva.png" class="" alt="" width="30px">Reserva</a>
			<hr style="height: 1px;">
			<p class="explain"><strong> Reserva</strong> tu paquete ideal.</p>
		</div>

		<div class=""><a class="botones" href="#ejem"> <img src="images/Conoce.png" class="" alt="" width="35px">Conoce</a>
			<hr style="height: 1px">
			<p class="explain"><strong>Conoce </strong>mas sobre BorondoAPP.</p>
		</div>

		<div class=""><a class="botones" href="#"> <img src="images/Consulta.png" class="" alt="" width="30px">Consulta</a>
			<hr style="height: 1px">
			<p class=""><strong>Consulta </strong>fechas disponibles.</p>
		</div>
	</li>

	<br>

	<div class="bloque2">
		<br><br>
		<center>
			<h1 class="titulobloque21"><strong> Descubramos juntos</strong></h1>
		</center>
		<br>
		<a name="ejem" id="ejem"></a>
		<center>
			<h3 class="titulobloque2">Asombrate con nuestros servicios</h3>
		</center>

		<Section class="kemway">






			<div class="containerd">
				<div class="card">
					<div class="imgBX">
						<img src="images/Lugares.jpg" class="">
						<center>
							<h5 class="h3t"><strong>Lugares</strong></h5>
						</center>
					</div>
					<div class="content">

						<p style="padding-top: 10px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui ullam quibusdam praesentium ipsam nulla nisi consequatur numquam, cum ipsum ea. Voluptate, totam suscipit. Natus, accusantium adipisci atque explicabo ab qui!</p>
						<center>
							<div class="boton">
								<a href="Cards-Lugares.php" class="botona">Ver más</a>
							</div>
						</center>
					</div>
				</div>
			</div>

			<div class="containerd">
				<div class="card">
					<div class="imgBX">
						<img src="images/Alojamientos.jpg" class="imgtar">
						<center>
							<h5 class="h3t"><strong> Alojamientos</strong></h5>
						</center>
					</div>
					<div class="content">

						<p style="padding-top: 10px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui ullam quibusdam praesentium ipsam nulla nisi consequatur numquam, cum ipsum ea. Voluptate, totam suscipit. Natus, accusantium adipisci atque explicabo ab qui!</p>
						<center>
							<div class="boton">
								<a href="Card-Alojamiento.php" class="botona">Ver más</a>
							</div>
						</center>
					</div>
				</div>
			</div>

			<div class="containerd">
				<div class="card">
					<div class="imgBX">
						<img src="images/bus.jpg" class="imgtar">
						<center>
							<h5 class="h3t"><strong>Transportes</strong></h5>
						</center>
					</div>
					<div class="content">

						<p style="padding-top: 10px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui ullam quibusdam praesentium ipsam nulla nisi consequatur numquam, cum ipsum ea. Voluptate, totam suscipit. Natus, accusantium adipisci atque explicabo ab qui!</p>
						<center>
							<div class="boton">
								<a href="Card-Transporte.php" class="botona">Ver más</a>
							</div>
						</center>
					</div>
				</div>
			</div>


		</Section>
		<br><br>
	</div>

	<div class="bloque3">

		<div class="bl31">
			<center>
				<div> <img src="images/Logo.png" alt="" class="imgbl321"></div>
			</center>
		</div>

		<div class="bl32">
			<h1 class="text2bl3">Borondo App</h1>
			<div class="bl321">

				<div class="textbl3">BorondoApp es la iniciativa de turismo donde se le dará el protagonismo que merece el departamento de El Valle Del Cacuca y todas sus ciudades, es hora de ver, disfrutar, valorar y enriquecer nuestro gran Valle y posicionarnos como potencia turistica del pais, esto junto alojamientos de primera clase y transportes de todo tipo para que nada nos detenga.</div>
				<div class="text2bl3"> Somos BorondoApp, el turismo Vallecaucano en su maxima expresion, si mas que agregar... ¿Un borondo o miedo? </div>
			</div>
			<div class="bl322">
				<p class="reser"><a href="" class="check">✔</a>Mejores atractivos del Valle</p>
				<p class="reser"><a href="" class="check">✔</a>Diversos alojamientos de alta clase</p>
				<p class="reser"><a href="" class="check">✔</a>Transportes de todo tipo</p>
				<p class="reser"><a href="" class="check">✔</a>Confiabilidad y contacto</p>
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
						<span><a href="./Cards-Lugares.php">Lugares</a></span>
						<span><a href="./Card-Alojamiento.php">Alojamientos</a></span>
					</div>
					<div class="list-nav-1">
						<span><a href="./Card-Transporte.php">Transporte</a></span>
						<span><a href="./Registro.php">Registrarse</a></span>
						<span><a href="./Login.php">Inicio de sesión</a></span>
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



	<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script>
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
	<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>

</html>