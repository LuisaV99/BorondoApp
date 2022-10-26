<?php
session_start();
if (!isset($_SESSION['Documento'])) {
  echo "<script>alert('Debes iniciar sesion');location='login.php';</script>";
  session_destroy();
  die();
}
$document = $_SESSION['Documento'];
$lugares="SELECT * FROM lugares";


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
    <link rel="stylesheet" href="./css/Card-LugaresP.css">
    <script src="https://kit.fontawesome.com/d439e53c21.js" crossorigin="anonymous"></script>

    <title>Cards-Lugares</title>
</head>

<body>
    <?php

    include 'templates/Navbar.php';

    ?>
    <br><br><br>
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


    <div class="contentitulo"><h1 class="TituloCard">Bienvenido, quieres ver los lugares...</h1></div>
    <section class="container-padre">


        <!-- Carta 1 -->
        <article class="container-card">
            <div class="container-img">
                <img height="50px" src="./images/cafe-2020.jpg">
            </div>
            <div class="container-content">
                <p class="titulo">Mas Populares</p>
                <p class="container-information">Ver los lugares mas visitados por los demas usuarios</p>
                <!-- Boton -->
                <a href="./Cards-Lugares.php?bus=1" class="buttom">IR</a>
            </div>
        </article>

        <!-- Carta 2 -->
        <article class="container-card">
            <div class="container-img">
                <img height="50px" src="./images/baratos.jpg">
            </div>
            <div class="container-content">
                <p class="titulo">Mas Baratos</p>
                <p class="container-information">Ver los lugares mas economicos para que se ajusten a tu presupuesto ideal</p>
                <!-- Boton -->
                <a href="./Cards-Lugares.php?bus=2" class="buttom">IR</a>
            </div>
        </article>

        <!-- Card 3 -->
        <article class="container-card">
            <div class="container-img">
                <img height="50px" src="./images/tardes-2019.jpg">
            </div>
            <div class="container-content">
                <p class="titulo">Ver Todos</p>
                <p class="container-information">Ver todos los lugares disponibles para encontrar el Borondo perfecto</p>
                <!-- Boton -->
                <a href="./Cards-Lugares.php?bus=3" class="buttom">IR</a>
            </div>
        </article>
    </section>
    <?php
    include './templates/footer.php'
    ?>

</body>

</html>