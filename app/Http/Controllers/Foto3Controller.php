<?php

namespace App\Http\Controllers;

use App\VisitaTres;
use Illuminate\Http\Request;

class Foto3Controller extends Controller
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
            $path = public_path() . '/storage/images/visitatres';
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
            $path = public_path() . '/storage/images/visitatres';
            $file2->move($path, $nombre2);
        }

        $crud = VisitaTres::find($request->get('pacienteID'));
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
