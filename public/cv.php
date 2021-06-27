<?php
require '../vendor/autoload.php';
require '../config/database.php';

session_start();

if(isset($_SESSION['correo_usuario']) && $_SESSION['tipo_usuario'] == 1) {
    $usuario = App\Entities\Usuario::where('correo_usuario', $_SESSION['correo_usuario'])->first();
    $cv = App\Entities\CurriculumLaboral::where('correo_usuario', $_SESSION['correo_usuario'])->first();
}
else header('location:index.php');


include '../resources/views/cv-view.php';