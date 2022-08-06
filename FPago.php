<?php
session_start();
if(!isset($_SESSION['Nom_Usuario'])){
    echo "<script>alert('Debes iniciar sesion');location='login.php';</script>";
    session_destroy();
    die();
	
}
$Nom_Usuario=$_SESSION['Nom_Usuario'];
$users="SELECT * FROM usuarios WHERE Nom_Usuario='$Nom_Usuario'";
// print_r($_SESSION);

include("model/conexion.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/FPago.css">
    <link rel="icon" type="image/png" href="images/logo2.png" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;800&display=swap" rel="stylesheet">
    <title>Formas de pago</title>
</head>

<body>
<?php 

include 'templates/Navbar.php';

?>
    <!--Formulario-->
    <div class="container">
        <section>
            <div class="borondo">
                <img src="images/Logo.png" alt="logo" width="280px">
            </div>
            <div class="formulario">
                <p class="title">FORMAS DE PAGO</p>


                <label class="text">Nombre completo</label>
                <input type="text" class="form_desc" name="user" style="background: #e6e6e6; width: 80%;">




                <div class="select-card">
                   <div class="boton-radio">
                    <input class="btn-radio form_desc" type="radio" name="flexRadioDefault" id="Radio1">
                    <label class=" text" for="Radio1">
                        CRÉDITO
                    </label>
                   </div>
                   <div class="boton-radio btn-debito">
                    <input class="btn-radio form_desc" type="radio" name="flexRadioDefault" id="Radio1">
                    <label class=" text" for="Radio1">
                        DÉBITO
                    </label>
                   </div>
                </div>

                <label class="text">Número de tarjeta</label>
                <input type="text" class="form_desc" name="user" style="background: #e6e6e6; width: 80%;" placeholder="123-5678-XXXX">
                <label class="text">CVV</label>
                <input type="text" class="form_desc" name="user" style="background: #e6e6e6; width: 80%;" placeholder="123">
                <label class="text">Fecha de caducidad</label>
                <div class="caducidad" style="padding-bottom:10px">
                    <input list="Meses" class="form_desc"  style="background: #e6e6e6;width: 95px;" placeholder="Mes">
                    <datalist id="Meses">
                        <option value="1">
                        <option value="2">
                        <option value="3">
                        <option value="4">
                        <option value="5">
                        <option value="6">
                        <option value="7">
                        <option value="8">
                        <option value="9">
                        <option value="10">
                        <option value="11">
                        <option value="12">
                    </datalist>

                    <input list="Año" class="form_desc"  style="background: #e6e6e6;width: 95px; width: 30%; " placeholder="Año">
                    <datalist id="Año">
                        <option value="2022">
                        <option value="2023">
                        <option value="2023">
                        <option value="2024">
                        <option value="2025">
                        <option value="2026">
                        <option value="2027">
                        <option value="2028">
                        <option value="2029">
                        <o class="text"ption value="2030">
                        <option value="2031">
                        <option value="2032">
                    </datalist>
                </div>
                <button class="button">ENVIAR</button>
            </div>
        </section>
    </div>

    <script src="popup.js"></script>


</body>

</html>