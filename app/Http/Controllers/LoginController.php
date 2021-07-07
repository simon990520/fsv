<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use mysql_xdevapi\Exception;

class LoginController extends Controller
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
        try {

            $document = $request['username'];
            $password = md5($request['password']);


            $data = DB::table('users')
                ->select('*')
                ->where('username','=',$document)
                ->where('password','=',$password)
                ->get();

            $m1 = [
                ['titulo' => 'Principal',
                    'icono' => 'nav-icon fab fa-500px',
                    'submenu' => [[
                        'titulo' => 'Inicio', 'url' => '/dashboard'
                    ]]],
                ['titulo' => 'Visitas',
                    'icono' => 'nav-icon fas fa-handshake',
                    'submenu' => [[
                        'titulo' => 'Pacientes', 'url' => '/pacientes'
                    ]]],
                ['titulo' => 'Mantenimientos',
                    'icono' => 'nav-icon fas fa-address-cardv',
                    'submenu' => [[
                        'titulo' => 'Crear Paciente', 'url' => '/newPaciente'
                    ],
                    [
                         'titulo' => 'Crear User', 'url' => '/newUser'
                    ]]],
            ];
            $m2 = [
                ['titulo' => 'Principal',
                    'icono' => 'nav-icon fab fa-500px',
                    'submenu' => [[
                        'titulo' => 'Inicio', 'url' => '/dashboard'
                    ]]],
                ['titulo' => 'Mantenimientos',
                    'icono' => 'nav-icon fas fa-address-card',
                    'submenu' => [[
                        'titulo' => 'Crear Paciente', 'url' => '/paciente/nuevo'
                    ],
                        [
                            'titulo' => 'Crear User', 'url' => '/usuario/nuevo'
                        ],
                        [
                            'titulo' => 'Usuarios', 'url' => '/usuarios'
                        ],
                        [
                        'titulo' => 'Pacientes', 'url' => '/pacientes'
                    ]]],
            ];

            $m3 = [
                ['titulo' => 'Principal',
                    'icono' => 'nav-icon fab fa-500px',
                    'submenu' => [[
                        'titulo' => 'Inicio', 'url' => '/dashboard'
                    ]]],
                ['titulo' => 'Visitas',
                    'icono' => 'nav-icon fas fa-handshake',
                    'submenu' => [
                        [
                            'titulo' => 'Pacientes', 'url' => '/pacientes'
                        ],
                        [
                            'titulo' => 'Crear Paciente', 'url' => '/paciente/nuevo'
                        ],
                    ]
                ],
            ];

            if ($data[0]->rol_id == 1){
                $menu = $m2;
            }elseif($data[0]->rol_id == 2){
                $menu = $m3;
            }else{
                $menu = $m1;
            }

            return response()
                ->json(['user' => $data, 'menu' => $menu]);
        } catch (Exception $e) {
            return  $e;
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
