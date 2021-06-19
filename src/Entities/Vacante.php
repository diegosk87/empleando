<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Vacante extends Model {
    protected $table = 'vacantes';
    protected $primaryKey = 'IdVacante';

    protected $fillable = [
        'IdVacante',
        'correo_empresa',
        'Estado',
        'Municipio',
        'titulo',
        'categoria',
        'descripcion',
        'jornada',
        'tipo_contrato',
        'salarioMin',
        'salarioMax',
        'sexo',
        'edad_Min',
        'edad_Max',
        'experiencia',
        'escolaridad',
        'idioma',
        'nivel',
        'fecha_publicacion',
    ];

    public $timestamps = false;

    public function datosEmpresa()
    {
        return $this->hasOne('App\Entities\DatosEmpresa','correo_empresa','correo_empresa');
    }
}