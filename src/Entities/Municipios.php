<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Municipios extends Model {
    protected $connection = 'states';
    protected $table = 'municipios';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'estado_id',
        'clave',
        'nombre',
        'activo'
    ];

    public $timestamps = false;
}