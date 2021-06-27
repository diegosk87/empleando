<?php
require '../vendor/autoload.php';
require '../config/database.php';

session_start();

if(isset($_SESSION['correo_usuario']) && $_SESSION['tipo_usuario'] == 1) {
    $directoryPath = "images/";
    $usuario = App\Entities\Usuario::where('correo_usuario', $_SESSION['correo_usuario'])->first();
    //verifica que la ubicacion exista, si no la crea
    if(!is_dir($directoryPath)) mkdir($directoryPath, 0755, true);
    if(move_uploaded_file($_FILES['UrlImagen']['tmp_name'], $directoryPath . $_FILES['UrlImagen']['name'])) {
        $imagen_url = $directoryPath . $_FILES['UrlImagen']['name'];
        $imagen_resultado = "Se subio correctamente";
    }
    else{
        $respuesta = array(
            'respuesta' => error_get_last()/*imprime el ultimo error registrado*/
        );
    }

    $usuario->UrlImagen = $imagen_url;
    $usuario->save();
}

header('location:cv.php');