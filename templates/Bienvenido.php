<?php

$Documento=$_SESSION['Documento'];
// $Nom_Usuario=$_SESSION['Nom_Usuario'];
$users="SELECT * FROM usuarios WHERE Documento='$Documento'";
include("model/conexion.php");

?>

	<link rel="icon" type="image/png" href="./images/Logo.png"/>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Coming+Soon&family=Lobster&display=swap" rel="stylesheet">


<link rel="stylesheet" type="text/css" href="css/nav.css">
<!--===============================================================================================-->
</head>
	<header>
		
	</header>
	<body>
	<?php
			 $show=mysqli_query($conx,$users);
        while($row=mysqli_fetch_assoc($show)) { ?>
		
	
	<button class="botonperfil" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="" style="height: 24px; width: 65px; font-size: 11px; padding-top: 2px;">
	<img class="navlogo" src="images/User-Profile.png" alt="logo" width="60">  
		
			</button>
	<ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
			<li>		<a href=""><?php echo $row['Nombres'] ?></a></li>
			  <li>		<a href="./perfilusuario.php">Ver Perfil</a></li>
			  <li>		<a href="./cerrar.php">Cerrar sesion</a></li>
			
			</ul>

			<?php } ?>	
</body>
