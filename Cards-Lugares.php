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
    <!-- Google fonts - Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    <!-- Style Sheet -->
    <link rel="stylesheet" href="./css/Card-Lugares.css">
    <title>Cards-Lugares</title>
</head>
<body>
<?php 

include 'templates/Navbar.php';

?>
    <section class="container-padre">
            <!-- Carta 1 -->
            <article class="container-card">
                <div class="container-img">
                    <img src="./images/Sierra-Macarena.jpg" alt="">
                </div>
                <div class="container-content">
                    <p class="titulo">Sierra de la Macarena</p>
                    <p class="container-information">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ex facere obcaecati corporis. Delectus nesciunt in enim maiores reiciendis, expedita, ea quia, ipsam voluptatibus praesentium optio. Consequuntur harum veniam nihil sed.</p>
                    <!-- Boton -->
                    <a href="#" class="buttom">Ver mas</a>
                </div>
            </article>

             <!-- Carta 2 -->
             <article class="container-card">
                <div class="container-img">
                    <img src="./images/chorros.jpg" alt="">
                </div>
                <div class="container-content">
                    <p class="titulo">Los Chorros</p>
                    <p class="container-information">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ex facere obcaecati corporis. Delectus nesciunt in enim maiores reiciendis, expedita, ea quia, ipsam voluptatibus praesentium optio. Consequuntur harum veniam nihil sed.</p>
                    <!-- Boton -->
                    <a href="#" class="buttom">Ver mas</a>
                </div>
            </article>

             <!-- Carta 3 -->
             <article class="container-card">
                <div class="container-img">
                    <img src="./images/coconuco.jpg" alt="">
                </div>
                <div class="container-content">
                    <p class="titulo">Termales del Coconuco</p>
                    <p class="container-information">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ex facere obcaecati corporis. Delectus nesciunt in enim maiores reiciendis, expedita, ea quia, ipsam voluptatibus praesentium optio. Consequuntur harum veniam nihil sed.</p>
                    <!-- Boton -->
                    <a href="#" class="buttom">Ver mas</a>
                </div>
            </article>

             <!-- Carta 4 -->
             <article class="container-card">
                <div class="container-img">
                    <img src="./images/hacienda-maria.jpg" alt="">
                </div>
                <div class="container-content">
                    <p class="titulo">Hacienda la Maria</p>
                    <p class="container-information">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ex facere obcaecati corporis. Delectus nesciunt in enim maiores reiciendis, expedita, ea quia, ipsam voluptatibus praesentium optio. Consequuntur harum veniam nihil sed.</p>
                    <!-- Boton -->
                    <a href="#" class="buttom">Ver mas</a>
                </div>
            </article>

             <!-- Carta 5 -->
             <article class="container-card">
                <div class="container-img">
                    <img src="./images/nirvana.jpg" alt="">
                </div>
                <div class="container-content">
                    <p class="titulo">Reserva Nirvana</p>
                    <p class="container-information">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ex facere obcaecati corporis. Delectus nesciunt in enim maiores reiciendis, expedita, ea quia, ipsam voluptatibus praesentium optio. Consequuntur harum veniam nihil sed.</p>
                    <!-- Boton -->
                    <a href="#" class="buttom">Ver mas</a>
                </div>
            </article>

             <!-- Carta 6 -->
             <article class="container-card">
                <div class="container-img">
                    <img src="./images/termales-santa-rosa.jpg" alt="">
                </div>
                <div class="container-content">
                    <p class="titulo">Termales de Santa Rosa</p>
                    <p class="container-information">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ex facere obcaecati corporis. Delectus nesciunt in enim maiores reiciendis, expedita, ea quia, ipsam voluptatibus praesentium optio. Consequuntur harum veniam nihil sed.</p>
                    <!-- Boton -->
                    <a href="#" class="buttom">Ver mas</a>
                </div>
            </article>
    </section>
</body>
</html>