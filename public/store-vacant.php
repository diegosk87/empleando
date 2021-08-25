<?php
require '../vendor/autoload.php';
require '../config/database.php';

session_start();

if(isset($_SESSION['correo_usuario']) && $_SESSION['tipo_usuario'] == 2) {
    $vacant = new App\Entities\Vacante;
    $vacant->correo_empresa = $_SESSION['correo_usuario'];
    $vacant->Estado = $_POST['Estado'];
    $vacant->Municipio = $_POST['Municipio'];
    $vacant->titulo = $_POST['titulo'];
    $vacant->categoria = $_POST['categoria'];
    $vacant->descripcion = $_POST['descripcion'];
    $vacant->jornada = $_POST['jornada'];
    $vacant->tipo_contrato = $_POST['tipo_contrato'];
    $vacant->salarioMin = $_POST['salarioMin'];
    $vacant->salarioMax = $_POST['salarioMax'];
    $vacant->sexo = $_POST['sexo'];
    $vacant->edad_Min = $_POST['edad_Min'];
    $vacant->edad_Max = $_POST['edad_Max'];
    $vacant->experiencia = $_POST['experiencia'];
    $vacant->escolaridad = $_POST['escolaridad'];
    $vacant->idioma = $_POST['idioma'];
    $vacant->nivel = $_POST['nivel'];
    $vacant->fecha_publicacion = date("Y/m/d");

    $vacant->save();
}

header('location:vacantes.php');

// header("location:vacantes.php");