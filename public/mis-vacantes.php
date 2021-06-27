<?php
require '../vendor/autoload.php';
require '../config/database.php';

session_start();

if(isset($_SESSION['correo_empresa'])) {
    $empresa = App\Entities\DatosEmpresa::where('correo_empresa', $_SESSION['correo_empresa'])->first();
    $vacantes = App\Entities\Vacante::where('correo_empresa', $_SESSION['correo_empresa'])->get();
}
else header('location:index.php');

include '../resources/views/mis-vacantes-view.php';