<?php

include("model/conexion.php");

session_start();
if(!isset($_SESSION['Documento'])){

	$document=0;

}else{
	$document=$_SESSION['Documento'];

$inactiv="SELECT * FROM usuarios WHERE Documento='$document' AND ID_Estado_Usuario='2'";
$inactivresult= mysqli_query($conx,$inactiv);

if(mysqli_num_rows($inactivresult) == 1) {
	echo "<script>alert('Tu cuenta se encuentra deshabilitada');location='./functions/cerrar.php';</script>";
}else{
  
}
}








?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>BorondoApp</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	

    <link rel="icon" type="image/png" href="./images/logo2.png" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	
	<script src="https://kit.fontawesome.com/01f3fdcd28.js" crossorigin="anonymous"></script>	
	
<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>



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
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>

<div class="contenedor_nav">

<?php 

include 'templates/navbar.php';

?>

</div>

<a name="arriba" id="arriba"></a>



	<div class="slider">
			<ul>
				<li>
  <img src="images/VDC.jpg" alt="" class="imgslider">
 </li>
				<li>
  <img src="images/basilica.jpg" alt="">
</li>
<li>
	<img src="images/SRC.jpg" alt="">
  </li>
  <li>
	<img src="images/lago1.jpg" alt="">
   </li>
				  <li>
	<img src="images/alcala.jpg" alt="">
  </li>
  <li>
	  <img src="images/CW.jpg" alt="">
	</li>
	

			</ul>
		</div>
	</br>
	
	
		  <li class="btn2">
			<div class="block3"><a class="botones" href="Cards-LugaresP.php"> <img src="images/Reserva.png" class="imgbt" alt="" width="30px">Reserva</a>
				<hr style="height: 1px;">
				<p class="explain"><strong> Reserva</strong> a tu lugar favorito.</p></div>

		  <div class="block3"><a  class="botones" href="#conocer">  <img src="images/Conoce.png" class="imgbt" alt="" width="35px">Conoce</a>
			<hr style="height: 1px">
			<p class="explain"><strong>Conoce </strong>más sobre BorondoAPP.</p></div>

		  <div class="block3"><a class="botones" href="#footer">  <img src="images/Consulta.png" class="imgbt" alt="" width="30px" >Contacta</a>
			<hr style="height: 1px">
			<p class="explain"><strong>Contacta </strong>con nosotros.</p></div></li>

			<a name="conocer" id="conocer"></a>

			<br>
			
			<div class="bloque2">
			
				<br>
			<center><h1 class="titulobloque21"><strong> Descubramos juntos</strong></h1></center>
			<br>

			<Section class="kemway" id="conoce">

				
			<div class="bl32">
	<h1 class="text2bl3">Borondo App</h1>
	<div class="bl321">
		
		<div class="textbl3">BorondoApp es la iniciativa de turismo donde se le dará el protagonismo que merece el departamento de El Valle Del Cacuca y sus alrededores, es hora de ver, disfrutar, valorar y enriquecer nuestro gran Valle y posicionarnos como potencia turística del país.</div>
	<div class="text2bl32"> Somos BorondoApp, el turismo Vallecaucano en su máxima expresión, sin más que agregar... ¿Un borondo o miedo? </div>
	</div>
	<div class="bl322">
		<p class="reser"><a href="" class="check">✔</a>Mejores atractivos del Valle</p>
		<p class="reser"><a href="" class="check">✔</a>Diversas establecimientos</p>
		<p class="reser"><a href="" class="check">✔</a>Confiabilidad y contacto</p>
		<p class="reser"><a href="" class="check">✔</a>Diversidad cultural</p>
	</div>

</div>
				

<div class="bl33">
				<div class="containerd">
					<div class="card">
						<div class="imgBX">
							<img src="images/tardes-2020.jpg" class="imgtar">
							<center><h5 class="h3t"><strong>Lugares</strong></h5></center>
						</div>
						<div class="content">
							
							<p class="card_text">¿Quieres conocer lugares increibles, hermosas vistas, zonas enriquecidas de cultura y diversion? El Valle del Cauca los tiene, mira aquí todos los lugares que posee este incomparable departamento y sus alrededores. <br>Att: BorondoApp</p>
							<center><div class="boton">
								<a href="Cards-LugaresP.php" class="botona">Ver más</a>
							</div></center>
						</div>
					</div>
				</div>
				</div>


			</Section>
			<div class="subir">
				<a href="#arriba"><img src="./images/subir.png" alt="" width="55px"></a>
			</div>
		</div> 


  <?php 

include './templates/footer.php';

?>
	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
