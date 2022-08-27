<?php
session_start();
if(!isset($_SESSION['Documento'])){
    echo "<script>alert('Debes iniciar sesion');location='login.php';</script>";
    session_destroy();
    die();
	
}

// print_r($_SESSION);

include("model/conexion.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BorondoApp</title>
    <!-- Estilos CSS -->
    <link rel="stylesheet" href="./css/Card-Alojamiento.css">
    <!-- Fonts Google - Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
</head>
<?php 

include 'templates/navbar.php';

?>

<body id="particleWrapper">

    <div id="particles-js" id="particle-title">
        <Section  class="padre">

            <!-- Carta 1 -->
            
            <div class="card">
                <div class="imgX">
                    <img src="./images/alto-prado.jpg" alt="">
                </div>
                <div class="content">
                    <h2 class="card-titulo">Hotel Alto Prado</h2>
                    <p class="card-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis dicta est soluta, saepe sequi
                        maxime? Eos corrupti autem quo omnis, nesciunt voluptatum sapiente tenetur, nemo impedit
                        officiis, rem vitae aliquam!</p>
                        <a href="" class="boton">Ver más</a>
                </div>
            </div>
    
             <!-- Carta 2 -->
            
             <div class="card">
                <div class="imgX">
                    <img src="./images/boutique.jpg" alt="">
                </div>
                <div class="content">
                    <h2 class="card-titulo">La Mercedes Boutique</h2>
                    <p class="card-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis dicta est soluta, saepe sequi
                        maxime? Eos corrupti autem quo omnis, nesciunt voluptatum sapiente tenetur, nemo impedit
                        officiis, rem vitae aliquam!</p>
                        <a href="" class="boton">Ver más</a>
                </div>
            </div>
    
             <!-- Carta 3 -->
            
             <div class="card">
                <div class="imgX">
                    <img src="./images/caño-nevera.jpg" alt="">
                </div>
                <div class="content">
                    <h2 class="card-titulo">Hotel Caño Nevera</h2>
                    <p class="card-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis dicta est soluta, saepe sequi
                        maxime? Eos corrupti autem quo omnis, nesciunt voluptatum sapiente tenetur, nemo impedit
                        officiis, rem vitae aliquam!</p>
                        <a href="" class="boton">Ver más</a>
                </div>
            </div>
    
            <!-- Carta 4 -->
            
            <div class="card">
                <div class="imgX">
                    <img src="./images/cotinga-spa.jpg" alt="">
                </div>
                <div class="content">
                    <h2 class="card-titulo">Cotinga Hotel Spa</h2>
                    <p class="card-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis dicta est soluta, saepe sequi
                        maxime? Eos corrupti autem quo omnis, nesciunt voluptatum sapiente tenetur, nemo impedit
                        officiis, rem vitae aliquam!</p>
                        <a href="" class="boton">Ver más</a>
                </div>
            </div>
    
             <!-- Carta 5 -->
            
             <div class="card">
                <div class="imgX">
                    <img src="./images/lodge-paraiso.jpg" alt="">
                </div>
                <div class="content">
                    <h2 class="card-titulo">Lodge Paraiso Verde</h2>
                    <p class="card-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis dicta est soluta, saepe sequi
                        maxime? Eos corrupti autem quo omnis, nesciunt voluptatum sapiente tenetur, nemo impedit
                        officiis, rem vitae aliquam!</p>
                        <a href="" class="boton">Ver más</a>
                </div>
            </div>
    
             <!-- Carta 6 -->
            
             <div class="card">
                <div class="imgX">
                    <img src="./images/hotel-fuente.jpg" alt="">
                </div>
                <div class="content">
                    <h2 class="card-titulo">Hotel la Fuente</h2>
                    <p class="card-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis dicta est soluta, saepe sequi
                        maxime? Eos corrupti autem quo omnis, nesciunt voluptatum sapiente tenetur, nemo impedit
                        officiis, rem vitae aliquam!</p>
                        <a href="" class="boton">Ver más</a>
                </div>
            </div>
        </Section>
    
    </div>
    <?php 

include './templates/footer.php';

?>
</body>

</html>