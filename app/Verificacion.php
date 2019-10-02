<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Verificacion extends Model
{
    protected $fillable = [
        'nombreCompleto',
        'tipoDocumento',
        'Documento',
        'nombreCuidador',
        'educacion',
        'sustento',
        'social',
        'empoderamiento',
        'Salud',
        'servicioCanalizado',
        'solicitoElServicio',
        'definioFechaAcercamiento',
        'cualFecha',
        'preguntaA',
        'preguntaB',
        'preguntaC',
        'preguntaD',
        'preguntaE',
        'preguntaF',
        'preguntaG',
        'preguntaGCuales',
        'respuestaA',
        'sustentacionRespuestaA',
        'respuestaB',
        'sustentacionRespuestaB',
        'respuestaC',
        'sustentacionRespuestaC',
        'respuestaD',
        'sustentacionRespuestaD',
        'respuestaE',
        'sustentacionRespuestaE',
        'respuestaF',
        'sustentacionRespuestaF',
        'sustentacionRespuestaG',
        'educacion2',
        'sustento2',
        'social2',
        'empoderamiento2',
    ];
}
