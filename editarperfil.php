<?php
session_start();
if(!isset($_SESSION['Documento'])){
    echo "<script>alert('Debes iniciar sesion');location='login.php';</script>";
    session_destroy();
    die();
}
$Documento=$_SESSION['Documento'];
$users="SELECT * FROM usuarios WHERE Documento='$Documento'";

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

	<link rel="stylesheet" type="text/css" href="./css/editarcss.css">
<!--===============================================================================================-->
</head>
<body>

<?php 

include 'templates/Navbar.php';

?>
	<div class="todo">

		
	
		

		<div class="colunm2">
			<form action="editarproceso.php" method="POST">
			<div class="subcolunm1">
				<br>
				<h1>Editar perfil</h1>
				<div class="sup1">
					
				<div class="sub1sub1">
				
				<h4 style="margin-bottom: 5%;">Datos personales:</h4>
				<?php
			 $show=mysqli_query($conx,$users);
        while($row=mysqli_fetch_assoc($show)) { ?>
				<div class="inputs">
					<p class="tituloedit" style="width: 262px;">Nombres:</p>
				<div class="wrap-input100 validate-input" data-validate = "Ingresa un nombre válido" >

					<input class="input100" type="text" name="Nombres" placeholder=""required pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+" value="<?php echo $row["Nombres"];?>">
					<span class="focus-input100"></span>
					<span class="symbol-input100">
						<i class="fa-solid fa fa-air-condition" aria-hidden="true"></i>
					</span>
				</div>

				<p class="tituloedit">Apellidos:</p>
				<div class="wrap-input100 validate-input" data-validate = "Ingresa un Apellido válido">
					
					<input class="input100" type="text" name="Apellidos" placeholder="" value="<?php echo $row["Apellidos"];?>">
					<span class="focus-input100"></span>
					<span class="symbol-input100">
						<i aria-hidden="true"></i>
					</span>
				</div>
			</div>
			
			<br>


			<div class="inputs">
				<p class="tituloedit">Correo:</p>
				<div class="wrap-input100 validate-input" jt-c  data-validate = "Ingresa un correo valido">

					<input class="input100" type="email" name="Correo" placeholder="" value="<?php echo $row["Correo"];?>">
					<span class="focus-input100"></span>
					<span class="symbol-input100">
						<i aria-hidden="true"></i>
					</span>
				</div>
			</div>

<br>

			<div class="inputs">
				<p class="tituloedit">Telefono:</p>
				<div class="wrap-input100 validate-input" jt-c  data-validate = "Ingresa un correo valido">

					<input class="input100" type="number" name="Telefono" placeholder="" value="<?php echo $row["Telefono"];?>">
					<span class="focus-input100"></span>
					<span class="symbol-input100">
						<i aria-hidden="true"></i>
					</span>
				</div>
			</div>
			
			<br>

			<div class="inputs">
				<p class="tituloedit">Contraseña:</p>
				<div class="wrap-input100 validate-input" jt-c  data-validate = "Ingrese su anterior contraseña">

					<input class="input100" type="text" name="Contraseña" placeholder=" " value="<?php echo $row["Contraseña"];?>">
					<span class="focus-input100"></span>
					<span class="symbol-input100">
						<i aria-hidden="true"></i>
					</span>
				</div>
			</div>

	

			<div class="inputsu">
				<p class="tituloedit">Prueba:</p>
				<div class="wrap-input100 validate-input" jt-c  data-validate = "Ingresa un correo valido">

					<input class="input100" type="text" name="Documento" placeholder="" value="<?php echo $row["Documento"];?>">
					<span class="focus-input100"></span>
					<span class="symbol-input100">
						<i aria-hidden="true"></i>
					</span>
				</div>
			</div>
			
			<br>
				
			</div>
			
		</div>
		<?php }?>
		<center>
			<div class="block3"><a href="editarperfil.php"><button type="submit">Actualizar</button></a></div>
			</center>
	</div>
	</form>
		</div>
	</div>
	
<?php 

include 'templates/footer.php';

?>
	


</body>
</html>
