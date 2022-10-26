<?php
session_start();
if (!isset($_SESSION['Documento'])) {
    echo "<script>alert('Debes iniciar sesion');location='login.php';</script>";
    session_destroy();
    die();
}
$document = $_SESSION['Documento'];
$creser = "SELECT * FROM reservas WHERE Documento='$document'";
// print_r($_SESSION);

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
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="icon" type="image/png" href="./images/logo2.png" />
        <!-- FONTS GOOGLE -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@500;600&display=swap" rel="stylesheet" />
    <!-- CSS STYLE -->
    <link rel="stylesheet" href="./css/Admin.css" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="./css/responsive.dataTables.min.css">


    <title>Perfil de Usuario </title>

</head>

<div style="position: fixed; width:100%">

<?php 

include 'templates/navbar.php';

?>

</div>

<body>

    <div class="body2">
        <br><br>

        <!-- CONTAINER ADMIN - IMG -->
        <div class="Administrador">

            <?php

            include 'templates/tusuario.php';

            ?>



            <!-- TABLE -->
            <div class="container-table">

                <!-- Container botones -->
                <!-- <section class="container-buttons-search"> -->
                <div class="container-buttons">
                    <div class="abl1">
                    <a href="./Usuarioreservas.php"  ><button style="background-color: orange;" class="bperfil1">Mis Reservas</button></a>
                    <a href="./Usuariopqrs.php" ><button class="bperfil">Mis Pqrs</button></a>
                    </div>
                </div>
                <!-- </section> -->


                <table class="table" id="example" class="table table-bordered display nowrap " cellspacing="0" width="100%">
                    <thead>
                        <th>N.Identidad</th>
                        <th>Fecha</th>
                        <th>Lugar</th>
                        <th>N°Entradas</th>
                        <th>Total</th>
                        <th></th>

                    </thead>
                    <tbody>
                        <?php
                        $show = mysqli_query($conx, $creser);
                        while ($row = mysqli_fetch_assoc($show)) { ?>
                            <tr>

                                <td data-label="N.Identidad"><?php echo $row['ID_Reserva'] ?></td>
                                <td data-label="Fecha"><?php echo $row['FechaRs'] ?></td>
                                <td data-label="Lugar"><?php echo $row['Nombre'] ?></td>
                                <td data-label="N°Entradas"><?php echo $row['N_Entradas'] ?></td>
                                <td data-label="Total"><?php echo $row['Total'] ?></td>
                                <td data-label="Acciones">
<div class="Status">
<a class="eliminar" href="./Factura.php?id=<?php echo $row['ID_Reserva']; ?>" >Ver Factura</a>
                  </div>

       
              </td>

                            </tr>
                        <?php } ?>
                    </tbody>
                </table>




            </div>


            <!-- JS -->
            <script src="./js/jquery-3.5.1.js"></script>
            <script src="./js/jquery.dataTables.min.js"></script>
            <script src="./js/dataTables.bootstrap5.min.js"></script>
            <script src="./js/dataTables.responsive.min.js"></script>

            <script src="./js/dataTables.buttons.min.js"></script>
            <script src="./js/jszip.min.js"></script>
            <script src="./js/pdfmake.min.js"></script>
            <script src="./js/vfs_fonts.js"></script>
            <script src="./js/buttons.html5.min.js"></script>
            <script src="./js/function_data.js"></script>
            <script src="./js/Admin.js"></script>

        </div>

    </div>
    </div>


   
    
</body>


</html>