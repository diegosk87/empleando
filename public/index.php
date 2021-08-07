<?php
require '../vendor/autoload.php';
require '../config/database.php';

session_start();

$estados = App\Entities\Estados::all();

include '../resources/views/home-view.php';
