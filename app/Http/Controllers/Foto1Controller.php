<?php

namespace App\Http\Controllers;

use App\Paciente;
use App\Semaforo;
use App\VisitaDos;
use App\VisitaTres;
use App\VisitaUno;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class Foto1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('users')
            ->join('municipios','users.municipio_id','=','municipios.id')
            ->join('semaforos','users.id','=','semaforos.profecional_id')
            ->select('users.*','municipios.municipio','semaforos.numero_visitas','semaforos.numero_dias','semaforos.fecha')
            ->where('users.rol_id','=',2)->get();

        for($i = 0; $i<sizeof($data); $i++ ) {
            $ldate = date('Ymd H:i:s');
            $fechaEmision = Carbon::parse($data[$i]->fecha);
            $fechaExpiracion = Carbon::parse($ldate);

            $diasDiferencia = $fechaExpiracion->diffInDays($fechaEmision);
            $diasasignados = $data[$i]->numero_dias;
            if ($diasDiferencia == 0 || $diasDiferencia == 0){
                $diaspor = 0;
            }else{
                $diaspor = ($diasDiferencia/$diasasignados * 100 );
            }
            $v1 = count($productos = VisitaUno::where("profecional_id", $data[$i]->id)->get());
            $v2 = count($productos = VisitaDos::where("profecional_id", $data[$i]->id)->get());
            $v3 = count($productos = VisitaTres::where("profecional_id", $data[$i]->id)->get());

            $visitasasignada = $data[$i]->numero_visitas;
            $visitas = $v1 + $v2 + $v3;
            if ($visitasasignada == 0 || $visitas == 0){
                $visitaspor = 0;
            }else{
                $visitaspor = ($visitas/$visitasasignada * 100 );
            }

            /*return $visitaspor;*/

            $productos = Semaforo::where("profecional_id", $data[$i]->id)->first();
            $productos->visitas = $visitaspor;
            $productos->dias = $diaspor;
            $productos->visitasrealizadas = $visitas;
            $productos->save();

        }

        $data = DB::table('users')
            ->join('municipios','users.municipio_id','=','municipios.id')
            ->join('semaforos','users.id','=','semaforos.profecional_id')
            ->select('users.*','municipios.municipio','semaforos.visitas','semaforos.visitasrealizadas','semaforos.numero_visitas','semaforos.dias','semaforos.numero_dias','semaforos.fecha')
            ->where('users.rol_id','=',2)->get();

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

       /* return $request;*/
        $nombre = 'null.jpg';

        if ($request->file('foto1') != null){
            //obtenemos el campo file definido en el formulario
            $file = $request->file('foto1');

            //obtenemos el nombre del archivo
            $nombreOriginal = $file->getClientOriginalName();

            $now = new \DateTime();
            $now = $now->format('d-m-Y'); // for example

            $randon = rand(0000000000,9999999999);

            $nombre = $now.$randon.$nombreOriginal;

            //indicamos que queremos guardar un nuevo archivo en el disco local
            $path = public_path() . '/storage/images/visitauno';
            $file->move($path, $nombre);

        }


        if ($request->file('foto2') != null){
            //obtenemos el campo file definido en el formulario
            $file2 = $request->file('foto2');

            //obtenemos el nombre del archivo
            $nombreOriginal = $file2->getClientOriginalName();

            $now = new \DateTime();
            $now = $now->format('d-m-Y'); // for example

            $randon = rand(0000000000,9999999999);

            $nombre2 = $now.$randon.$nombreOriginal;

            //indicamos que queremos guardar un nuevo archivo en el disco local
            $path = public_path() . '/storage/images/visitauno';
            $file2->move($path, $nombre2);
        }

        $crud = VisitaUno::find($request->get('pacienteID'));
        /*return $crud;*/
        $crud->foto1 = $nombre;
        $crud->foto2 = $nombre2;
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
        $data = DB::table('users')
            ->join('municipios','users.municipio_id','=','municipios.id')
            ->join('semaforos','users.id','=','semaforos.profecional_id')
            ->select('users.*','municipios.municipio','semaforos.visitas','semaforos.visitasrealizadas','semaforos.numero_visitas','semaforos.dias','semaforos.numero_dias','semaforos.fecha')
            ->where('users.rol_id','=',2)
            ->where('users.id','=',$id)->get();

        return $data;

//        return $id;
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
