<?php

namespace App\Http\Controllers;

use App\Leccion;
use Illuminate\Http\Request;
use App\Nivel;

class LeccionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index1()
    {
        return  Leccion::with([
            'nivel'
        ])->get();
    }

    public function index(Nivel $nivele)
    {
        $nivele->load(['lecciones']);
        $lecciones= $nivele->lecciones;
        return $lecciones;

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $niveles = Nivel::all();
        return view('lecciones.crearleccion', compact('niveles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $leccion= new Nivel();
        $leccion->leccion = $request['leccion'];
        $leccion->descripcion = $request['descripcion'];
        $leccion->nivel_id = $request['nivel_id'];
        $leccion->save();
        return redirect('lecciones/lista');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Leccion  $leccion
     * @return \Illuminate\Http\Response
     */
    public function show(Leccion $leccion)
    {
        return $leccion;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Leccion  $leccion
     * @return \Illuminate\Http\Response
     */
    public function edit(Leccion $leccion)
    {
        $niveles = Nivel::all();
        return view('lecciones.editarleccion',['leccion' => $leccion], compact('niveles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Leccion  $leccion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Leccion $leccion)
    {
        $leccion->leccion = $request['leccion'];
        $leccion->descripcion = $request['descripcion'];
        $leccion->nivel_id = $request['nivel_id'];
        $leccion->save();
        return redirect('lecciones/lista');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Leccion  $leccion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Leccion $leccion)
    {
        $leccion->delete();
        return redirect('lecciones/lista');
    }

    public function list(){

        $rs = $this->index1();
        return view('lecciones.listaleccion',['rs' => $rs]);

    }
}
