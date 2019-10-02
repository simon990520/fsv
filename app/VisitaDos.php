<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VisitaDos extends Model
{
    protected $fillable  = [
        'nombrePaciente',
        'tipoDocumento',
        'numeroIdentidad',
        'nombreCuidador',
        'direccion',
        'asistenciaServiciosCanalizados',
        'asistenciaServiciosPorque',
        'barrerasServicio',
        'barreraServicioPorque',
        'recomendacion',
        'medicamentosPaciente',
        'dificultadesTratamiento',
        'olvidoDeMedicamentos',
        'horasMedicamentosIndicadas',
        'retencionMedicamentosEstable',
        'asistenciaAlProfesionalDeSalud',
        'efectosAdversos',
        'retencionEfectosAdversos',
        'adherencia',
        'autoObservacion',
        'personasConfianza',
        'medicacionCorrecta',
        'medicoSintomas',
        'noConsumirToxicos',
        'asistenciaControlesMedicos',
        'trastornoBipolar',
        'epilepsia',
        'esquizofrenia',
        'psicosis',
        'depresion',
        'suicidio',
        'protejeTuVIda',
        'habitosSaludables',
        'conflictosAdecuados',
        'comunicacionAsertiva',
        'buenaAutoestima',
        'tiempoLibre',
        'buenTrato',
        'paciente_id',
        'profecional_id',
        'foto1',
        'foto2'
    ];
}
