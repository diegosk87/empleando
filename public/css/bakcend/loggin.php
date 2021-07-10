<?php

session_start();

$usuario = $_POST['usuario'];
$clave = $_POST['clave'];

$q ="SELECT COUNT(*) FROM USUARIO where usuario = '$usuario' and clave = '$clave'";

$consulta = mysqli_query ($conexion,$q);

$array = mysqli_fetch_array($consulta);

if ($array ['contar']>0){
    header("location: ../index.php");

}else{
    echo "Datos incorrectos"
}

?>


<form action="backend/loggin.php" method="POST"></form>