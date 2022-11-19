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
	<title>Inicio de Sesión</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->

    <link rel="icon" type="image/png" href="./images/logo2.png" />
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link rel="stylesheet" type="text/css" href="./css/iniciosesion.css">
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
					<form action="./functions/Read.php" method="POST">
						<span class="titulo-formulario">
							Inicio de Sesión
						</span>
						<div for="txtSoloLetras" class="wrap-inputs validate-input" data-validate="Ingresa un documento válido" style="margin-bottom: 2%">
							<input class="inputs-general" type="text" name="Documento" placeholder="Documento" required pattern="[0-9]{10}" onkeypress="return onlyNumberKey(event)" >
							<span class="focus-input100"></span>
						
						
						<div class="wrap-inputs validate-input" data-validate="Ingresa una contraseña válida">
							<input class="inputs-general" type="password" name="Contraseña" placeholder="Contraseña" required minlength="8" maxlength="20">
							
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

						<form method="POST">
							
							<center>
								<input type="hidden" name="oculto" value="1">
								<button type="submit" class="btn">Ingresar</button>
							</center>
						</form>
						</tr>
						<div class="text-new">
							<b><label style="font-size: 12px;">¿No tienes cuenta?</label></b>
							
							<a class="txt2" href="Registro.php">
								Registrarme
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
										
									</div>

									<div class="wrap-inputs-modal validate-input" data-validate="Ingresa un correo válido.">
										<input class="inputs-generalpop" type="email" name="Correo_popup" placeholder="Correo electrónico" required>
										
									</div>

									
									<div class="container-login100-form-btn" style="display: flex; justify-content: center;">
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

	include 'templates/footer.php';

	?>

	<script src="https://kit.fontawesome.com/01f3fdcd28.js" crossorigin="anonymous"></script>
	<script>
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>


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

	<!--===============================================================================================-->

</body>

</html>