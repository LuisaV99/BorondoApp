<?php
include './model/conexion.php';
session_start();
if (isset($_SESSION['Documento'])) {
	echo "<script>alert('Ya iniciaste sesion');window.history.go(-1);</script>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Registro</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->

    <link rel="icon" type="image/png" href="./images/logo2.png" />
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link rel="stylesheet" type="text/css" href="./css/registro.css">
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
					<img id="logo" src="images/Logo.png" alt=""></br>
				</div>
				<div class="formulario">
					<form action="./functions/insertar.php" method="POST">
						<span class="titulo-formulario">
							REGISTRO
						</span>
						<div for="txtSoloLetras" class="wrap-inputs validate-input" data-validate="Ingresa un documento válido" style="margin-bottom: 2%">
							<input class="inputs-general" type="number" name="Documento" placeholder="Documento" required >
							<span class="focus-input100"></span>
						</div>
						<div class="columna1" style="margin-bottom: 2%;">
							<div for="txtSoloLetras" class="wrap-inputs validate-input" data-validate="Ingresa un nombre válido">
								<input class="inputs-general" type="text" name="Nombres" placeholder="Nombres" minlength="2" maxlength="40" required pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+">
								<span class="focus-input100"></span>
							</div>
							<div class="wrap-inputs validate-input" data-validate="Ingresa un Apellido válido">
								<input class="inputs-general" type="text" name="Apellidos" placeholder="Apellidos" minlength="2" maxlength="40" required pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+">
								<span class="focus-input100"></span>
							</div>
						</div>
						<div class="columna2" style="margin-bottom: 2%;">
							<div class="wrap-inputs validate-input" data-validate="Ingresa un telefono válido">
								<input class="inputs-general" type="number" name="Telefono" placeholder="Teléfono" minlength="10" maxlength="14" required>
								<span class="focus-input100"></span>
							</div>
							<div class="wrap-inputs validate-input" data-validate="Ingresa una fecha de nacimiento">
								<input class="inputs-general1" type="date" name="Fecha_Nacimiento" required>
								<span class="focus-input100"></span>
							</div>
						</div>
						<div class="wrap-inputs validate-input" jt-c data-validate="Ingresa un correo válido" style="margin-bottom: 2%;">
							<input class="inputs-general" type="email" name="Correo" placeholder="Correo Electrónico" required>
							<span class="focus-input100"></span>
						</div>
						<div class="wrap-inputs validate-input" data-validate="Ingresa una contraseña válida">
							<input class="inputs-general" type="password" name="Contraseña" placeholder="contraseña" required minlength="8" maxlength="20">
							<span class="focus-input100"></span>
						</div></br>
						<form method="POST">
							<label class="condiciones" for="condiciones">
								<button type="button" class="terminos" data-bs-toggle="modal" data-bs-target="#exampleModal">¿Aceptas los términos y condiciones?</button>
								<input class="checkbox" type="checkbox" name="condiciones" required />
							</label>
							<center>
								<input type="hidden" name="oculto" value="1">
								<button type="submit" class="btn">Registrarse</button>
							</center>
						</form>
						</tr>
						<div class="text-new">
							<b><label style="font-size: 12px;">¿Ya eres usuario?</label></b>
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

	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title-condiciones" id="exampleModalLabel">TÉRMINOS Y CONDICIONES</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<p class="terminos-condiciones">La página web de BorondoApp no garantiza que sus aplicaciones funcionarán de manera interrumpida o sin errores, que los defectos serán corregidos o que el sitio o el servidor están libres de virus u otros componentes peligrosos. En ningún caso esta página web podrá ser culpado por cualquier daño directo o indirecto, o por daños consecuenciales, incluyendo, sin limitaciones, lucro cesante, costo de reemplazo de productos, inhabilidad para usar el contenido, errores cometidos en accesos por clic del mouse, incluso si esta Agencia de Viajes es advertida sobre la posibilidad de dichos daños. Si las leyes locales no permiten la exclusión de responsabilidades, las exclusiones antes enumeradas, no aplican en su caso:
						Este sitio es ofrecido a usted como usuario para su aceptación sin negociación de los términos, condiciones y cláusulas en él contenidas. La relación entre el sitio web de la Agencia de Viajes y usted será aquella de contratantes independientes y ninguna de las partes (incluyendo funcionarios, agentes y empleados) podrá ser considerada o constituida como socios, empresas conjuntas, fideicomisos, empleados y/o agentes comunes.</p>
				</div>
				<div class="modal-footer" style="display: flex; padding: 0px;justify-content: center;">
					<button type="button" class="btn-terminos" data-bs-dismiss="modal">Close</button>
				</div>

			</div>
		</div>
	</div>
	</div>
	<!-- Cerrar modal -->



	<?php

	include 'templates/footer.php';

	?>

	<script src="https://kit.fontawesome.com/01f3fdcd28.js" crossorigin="anonymous"></script>
	<script>
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
	<!--===============================================================================================-->

</body>

</html>