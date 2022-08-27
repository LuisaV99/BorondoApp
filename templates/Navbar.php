<?php

include("model/conexion.php");

?>

	<link rel="icon" type="image/png" href="./images/Logo.png"/>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	


<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Coming+Soon&family=Lobster&display=swap" rel="stylesheet">


<link rel="stylesheet" type="text/css" href="css/nav.css">
<!--===============================================================================================-->
</head>
	<header>
		<div class="logosv2">
		<a href="./index.php" class="navlink"><img class="navlogo" src="images/logo2.png" alt="logo" width="60"></a>
		

		<?php
		if ($_SESSION){

			
			include 'templates/Bienvenido.php';


		}
		else {

			include 'templates/Inicia.php';

		}
		
		
		?>
		


	</div>
	<center>
		<nav class="botones2">
			<ul class="nav_links">
				<li><a href="./index.php" class="navlink">Inicio</a></li>
				<li><a href="./Cards-Lugares.php" class="navlink">Lugares</a></li>
				<li><a href="./Card-Transporte.php" class="navlink">Transporte</a></li>
				<li><a href="./Card-Alojamiento.php" class="navlink">Alojamientos</a></li>
				<li><a href="#footer" class="navlink">Contáctanos</a></li>
				<li><a href="./Reservas.php" class="navlink">Reservas</a></li>
			</ul>
		</nav>
	</center>


	
		<div class="dropdown">
		<center>
			<div>
				
			<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false" style="height: 24px; width: 65px; font-size: 11px; padding-top: 2px;">
			  Menú
			</button>
			<ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
			  <li><button class="dropdown-item" type="button">Inicio</button></li>
			  <li><button class="dropdown-item" type="button">Lugares</button></li>
			  <li><button class="dropdown-item" type="button">Transporte</button></li>
			  <li><button class="dropdown-item" type="button">Alojamientos</button></li>
			  <li><button class="dropdown-item" type="button">Contáctanos</button></li>
			  <li><button class="dropdown-item" type="button">Mis Reservas</button></li>
			</ul>
		
		  </div>
		</center>
		</div>
	

		<div class="banderas">
		<a clas="ESP" href="#"><button>ES</button></a> 
		<img class="ES" src="images/es.png" alt="">
		<a clas="ENG" href="#"><button>EN</button></a> 
		<img class="EU" src="images/eeuu.png" alt="">
		</div>

	</header>
	<body>
</body>
