<?php

namespace App\Http\Controllers;

use App\Encuesta;
use App\Paciente;
use Illuminate\Http\Request;

class EncuestaController extends Controller
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
        $data = new Encuesta([
            'nombrePaciente' => $request->get('nombrePaciente'),
            'nombreCuidador' => $request->get('nombreCuidador'),
            'direccion' => $request->get('direccion'),
            'cumplimientoExpectativas' => $request->get('cumplimientoExpectativas'),
            'canalizacionRealizada' => $request->get('canalizacionRealizada'),
            'sintioApoyo' => $request->get('sintioApoyo'),
            'presentacionPersonal' => $request->get('presentacionPersonal'),
            'puntualidad' => $request->get('puntualidad'),
            'informacionSuministrada' => $request->get('informacionSuministrada'),
            'emparia' => $request->get('empatia'),
            'conceptosContenidos' => $request->get('conceptosContenidos'),
            'comprension' => $request->get('comprension'),
            'calidadMaterial' => $request->get('calidadMaterial'),
            'islustraciones' => $request->get('islustraciones'),
            'impactoEstrategia' => $request->get('impactoEstrategia'),
            'observaciones' => $request->get('observaciones'),
            'paciente_id' => $request->get('pacienteID'),
        ]);

       /* return $data;*/

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
