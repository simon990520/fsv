<?php

namespace App\Http\Controllers;

use App\Paciente;
use App\VisitaDos;
use Illuminate\Http\Request;

class VisitaDosController extends Controller
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
        $data = new VisitaDos([
            'nombrePaciente' => $request->get('nombrePaciente'),
            'tipoDocumento' => $request->get('tipoDocumento'),
            'numeroIdentidad' => $request->get('numeroIdentidad'),
            'nombreCuidador' => $request->get('nombreCuidador'),
            'direccion' => $request->get('direccion'),
            'asistenciaServiciosCanalizados' => $request->get('asistenciaServiciosCanalizados'),
            'asistenciaServiciosPorque' => $request->get('asistenciaServiciosPorque'),
            'barrerasServicio' => $request->get('barrerasServicio'),
            'barreraServicioPorque' => $request->get('barreraServicioPorque'),
            'recomendacion' => $request->get('recomendacion'),
            'medicamentosPaciente' => $request->get('medicamentosPaciente'),
            'dificultadesTratamiento' => $request->get('dificultadesTratamiento'),
            'olvidoDeMedicamentos' => $request->get('olvidoDeMedicamentos'),
            'horasMedicamentosIndicadas' => $request->get('horasMedicamentosIndicadas'),
            'retencionMedicamentosEstable' => $request->get('retencionMedicamentosEstable'),
            'asistenciaAlProfesionalDeSalud' => $request->get('asistenciaAlProfesionalDeSalud'),
            'efectosAdversos' => $request->get('efectosAdversos'),
            'retencionEfectosAdversos' => $request->get('retencionEfectosAdversos'),
            'adherencia' => $request->get('adherencia'),
            'autoObservacion' => $request->get('autoObservacion'),
            'personasConfianza' => $request->get('personasConfianza'),
            'medicacionCorrecta' => $request->get('medicacionCorrecta'),
            'medicoSintomas' => $request->get('medicoSintomas'),
            'noConsumirToxicos' => $request->get('noConsumirToxicos'),
            'asistenciaControlesMedicos' => $request->get('asistenciaControlesMedicos'),
            'trastornoBipolar' => $request->get('trastornoBipolar'),
            'epilepsia' => $request->get('epilepsia'),
            'esquizofrenia' => $request->get('esquizofrenia'),
            'psicosis' => $request->get('psicosis'),
            'depresion' => $request->get('depresion'),
            'suicidio' => $request->get('suicidio'),
            'protejeTuVIda' => $request->get('protejeTuVIda'),
            'habitosSaludables' => $request->get('habitosSaludables'),
            'conflictosAdecuados' => $request->get('conflictosAdecuados'),
            'comunicacionAsertiva' => $request->get('comunicacionAsertiva'),
            'buenaAutoestima' => $request->get('buenaAutoestima'),
            'tiempoLibre' => $request->get('tiempoLibre'),
            'buenTrato' => $request->get('buenTrato'),
            'paciente_id' => $request->get('pacienteID'),
            'profecional_id' => $request->get('profesionalID'),
        ]);


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
        $data = VisitaDos::find($id);
        return $data;
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
