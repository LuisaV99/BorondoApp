<?php
session_start();

include("../model/conexion.php");

$document=$_POST["Documento"];
$pass=$_POST["Contraseña"];
// $pass=hash('sha512',$pass);

$read=mysqli_query($conx, "SELECT * FROM usuarios WHERE Documento='$document' AND Contraseña='$pass'");
$ok=mysqli_fetch_array($read);

if($ok["ID_Rol"]==1){
    if($ok["ID_Estado_Usuario"]==2){

        $_SESSION['Documento']=$document;
        header ("location:../rehabilitar.php");

    }else{
        $_SESSION['Documento']=$document;
        header ("location:../index.php");
    }
    
}else
if($ok["ID_Rol"]==2){
    $_SESSION['Documento']=$document;
    header ("location:../Adminpqrs.php");
}else
if($ok["ID_Rol"]==3){
    $_SESSION['Documento']=$document;
    header ("location:../BorondoMan.php");}
else {
    echo "<script>alert('Nombre o contraseña equivocada');window.history.go(-1);</script>";
}
