<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model {
    protected $table = 'usuario';
    protected $primaryKey = 'IdUsuario';

    public $timestamps = false;
}