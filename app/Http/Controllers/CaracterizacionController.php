<?php

namespace App\Http\Controllers;

use App\Caracterizacion;
use App\CaracterizacionDos;
use App\Paciente;
use http\Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CaracterizacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

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
        try {
        $data1 = new Caracterizacion([
            'nombreCompleto' => $request->get('nombreCompleto'),
            'tipoDocumento' => $request->get('tipoDocumento'),
            'documentoIdentidad' => $request->get('documentoIdentidad'),
            'direccionResidencia' => $request->get('direccionResidencia'),
            'telefono' => $request->get('telefono'),
            'fechaNacimiento' => $request->get('fechaNacimiento'),
            'genero' => $request->get('genero'),
            'areaQueHabita' => $request->get('areaQueHabita'),
            'discapacitado' => $request->get('discapacitado'),
            'desplazado' => $request->get('desplazado'),
            'poblacionInfantil' => $request->get('poblacionInfantil'),
            'carcelario' => $request->get('carcelario'),
            'victima' => $request->get('victima'),
            'gestante' => $request->get('gestante'),
            'desmovilizado' => $request->get('desmovilizado'),
            'enfoquepoblacional' => $request->get('enfoquepoblacional'),
            'escolaridad' => $request->get('escolaridad'),
            'considerarCapacitarse' => $request->get('considerarCapacitarse'),
            'enQueCapacitar' => $request->get('enQueCapacitar'),
            'ocupacion' => $request->get('ocupacion'),
            'ingresosMensuales' => $request->get('ingresosMensuales'),
            'cuentaBancaria' => $request->get('cuentaBancaria'),
            'recibeAyudaEconomica' => $request->get('recibeAyudaEconomica'),
            'programaDeAyudaEconomica' => $request->get('programaDeAyudaEconomica'),
            'estadoCivil' => $request->get('estadoCivil'),
            'hijos' => $request->get('hijos'),
            'cantidadHijos' => $request->get('cantidadHijos'),
            'dependienteIndependiente' => $request->get('dependienteIndependiente'),
            'deporte' => $request->get('deporte'),
            'tipoDeporte' => $request->get('tipoDeporte'),
            'reunionesFamiliares' => $request->get('reunionesFamiliares'),
            'razonReunion' => $request->get('razonReunion'),
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
            'diagnosticoCIE' => $request->get('diagnosticoCIE'),
            'estadoDeEnfermedad' => $request->get('estadoDeEnfermedad'),
        ]);

            $data1->save();





            $data2 = new CaracterizacionDos([
                'hijo' => $request->get('hijo'),
                'madre' => $request->get('madre'),
                'psicologia' => $request->get('psicologia'),
                'terapiaOcipacional' => $request->get('terapiaOcipacional'),
                'nutricion' => $request->get('nutricion'),
                'otraEspecialidadTratamientoTerapeutico' => $request->get('otraEspecialidadTratamientoTerapeutico'),
                'nombreTratamientoFarmacologico' => $request->get('nombreTratamientoFarmacologico'),
                'medicinaGeneral' => $request->get('medicinaGeneral'),
                'psiquiatra' => $request->get('psiquiatra'),
                'enfermeria' => $request->get('enfermeria'),
                'aseguramiento' => $request->get('aseguramiento'),
                'entidadAseguradora' => $request->get('entidadAseguradora'),
                'nombreIPS' => $request->get('nombreIPS'),
                'nombreCuidador' => $request->get('nombreCuidador'),
                'telefonoCuidador' => $request->get('telefonoCuidador'),
                'edadCuidador' => $request->get('edadCuidador'),
                'generoCuidador' => $request->get('generoCuidador'),
                'estadoCivilCuidador' => $request->get('estadoCivilCuidador'),
                'cantidadPersonasACargo' => $request->get('cantidadPersonasACargo'),
                'parentescoCuidador' => $request->get('parentescoCuidador'),
                'ocupacionCuidador' => $request->get('ocupacionCuidador'),
                'escolaridadCuidador' => $request->get('escolaridadCuidador'),
                'entidadAseguradoraCuidador' => $request->get('entidadAseguradoraCuidador'),
                'problemasFrecuentes' => $request->get('problemasFrecuentes'),
                'observaciones' => $request->get('observaciones'),
                'requerimientoCanalizacion' => $request->get('requerimientoCanalizacion'),
                'tipoDeServicio' => $request->get('tipoDeServicio'),
                'paciente_id' => $request->get('pacienteID'),
                'caracterizacion_id' => $data1->id,
            ]);

            $data2->save();


            $crud = Paciente::find($request->get('pacienteID'));

            $crud->visita = $request->get('estadoVisita');
            $crud->save();



            return $crud;
        } catch (ModelNotFoundException $exception) {
            return 2;
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = DB::table('caracterizacion_dos')->select('observaciones','tipoDeServicio')->where('paciente_id','=',$id)->get();
        return $data;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = DB::table('caracterizacions')
            ->join('caracterizacion_dos','caracterizacions.id','=','caracterizacion_dos.caracterizacion_id')
            ->select('*')->where('caracterizacion_dos.paciente_id','=',$id)->get();
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

