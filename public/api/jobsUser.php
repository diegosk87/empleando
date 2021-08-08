<?php
use App\Entities\CurriculumLaboral;

require '../../vendor/autoload.php';
require '../../config/database.php';

session_start();

if(isset($_SESSION['correo_usuario']) && $_SESSION['tipo_usuario'] == 1) {
    $jobs = json_decode($_POST['jobs']);
    $deleted = json_decode($_POST['deleted']);

    foreach($deleted as $del) {
        $job = App\Entities\CurriculumLaboral::where('id_laboral', $del)->delete();
    }
    
    foreach($jobs as $job) {
        $empleo = new App\Entities\CurriculumLaboral;
        $empleo->correo_usuario = $_SESSION['correo_usuario'];
        $empleo->empresa = $job->empresa;
        $empleo->puestos = $job->puestos;
        $empleo->FechaIni = $job->FechaIni;
        $empleo->FechaFin = $job->FechaFin;
        $empleo->actividades = $job->actividades;
        $empleo->estado_status = $job->estado_status;
        $empleo->save();
    }
    
    echo 'Trabajos guardadas';
}
else echo 'Error al guardar trabajos';