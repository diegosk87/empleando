<?php
require '../vendor/autoload.php';
require '../config/database.php';

session_start();

$vacante = App\Entities\Vacante::Find($_GET['IdVacante']);
include '../resources/views/vacante-view.php';