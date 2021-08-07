<?php
require '../../vendor/autoload.php';
require '../../config/database.php';

if(isset($_GET['estado_id'])) {
    $municipios = App\Entities\Municipios::where('estado_id', $_GET['estado_id'])->get();
    echo json_encode($municipios);
}
else echo json_encode([]);