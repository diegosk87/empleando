<?php

use App\Entities\CurriculumEscolaridad;

require '../../vendor/autoload.php';
require '../../config/database.php';

session_start();

if(isset($_SESSION['correo_usuario']) && $_SESSION['tipo_usuario'] == 1) {
    $scolarships = json_decode($_POST['scolarships']);
    $deleted = json_decode($_POST['deleted']);

    foreach($deleted as $del) {
        $scolarship = App\Entities\CurriculumEscolaridad::where('id_escolar', $del)->delete();
    }
    
    foreach($scolarships as $scolarship) {
        $escolaridad = new App\Entities\CurriculumEscolaridad;
        $escolaridad->correo_usuario = $_SESSION['correo_usuario'];
        $escolaridad->escolaridad = $scolarship->escolaridad;
        $escolaridad->institucion = $scolarship->institucion;
        $escolaridad->FechaIni_esco = $scolarship->FechaIni_esco;
        $escolaridad->FechaFin_esco = $scolarship->FechaFin_esco;
        $escolaridad->EnCurso = $scolarship->EnCurso;
        $escolaridad->save();
    }
    
    echo 'Escolaridades guardadas';
}
else echo 'Error al guardar escolaridades';
