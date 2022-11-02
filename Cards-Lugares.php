<?php
session_start();
if (!isset($_SESSION['Documento'])) {
  echo "<script>alert('Debes iniciar sesión');location='login.php';</script>";
  session_destroy();
  die();
}
$document = $_SESSION['Documento'];

$bus=$_GET['bus'];

if ($bus == "1") {

        $lugares="SELECT * FROM `lugares` INNER JOIN ciudades ON lugares.ID_Ciudad=ciudades.ID_Ciudad WHERE lugares.Num_Borondo > '1' ORDER BY Num_Borondo DESC;";

} else {
    if ($bus == "2") {
        
        $lugares="SELECT * FROM `lugares` INNER JOIN ciudades ON lugares.ID_Ciudad=ciudades.ID_Ciudad  ORDER BY Costo ASC;";

    } else {

        $lugares="SELECT * FROM `lugares` INNER JOIN ciudades ON lugares.ID_Ciudad=ciudades.ID_Ciudad ";

    }
}

include("model/conexion.php");

$inactiv="SELECT * FROM usuarios WHERE Documento='$document' AND ID_Estado_Usuario='2'";
$inactivresult= mysqli_query($conx,$inactiv);

if(mysqli_num_rows($inactivresult) == 1) {
	echo "<script>alert('Tu cuenta se encuentra deshabilitada');location='./functions/cerrar.php';</script>";
}else{
  
}

$rol = "SELECT * FROM usuarios WHERE Documento='$document' AND ID_Rol='1'";
$result = mysqli_query($conx, $rol);

if (mysqli_num_rows($result) == 1) {
} else {
  echo "<script>alert('No tienes permisos de entrar aqui');location='index.php';</script>";
}




?>
<!DOCTYPE html>
<html lang="en">

<head>
    
<link rel="icon" type="image/png" href="./images/logo2.png" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google fonts - Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    <!-- Style Sheet -->
    <link rel="stylesheet" href="./css/Card-Lugares.css">
    <script src="https://kit.fontawesome.com/d439e53c21.js" crossorigin="anonymous"></script>

    <title>Cards-Lugares</title>
</head>

<body>
    <?php

    include 'templates/Navbar.php';

    ?>

<div class="botones"><a href="./Cards-LugaresP.php" class="btn btn-danger">Regresar</a></div>
    
   

    <section class="container-padre">

    <?php
			 $show=mysqli_query($conx,$lugares);
        while($row=mysqli_fetch_assoc($show)) { ?>
        <!-- Carta 1 -->
        <article class="container-card">
            <div class="container-img">
                <img height="50px" src="data:image/jpg;base64, <?php echo base64_encode($row['Img1'])?>">
            </div>
            <div class="container-content">
                <p class="titulo"><?php echo $row['Nombre'] ?></p>
                <p class="titulos">(<?php echo $row['Nom_Ciudad'] ?>)</p>
                <p class="container-information"><?php echo $row['Descripcion1'] ?></p>
                <p class="container-information">Costo:$<?php echo $row['Costo'] ?></p>
                
                
               

                <!-- Boton -->

                <div class="moreinfo">

                <a href="./Reservar.php?id=<?php echo $row['ID_Lugar']; ?>" class="buttom">Detalles</a>

                <div class="submoreinfo">

                <p class="container-information">Reservado:</p> <a aria-disabled="" class="titulos"> <strong><?php echo $row['Num_Borondo']; ?></strong></a>


                </div>

                </div>
                
            </div>
        </article>
<?php } ?>
    </section>
    <?php
    include './templates/footer.php'
    ?>

</body>

</html>