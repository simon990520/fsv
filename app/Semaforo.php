<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Semaforo extends Model
{
    protected $fillable = [
        'numero_visitas',
        'numero_dias',
        'visitas',
        'visitasrealizadas',
        'dias',
        'profecional_id',
    ];
}
