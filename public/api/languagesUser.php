<?php
use App\Entities\CurriculumIdiomaHabilidad;

require '../../vendor/autoload.php';
require '../../config/database.php';

session_start();

if(isset($_SESSION['correo_usuario']) && $_SESSION['tipo_usuario'] == 1) {
    $languages = json_decode($_POST['languages']);
    $deleted = json_decode($_POST['deleted']);

    foreach($deleted as $del) {
        $language = App\Entities\CurriculumIdiomaHabilidad::where('id_idioma_habilidad', $del)->delete();
    }
    
    foreach($languages as $language) {
        $idioma = new App\Entities\CurriculumIdiomaHabilidad;
        $idioma->correo_usuario = $_SESSION['correo_usuario'];
        $idioma->idioma_primario = $language->idioma_primario;
        $idioma->idioma_prim_dominio = $language->idioma_prim_dominio;
        $idioma->idioma_secundario = $language->idioma_secundario;
        $idioma->idioma_sec_dominio = $language->idioma_sec_dominio;
        $idioma->habilidad_1 = $language->habilidad_1;
        $idioma->habilidad_1_nivel = $language->habilidad_1_nivel;
        $idioma->habilidad_2 = $language->habilidad_2;
        $idioma->habilidad_2_nivel = $language->habilidad_2_nivel;
        $idioma->habilidad_3 = $language->habilidad_3;
        $idioma->habilidad_3_nivel = $language->habilidad_3_nivel;
        $idioma->save();
    }
    
    echo 'Idiomas guardadas';
}
else echo 'Error al guardar idiomas';