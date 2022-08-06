<?php
session_start();
if (!isset($_SESSION['Nom_Usuario'])) {
	echo "<script>alert('Debes iniciar sesion');location='login.php';</script>";
	session_destroy();
	die();
}
$var = "SELECT * FROM tipo_pqrs";
$Nom_Usuario = $_SESSION['Nom_Usuario'];
$users = "SELECT * FROM usuarios WHERE Nom_Usuario='$Nom_Usuario'";
$iduser = "SELECT ID_Usuario FROM usuarios WHERE Nom_Usuario='$Nom_Usuario'";
$reserv = "SELECT * FROM reservas WHERE ID_Usuario='$iduser'";
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
			// while($row=mysqli_fetch_assoc($show)) { 
			?>

			<div class="subcolunm1perfil">
				<div class="sup1perfil">
					<div class="sub1sub1perfil">

						<h4 style="margin-bottom: 1%;">Reservas realizadas:</h4>
						<table class="table table-borderless">
							<thead>
								<tr>

									<th scope="col" class="titletable">Codigo</th>
									<th scope="col" class="titletable">Fechas</th>
									<th scope="col" class="titletable">Servicios</th>
									<th scope="col" class="titletable">Coste total</th>

								</tr>
							</thead>
							<tbody>
								<tr>

									<th scope="row">#1111</th>
									<td class="atributetable"> <?php echo $row["Fech_reserva"]; ?></td>
									<td class="atributetable">LugarX-TrasnporteY-AlojamientoZ</td>
									<td class="atributetable"><?php echo $row["Costo"]; ?></td>

								</tr>

							</tbody>
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

    <footer>
        <!-- contenedor del footer -->
        <div class="container-parth">
            <!-- bloque #1 -->
            <div class="container-block">
                <img class="logo-boro" src="./images/logo.png" alt="Logo" />
                <p class="lema">¡A un click de tu destino!</p>
                <p class="copy">Todos los derechos reservados © 2022 Copyright</p>
            </div>

            <!-- Bloque #2 -->
            <div class="container-block">
                <p>PQRS</p>
                <form action="./templates/pqrs.php" method="POST">
                    <input type="email" name="email" placeholder="Correo Electrónico" required />
                    <div class="column-1">
                        <input type="text" id="nombres" name="nombre" placeholder="Nombre Completo" required />
                        <input class="input-down" type="number" name="telefono" placeholder="Teléfono" required />
                        <select class="lista" name="tipo">
                            <?php foreach ($conx->query("$var") as $values) { ?>
                                <option value="<?php echo $values['ID_Tipo'] ?>"><?php echo $values['Nombre_Tipo'] ?></option>
                            <?php } ?>
                        </select>
                        <input class="input-down" type="text" name="asunto" placeholder="Asunto" />
                    </div>
                    <textarea cols="30" rows="10" name="descripcion" placeholder="Escribe aquí tu PQRS"></textarea>
                    <a href=""><button class="send" type="submit">Enviar</button></a>
                </form>
            </div>
            <!-- Bloque #3 -->
            <div class="container-block">
                <div class="container-list">
                    <div class="list-nav-1">
                        <span><a href="./index.php">Página de Inicio</a></span>
                        <span><a href="./Cards-Lugares.php">Lugares</a></span>
                        <span><a href="./Card-Alojamiento.php">Alojamientos</a></span>
                    </div>
                    <div class="list-nav-1">
                        <span><a href="./Card-Transporte.php">Transporte</a></span>
                        <span><a href="./Registro.php">Registrarse</a></span>
                        <span><a href="./Login.php">Inicio de sesión</a></span>
                    </div>
                </div>
                <p class="follow">Siguenos en redes sociales</p>
                <div class="social-icons">
                    <a href=""><span class="insta"></span></a>
                    <a href=""><span class="facebook"></span></a>
                    <a href=""><span class="twitter"></span></a>
                </div>
                <p>@BorondoApp.Official</p>
                <p class="allright">Todos los derechos reservados © 2022 Copyright</p>
            </div>
        </div>
    </footer>



</body>

</html>