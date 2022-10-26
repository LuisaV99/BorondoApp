<?php
session_start();
if (!isset($_SESSION['Documento'])) {
  echo "<script>alert('Debes iniciar sesion');location='login.php';</script>";
  session_destroy();
  die();
}
$document = $_SESSION['Documento'];

$bus=$_GET['bus'];

if ($bus == "1") {

        $lugares="SELECT * FROM `lugares`   ORDER BY  Num_Borondo DESC;";

} else {
    if ($bus == "2") {
        
        $lugares="SELECT * FROM `lugares` ORDER BY Costo ASC;";

    } else {

        $lugares="SELECT * FROM `lugares`";

    }
}

include("model/conexion.php");

$inactiv="SELECT * FROM usuarios WHERE Documento='$document' AND ID_Estado_Usuario='2'";
$inactivresult= mysqli_query($conx,$inactiv);

if(mysqli_num_rows($inactivresult) == 1) {
	echo "<script>alert('Tu cuenta se encuentra deshabilitada');location='./functions/cerrar.php';</script>";
}else{
  
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
    
    <!-- <div class="busqueda">


        <input class="busquedac" type="text" id="nombreC" name="nombreC" placeholder="Nombre">

        <div class="consulta">
            <h5 class="titlebus">Visitados</h5>
            <div style="width: 20px; margin-left: 6px;">
                <div style="height: 15px;"><a href=""><i class="fa-solid fa-2x fa-caret-up"></i></a></div>
                <div style="height: 29px;"><a href=""><i class="fa-solid fa-2x fa-caret-down"></i></a></div>
            </div>
        </div>

        <div class="consulta">
            <h5 class="titlebus">Puntuación</h5>
            <div style="width: 20px; margin-left: 6px;">
                <div style="height: 15px;"><a href=""><i class="fa-solid fa-2x fa-caret-up"></i></a></div>
                <div style="height: 29px;"><a href=""><i class="fa-solid fa-2x fa-caret-down"></i></a></div>
            </div>
        </div>

        <div class="consulta">
            <h5 class="titlebus">Precio</h5>
            <div style="width: 20px; margin-left: 6px;">
                <div style="height: 15px;"><a href=""><i class="fa-solid fa-2x fa-caret-up"></i></a></div>
                <div style="height: 29px;"><a href=""><i class="fa-solid fa-2x fa-caret-down"></i></a></div>
            </div>
        </div>

        <div class="consulta">
            <h5 class="titlebus">Disponilidad</h5>
            <div style="width: 20px; margin-left: 6px;">
                <div style="height: 15px;"><a href=""><i class="fa-solid fa-2x fa-caret-up"></i></a></div>
                <div style="height: 29px;"><a href=""><i class="fa-solid fa-2x fa-caret-down"></i></a></div>
            </div>
        </div>


    </div> -->


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
                <p class="container-information"><?php echo $row['Descripcion1'] ?></p>
                <p class="container-information">Costo:$<?php echo $row['Costo'] ?></p>
                <!-- Boton -->
                <a href="./Reservar.php?id=<?php echo $row['ID_Lugar']; ?>" class="buttom">Detalles</a>
            </div>
        </article>
<?php } ?>
    </section>
    <?php
    include './templates/footer.php'
    ?>

</body>

</html>