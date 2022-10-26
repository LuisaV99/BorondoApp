<?php
session_start();
if(!isset($_SESSION['Documento'])){
    echo "<script>alert('Debes iniciar sesion');location='login.php';</script>";
    session_destroy();
    die();
	
}
$document=$_SESSION['Documento'];

$id = $_GET ['id'];

$espepqrs="SELECT * FROM pqrs WHERE ID_Pqrs=$id";


include("model/conexion.php");

$document=$_SESSION['Documento'];

$rol="SELECT * FROM usuarios WHERE Documento='$document' AND ID_Rol='2'";
$result= mysqli_query($conx,$rol);

if(mysqli_num_rows($result) == 1) {
  
}else{
  echo "<script>alert('No tienes rol de administrador');location='index.php';</script>";
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- FONTS GOOGLE -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@500;600&display=swap" rel="stylesheet" />
  <!-- CSS STYLE -->
  <link rel="stylesheet" href="./css/AdminAdmin.css"/>
  <link rel="stylesheet" href="./css/registroserv.css"/>

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
					<form action="./functions/pro-contestarpqrs.php" method="POST" enctype="multipart/form-data">

          <?php
                            $show = mysqli_query($conx, $espepqrs);
                            while ($row = mysqli_fetch_assoc($show)) { ?>


          <input class="inputsu" type="text" name="ID_Pqrs"  value="<?php echo $row["ID_Pqrs"]; ?>">

          <input class="inputsu" type="text" name="Fecha_pqrs"  value="<?php echo $row["Fecha_pqrs"]; ?>">

          
						<span class="login100-form-title" style="padding-bottom: 2%;">
							Contestar pqrs 
						</span>

					
						<p class="notaagregar">Recuerda: Este registro es inmodificable, por ende no podrá ser editado una vez se envie :3</p>



				<textarea class="input100" cols="40" rows="5" name="Respuesta" placeholder="Escriba la respuesta completa" style="   height: auto; font-size: 12px; margin-bottom:8px" minlength="40" maxlength="350"></textarea>
							 

					
	<div class="botonescontestar">
				<button type="submit" class="btn btn-primary" style="margin: 1px;">Registrarlo</button>
					<a href="./Adminpqrs.php" class="btn btn-danger" style="margin: 1px;">Cancelar</a>
  </div>

          <?php } ?>
					
					</form>
					<div class="botonescp">
					</div>
				</div>

				
			</div>
	 
		</div>
	
	

    

	</div>

</body>

</html>