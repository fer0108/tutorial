<?php

namespace App\Http\Controllers;

use App\Nivel;
use Illuminate\Http\Request;
use App\Curso;

class NivelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index1()
    {
        return Nivel::with([
            'curso'
        ])->get();
    }

    public function index(Curso $curso)
    {

        $curso->load(['niveles']);
        $niveles= $curso->niveles;
        return $niveles;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cursos = Curso::all();
        return view('niveles.crearnivel', compact('cursos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nivel=new Nivel();
        $nivel->nivel = $request['nivel'];
        $nivel->descripcion = $request['descripcion'];
        $nivel->curso_id = $request['curso_id'];
        $nivel->save();
        return redirect('cursos/lista');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Nivel  $nivel
     * @return \Illuminate\Http\Response
     */
    public function show(Nivel $nivel)
    {
        return $nivel;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Nivel  $nivel
     * @return \Illuminate\Http\Response
     */
    public function edit(Nivel $nivel)
    {
        $cursos = Curso::all();
        return view('niveles.crearnivel', ['nivel'=> $nivel], compact('cursos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Nivel  $nivel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Nivel $nivel)
    {
        $nivel->nivel = $request['nivel'];
        $nivel->descripcion = $request['descripcion'];
        $nivel->curso_id = $request['curso_id'];
        $nivel->save();
        return redirect('cursos/lista');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Nivel  $nivel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Nivel $nivel)
    {
        $nivel->delete();
        return redirect('cursos/lista');

    }

    public function list(){

        $rs = $this->index1();
        return view('niveles.listanivel', ['rs' => $rs]);
    }
}
