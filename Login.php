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
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	
    <link rel="icon" type="image/png" href="./images/logo2.png" />
	<link rel="stylesheet" type="text/css" href="./css/login.css">


</head>

<body>
	<?php

	include 'templates/Navbar.php';

	?>
	<!--FORMULARIO-->
	<div class="contenedor-login">
		<div class="wrap-inicio">
			<div class="logo-formulario">
				<img id="logo" src="images/Logo.png" alt="" width="280px"></br>
			</div>
			<div class="formulario">
				<form action="./functions/read.php" method="POST" class="login100-form validate-form">
					<span class="titulo-login">
						Iniciar
						Sesión
					</span>

					<div class="wrap-inputs validate-input" data-validate="Ingresa un usuario válido.">

						<input class="inputs-general" type="text" name="Documento" placeholder="Documento" required pattern="[0-9]{10}" onkeypress="return onlyNumberKey(event)">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa-solid fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-inputs validate-input" data-validate="Ingresa una contraseña válida" >
						<input class="inputs-general" type="password" name="Contraseña" placeholder="Contraseña" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					<div class="text-center p-t-1">
						<span class="txt1">
							¿Olvidó su
						</span>
						<button type="button" class="btnmodal" data-bs-toggle="modal" data-bs-target="#exampleModal">Contraseña</button>
						<span class="txt1">
						?
						</span>
					</div>
					<input type="hidden" name="oculto" value="1">
					<div class="container-login100-form-btn">
						<a><button class="btn">ingresar</button></a>
					</div>
				</form>

				<div class="text-center p-t-20">
					<a class="txt2" href="Registro.php">
						Registrate
						<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
					</a>
				</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
				<img class="navlogo" src="images/logo2.png" alt="logo" width="50">
					<h5 class="modal-title" id="exampleModalLabel">Olvidé mi contraseña</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<div class="contenedor-modal">
							<div class="formulario-modal">
								<form action="./functions/olvidec.php" method="POST" class="login100-form-modal validate-form">

								<p class="notaolvi">Si sus datos son correctos podrá ingresar a su perfil para cambiar su contraseña.</p>
									<div class="wrap-inputs-modal validate-input" data-validate="Ingresa un documento válido.">
										<input class="inputs-generalpop" type="text" name="Documento_popup" placeholder="Documento" required pattern="[0-9]{10}" onkeypress="return onlyNumberKey(event)">
										<span class="focus-input100"></span>
										<span class="symbol-input100">
										<i class="fa-solid fa fa-user" aria-hidden="true"></i>
										</span>
									</div>

									<div class="wrap-inputs-modal validate-input" data-validate="Ingresa un correo válido.">
										<input class="inputs-generalpop" type="email" name="Correo_popup" placeholder="Correo electrónico" required>
										<span class="focus-input100"></span>
										<span class="symbol-input100">
											<i class="fa-solid fa-envelope" aria-hidden="true"></i>
										</span>
									</div>

									
									<div class="container-login100-form-btn">
										<a><button class="btn">Ingresar</button></a>
									</div>
								</form>
								
							</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Cerrar modal -->


	<?php

	include './templates/footer.php';

	?>

	<script src="https://kit.fontawesome.com/01f3fdcd28.js" crossorigin="anonymous"></script>

	<script>
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
	<!--===============================================================================================-->



	<script>
    function onlyNumberKey(evt) {
          
        // Only ASCII character in that range allowed
        var ASCIICode = (evt.which) ? evt.which : evt.keyCode
        if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
            return false;
        return true;
    }
</script>
<script>
    function detailssubmit() {
        alert("Your details were Submitted");
    }
</script>


</body>

</html>