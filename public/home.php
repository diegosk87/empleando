<?php
session_start();

if (isset($_SESSION['correo_empresa'])) {
    header("location:misvacantes.php");
}

$usuarios = App\Entities\Usuario::All();
include '../resources/views/home-view.php';