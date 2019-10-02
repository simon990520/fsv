<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CaracterizacionDos extends Model
{
    protected $fillable = [
        'hijo',
        'madre',
        'psicologia',
        'terapiaOcipacional',
        'nutricion',
        'otraEspecialidadTratamientoTerapeutico',
        'nombreTratamientoFarmacologico',
        'medicinaGeneral',
        'psiquiatra',
        'enfermeria',
        'aseguramiento',
        'entidadAseguradora',
        'nombreIPS',
        'nombreCuidador',
        'telefonoCuidador',
        'edadCuidador',
        'generoCuidador',
        'estadoCivilCuidador',
        'cantidadPersonasACargo',
        'parentescoCuidador',
        'ocupacionCuidador',
        'escolaridadCuidador',
        'entidadAseguradoraCuidador',
        'problemasFrecuentes',
        'observaciones',
        'requerimientoCanalizacion',
        'tipoDeServicio',
        'paciente_id',
        'caracterizacion_id',
    ];
}
