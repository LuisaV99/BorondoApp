<?php
session_start();
if (!isset($_SESSION['Documento'])) {
    echo "<script>alert('Debes iniciar sesion');location='login.php';</script>";
    session_destroy();
    die();
}
$document = $_SESSION['Documento'];

$users = "SELECT * FROM usuarios WHERE Documento='$document'";

include("model/conexion.php");

$inactiv="SELECT * FROM usuarios WHERE Documento='$document' AND ID_Estado_Usuario='2'";
$inactivresult= mysqli_query($conx,$inactiv);

if(mysqli_num_rows($inactivresult) == 1) {
	echo "<script>alert('Tu cuenta se encuentra deshabilitada');location='./functions/cerrar.php';</script>";
}else{
  
}


?>

<!DOCTYPE <html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="icon" type="image/png" href="./images/logo2.png" />
        <!-- FONTS GOOGLE -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@500;600&display=swap" rel="stylesheet" />
    <!-- Estilos -->
<link rel="stylesheet" href="./css/usuarioeditar.css">
    <!-- JS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="./css/responsive.dataTables.min.css">
    <title>Editar Perfil</title>
</head>
<?php
include 'templates/Navbar.php';
?>

<body>
    <div class="body2">

        <!-- Contenedor de la imagen administrador -->
        <div class="Administrador">
            <!-- Formulario -->
            <div class="wrap-formulario">
                <div class="logo-formulario">
                    <img id="logo" src="images/Logo.png" alt=""></br>
                </div>
                <div class="formulario">
                    <form action="./functions/editarproceso.php" method="POST">
                        <span class="titulo-formulario">
                            Editar Perfil
                        </span>
                        <p class="notaagregar">Edita tu perfil y mantén actualizada tu información de contacto :3</p>

                        <div class="columna1">
                            <?php
                            $show = mysqli_query($conx, $users);
                            while ($row = mysqli_fetch_assoc($show)) { ?>

                        <input class="inputsu" type="text" name="FechaRg"  value="<?php echo $row["FechaRgU"]; ?>">



                                <div for="txtSoloLetras" class="wrap-inputs validate-input" data-validate="Ingresa un nombre válido">
                                    <input class="inputs-general" type="text" name="Nombres" placeholder="Nombres" minlength="2" maxlength="40" required pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+" value="<?php echo $row["Nombres"]; ?>">
                                </div>
                                <div for="txtSoloLetras" class="wrap-inputs validate-input" data-validate="Ingresa un apellido válido">
                                    <input class="inputs-general" type="text" name="Apellidos" placeholder="Apellidos" minlength="2" maxlength="40" required pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+" value="<?php echo $row["Apellidos"]; ?>">
                                </div>
                        </div>
                        <div class="wrap-inputs validate-input" data-validate="Ingresa un correo válido">
                            <input class="inputs-general" type="email" name="Correo" placeholder="Correo" minlength="10" maxlength="100" required value="<?php echo $row["Correo"]; ?>">
                            <span class="focus-input100"></span>
                        </div>
                        <div class="wrap-inputs validate-input" data-validate="Ingresa un número de telefono valido">
                            <input class="inputs-general" type="number" name="Telefono" placeholder="Telefono" minlength="10" maxlength="14" required value="<?php echo $row["Telefono"]; ?>">
                            <span class="focus-input100"></span>
                        </div>
                        <div class="wrap-inputs validate-input" data-validate="Ingresa una contraseña">
                            <input class="inputs-general" type="varchar" name="Contraseña" placeholder="Contraseña" minlength="5" maxlength="14" required value="<?php echo $row["Contraseña"]; ?>">
                            <span class="focus-input100"></span>
                        </div>
                        <!-- <div class="wrap-inputs validate-input" data-validate="Ingresa un correo válido">
                            <input class="inputs-general" type="number" name="Documento" placeholder="Documento" minlength="10" maxlength="14" required value="<?php echo $row["Documento"]; ?>" disabled>
                            <span class="focus-input100"></span>
                        </div> -->
						<div class="inputsu">
							<p class="tituloedit">Prueba:</p>
							<div class="wrap-input100 validate-input" jt-c data-validate="Ingresa un correo valido">

								<input class="input100" type="text" name="Documento" placeholder="" value="<?php echo $row["Documento"]; ?>">
								<span class="focus-input100"></span>
								<span class="symbol-input100">
									<i aria-hidden="true"></i>
								</span>
							</div>
						</div>


                    <?php }  ?>


                    <center>
                        <button type="submit" class="btn btn-primary">Actualizar</button>
                        <a href="./Usuarioreservas.php" class="btn btn-danger">Cancelar</a>
                    </center>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php
    include 'templates/footer.php';
    // ?>
</body>

</html>