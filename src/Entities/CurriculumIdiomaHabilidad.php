<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class CurriculumIdiomaHabilidad extends Model {
    protected $table = 'curriculum_idioma_habilidad';
    protected $primaryKey = 'id_idioma_habilidad';

    protected $fillable = [
        'id_idioma_habilidad',
        'correo_usuario',
        'idioma_primario',
        'idioma_secundario',
        'idioma_prim_dominio',
        'idioma_sec_dominio',
        'habilidad_1',
        'habilidad_2',
        'habilidad_3',
        'habilidad_1_nivel',
        'habilidad_2_nivel',
        'habilidad_3_nivel'
    ];

    public $timestamps = false;
}