<?php
require '../vendor/autoload.php';
require '../config/database.php';

session_start();

$usuario = App\Entities\Usuario::where('correo_usuario', $_POST['correo_usuario'])->where('contrasena_usuario', $_POST['contrasena_usuario'])->first();

if($usuario) {
    $_SESSION['correo_usuario'] = $usuario->correo_usuario;
    header('location:index.php');
}
else {
    $empresa = App\Entities\DatosEmpresa::where('correo_empresa', $_POST['correo_empresa'])->first();
    if($empresa) {
        $_SESSION['correo_empresa'] = $empresa->correo_empresa;
        header('location:mis-vacantes.php');
    }
    else {
        echo
            '<script> 
                alert("Usuario no existe, por favor verifique los datos");
                window.location ="index.php";
            </script>';
        exit;
    }
}