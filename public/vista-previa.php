<?php
require '../vendor/autoload.php';
require '../config/database.php';

session_start();

if(isset($_SESSION['correo_usuario'])) {
    $usuario = App\Entities\Usuario::where('correo_usuario', $_SESSION['correo_usuario'])->first();
    $cv = App\Entities\CurriculumLaboral::where('correo_usuario', $_SESSION['correo_usuario'])->first();
    $cvEscolaridad = App\Entities\CurriculumEscolaridad::where('correo_usuario', $_SESSION['correo_usuario'])->first();
    $cvLaboral = App\Entities\CurriculumLaboral::where('correo_usuario', $_SESSION['correo_usuario'])->first();
    $cvIdiomaHabilidad = App\Entities\CurriculumIdiomaHabilidad::where('correo_usuario', $_SESSION['correo_usuario'])->first();
    $cvCertificaciones = App\Entities\CurriculumCertificaciones::where('correo_usuario', $_SESSION['correo_usuario'])->first();
}
else header('location:index.php');


include '../resources/views/vista-previa-view.php';