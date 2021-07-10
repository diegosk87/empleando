<?php
require '../vendor/autoload.php';
require '../config/database.php';

session_start();

if(isset($_SESSION['correo_usuario']) && $_SESSION['tipo_usuario'] == 1) {
    $postulaciones = App\Entities\Postulacion::where('correo_usuario', $_SESSION['correo_usuario'])->get();

    foreach($postulaciones as $postulacion) $postulacion->vacante->datosEmpresa;
}
else header('location:index.php');

include '../resources/views/postulaciones-view.php';