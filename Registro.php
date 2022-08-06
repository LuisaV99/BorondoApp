<?php
session_start();
if (!isset($_SESSION['Nom_Usuario'])) {
}

// print_r($_SESSION);
$var = "SELECT * FROM tipo_pqrs";

include("model/conexion.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Registro</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="./images/Logo.png" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>


	<link rel="stylesheet" type="text/css" href="./css/registro.css">
	<!--===============================================================================================-->
</head>

<body>
	<?php

	include 'templates/Navbar.php';

	?>

	<div class="limiter">
		<!-- Formulario -->
		<div class="contenedor-formulario">
			<div class="wrap-formulario">
				<div class="logo-formulario">
					<img id="logo" src="./images/Logo.png" alt=""></br>
				</div>
				<div class="formulario">
					<form action="insertar.php" method="POST">
						<span class="titulo-formulario">
							REGISTRO
						</span>
						<div class="columna1">
							<div for="txtSoloLetras" class="wrap-inputs validate-input" data-validate="Ingresa un nombre válido">
								<input  class="inputs-general" type="text" name="Nombres" placeholder="Nombres" minlength="2" maxlength="40" required pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+">
								<span class="focus-input100"></span>
							</div>
							<div class="wrap-inputs validate-input" data-validate="Ingresa un Apellido Válido">
								<input class="inputs-general" type="text" name="Apellidos" placeholder="Apellidos" minlength="2" maxlength="40" required pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+">
								<span class="focus-inputs-general"></span>
							</div>
						</div>

						<div class="columna2">
							<div class="wrap-inputs validate-input" data-validate="Ingresa un usuario Válido">
								<input class="inputs-general" type="text" name="Nom_Usuario" placeholder="Usuario" minlength="2" maxlength="40" required>
								<span class="focus-input100"></span>
							</div>
							<div class="wrap-inputs validate-input" data-validate="Ingresa una fecha de nacimiento">
								<input class="input-fecha" type="date"  name="Fecha_Nacimiento" placeholder="Fecha de nacimiento" required>
								<span class="focus-input100"></span>
							</div><br>
						</div>
						<div class="wrap-inputs validate-input" jt-c data-validate="Ingresa un correo electrónico válido">
							<input class="inputs-general" type="email" name="Correo" placeholder="Correo Electrónico" required>
							<span class="focus-input100"></span>
						</div>

						<div class="wrap-inputs validate-input" data-validate="Ingresa una contraseña válida">
							<input class="inputs-general" type="password" name="Contraseña" placeholder="contraseña" required>

							<span class="focus-input100"></span>
						</div>
						<form method="POST">
							<label class="condiciones" for="condiciones">
								<a class="terminos" href="#">¿Aceptas los términos y condiciones?</a>
								<input class="checkbox" type="checkbox" name="condiciones" required />
							</label>
							<center>
								<input type="hidden" name="oculto" value="1">
								<button type="submit" class="btn">Registrarse</button>
							</center>
						</form>
						</tr>
						<div class="text-new">
							<b><label style="font-size:12px;">¿Ya eres usuario?</label></b>
							</br>
							<a class="txt2" href="Login.php">
								Iniciar Sesión
								<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
							</a>
						</div>
					</form>
				</div>
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
					<input class="inputs-footer" type="email" name="email" placeholder="Correo Electrónico" required />
					<div class="column-1">
						<input class="inputs-footer" type="text" id="nombres" name="nombre" placeholder="Nombre Completo" required pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+" required />
						<input class="inputs-footer" type="number" name="telefono" placeholder="Teléfono" required />
						<select class="lista" name="tipo">
							<?php foreach ($conx->query("$var") as $values) { ?>
								<option value="<?php echo $values['ID_Tipo'] ?>"><?php echo $values['Nombre_Tipo'] ?></option>
							<?php } ?>
						</select>
						<input class="inputs-footer" type="text" name="asunto" placeholder="Asunto"  required pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+" required/>
					</div>
					<textarea cols="30" rows="10" name="descripcion" placeholder="Escribe aquí tu PQRS"></textarea>
					<a href=""><button class="send" type="submit">Enviar</button></a>
				</form>
			</div>
			<!-- Bloque #3 -->
			<div class="container-block">
				<div class="container-list">
					<div class="list-nav-1">
						<span><a href="./index.php">Página de Inicio</a></span>
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




	<script src="https://kit.fontawesome.com/01f3fdcd28.js" crossorigin="anonymous"></script>
	<script>
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
	<!--===============================================================================================-->

</body>

</html>