<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Estados extends Model {
    protected $connection = 'states';
    protected $table = 'estados';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'clave',
        'nombre',
        'abrev',
        'activo'
    ];

    public $timestamps = false;
}