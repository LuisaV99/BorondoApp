<?php

if(!isset($_SESSION['Documento'])){
    echo "<script>alert('Debes iniciar sesion');location='login.php';</script>";
    session_destroy();
    die();
	
}
$document=$_SESSION['Documento'];
$users="SELECT * FROM usuarios WHERE Documento='$document'";
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


<body>


	
	
		<div class="">
			<center>
			
				<?php
			 $show=mysqli_query($conx,$users);
        while($row=mysqli_fetch_assoc($show)) { ?>
				<div class="img"><img src="./images/user.png" alt="" width="250"></div>
				<a href="" class="linkperfil">Actualizar foto de perfil</a>
				<h2 class="txtesperfil"><?php echo $row["Nombres"].' '.$row["Apellidos"];?></h2>

			</center>
			<div class="infouserperfil">

			
				<p class="txtesperfil">Correo: <?php echo $row["Correo"];?></p>

				<p class="txtesperfil">Telefono: <?php echo $row["Telefono"];?></p>

				<p class="txtesperfil">Fecha Nacimiento: <?php echo $row["Fecha_Nacimiento"];?></p>

			
		
                <center>
				<div class="block3perfil"><a class="botonesperfil" href="editarperfil.php" style="font-size: 15px;">Editar</a>
			</center>
			</div>
			
		</div>


		<?php } ?>

	
	

</body>

</html>