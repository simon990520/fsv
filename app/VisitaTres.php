<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VisitaTres extends Model
{
    protected $fillable = [
        'nombrePaciente',
        'tipoDocumento',
        'numeroIdentidad',
        'nombreCuidador',
        'direccion',
        'recibeBeneficios',
        'recibeBeneficiosPorque',
        'conductaSEguir',
        'charlaFamiliarProblemas',
        'ayudaSobreProblemasFamiliares',
        'familiaAlertaSuicidio',
        'comidaFrutas',
        'prevencionConsumoDrogas',
        'ejerciciosSemanales',
        'descansoEnOchohoras',
        'familiaControlaEmociones',
        'problemasObjetividad',
        'prevencionDeViolencia',
        'acuerdosPorVotacion',
        'aceptacionDeIdeas',
        'demostracionesAfectoFamiliar',
        'celebracionDeTriunfos',
        'visionPositiva',
        'actividadesCultura',
        'actividadesComunitarias',
        'saludoCordial',
        'prestacionDeApoyo',
        'buenTratoPacientes',
        'paciente_id',
        'profecional_id',
        'foto1',
        'foto2'
    ];
}
