<?php

$id = $_GET['id'];


session_start();
if (!isset($_SESSION['Documento'])) {
    echo "<script>alert('Debes iniciar sesion');location='login.php';</script>";
    session_destroy();
    die();
}
// $document = $_SESSION['Documento'];



$admins = "SELECT * FROM usuarios WHERE Documento='$id'";



include("model/conexion.php");
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
                    <form action="./functions/procesoAdmin.php" method="POST" enctype="multipart/form-data">
                        <span class="login100-form-title" style="padding-bottom: 2%;">
                            Editar datos de administradores
                        </span>
                        <?php
                        $show = mysqli_query($conx, $admins);
                        while ($row = mysqli_fetch_assoc($show)) { ?>

                            <div for="txtSoloLetras" class="inputsu" data-validate="Ingresa un correo válido" style="margin-bottom: 2%;">
                                <input class="input100" type="number" name="Documento" placeholder="Documento" minlength="2" maxlength="40" required value="<?php echo $row["Documento"]; ?>">
                                <span class="focus-input100"></span>
                                <span class="symbol-input100">
                                    <i class="fa-solid fa fa-air-condition" aria-hidden="true"></i>
                                </span>
                            </div>
                            <div for="txtSoloLetras" class="wrap-input10 validate-input" data-validate="Ingresa un nombre válido">
                                <div class="column1" style="margin-bottom: 2%;">
                                    <input class="input100" type="text" name="Nombres" placeholder="Nombre" minlength="2" maxlength="40" required pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+" value="<?php echo $row["Nombres"]; ?>">
                                    <span class="focus-input100"></span>
                                    <span class="symbol-input100">
                                        <i class="fa-solid fa fa-air-condition" aria-hidden="true"></i>
                                    </span>
                                    <div for="txtSoloLetras" class="wrap-input10 validate-input" data-validate="Ingresa un apellido válido">
                                        <input class="input100" type="text" name="Apellidos" placeholder="Apellidos" minlength="2" maxlength="40" required pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+" value="<?php echo $row["Apellidos"]; ?>">
                                        <span class="focus-input100"></span>
                                        <span class="symbol-input100">
                                            <i class="fa-solid fa fa-air-condition" aria-hidden="true"></i>
                                        </span>
                                    </div>

                                </div>



                                <div for="txtSoloLetras" class="wrap-input10 validate-input" data-validate="Ingresa un nombre válido" style="margin-top: 2%;">
                                    <input class="input100" type="text" name="Contraseña" placeholder="Contraseña" required value="<?php echo $row["Contraseña"]; ?>">
                                    <span class="focus-input100"></span>
                                    <span class="symbol-input100">
                                        <i class="fa-solid fa fa-air-condition" aria-hidden="true"></i>
                                    </span>
                                </div>

                            </div>




                        <?php } ?>


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
</body>

</html>