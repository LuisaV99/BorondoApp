<?php
session_start();
if (!isset($_SESSION['Documento'])) {
	echo "<script>alert('Debes iniciar sesión');location='login.php';</script>";
	session_destroy();
	die();
}
$document = $_SESSION['Documento'];

$ciudades = "SELECT * FROM ciudades";


include("model/conexion.php");
$document = $_SESSION['Documento'];

$rol = "SELECT * FROM usuarios WHERE Documento='$document' AND ID_Rol='2'";
$result = mysqli_query($conx, $rol);

if (mysqli_num_rows($result) == 1) {
} else {
	echo "<script>alert('No tienes rol de administrador');location='index.php';</script>";
}
?>


<!DOCTYPE html>
<html lang="en">

<head>

	<link rel="icon" type="image/png" href="./images/logo2.png" />
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<!-- FONTS GOOGLE -->
	<link rel="preconnect" href="https://fonts.googleapis.com" />
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@500;600&display=swap" rel="stylesheet" />
	<!-- CSS STYLE -->
	<link rel="stylesheet" href="./css/AdminAdmin.css" />
	<link rel="stylesheet" href="./css/registroserv.css" />

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<link rel="stylesheet" href="./css/bootstrap.min.css">
	<link rel="stylesheet" href="./css/dataTables.bootstrap5.min.css">
	<link rel="stylesheet" href="./css/responsive.dataTables.min.css">
	<title>Administrador</title>
</head>
<?php

include 'templates/navbar.php';

?>

<body>

	<div class="body">

		<!-- CONTAINER ADMIN - IMG -->
		<div class="Administrador">



			<!--FORMULARIO-->

			<div class="wrap-login100">
				<div class="login100-pic">
					<img id="logo" src="images/Logo.png" alt=""></br>
				</div>
				<div class="formulario">
					<form action="./functions/insertarlugar.php" method="POST" enctype="multipart/form-data">
						<span class="login100-form-title" style="padding-bottom: 2%;">
							Agregar Lugar
						</span>


						<p class="notaagregar">Recuerda: Este registro es inmodificable, para hacer algún cambio o corrección, elimina este registro y crea uno nuevo.</p>

						<textarea class="input100" cols="40" rows="5" name="Descripcion1" minlength="20" maxlength="110" placeholder="Escriba una breve descripción" style=" height: 70px;  font-size: 12px; margin-bottom:8px" required></textarea>


						<textarea class="input100" cols="40" rows="5" name="Descripcion2" minlength="80" maxlength="291" placeholder="Escriba la descripción completa" style="   height: auto; font-size: 12px; margin-bottom:8px" required></textarea>


						<div class="column1" style="margin-bottom: 2%;">



							<div for="txtSoloLetras" class="wrap-input10 validate-input" data-validate="Ingresa un nombre válido">
								<input class="input100" type="text" name="Nombre" placeholder="Nombre" minlength="4" maxlength="30" required pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+">
								<span class="focus-input100"></span>
								<span class="symbol-input100">
									<i class="fa-solid fa fa-air-condition" aria-hidden="true"></i>
								</span>




							</div>


							<div class="wrap-input100 validate-input" data-validate="Ingresa un Apellido válido">
								<input class="input100" type="number" name="Costo" placeholder="Costo" min="1000" max="" required pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+">
								<span class="focus-input100"></span>
								<span class="symbol-input100">
									<i aria-hidden="true"></i>
								</span>
							</div>

						</div>






						<div class="column1" style="margin-bottom: 2%;">



							<div for="txtSoloLetras" class="wrap-input10 validate-input" data-validate="Ingresa un nombre válido">
								<input class="input100" type="text" name="Ubicacion" placeholder="Ubicacion" minlength="10" required>
								<span class="focus-input100"></span>
								<span class="symbol-input100">
									<i class="fa-solid fa fa-air-condition" aria-hidden="true"></i>
								</span>





							</div>


							<select class="input100" name="Nom_Ciudad" required>
								<option disabled selected value="">Ciudad</option>
								<option value="1">Cali</option>
								<option value="2">El Cerrito</option>
								<option value="3">Rozo</option>
								<option value="4">Palmira</option>
								<option value="5">Buga</option>
								<option value="6">Darien</option>
								<option value="7">Montenegro</option>
								<option value="8">Santa Elena</option>
								<option value="9">Pradera</option>




							</select>

						</div>

						<div for="txtSoloLetras" class="wrap-input10 validate-input" data-validate="Ingresa un numero de cuenta válido">
							<input class="input100" type="text" name="N_Cuenta" placeholder="Numero de cuenta" required pattern="[0-9]{10}" onkeypress="return onlyNumberKey(event)">
							<span class="focus-input100"></span>
							<span class="symbol-input100">
								<i class="fa-solid fa fa-air-condition" aria-hidden="true"></i>
							</span>

						</div>

						<p class="notaagregar">Nota: Insertar solo imágenes de formato png y del menor tamaño posible.</p>

						<div for="txtSoloLetras" class="wrap-input10 validate-input" data-validate="Ingresa un documento válido">
							<input class="input100" type="file" name="Img1" required>
							<span class="focus-input100"></span>
							<span class="symbol-input100">
								<i class="fa-solid fa fa-air-condition" aria-hidden="true"></i>
							</span>

						</div>
						<div for="txtSoloLetras" class="wrap-input10 validate-input" data-validate="Ingresa un documento válido" style="margin-top: 8px;">
							<input class="input100" type="file" name="Img2" required>
							<span class="focus-input100"></span>
							<span class="symbol-input100">
								<i class="fa-solid fa fa-air-condition" aria-hidden="true"></i>
							</span>

						</div>
						<div for="txtSoloLetras" class="wrap-input10 validate-input" data-validate="Ingresa un documento válido" style="margin-top: 8px;">
							<input class="input100" type="file" name="Img3" required>
							<span class="focus-input100"></span>
							<span class="symbol-input100">
								<i class="fa-solid fa fa-air-condition" aria-hidden="true"></i>
							</span>




						</div><br>









						<center>
							<button type="submit" class="btn btn-primary">Registrarlo</button>
							<a href="./Adminlugares.php" class="btn btn-danger">Cancelar</a>
						</center>
					</form>









				</div>


			</div>

		</div>
		<div>
			<div>
				<div>

					<!--Fin insert-->
					</center>


				</div>




			</div>


			<script>
    function onlyNumberKey(evt) {
          
        // Only ASCII character in that range allowed
        var ASCIICode = (evt.which) ? evt.which : evt.keyCode
        if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
            return false;
        return true;
    }
</script>
<script>
    function detailssubmit() {
        alert("Your details were Submitted");
    }
</script>



</body>

</html>