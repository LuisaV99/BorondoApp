<?php

session_start();
if (!isset($_SESSION['Documento'])) {
    echo "<script>alert('Debes iniciar sesión');location='login.php';</script>";
    session_destroy();
    die();
}
$document = $_SESSION['Documento'];
include("model/conexion.php");


$document = $_SESSION['Documento'];
$rol = "SELECT * FROM usuarios WHERE Documento='$document' AND ID_Rol='3'";
$result = mysqli_query($conx, $rol);

if (mysqli_num_rows($result) == 1) {
} else {
    echo "<script>alert('No tienes rol de administrador');location='index.php';</script>";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <link rel="icon" type="image/png" href="./images/logo2.png" />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- FONTS GOOGLE -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@500;600&display=swap" rel="stylesheet" />
    <!-- CSS STYLE -->
    <link rel="stylesheet" href="./css/BorondoMan.css" />
    <link rel="stylesheet" href="./css/registroserv.css" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="./css/responsive.dataTables.min.css">
    <title>BorondoMan </title>
</head>
<?php

include 'templates/navbar.php';

?>

<body>

    <div class="body">
        <br><br>

        <!-- CONTAINER ADMIN - IMG -->
        <div class="Administrador">



            <!--FORMULARIO-->

            <div class="wrap-login100">
                <div class="login100-pic">
                    <img id="logo" src="images/Logo.png" alt=""></br>
                </div>
                <div class="formulario">
                    <form action="./functions/insertarAdmin.php" method="POST" enctype="multipart/form-data">
                        <span class="login100-form-title" style="padding-bottom: 2%;">
                            Agregar Administradores
                        </span>
                        <div for="txtSoloLetras" class="wrap-input10 validate-input" data-validate="Ingresa un correo válido" style="margin-bottom: 2%;">
                            <input class="input100" type="text" name="Documento" placeholder="Documento" minlength="2" maxlength="40" required pattern="[0-9]{10}" onkeypress="return onlyNumberKey(event)">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa-solid fa fa-air-condition" aria-hidden="true"></i>
                            </span>
                        </div>
                        <div for="txtSoloLetras" class="wrap-input10 validate-input" data-validate="Ingresa un nombre válido">
                            <div class="column1" style="margin-bottom: 2%;">
                                <input class="input100" type="text" name="Nombres" placeholder="Nombre" minlength="2" maxlength="40" required pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+">
                                <span class="focus-input100"></span>
                                <span class="symbol-input100">
                                    <i class="fa-solid fa fa-air-condition" aria-hidden="true"></i>
                                </span>
                                <div for="txtSoloLetras" class="wrap-input10 validate-input" data-validate="Ingresa un nombre válido">
                                    <input class="input100" type="text" name="Apellidos" placeholder="Apellidos" minlength="2" maxlength="40" required pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+">
                                    <span class="focus-input100"></span>
                                    <span class="symbol-input100">
                                        <i class="fa-solid fa fa-air-condition" aria-hidden="true"></i>
                                    </span>
                                </div>

                            </div>

                            <div for="txtSoloLetras" class="wrap-input10 validate-input" data-validate="Ingresa un nombre válido">
                                <input class="input100" type="email" name="Correo" placeholder="Correo" required>
                                <span class="focus-input100"></span>
                                <span class="symbol-input100">
                                    <i class="fa-solid fa fa-air-condition" aria-hidden="true"></i>
                                </span>
                            </div>

                            <div for="txtSoloLetras" class="wrap-input10 validate-input" data-validate="Ingresa un nombre válido" style="margin-top: 2%;">
                                <input class="input100" type="password" name="Contraseña" placeholder="Contraseña" required>
                                <span class="focus-input100"></span>
                                <span class="symbol-input100">
                                    <i class="fa-solid fa fa-air-condition" aria-hidden="true"></i>
                                </span>
                            </div>

                        </div>
                        <center>
                            <button type="submit" class="btn btn-primary">Registrarlo</button>
                            <a href="./BorondoMan.php" class="btn btn-danger">Cancelar</a>
                        </center>
                    </form>









                </div>


            </div>

        </div>
        <div>
            <div>
                <div>

                    <!--Fin insert-->
                    </center>


                </div>




            </div>


            <script>
    function onlyNumberKey(evt) {
          
        // Only ASCII character in that range allowed
        var ASCIICode = (evt.which) ? evt.which : evt.keyCode
        if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
            return false;
        return true;
    }
</script>
<script>
    function detailssubmit() {
        alert("Your details were Submitted");
    }
</script>


</body>

</html>