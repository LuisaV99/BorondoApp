<?php
 
 include ('../model/conexion.php');

 $id = $_GET ['id'];


$valipq ="SELECT * FROM pqrs WHERE Documento ='$id'";
$valipq2 =mysqli_query($conx, $valipq);

if (mysqli_num_rows($valipq2) < 0){

   $eliminar = "DELETE FROM usuarios WHERE Documento = '$id'";
   $resultado = mysqli_query($conx, $eliminar);
  
   if (isset($eliminar)){
      header("location: ../Adminusuarios.php");
   }else {
      echo "Función eliminar no lograda";
   }
  

}else{
   echo "<script>alert('Este usuario aún tiene pqrs o reservas a su nombre');location='../Adminusuarios.php';</script>";
}



?>