<?php
use App\Entities\CurriculumCertificaciones;

require '../../vendor/autoload.php';
require '../../config/database.php';

session_start();

if(isset($_SESSION['correo_usuario']) && $_SESSION['tipo_usuario'] == 1) {
    $certs = json_decode($_POST['certs']);
    $deleted = json_decode($_POST['deleted']);

    foreach($deleted as $del) {
        $cert = App\Entities\CurriculumCertificaciones::where('id_certifi', $del)->delete();
    }
    
    foreach($certs as $cert) {
        $certificacion = new App\Entities\CurriculumCertificaciones;
        $certificacion->correo_usuario = $_SESSION['correo_usuario'];
        $certificacion->certificacion = $cert->certificacion;
        $certificacion->fecha = $cert->fecha;
        $certificacion->save();
        echo 'Certificacion guardada';
    }
    
}
else echo 'Error al guardar certificacion';