<?php
require '../vendor/autoload.php';
require '../config/database.php';

session_start();

if(isset($_SESSION['correo_usuario']) && $_SESSION['tipo_usuario'] == 2) {
    $empresa = App\Entities\DatosEmpresa::where('correo_empresa', $_SESSION['correo_usuario'])->first();
    $applicants = App\Entities\Postulacion::where('IdVacante', $_GET['idVacant'])->get();
}
else header('location:index.php');

include '../resources/views/postulantes-view.php';
