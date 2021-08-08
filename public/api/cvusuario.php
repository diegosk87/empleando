<?php
require '../../vendor/autoload.php';
require '../../config/database.php';

session_start();
if(isset($_SESSION['correo_usuario']) && $_SESSION['tipo_usuario'] == 1) {
    $user = App\Entities\Usuario::where('correo_usuario', $_POST['correo_usuario'])->first();
    $user -> puesto = $_POST["puesto"];
    $user -> descripcion = $_POST["descripcion"];
    $user -> salarioMin = $_POST["salarioMin"];
    $user -> salarioMax = $_POST["salarioMax"];
    $user -> nombre_usuario = $_POST["nombre_usuario"];
    $user -> estado_civil = $_POST["estado_civil"];
    $user -> edad = $_POST["edad"];
    $user -> correo_usuario = $_POST["correo_usuario"];
    $user -> sexo = $_POST["sexo"];
    $user -> numero_telefonico = $_POST["numero_telefonico"];
    $user -> fecha_nacimiento = $_POST["fecha_nacimiento"];
    $user -> Estado = $_POST["Estado"];
    $user -> save();

    echo "Actualizado";
}
else echo 'Error al actualizar';