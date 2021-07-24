<?php
require '../vendor/autoload.php';
require '../config/database.php';

session_start();

$filter = array(
    'busqueda' => $_POST['busqueda'],
    'estado' => $_POST['estado'],
    'categoria' => $_POST['categoria'],
    'tiempo' => $_POST['tiempo']
);

$query = 'SELECT * FROM vacantes A JOIN datosempresa B ON A.correo_empresa = B.correo_empresa WHERE A.fecha_publicacion IS NOT NULL';
$params = [];

if($filter['busqueda']) {
    $query .= " AND (A.titulo LIKE ? OR A.descripcion LIKE ? OR B.nombre_empresa LIKE ?)";
    array_push($params, '%' . $filter['busqueda'] . '%', '%' . $filter['busqueda'] . '%', '%' . $filter['busqueda'] . '%');
}

if($filter['estado']) {
    $query .= " AND A.Estado = ?";
    array_push($params, $filter['estado']);
}

if($filter['categoria']) {
    $query .= " AND A.categoria = ?";
    array_push($params, $filter['categoria']);
}

if($filter['tiempo']) {
    $query .= " AND A.jornada = ?";
    array_push($params, $filter['tiempo']);
}

$estados = App\Entities\Estados::all();
$vacantes = Illuminate\Database\Capsule\Manager::select($query, $params);

include '../resources/views/busqueda-empleo-view.php';