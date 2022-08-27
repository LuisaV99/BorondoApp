<?php
session_start();
if(!isset($_SESSION['Documento'])){
    echo "<script>alert('Debes iniciar sesion');location='login.php';</script>";
    session_destroy();
    die();
	
}
$document=$_SESSION['Documento'];
// $users="SELECT * FROM usuarios WHERE Nom_Usuario='$Nom_Usuario'";

// $reserv= "SELECT * FROM reservas INNER JOIN usuarios on reservas.Id_usuario = usuarios.ID_Usuario WHERE reservas.Id_usuario = '$iduser'";
$creser= "SELECT * FROM reservas WHERE Documento='$document'";


// $reserv="SELECT * FROM reservas WHERE Id_usuario='$iduser'";
// print_r($_SESSION);

include("model/conexion.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Perfil de usuario</title>
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
	<link rel="stylesheet" type="text/css" href="css/perfilmain.css">
	<!--===============================================================================================-->

	<script src="https://kit.fontawesome.com/99dc0b335d.js" crossorigin="anonymous"></script>

</head>
<?php

include 'templates/Navbar.php';

?>

<body>


	<div class="todoperfil">
	
		<div class="colunm1perfil">
		<?php

			include 'templates/tperfilusuario.php';

		?>
		</div>
		


		<div class="colunm2perfil">
		<?php
		// 	 $show=mysqli_query($conx,$reserv);
        // while($row=mysqli_fetch_assoc($show)) { ?>

			<div class="subcolunm1perfil">
				<div class="sup1perfil">
					<div class="sub1sub1perfil">

						<h4 style="margin-bottom: 1%;">Reservas </h4>
						<table class="table table-borderless">
							<thead>
								<tr>

									<th scope="col" class="titletable">Codigo</th>
									<th scope="col" class="titletable">Fechas</th>
									<th scope="col" class="titletable">Servicios</th>
									<th scope="col" class="titletable">Coste total</th>

								</tr>
							</thead>
							<?php
			 $show=mysqli_query($conx,$creser);
        while($row=mysqli_fetch_assoc($show)) { ?>
							<tbody>
			
								<tr>
				
								
										<th scope="row"><?php echo $row["Id_resserva"];?></th>
										<td class="atributetable"> <?php echo $row["fech_reser"];?></td>
										<td class="atributetable">LugarX-TrasnporteY-AlojamientoZ</td>
										<td class="atributetable"><?php echo $row["coste"];?></td>

									
								</tr>
								
							</tbody>
							<?php } ?>	
						</table>
					</div>

				</div>
				<center>
					<div class="block3perfil"><a class="botonesperfil" href="perfilusuarioreservas.php" style="font-size: 15px;"><strong>VER MÁS</strong></a>
				</center>
			</div>

		


			</div>
		</div>

	</div>
	
	<?php

	 include 'templates/footer.php';

	?>


</body>

</html>