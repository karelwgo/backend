<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ActividadDispositivo;

class ActividadDispositivoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $actividades = ActividadDispositivo::all();

        return response()->json(['success' => true, 'data'=>$actividades]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $actividades = ActividadDispositivo::create($request->all()); 
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
        $actividades = ActividadDispositivo::findOrFail($id);
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
        $actividadDispositivo = ActividadDispositivo::findOrFail($id);
        $actividadDispositivo->update($request->all());
        
        return response()->json(['success' => true, 'data'=>$actividadDispositivo]);
    }

}
