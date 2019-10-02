<?php

namespace App\Http\Controllers;

use App\Paciente;
use App\VisitaUno;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VisitaUnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $id = $request->get('pacienteID');
        $data = DB::table('visita_unos')->select('*')->where('id','=',$id)->get();
        return $data;
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

        /*return $request->get('profesionalID');*/
        $data = new VisitaUno([
        'nombrePaciente' => $request->get('nombrePaciente'),
        'tipoDocumento' => $request->get('tipoDocumento'),
        'numeroIdentidad' => $request->get('numeroIdentidad'),
        'nombreCuidador' => $request->get('nombreCuidador'),
        'direccion' => $request->get('direccion'),
        'desarrolloCanalizadoA' => $request->get('desarrolloCanalizadoA'),
        'primeraFecha' => $request->get('primeraFecha'),
        'segundaFecha' => $request->get('primeraFecha'),
        'terceraFecha' => $request->get('terceraFecha'),
        'planConcertado' => $request->get('planConcertado'),
        'paciente_id' => $request->get('pacienteID'),
        'profecional_id' => $request->get('profesionalID'),
    ]);

        /*return $data;*/

        $data->save();

        $crud = Paciente::find($request->get('pacienteID'));
        $crud->visita = $request->get('estadoVisita');
        $crud->save();



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
        $data = VisitaUno::find($id);
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
        return $request->get('foto1');
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
