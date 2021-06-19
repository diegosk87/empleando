<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class CurriculumCertificaciones extends Model {
    protected $table = 'curriculum_certificaciones';
    protected $primaryKey = 'id_certifi';

    protected $fillable = [
        'id_certifi',
        'correo_usuario',
        'certificacion',
        'fecha'
    ];

    public $timestamps = false;
}