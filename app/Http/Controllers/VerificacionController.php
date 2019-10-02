<?php

namespace App\Http\Controllers;

use App\Verificacion;
use App\Verificacion2;
use Illuminate\Http\Request;

class VerificacionController extends Controller
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
        $data = new Verificacion([
            'nombreCompleto' => $request->get('nombreCompleto'),
            'tipoDocumento' => $request->get('tipoDocumento'),
            'documento' => $request->get('documento'),
            'nombreCuidador' => $request->get('nombreCuidador'),
            'educacion' => $request->get('educacion'),
            'sustento' => $request->get('sustento'),
            'social' => $request->get('social'),
            'empoderamiento' => $request->get('empoderamiento'),
            'Salud' => $request->get('Salud'),
            'servicioCanalizado' => $request->get('servicioCanalizado'),
            'solicitoElServicio' => $request->get('solicitoElServicio'),
            'definioFechaAcercamiento' => $request->get('definioFechaAcercamiento'),
            'cualFecha' => $request->get('cualFecha'),
            'preguntaA' => $request->get('preguntaA'),
            'preguntaB' => $request->get('preguntaB'),
            'preguntaC' => $request->get('preguntaC'),
            'preguntaD' => $request->get('preguntaD'),
            'preguntaE' => $request->get('preguntaE'),
            'preguntaF' => $request->get('preguntaF'),
            'preguntaG' => $request->get('preguntaG'),
            'preguntaGCuales' => $request->get('preguntaGCuales'),
            'respuestaA' => $request->get('respuestaA'),
            'sustentacionRespuestaA' => $request->get('sustentacionRespuestaA'),
            'respuestaB' => $request->get('respuestaB'),
            'sustentacionRespuestaB' => $request->get('sustentacionRespuestaB'),
            'respuestaC' => $request->get('respuestaC'),
            'sustentacionRespuestaC' => $request->get('sustentacionRespuestaC'),
            'respuestaD' => $request->get('respuestaD'),
            'sustentacionRespuestaD' => $request->get('sustentacionRespuestaD'),
            'respuestaE' => $request->get('respuestaE'),
            'sustentacionRespuestaE' => $request->get('sustentacionRespuestaE'),
            'respuestaF' => $request->get('respuestaF'),
            'sustentacionRespuestaF' => $request->get('sustentacionRespuestaF'),
            'sustentacionRespuestaG' => $request->get('sustentacionRespuestaG'),
            'educacion2' => $request->get('educacion2'),
            'sustento2' => $request->get('sustento2'),
            'social2' => $request->get('social2'),
            'empoderamiento2' => $request->get('empoderamiento2'),
        ]);

        $data->save();

        $data2 = new Verificacion2([
            'salud2' => $request->get('salud2'),
            'servicioCanalizado2' => $request->get('servicioCanalizado2'),
            'solicitoElServicio2' => $request->get('solicitoElServicio2'),
            'definioFechaAcercamiento2' => $request->get('definioFechaAcercamiento2'),
            'cualFecha2' => $request->get('cualFecha2'),
            'preguntaH' => $request->get('preguntaH'),
            'preguntaI' => $request->get('preguntaI'),
            'preguntaJ' => $request->get('preguntaJ'),
            'preguntaK' => $request->get('preguntaK'),
            'preguntaL' => $request->get('preguntaL'),
            'preguntaM' => $request->get('preguntaM'),
            'Preguntan' => $request->get('Preguntan'),
            'preguntaNCuales' => $request->get('preguntaNCuales'),
            'respuestaH' => $request->get('respuestaH'),
            'sustentacionRespuestaH' => $request->get('sustentacionRespuestaH'),
            'respuestaI' => $request->get('respuestaI'),
            'sustentacionRespuestaI' => $request->get('sustentacionRespuestaI'),
            'respuestaJ' => $request->get('respuestaJ'),
            'sustentacionRespuestaJ' => $request->get('sustentacionRespuestaJ'),
            'respuestaK' => $request->get('respuestaK'),
            'sustentacionRespuestaK' => $request->get('sustentacionRespuestaK'),
            'respuestaL' => $request->get('respuestaL'),
            'sustentacionRespuestaL' => $request->get('sustentacionRespuestaL'),
            'respuestaM' => $request->get('respuestaM'),
            'sustentacionRespuestaM' => $request->get('sustentacionRespuestaM'),
            'sustentacionRespuestaN' => $request->get('sustentacionRespuestaN'),
            'Observaciones' => $request->get('Observaciones'),
            'paciente_id' => $request->get('pacienteID'),
            'verificacion_id' => $data->id,
        ]);

        return $data2;
        $data2->save();

        return $data;
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
