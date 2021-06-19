<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class DatosEmpresa extends Model {
    protected $table = 'datosempresa';
    protected $primaryKey = 'IdUsuario';

    protected $fillable = [
        'IdEmpresa',
        'correo_empresa',
        'activo',
        'token',
        'clave',
        'nombre_empresa',
        'RFC',
        'Giro_empresa',
        'Estado',
        'Municipio',
        'Direccion',
        'Telefono_empresa',
        'UrlImagen',
        'resena',
        'UrlWeb',
        'numero_empleados',
        'seguro_vida',
        'vacaciones',
        'comedor',
        'prestacion_ley',
        'Gimnasio',
        'benef_extra',
        'titular_cuenta',
        'puesto_titular',
        'telefono_movil',
        'cuenta_facebook',
        'cuenta_youtube',
        'cuenta_instagram',
        'cuenta_twitter',
    ];

    public $timestamps = false;
}