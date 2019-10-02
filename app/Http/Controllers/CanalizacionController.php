<?php

namespace App\Http\Controllers;

use App\Canalizacion;
use App\Paciente;
use Illuminate\Http\Request;

class CanalizacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Canalizacion([
            'raizal' => $request->get('raizal'),
            'palenquero' => $request->get('palenquero'),
            'gitano' => $request->get('gitano'),
            'indigena' => $request->get('indigena'),
            'afrodescendiente' => $request->get('afrodescendiente'),
            'ese' => $request->get('ese'),
            'eapb' => $request->get('eapb'),
            'secretariaSalud' => $request->get('secretariaSalud'),
            'sac' => $request->get('sac'),
            'siau' => $request->get('siau'),
            'ips' => $request->get('ips'),
            'saludOtro' => $request->get('saludOtro'),
            'policia' => $request->get('policia'),
            'cti' => $request->get('cti'),
            'secretariaGobierno' => $request->get('secretariaGobierno'),
            'registraduria' => $request->get('registraduria'),
            'fiscalia' => $request->get('fiscalia'),
            'inspeccionPolicia' => $request->get('inspeccionPolicia'),
            'justiciaOtro' => $request->get('justiciaOtro'),
            'icbf' => $request->get('icbf'),
            'defensoriaPueblo' => $request->get('defensoriaPueblo'),
            'personeria' => $request->get('personeria'),
            'comisariaFamilia' => $request->get('comisariaFamilia'),
            'proteccionOtro' => $request->get('proteccionOtro'),
            'institucionEducativa' => $request->get('institucionEducativa'),
            'sena' => $request->get('sena'),
            'universidad' => $request->get('universidad'),
            'alfabetizacion' => $request->get('alfabetizacion'),
            'educacionOtro' => $request->get('educacionOtro'),
            'proyectosProductivos' => $request->get('proyectosProductivos'),
            'economiaOtro' => $request->get('economiaOtro'),
            'unidadVictimas' => $request->get('unidadVictimas'),
            'familiasAccion' => $request->get('familiasAccion'),
            'jovenesAccion' => $request->get('jovenesAccion'),
            'programaAdultoMayor' => $request->get('programaAdultoMayor'),
            'inclucionOtro' => $request->get('inclucionOtro'),
            'gruposApoyo' => $request->get('gruposApoyo'),
            'organizacionConDiscapacidad' => $request->get('organizacionConDiscapacidad'),
            'casaCultura' => $request->get('casaCultura'),
            'deportesRecreacion' => $request->get('deportesRecreacion'),
            'redUnidos' => $request->get('redUnidos'),
            'socialOtro' => $request->get('socialOtro'),
            'programa' => $request->get('programa'),
            'porquePrograma' => $request->get('porquePrograma'),
            'estrategia' => $request->get('estrategia'),
            'porqueEstrategia' => $request->get('porqueEstrategia'),
            'proyecto' => $request->get('proyecto'),
            'porqueProyecto' => $request->get('porqueProyecto'),
            'servicio' => $request->get('servicio'),
            'porqueServicio' => $request->get('porqueServicio'),
            'nombrePaciente' => $request->get('nombrePaciente'),
            'tipoDocumento' => $request->get('tipoDocumento'),
            'numeroIdentidad' => $request->get('numeroIdentidad'),
            'paciente_id' => $request->get('pacienteID'),
        ]);

        /*return $data;*/

        $data->save();

        $crud = Paciente::find($request->get('pacienteID'));
        $crud->visita = $request->get('estadoVisita');
        $crud->save();



        return $crud;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
