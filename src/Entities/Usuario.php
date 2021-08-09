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

    public function trabajos()
    {
        return $this->hasMany('App\Entities\CurriculumLaboral','correo_usuario','correo_usuario');
    }

    public function idiomas(){
        return $this->hasMany('App\Entities\CurriculumIdiomaHabilidad','correo_usuario','correo_usuario');
    }

    public function certificaciones(){
        return $this->hasMany('App\Entities\CurriculumCertificaciones','correo_usuario','correo_usuario');
    }
}

















