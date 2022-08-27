<?php

session_start();
if(!isset($_SESSION['Documento'])){
    echo "<script>alert('Debes iniciar sesion');location='login.php';</script>";
    session_destroy();
    die();
	
}
// $Nom_Usuario=$_SESSION['Nom_Usuario'];
// $users="SELECT * FROM usuarios WHERE Nom_Usuario='$Nom_Usuario'";
// print_r($_SESSION);

include("model/conexion.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transporte</title>
    <!-- Estilos CSS -->
    <link rel="stylesheet" href="./css/Card-Transp.css">
    <!-- Fonts Google - Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/d439e53c21.js" crossorigin="anonymous"></script>
</head>

<body>
<?php 

include 'templates/Navbar.php';

?>

<div class="busqueda">


<input type="text" id="nombreC" name="nombreC" placeholder="Nombre" >

 <div class="consulta">
    <h5 class="titlebus">Visitados</h5>
    <div style="width: 20px; margin-left: 6px;">
        <div style="height: 15px;" ><a href=""><i class="fa-solid fa-2x fa-caret-up"></i></a></div>
        <div style="height: 29px;"><a href=""><i class="fa-solid fa-2x fa-caret-down"></i></a></div>
    </div>
</div>

<div class="consulta">
    <h5 class="titlebus">Puntuación</h5>
    <div style="width: 20px; margin-left: 6px;">
        <div style="height: 15px;" ><a href=""><i class="fa-solid fa-2x fa-caret-up"></i></a></div>
        <div style="height: 29px;"><a href=""><i class="fa-solid fa-2x fa-caret-down"></i></a></div>
    </div>
</div>

<div class="consulta">
    <h5 class="titlebus">Precio</h5>
    <div style="width: 20px; margin-left: 6px;">
        <div style="height: 15px;" ><a href=""><i class="fa-solid fa-2x fa-caret-up"></i></a></div>
        <div style="height: 29px;"><a href=""><i class="fa-solid fa-2x fa-caret-down"></i></a></div>
    </div>
</div>

<div class="consulta">
    <h5 class="titlebus">Disponilidad</h5>
    <div style="width: 20px; margin-left: 6px;">
        <div style="height: 15px;" ><a href=""><i class="fa-solid fa-2x fa-caret-up"></i></a></div>
        <div style="height: 29px;"><a href=""><i class="fa-solid fa-2x fa-caret-down"></i></a></div>
    </div>
</div>


</div>

    <Section class="padre">

     <!-- Barra de busqueda-->

   

        <!-- Carta 1 -->
        
        <div class="card">
            <div class="imgX">
                <img src="./images/Chevrolet-Z21.jpg" alt="">
            </div>
            <div class="content">
                <h2 class="card-titulo">Chevrolet Z21</h2>
                <p class="card-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis dicta est soluta, saepe sequi
                    maxime? Eos corrupti autem quo omnis, nesciunt voluptatum sapiente tenetur, nemo impedit
                    officiis, rem vitae aliquam!</p>
                    <a href="" class="boton">Ver más</a>
            </div>
        </div>

         <!-- Carta 2 -->
        
         <div class="card">
            <div class="imgX">
                <img src="./images/Cupra-Ateca.jpg" alt="">
            </div>
            <div class="content">
                <h2 class="card-titulo">Cupra Ateca</h2>
                <p class="card-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis dicta est soluta, saepe sequi
                    maxime? Eos corrupti autem quo omnis, nesciunt voluptatum sapiente tenetur, nemo impedit
                    officiis, rem vitae aliquam!</p>
                    <a href="" class="boton">Ver más</a>
            </div>
        </div>

         <!-- Carta 3 -->
        
         <div class="card">
            <div class="imgX">
                <img src="./images/Hiunday-I30.jpg" alt="">
            </div>
            <div class="content">
                <h2 class="card-titulo">Hiunday I30</h2>
                <p class="card-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis dicta est soluta, saepe sequi
                    maxime? Eos corrupti autem quo omnis, nesciunt voluptatum sapiente tenetur, nemo impedit
                    officiis, rem vitae aliquam!</p>
                    <a href="" class="boton">Ver más</a>
            </div>
        </div>

        <!-- Carta 4 -->
        
        <div class="card">
            <div class="imgX">
                <img src="./images/Cupra-Leon.jpg" alt="">
            </div>
            <div class="content">
                <h2 class="card-titulo">Cupra-Leon</h2>
                <p class="card-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis dicta est soluta, saepe sequi
                    maxime? Eos corrupti autem quo omnis, nesciunt voluptatum sapiente tenetur, nemo impedit
                    officiis, rem vitae aliquam!</p>
                    <a href="" class="boton">Ver más</a>
            </div>
        </div>

         <!-- Carta 5 -->
        
         <div class="card">
            <div class="imgX">
                <img src="./images/Skoda-Combi.jpg" alt="">
            </div>
            <div class="content">
                <h2 class="card-titulo">Skoda Combi</h2>
                <p class="card-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis dicta est soluta, saepe sequi
                    maxime? Eos corrupti autem quo omnis, nesciunt voluptatum sapiente tenetur, nemo impedit
                    officiis, rem vitae aliquam!</p>
                    <a href="" class="boton">Ver más</a>
            </div>
        </div>

         <!-- Carta 6 -->
        
         <div class="card">
            <div class="imgX">
                <img src="./images/Toyota-Hilux.jpg" alt="">
            </div>
            <div class="content">
                <h2 class="card-titulo">Toyota-Hilux</h2>
                <p class="card-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis dicta est soluta, saepe sequi
                    maxime? Eos corrupti autem quo omnis, nesciunt voluptatum sapiente tenetur, nemo impedit
                    officiis, rem vitae aliquam!</p>
                    <a href="" class="boton">Ver más</a>
            </div>
        </div>
    </Section>

</body>

</html>