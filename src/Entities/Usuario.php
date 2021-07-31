<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model {
    protected $table = 'usuario';
    protected $primaryKey = 'IdUsuario';

    protected $fillable = [
        'IdUsuario',
        'correo_usuario',
        'nombre_usuario',
        'apellido',
        'contrasena_usuario',
        'UrlImagen',
        'puesto',
        'descripcion',
        'salarioMin',
        'salarioMax',
        'numero_telefonico',
        'edad',
        'sexo',
        'fecha_nacimiento',
        'estado_civil',
        'Estado',
        'UrlImagenCV'
    ];

    public $timestamps = false;

    public function escolaridades()
    {
        return $this->hasMany('App\Entities\CurriculumEscolaridad','correo_usuario','correo_usuario');
    }
}

















