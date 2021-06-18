<?php

require '../vendor/autoload.php';
require '../config/database.php';

$usuarios = App\Entities\Usuario::All();
include '../resources/views/home.php';