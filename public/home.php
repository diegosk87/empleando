<?php
require '../vendor/autoload.php';
require '../config/database.php';

session_start();

$usuarios = App\Entities\Usuario::where('IdUsuario', 1)->first();
include '../resources/views/home-view.php';