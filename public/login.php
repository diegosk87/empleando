<?php
require '../vendor/autoload.php';
require '../config/database.php';

session_start();

$usuario = App\Entities\Usuario::where('correo_usuario', $_POST['correo_usuario'])
    ->where('contrasena_usuario', $_POST['contrasena_usuario'])->first();

if($usuario) {
    $_SESSION['correo_usuario'] = $usuario->correo_usuario;
    echo $_SESSION['correo_usuario'];
    header('location:index.php');
}
else {
    echo
        '<script> 
            alert("Usuario no existe, por favor verifique los datos");
            window.location ="index.php";
        </script>';
    exit;
}