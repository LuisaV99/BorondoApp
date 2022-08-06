<?php
session_start();
if (!isset($_SESSION['Nom_Usuario'])) {
    echo "<script>alert('Debes iniciar sesion');location='login.php';</script>";
    session_destroy();
    die();
}
$Nom_Usuario = $_SESSION['Nom_Usuario'];
$users = "SELECT * FROM usuarios WHERE Nom_Usuario='$Nom_Usuario'";
// print_r($_SESSION);

$var = "SELECT * FROM tipo_pqrs";


include("model/conexion.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Estilos CSS -->
    <link rel="stylesheet" href="./css/Card-Alojamiento.css">
    <!-- Fonts Google - Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/d439e53c21.js" crossorigin="anonymous"></script>

    <title>Cards-Alojamiento</title>
</head>
<?php

include 'templates/navbar.php';

?>

<body>

    <div class="busqueda">


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


    </div>
    <section class="container-padre">
        <!-- Carta 1 -->
        <article class="container-card">
            <div class="container-img">
                <img src="./images/alto-prado.jpg" alt="">
            </div>
            <div class="container-content">
                <p class="titulo">Hotel Alto Prado</p>
                <p class="container-information">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis dicta est soluta, saepe sequi
                    maxime? Eos corrupti autem quo omnis, nesciunt voluptatum sapiente tenetur, nemo impedit
                    officiis, rem vitae aliquam!</p>
                <!-- Boton -->
                <a href="#" class="buttom">Ver mas</a>
            </div>
        </article>

        <!-- Carta 2 -->
        <article class="container-card">
            <div class="container-img">
                <img src="./images/boutique.jpg" alt="">
            </div>
            <div class="container-content">
                <p class="titulo">Las Mercedes Boutique</p>
                <p class="container-information">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis dicta est soluta, saepe sequi
                    maxime? Eos corrupti autem quo omnis, nesciunt voluptatum sapiente tenetur, nemo impedit
                    officiis, rem vitae aliquam!</p>
                <!-- Boton -->
                <a href="#" class="buttom">Ver mas</a>
            </div>
        </article>

        <!-- Carta 3 -->

        <article class="container-card">
            <div class="container-img">
                <img src="./images/caño-nevera.jpg" alt="">
            </div>
            <div class="container-content">
                <p class="titulo">Hotel Caño Nevera</p>
                <p class="container-information">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis dicta est soluta, saepe sequi
                    maxime? Eos corrupti autem quo omnis, nesciunt voluptatum sapiente tenetur, nemo impedit
                    officiis, rem vitae aliquam!</p>
                <!-- Boton -->
                <a href="#" class="buttom">Ver mas</a>
            </div>
        </article>

        <!-- Carta 4 -->

        <article class="container-card">
            <div class="container-img">
                <img src="./images/cotinga-spa.jpg" alt="">
            </div>
            <div class="container-content">
                <p class="titulo">Cotinga Hotel Spa</p>
                <p class="container-information">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis dicta est soluta, saepe sequi
                    maxime? Eos corrupti autem quo omnis, nesciunt voluptatum sapiente tenetur, nemo impedit
                    officiis, rem vitae aliquam!</p>
                <!-- Boton -->
                <a href="#" class="buttom">Ver mas</a>
            </div>
        </article>
        <!-- Carta 5 -->

        <article class="container-card">
            <div class="container-img">
                <img src="./images/lodge-paraiso.jpg" alt="">
            </div>
            <div class="container-content">
                <p class="titulo">Lodge Paraiso verde</p>
                <p class="container-information">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis dicta est soluta, saepe sequi
                    maxime? Eos corrupti autem quo omnis, nesciunt voluptatum sapiente tenetur, nemo impedit
                    officiis, rem vitae aliquam!</p>
                <!-- Boton -->
                <a href="#" class="buttom">Ver mas</a>
            </div>
        </article>
        <!-- Carta 6 -->
        <article class="container-card">
            <div class="container-img">
                <img src="./images/hotel.jpeg" alt="">
            </div>
            <div class="container-content">
                <p class="titulo">Hotel la Fuente</p>
                <p class="container-information">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis dicta est soluta, saepe sequi
                    maxime? Eos corrupti autem quo omnis, nesciunt voluptatum sapiente tenetur, nemo impedit
                    officiis, rem vitae aliquam!</p>
                <!-- Boton -->
                <a href="#" class="buttom">Ver mas</a>
            </div>
        </article>
    </section>
    <footer>
        <!-- contenedor del footer -->
        <div class="container-parth">
            <!-- bloque #1 -->
            <div class="container-block">
                <img class="logo-boro" src="./images/logo.png" alt="Logo" />
                <p class="lema">¡A un click de tu destino!</p>
                <p class="copy">Todos los derechos reservados © 2022 Copyright</p>
            </div>

            <!-- Bloque #2 -->
            <div class="container-block">
                <p>PQRS</p>
                <form action="./templates/pqrs.php" method="POST">
                    <input type="email" name="email" placeholder="Correo Electrónico" required />
                    <div class="column-1">
                        <input type="text" id="nombres" name="nombre" placeholder="Nombre Completo" required />
                        <input class="input-down" type="number" name="telefono" placeholder="Teléfono" required />
                        <select class="lista" name="tipo">
                            <?php foreach ($conx->query("$var") as $values) { ?>
                                <option value="<?php echo $values['ID_Tipo'] ?>"><?php echo $values['Nombre_Tipo'] ?></option>
                            <?php } ?>
                        </select>
                        <input class="input-down" type="text" name="asunto" placeholder="Asunto" />
                    </div>
                    <textarea cols="30" rows="10" name="descripcion" placeholder="Escribe aquí tu PQRS"></textarea>
                    <a href=""><button class="send" type="submit">Enviar</button></a>
                </form>
            </div>
            <!-- Bloque #3 -->
            <div class="container-block">
                <div class="container-list">
                    <div class="list-nav-1">
                        <span><a href="./index.php">Página de Inicio</a></span>
                        <span><a href="./Cards-Lugares.php">Lugares</a></span>
                        <span><a href="./Card-Alojamiento.php">Alojamientos</a></span>
                    </div>
                    <div class="list-nav-1">
                        <span><a href="./Card-Transporte.php">Transporte</a></span>
                        <span><a href="./Registro.php">Registrarse</a></span>
                        <span><a href="./Login.php">Inicio de sesión</a></span>
                    </div>
                </div>
                <p class="follow">Siguenos en redes sociales</p>
                <div class="social-icons">
                    <a href=""><span class="insta"></span></a>
                    <a href=""><span class="facebook"></span></a>
                    <a href=""><span class="twitter"></span></a>
                </div>
                <p>@BorondoApp.Official</p>
                <p class="allright">Todos los derechos reservados © 2022 Copyright</p>
            </div>
        </div>
    </footer>



</body>

</html>