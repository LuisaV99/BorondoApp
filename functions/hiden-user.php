<?php
 
 include ('../model/conexion.php');

 session_start();
 if (!isset($_SESSION['Documento'])) {
   echo "<script>alert('Debes iniciar sesión');location='InicioSesion.php';</script>";
   session_destroy();
   die();
 }
$document=$_SESSION['Documento'];

 $cambio = 2;





 $ocultar="UPDATE usuarios SET ID_Estado_Usuario='$cambio' WHERE Documento='$document'";
 $vali=mysqli_query($conx,$ocultar);
  
   if (isset($ocultar)){
      session_start();
      session_destroy();
      header('Location:../InicioSesion.php');
   }else {
      echo "Función eliminar no lograda";
   }
  




?>