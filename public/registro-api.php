<?php
require '../vendor/autoload.php';
require '../config/database.php';


if(isset($_POST["RFC"])){
    $empresa = new App\Entities\DatosEmpresa;
    $empresa -> correo_empresa = $_POST["correo_empresa"];
    $empresa -> clave = $_POST["clave"];
    $empresa -> nombre_empresa = $_POST["nombre_empresa"];
    $empresa -> RFC = $_POST["RFC"];
    $empresa -> Estado = $_POST["Estado"];
    $empresa -> Municipio = $_POST["Municipio"];
    $empresa -> Direccion = $_POST["Direccion"];
    $empresa -> Giro_empresa = $_POST["Giro_empresa"];
    $empresa -> telefono_empresa = $_POST["telefono_empresa"];
    $empresa-> save();
}
else {
    $user = new App\Entities\Usuario;
    $user -> nombre_usuario = $_POST["nombre_usuario"];
    $user -> apellido = $_POST["apellido"];
    $user -> correo_usuario = $_POST["correo_usuario"];
    $user -> contrasena_usuario = $_POST["contrasena_usuario"];
    $user -> UrlImagen = "";
    $user -> save();

}

header("location:index.php");