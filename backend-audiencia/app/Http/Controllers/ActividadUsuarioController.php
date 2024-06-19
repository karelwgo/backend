<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ActividadUsuario;

class ActividadUsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $actividad = ActividadUsuario::all();
        return response()->json(['success' => true, 'data'=>$actividad]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $actividades = ActividadUsuario::create($request->all());
        return response()->json(['success' => true, 'data'=>$actividades]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $actividades = ActividadUsuario::findOrFail($id);
        return response()->json(['success' => true, 'data'=>$actividades]);
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
        $actividadUsuario = ActividadUsuario::findOrFail($id);
        $actividadUsuario->update($request->all());

        return response()->json(['success' => true, 'data'=>$actividadUsuario]);
    }

}
