<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Encuesta extends Model
{
   protected $fillable = [
       'nombrePaciente',
       'nombreCuidador',
       'direccion',
       'cumplimientoExpectativas',
       'canalizacionRealizada',
       'sintioApoyo',
       'presentacionPersonal',
       'sfadasd',
       'informacionSuministrada',
       'emparia',
       'conceptosContenidos',
       'comprension',
       'calidadMaterial',
       'puntualidad',
       'islustraciones',
       'impactoEstrategia',
       'observaciones',
       'paciente_id',
   ];
}
