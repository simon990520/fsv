<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Caracterizacion extends Model
{
    protected $fillable = [
        'nombreCompleto',
        'tipoDocumento',
        'documentoIdentidad',
        'direccionResidencia',
        'telefono',
        'fechaNacimiento',
        'genero',
        'areaQueHabita',
        'discapacitado',
        'desplazado',
        'victima',
        'gestante',
        'desmovilizado',
        'poblacionInfantil',
        'carcelario',
        'enfoquepoblacional',
        'escolaridad',
        'considerarCapacitarse',
        'enQueCapacitar',
        'ocupacion',
        'ingresosMensuales',
        'cuentaBancaria',
        'recibeAyudaEconomica',
        'programaDeAyudaEconomica',
        'estadoCivil',
        'hijos',
        'cantidadHijos',
        'dependienteIndependiente',
        'deporte',
        'tipoDeporte',
        'reunionesFamiliares',
        'razonReunion',
        'grupoRelijioso',
        'tipoGrupoRelijioso',
        'voluntariadoOGrupoComunidad',
        'tipoDeGrupoVoluntariado',
        'grupoAutoayuda',
        'tipoDeGrupoAutoayuda',
        'organizacionCondiscapacidad',
        'tipoOrganizacionConDiscapacidad',
        'participacionPolitica',
        'tipoParticipacionPolitica',
        'diagnosticoCIE',
        'estadoDeEnfermedad',

    ];
}
