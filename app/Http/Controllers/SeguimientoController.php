<?php

namespace App\Http\Controllers;

use App\Seguimiento;
use App\Seguimiento2;
use Illuminate\Http\Request;

class SeguimientoController extends Controller
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
        $data = new Seguimiento([
            'nombreCompleto' => $request->get('nombreCompleto'),
            'tipoDocumento' => $request->get('tipoDocumento'),
            'documento' => $request->get('documento'),
            'direccion' => $request->get('direccion'),
            'telefono' => $request->get('telefono'),
            'nombreCuidador' => $request->get('nombreCuidador'),
            'beneficiarioEnDireccion' => $request->get('beneficiarioEnDireccion'),
            'institucional' => $request->get('institucional'),
            'comunitaria' => $request->get('comunitaria'),
            'sitioDelBeneficiario' => $request->get('sitioDelBeneficiario'),
            'cualBeneficiario' => $request->get('cualBeneficiario'),
            'nuevaDireccion' => $request->get('nuevaDireccion'),
            'nuevoMunicipio' => $request->get('nuevoMunicipio'),
            'internadoIps' => $request->get('internadoIps'),
            'tiempo' => $request->get('tiempo'),
            'canalizado2018' => $request->get('canalizado2018'),
            'logrosObtenidos' => $request->get('logrosObtenidos'),
            'servicioCanlizado' => $request->get('servicioCanlizado'),
            'porqueNoSolicitoServicio' => $request->get('porqueNoSolicitoServicio'),
            'recivioElServicio' => $request->get('recivioElServicio'),
            'razonNoServicio' => $request->get('razonNoServicio'),
            'barreraEncontrada' => $request->get('barreraEncontrada'),
            'cualFueLaBarrera' => $request->get('cualFueLaBarrera'),
            'porqueNoRecibioServicio' => $request->get('porqueNoRecibioServicio'),
            'diagnostico' => $request->get('diagnostico'),
            'estadoActualEnfermedad' => $request->get('estadoActualEnfermedad'),
            'historiaClinica' => $request->get('historiaClinica'),
            'tomaMedicamentos' => $request->get('tomaMedicamentos'),
            'cualMedicamentos' => $request->get('cualMedicamentos'),
            'horariosTomaMedicamentos' => $request->get('horariosTomaMedicamentos'),
            'actividadesParalelas' => $request->get('actividadesParalelas'),
            'cualActividades' => $request->get('cualActividades'),
            'deberiaCapacitarse' => $request->get('deberiaCapacitarse'),
            'enQueCapacitar' => $request->get('enQueCapacitar'),
            'ocupacion' => $request->get('ocupacion'),
            'hijos' => $request->get('hijos'),
            'cantidadHijos' => $request->get('cantidadHijos'),
            'dependienteIndependiente' => $request->get('dependienteIndependiente'),
            'numeroPersonasEncargadas' => $request->get('numeroPersonasEncargadas'),
            'parentescoPersonasEncargadas' => $request->get('parentescoPersonasEncargadas'),
            'deporte' => $request->get('deporte'),
            'tipoDeporte' => $request->get('tipoDeporte'),
            'reunionesFamiliares' => $request->get('reunionesFamiliares'),
            'grupoRelijioso' => $request->get('grupoRelijioso'),
            'tipoGrupoRelijioso' => $request->get('tipoGrupoRelijioso'),
            'voluntariadoOGrupoComunidad' => $request->get('voluntariadoOGrupoComunidad'),
            'tipoDeGrupoVoluntariado' => $request->get('tipoDeGrupoVoluntariado'),
            'grupoAutoayuda' => $request->get('grupoAutoayuda'),
            'tipoDeGrupoAutoayuda' => $request->get('tipoDeGrupoAutoayuda'),
            'organizacionCondiscapacidad' => $request->get('organizacionCondiscapacidad'),
            'tipoOrganizacionConDiscapacidad' => $request->get('tipoOrganizacionConDiscapacidad'),
            'participacionPolitica' => $request->get('participacionPolitica'),
            'tipoParticipacionPolitica' => $request->get('tipoParticipacionPolitica'),
        ]);

        $data->save();

        $data2 = new Seguimiento2([
            'aseguramiento' => $request->get('aseguramiento'),
            'eps' => $request->get('eps'),
            'requerimientoCanalizacion' => $request->get('requerimientoCanalizacion'),
            'tipoDeServicio' => $request->get('tipoDeServicio'),
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
            'protegeTuVida' => $request->get('protegeTuVida'),
            'habitos' => $request->get('habitos'),
            'comnicacionAsertiva' => $request->get('comnicacionAsertiva'),
            'manejoConflictos' => $request->get('manejoConflictos'),
            'buenAutoestima' => $request->get('buenAutoestima'),
            'tiempoLibre' => $request->get('tiempoLibre'),
            'buenTrato' => $request->get('buenTrato'),
            'paciente_id' => $request->get('pacienteID'),
            'seguimientos_id' => $data->id,
        ]);

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
