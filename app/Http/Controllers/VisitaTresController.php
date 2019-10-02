<?php

namespace App\Http\Controllers;

use App\Paciente;
use App\VisitaTres;
use Illuminate\Http\Request;

class VisitaTresController extends Controller
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
        $data = new VisitaTres([
            'nombrePaciente' => $request->get('nombrePaciente'),
            'tipoDocumento' => $request->get('tipoDocumento'),
            'numeroIdentidad' => $request->get('numeroIdentidad'),
            'nombreCuidador' => $request->get('nombreCuidador'),
            'direccion' => $request->get('direccion'),
            'recibeBeneficios' => $request->get('recibeBeneficios'),
            'recibeBeneficiosPorque' => $request->get('recibeBeneficiosPorque'),
            'conductaSEguir' => $request->get('conductaSEguir'),
            'charlaFamiliarProblemas' => $request->get('charlaFamiliarProblemas'),
            'ayudaSobreProblemasFamiliares' => $request->get('ayudaSobreProblemasFamiliares'),
            'familiaAlertaSuicidio' => $request->get('familiaAlertaSuicidio'),
            'comidaFrutas' => $request->get('comidaFrutas'),
            'prevencionConsumoDrogas' => $request->get('prevencionConsumoDrogas'),
            'ejerciciosSemanales' => $request->get('ejerciciosSemanales'),
            'descansoEnOchohoras' => $request->get('descansoEnOchohoras'),
            'familiaControlaEmociones' => $request->get('familiaControlaEmociones'),
            'problemasObjetividad' => $request->get('problemasObjetividad'),
            'prevencionDeViolencia' => $request->get('prevencionDeViolencia'),
            'acuerdosPorVotacion' => $request->get('acuerdosPorVotacion'),
            'aceptacionDeIdeas' => $request->get('aceptacionDeIdeas'),
            'demostracionesAfectoFamiliar' => $request->get('demostracionesAfectoFamiliar'),
            'celebracionDeTriunfos' => $request->get('celebracionDeTriunfos'),
            'visionPositiva' => $request->get('visionPositiva'),
            'actividadesCultura' => $request->get('actividadesCultura'),
            'actividadesComunitarias' => $request->get('actividadesComunitarias'),
            'saludoCordial' => $request->get('saludoCordial'),
            'prestacionDeApoyo' => $request->get('prestacionDeApoyo'),
            'buenTratoPacientes' => $request->get('buenTratoPacientes'),
            'paciente_id' => $request->get('pacienteID'),
            'profecional_id' => $request->get('profesionalID'),
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
        $data = VisitaTres::find($id);
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
