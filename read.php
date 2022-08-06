<?php
session_start();

include("model/conexion.php");

$username=$_POST["Nom_Usuario"];
$pass=$_POST["Contraseña"];
// $pass=hash('sha512',$pass);

$read=mysqli_query($conx, "SELECT * FROM usuarios WHERE Nom_Usuario='$username' AND Contraseña='$pass'");
$ok=mysqli_fetch_array($read);

if($ok["Id_Rol"]==1){
    $_SESSION['Nom_Usuario']=$username;
    header ("location:index.php");
}else
if($ok["Id_Rol"]==2){
    $_SESSION['Nom_Usuario']=$username;
    header ("location:index.php");
}else{
    echo "<script>alert('Nombre o contraseña equivocada');window.history.go(-1);</script>";
}
?>