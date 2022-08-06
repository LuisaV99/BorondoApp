<?php
$var = "SELECT * FROM tipo_pqrs";

include './model/conexion.php';
session_start();
if (isset($_SESSION['Nom_Usuario'])) {
	echo "<script>alert('Ya iniciaste sesion');window.history.go(-1);</script>";
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link rel="icon" type="image/png" href="images/Logo.png" />
	<link rel="stylesheet" type="text/css" href="./css/login.css">


</head>

<body>
	<?php

	include 'templates/Navbar.php';

	?>
	<!-- Formulario -->
	<div class="contenedor-login">
		<div class="wrap-inicio">
			<div class="logo-formulario">
				<img id="logo" src="./images/Logo.png" alt="" width="280px"></br>
			</div>
			<div class="formulario">
				<form action="read.php" method="POST" class="inicio-form validate-form">
					<span class="titulo-login">
						Iniciar
						Sesión
					</span>
					<div class="wrap-login validate-input" data-validate="Ingresa un usuario válido">
						<input class="input-general" type="text" name="Nom_Usuario" placeholder="Usuario">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa-solid fa fa-user" aria-hidden="true"></i>
						</span>
					</div>
					<div class="wrap-login validate-input" data-validate="Ingresa una contraseña válida">
						<input class="input-general" type="password" name="Contraseña" placeholder="Contraseña">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					<div class="text-center p-t-1">
						<span class="txt1">
							¿Olvidó su
						</span>
						<button id="btn-abrir-popup" class="btn-abrir-popup">Contraseña?</button>
					</div>
					<input type="hidden" name="oculto" value="1">
					<div class="contenedor-login-btn">
						<a href="read.php?id=<?php echo $row["Nom_Usuario"]; ?>"><button class="edt">ingresar</button></a>
					</div>
				</form>
				<div class="text-center p-t-40">
					<a class="txt2" href="Registro.php">
						Registrate
						<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
					</a>
				</div>

				<div class="overlay" id="overlay">
					<div class="popup" id="popup">
						<a href="#" id="btn-cerrar-popup" class="btn-cerrar-popup"><i class="fas fa-times"></i></a>
						<h3>RECUPERAR CONTRASEÑA</h3>
						<h4>Ingresa tu correo electrónico</h4>
						<form action="">
							<div class="contenedor-inputs">
								<label>Correo electrónico</label>
								<input class="inputcorreo" type="email" placeholder="Correo">
							</div>
							<input type="submit" class="btn-submit" value="RECUPERAR">
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>



	<script src="https://kit.fontawesome.com/01f3fdcd28.js" crossorigin="anonymous"></script>
	<script src="./js/popup.js"></script>
	<script>
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>

</body>

</html>