<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Postulacion extends Model {
    protected $table = 'postulacion';
    protected $primaryKey = 'Id_Postulacion';

    protected $fillable = [
        'Id_Postulacion',
        'correo_usuario',
        'IdVacante',
        'fecha',
        'estado_status',
    ];

    public $timestamps = false;
}