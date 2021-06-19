<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class CurriculumEscolaridad extends Model {
    protected $table = 'curriculum_escolaridad';
    protected $primaryKey = 'id_escolar';

    protected $fillable = [
        'id_escolar',
        'correo_usuario',
        'escolaridad',
        'institucion',
        'FechaIni_esco',
        'FechaFin_esco',
        'EnCurso'
    ];

    public $timestamps = false;
}