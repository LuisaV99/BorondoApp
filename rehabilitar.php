<?php
include './model/conexion.php';

session_start();
if (!isset($_SESSION['Documento'])) {
  echo "<script>alert('Debes iniciar sesion');location='login.php';</script>";
  session_destroy();
  die();
}
$document = $_SESSION['Documento'];
$users="SELECT * FROM usuarios WHERE Documento='$document'";



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
			 $show=mysqli_query($conx,$users);
        while($row=mysqli_fetch_assoc($show))
         { ?>

	<!--FORMULARIO-->
	<div class="contenedor-login">

	
		<div class="habili">
			
		<div class="logo-formulario" style="margin: auto;">
				<img id="logo" src="images/Logo.png" alt="" width="280px"></br>
			</div>

			<div class="formulario">
				<form action="./functions/deshiden.php" method="POST" class="login100-form validate-form">
					<span class="titulo-login">
						Bienvenido de vuelta
					</span>

					<p style="text-align: center;">Hola <?php echo $row["Nombres"];?>, tu cuenta se encuentra deshabilitada, deseas rehabilitarla?</p>

					<div class="text-center p-t-1">
					<span class="subtitulo-login">
						Datos de la cuenta
					</span>
					</div>

					


					<p class="titulito"><strong> Nombre Completo: </strong></p>
					<p class="info"><?php echo $row["Nombres"].' '.$row["Apellidos"];?></p>
					<p class="titulito"><strong>Correo:</strong> </p>
					<p class="info"><?php echo $row["Correo"];?></p>
					<p class="titulito"><strong>Telefono:</strong></p>
					<p class="info"> <?php echo $row["Telefono"];?></p>

				</form>

				<div class="text-center p-t-20" style="display: flex; justify-content:space-evenly">

				<div class="container-login100-form-btn">
						<a href="./functions/cerrar.php"><button class="btn cancelar">Cancelar</button></a>
					</div>

					<div class="container-login100-form-btn">
						<a href="./functions/deshiden-user.php"><button class="btn btn-success">Rehabilitar</button></a>
					</div>
				</div>
				</form>
			</div>
		</div>
	</div>
	


	<script src="https://kit.fontawesome.com/01f3fdcd28.js" crossorigin="anonymous"></script>

	<script>
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
	<!--===============================================================================================-->

<?php } ?>

</body>

</html>