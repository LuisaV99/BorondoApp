<?php
session_start();
if(!isset($_SESSION['Nom_Usuario'])){
    echo "<script>alert('Debes iniciar sesion');location='login.php';</script>";
    session_destroy();
    die();
	
}
$Nom_Usuario=$_SESSION['Nom_Usuario'];
$users="SELECT * FROM usuarios WHERE Nom_Usuario='$Nom_Usuario'";
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
	<link rel="icon" type="image/png" href="./images/Logo.png"/>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

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
	<link rel="stylesheet" type="text/css" href="css/perfilmain3.css">
<!--===============================================================================================-->

<script src="https://kit.fontawesome.com/99dc0b335d.js" crossorigin="anonymous"></script>

</head>
<header>
<?php 

include 'templates/Navbar.php';

?>
</header>
<body>
	

	<div class="todoperfil">

		<div class="colunm1perfil">
			<center>
				<h2>Perfil de Usuario</h2>

			<div class="img"><img src="./images/user.png" alt="" width="290"></div>
			<a href="" class="linkperfil">Actualizar foto de perfil</a>
			<h5>Mariana Palma Rodriguez</h5>
		</center>
		<div class="infouserperfil">
			<p>Correo:</p>
			<p class="txtesperfil">mpalma10@gmail.com</p>
			<p class="txtesperfil">Telefono: 321 258 2586</p>
			<p class="txtesperfil">Ubicacion: Palmira(Valle)</p>
			<p>Medio de pago predeterminado:</p>
			<p>N/A</p>
		</div>
			<center>
			<div class="block3perfil"><a class="botonesperfil" href="#" style="font-size: 15px;">Editar</a>
			</center>
		</div>
	
		

		<div class="colunm2perfil">

			<div class="subcolunm1perfil">
				<div class="sup1perfil">
				<div class="sub1sub1perfil">

				<h4 style="margin-bottom: 1%;"><a href="perfilusuario.php" class="siguientebutom"><i class="fa-solid fa-circle-arrow-left"></i></a>Pqrs:</h4>

				<div class="container-buttons">
				
						
					<div class="container-search">
						<p>Busqueda por codigo:</p>
						<input type="number" placeholder="Codigo">
					</div>

						<div class="container-search">
							<p>Filtro:</p>
							<input type="list" list="list-options" placeholder="Filtrar">
							<datalist id="list-options">
								<option value="Reciente"></option>
								<option value="Antiguas"></option>
								
							</datalist>
						</div>

						<div class="container-search">
							<p>Filtro:</p>
							<input type="list" list="list-options2" placeholder="Filtrar">
							<datalist id="list-options2">
								<option value="Sin Responder"></option>
								<option value="Con Respuesta"></option>
								
							</datalist>
						</div>
					</div>

					
					<table class="table table-borderless">
						<thead>
						  <tr>
	
							<th scope="col" class="titletable">ID</th>
							<th scope="col" class="titletable">Tipo</th>
							<th scope="col" class="titletable">Asunto</th>
							<th scope="col" class="titletable">Fecha</th>
							<th scope="col" class="titletable">Contestada</th>
						  </tr>
						</thead>
						<tbody>
						  <tr>
						
							<th scope="row">#1505</th>
							<td class="atributetable" style="font-weight: bolder; text-align: left;">Queja</td>
							<td class="atributetable">Asunto Borrador 1</td>
							<td class="atributetable">08/05/2022</td>
							<td class="atributetable">Sin Respuesta</td>
						  </tr>
						  <tr>
						
							<th scope="row">#1606</th>
							<td class="atributetable" style="font-weight: bolder; text-align: left;">Sugerencia</td>
							<td class="atributetable">Asunto Borrador 2</td>
							<td class="atributetable">08/05/2022</td>
							<td class="atributetable">Sin Respuesta</td>
						  </tr>
						  <tr>
						
							<th scope="row">#1707</th>
							<td class="atributetable" style="font-weight: bolder; text-align: left;">Peticion</td>
							<td class="atributetable">Asunto Borrador 3</td>
							<td class="atributetable">08/04/2022</td>
							<td class="atributetable"><a href="" class="checkperfil">Respuesta <i class="fa-solid fa-share"></i></a></td>
						  </tr>

						  <tr>
						
							<th scope="row">#1808</th>
							<td class="atributetable" style="font-weight: bolder; text-align: left;">Queja</td>
							<td class="atributetable">Asunto Borrador 4</td>
							<td class="atributetable">11/07/2021</td>
							<td class="atributetable"><a href="" class="checkperfil">Respuesta <i class="fa-solid fa-share"></i></a></td>
						  </tr>

						  <tr>
						
							<th scope="row">#1909</th>
							<td class="atributetable" style="font-weight: bolder; text-align: left;">Sugerencia</td>
							<td class="atributetable">Asunto Borrador 5</td>
							<td class="atributetable">11/11/2021</td>
							<td class="atributetable"><a href="" class="checkperfil">Respuesta <i class="fa-solid fa-share"></i></a></td>
						  </tr>

						  <tr>
						
							<th scope="row">#1110</th>
							<td class="atributetable" style="font-weight: bolder; text-align: left;">Reseña</td>
							<td class="atributetable">Asunto Borrador 6</td>
							<td class="atributetable">25/03/2022</td>
							<td class="atributetable"><a href="" class="checkperfil">Respuesta <i class="fa-solid fa-share"></i></a></td>
						  </tr>

						  <tr>
						
							<th scope="row">#1111</th>
							<td class="atributetable" style="font-weight: bolder; text-align: left;">Peticion</td>
							<td class="atributetable">Asunto Borrador 7</td>
							<td class="atributetable">08/04/2022</td>
							<td class="atributetable"><a href="" class="checkperfil">Respuesta <i class="fa-solid fa-share"></i></a></td>
						  </tr>

						  <tr>
						
							<th scope="row">#1112</th>
							<td class="atributetable" style="font-weight: bolder; text-align: left;">Reseña</td>
							<td class="atributetable">Asunto Borrador 8</td>
							<td class="atributetable">01/03/2022</td>
							<td class="atributetable"><a href="" class="checkperfil">Respuesta <i class="fa-solid fa-share"></i></a></td>
						  </tr>
	
						  
						</tbody>
					  </table>
			</div>
		
		</div>

<div class="divpaginadobutom"> <a href="" class="paginadobutom">1/1</i></a></div>

			<div class="divsiguientebutom">
				 <a href="" class="siguientebutom"><i class="fa-solid fa-circle-arrow-left"></i>Volver</a>
				 <a href="" class="siguientebutom">Siguiente <i class="fa-solid fa-circle-arrow-right"></i></a></div>

	</div>

			</div>
		</div>
	

	

			
	

</body>
</html>
