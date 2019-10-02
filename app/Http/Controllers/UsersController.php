<?php

namespace App\Http\Controllers;

use App\Semaforo;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use mysql_xdevapi\Exception;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = DB::table('users')->select('*')->get();
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
        try {
            $data = new User([
                'name' => $request->get('nombre'),
                'username' => $request->get('username'),
                'email' => $request->get('email'),
                'img' => $request->get('img'),
                'document' => $request->get('documento'),
                'phone' => $request->get('telefono'),
                'password' => md5($request->get('password')),
                'municipio_id' => $request->get('municipio'),
                'rol_id' => $request->get('rol'),
            ]);

            $data->save();

            $semaforo = new Semaforo([
                'numero_visitas' => '0',
                'numero_dias' => '0',
                'visitasrealizadas' => '0',
                'visitas' => '0',
                'dias' => '0',
                'profecional_id' => $data->id,
            ]);


            $semaforo->save();

            return  $data;
        } catch (Exception $e) {
            echo 'Excepción capturada: ',  $e->getMessage(), "\n";
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
        $data = User::find($id);
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
        $data = User::find($id);
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
        try{
            $data = User::find($id);

            $data->name = $request->get('name');
            $data->email = $request->get('email');
            $data->document = $request->get('document');
            $data->phone = $request->get('phone');
            $data->password = md5($request->get('password'));
            $data->municipio_id = $request->get('municipio_id');
            $data->rol_id = $request->get('rol_id');

            dd($data);
            $data->save();
            return redirect('/crud');
        }catch (Exception $e){

        }
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
