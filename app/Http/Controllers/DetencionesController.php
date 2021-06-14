<?php

namespace App\Http\Controllers;

use App\Models\Detencion;
use Illuminate\Http\Request;

class DetencionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return "este es el index de detenciones";
    }

    public function DetencionesListaFiltro(Request $request)
    {   
        if($request->equipo_id == '1000'){
            return Detencion::where('fecha',$request->fecha)
                        ->where('turno',$request->turno)
                        ->with('equipo')
                        ->with('motivo')
                        ->with('submotivo')
                        ->with('imputacion')
                        ->with('tag')
                        ->get();
        }
        return Detencion::where('fecha',$request->fecha)
                        ->where('turno',$request->turno)
                        ->where('equipo_id',$request->equipo_id)
                        ->with('equipo')
                        ->with('motivo')
                        ->with('submotivo')
                        ->with('imputacion')
                        ->with('tag')
                        ->get();
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
        $detencion = new Detencion($request->all());
        $detencion->save();
        return;
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
