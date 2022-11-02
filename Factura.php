<?php

include("model/conexion.php");

session_start();
if (!isset($_SESSION['Documento'])) {
}
$document = $_SESSION['Documento'];
$id = $_GET['id'];

$factura = "SELECT * FROM `reservas`  INNER JOIN `lugares` ON reservas.ID_Lugar=lugares.ID_Lugar INNER JOIN `usuarios` ON reservas.Documento=usuarios.Documento WHERE ID_Reserva=$id";
// print_r($_SESSION);

$inactiv = "SELECT * FROM usuarios WHERE Documento='$document' AND ID_Estado_Usuario='2'";
$inactivresult = mysqli_query($conx, $inactiv);

if (mysqli_num_rows($inactivresult) == 1) {
	echo "<script>alert('Tu cuenta se encuentra deshabilitada');location='./functions/cerrar.php';</script>";
} else {
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>BorondoApp</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->

	<link rel="icon" type="image/png" href="./images/logo2.png" />
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
	<link rel="stylesheet" type="text/css" href="css/factura.css">
	<!--===============================================================================================-->
</head>

<body class="bodyfac">


	<?php

	include './templates/navbar.php';

	?>
	<div class="botones"><a href="./Usuarioreservas.php" class="btn btn-danger">Regresar</a></div>


	<div class="Factura">
		<?php
		$show = mysqli_query($conx, $factura);
		while ($row = mysqli_fetch_assoc($show)) { ?>

			<img class="logo-boro" src="./images/Logo.png" alt="Oculto ajjajajja no sabia que esto se podia" />
			<p class="">¡<?php echo $row['Nombres'] ?> Gracias por reservar con nosotros! </p>
			<p class="">Aquí tienes los detalles de tu reserva</p>
			<p style="margin-bottom: 0;">Fecha: <?php echo $row['FechaRgR'] ?></p>
			<p class="descrip">Cuando reservó</p>

			<hr width="100%">

			<h1>Detalles</h1>
			<p>Código de reserva: <?php echo $row['ID_Reserva'] ?></p>
			<h5>Contenido</h5>
			<p>Lugar: <?php echo $row['Nombre'] ?></p>
			<p>Cantidad entradas: <?php echo $row['N_Entradas'] ?></p>
			<p style="margin-bottom: 0;">Cuando: <?php echo $row['FechaRs'] ?></p>
			<p class="descrip">Fecha de reserva</p>
			<h5>Valor</h5>
			<p>Total: $<?php echo $row['Total'] ?> COP</p>

			<hr width="100%">

			<h3>Cómo pagar</h3>
			<p>Número de cuenta: <strong> <?php echo $row['N_Cuenta'] ?> </strong> </p>
			<img src="https://i0.wp.com/bixxus.com/wp-content/uploads/2022/06/nequi-logo-1.png?resize=1920%2C1842&ssl=1" alt="Oculto ajjajajja no sabia que esto se podia" width="45px" />

			<hr width="100%">

			<p>No sé pagar, <a href="./PDF/ComoPagarBorondoApp.pdf" Target="_blank" style="text-decoration: revert;">Aprende aquí</a></p>
			<p>Déjanos saber tu <a href="./index.php#footer" style="    text-decoration: revert;">Opinión</a> </p>

		<?php } ?>

	</div>






</body>

</html>