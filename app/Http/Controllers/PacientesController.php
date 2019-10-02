<?php

namespace App\Http\Controllers;

use App\Paciente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PacientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       //
    }

    public function get(Request $request)
    {

        return $request;
        $id =  $request[0];
        $data = DB::table('pacientes')->select('*')->where('profecional_id','=',$id)->get();
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
        $data = new Paciente([
            'nombre' => $request->get('nombre'),
            'tipoDocumento' => $request->get('tipoDocumento'),
            'numeroDocumento' => $request->get('documento'),
            'direccion' => $request->get('direccion'),
            'telefono' => $request->get('telefono'),
            'visita' => '1',
            'municipio_id' => $request->get('municipio'),
            'sexo_paciente' => $request->get('genero'),
            'estado_civil' => $request->get('estadoCivil'),
            'fecha_nacimiento' => $request->get('fechaNacimiento'),
            'nivel_escolaridad' => $request->get('escolaridad'),
            'poblacion' => $request->get('poblacion'),
            'year' => '2019',
            'linea' => '1',
            'profecional_id' => $request->get('profesional'),
        ]);

        $data->save();
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
        $data = DB::table('pacientes')->select('*')->where('municipio_id','=',$id)->get();
        return $data;
    }

    public function optenerp($id)
    {
        $data = DB::table('pacientes')->select('*')->where('id','=',$id)->get();
        return $data;
    }

    public function buscarPacientes($termino, $idProfesional)
    {
        $data = DB::table('pacientes')->select('*')
            ->where('nombre','LIKE', "%$termino%")
            ->where('profecional_id','=', $idProfesional)
            ->get();
        return $data;
    }

    public function buscarAllPacientes($termino)
    {
        $data = DB::table('pacientes')->select('*')
            ->where('nombre','LIKE', "%$termino%")
            ->get();
        return $data;
    }

    public function allPacientes()
    {
        $data = DB::table('pacientes')
            ->join('users','pacientes.profecional_id','=','users.id')
            ->select('users.*', 'users.id as uid', 'pacientes.*')->get();
//            ->select('*')->get();
        return $data;

//        $data = DB::table('users')
//            ->join('municipios','users.municipio_id','=','municipios.id')
//            ->join('semaforos','users.id','=','semaforos.profecional_id')
//            ->select('users.*','municipios.municipio','semaforos.visitas','semaforos.visitasrealizadas','semaforos.numero_visitas','semaforos.dias','semaforos.numero_dias','semaforos.fecha')
//            ->where('users.rol_id','=',2)
//            ->where('users.id','=',$id)->get();
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
