<?php
require '../vendor/autoload.php';
require '../config/database.php';

session_start();

if(isset($_SESSION['correo_usuario']) && $_SESSION['tipo_usuario'] == 2) {
    $empresa = App\Entities\DatosEmpresa::where('correo_empresa', $_SESSION['correo_usuario'])->first();
    $usuario = App\Entities\Usuario::where('correo_usuario', $_GET['correo_usuario'])->first();
    $cv = App\Entities\CurriculumLaboral::where('correo_usuario', $_GET['correo_usuario'])->first();
    $cvEscolaridad = App\Entities\CurriculumEscolaridad::where('correo_usuario', $_GET['correo_usuario'])->get();
    $cvLaboral = App\Entities\CurriculumLaboral::where('correo_usuario', $_GET['correo_usuario'])->get();
    $cvIdiomaHabilidad = App\Entities\CurriculumIdiomaHabilidad::where('correo_usuario', $_GET['correo_usuario'])->get();
    $cvCertificaciones = App\Entities\CurriculumCertificaciones::where('correo_usuario', $_GET['correo_usuario'])->get();
}
else header('location:index.php');


include '../resources/views/ver-cv-view.php';