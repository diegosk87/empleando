<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class CurriculumLaboral extends Model {
    protected $table = 'curriculum_laboral';
    protected $primaryKey = 'id_laboral';

    protected $fillable = [
        'id_laboral',
        'correo_usuario',
        'empresa',
        'puestos',
        'FechaIni',
        'FechaFin',
        'actividades',
        'estado_status'
    ];

    public $timestamps = false;
}