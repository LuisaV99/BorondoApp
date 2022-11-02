<?php
include("../model/conexion.php");





$Documento=$_POST["Documento"];
$Fecha=$_POST["Fecha"];
$ID_Lugar=$_POST["ID_Lugar"];
$Nombre=$_POST["Nombre"];
$Costo_Unidad=$_POST["Costo_Unidad"];
$N_Entradas=$_POST["N_Entradas"];
$Paga= "No";
$Num_Borondo= $_POST["Num_Borondo"] ;





    $create="INSERT INTO reservas (ID_Reserva, Documento, FechaRs, ID_Lugar, Nombre, Costo_Unidad, N_Entradas) 
    VALUES (NULL, '$Documento', '$Fecha', '$ID_Lugar', '$Nombre', '$Costo_Unidad', '$N_Entradas')";
    
    
    
    $result=mysqli_query($conx,$create);
    
    if($result){
        echo "<script>location='../Usuarioreservas.php';</script>";
        $Num_Borondos=$Num_Borondo+1;
        // echo $Num_Borondo;
        $creates="UPDATE lugares SET Num_Borondo='$Num_Borondos' WHERE ID_Lugar='$ID_Lugar'";
        $result=mysqli_query($conx,$creates);
    }else{
        echo "<script>alert('Ocurrió algún error');window.history.go(-1);</script>";
    }





?>