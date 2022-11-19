<?php

include("model/conexion.php");

?>

<link rel="icon" type="image/png" href="./images/Logo.png" />



<!--===============================================================================================-->
</head>
<a name="navbar" id="navbar" style="display: none;"></a>
<header class="NavPrin">

<img class="navlogo2" src="images/logo2.png" alt="logo" >

<div class="respmenu" >


	<input type="checkbox">
 		 <i class="fas fa-bars" style="color: #2e83d4;"></i>
 		 <i class="fas fa-times" style="color: #2e83d4;"></i>
	</input>
	
  
  
	<nav>
    <ul class="nav_links">

				<li><a href="./index.php" class="navlink">Inicio</a></li>
				<li><a href="./Cards-LugaresP.php" class="navlink">Lugares</a></li>
				<li><a href="./index.php#footer" class="navlink">Contáctanos</a></li>
				<li><a href="./Cards-LugaresP.php" class="navlink">Ayuda</a></li>
				<?php
		if ($_SESSION) {

			$Documento = $_SESSION['Documento'];
			$users = "SELECT * FROM usuarios WHERE Documento='$Documento'";

			include 'templates/Saludo.php';	

			
		$show = mysqli_query($conx, $users);
		while ($row = mysqli_fetch_assoc($show)) {


			if ($row['ID_Rol'] == "1") {

		?>
						<li><a href="./Usuarioreservas.php" class="navlink">Ver Perfil</a></li>				<?php
			} else {
				if ($row['ID_Rol'] == "2") {
				?>
						<li><a href="./Adminpqrs.php" class="navlink">Ver Perfil</a></li>							<?php
				} else {
					if ($row['ID_Rol'] == "3") {
					?>
						<li><a href="./BorondoMan.php" class="navlink">Ver Perfil</a></li>				<?php

					}
				}
			}
		}
			
			?> 
			<li><a href="./functions/cerrar.php" class="navlink">Cerrar Sesión</a></li>
			
			<?php
		} else {

			?>

			<li><a href="./InicioSesion.php" class="navlink">Iniciar Sesión</a></li>
			<li><a href="./Registro.php" class="navlink">Registrarme</a></li>
			
			<?php

		}


		?>
    </ul>
  </nav>
</div>

	<div class="logosv2" >
		<img class="navlogo" src="images/logo2.png" alt="logo" width="60">
		<div class="saludo">
		<?php
		if ($_SESSION) {


			include 'templates/Saludo.php';
		} else {
		}


		?>

		</div>
		





	</div>

		<nav class="botones2">
			<ul class="nav_links">
				<li><a href="./index.php" class="navlink">Inicio</a></li>
				<li><a href="./Cards-LugaresP.php" class="navlink">Lugares</a></li>
				<li><a href="./index.php#footer" class="navlink">Contáctanos</a></li>
				<li><a href="./Cards-LugaresP.php" class="navlink">Ayuda</a></li>
			</ul>
		</nav>
	







	<div class="sesion">
		<?php
		if ($_SESSION) {


			include 'templates/Bienvenido.php';
		} else {

			include 'templates/Inicia.php';
		}


		?>

	</div>

	



</header>

<body>
</body>