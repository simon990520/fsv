<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VisitaUno extends Model
{
    protected $fillable = [
        'nombrePaciente',
        'tipoDocumento',
        'numeroIdentidad',
        'nombreCuidador',
        'direccion',
        'desarrolloCanalizadoA',
        'primeraFecha',
        'segundaFecha',
        'foto1',
        'foto2',
        'profecional_id',
        'terceraFecha',
        'planConcertado',
        'paciente_id',
    ];
}
