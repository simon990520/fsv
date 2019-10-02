<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    protected $fillable = [
        'nombre',
        'tipoDocumento',
        'numeroDocumento',
        'municipio_id',
        'direccion',
        'telefono',
        'profecional_id',
        'sexo_paciente',
        'estado_civil',
        'fecha_nacimiento',
        'nivel_escolaridad',
        'poblacion',
        'year',
        'linea',
        'visita',

    ];
}
