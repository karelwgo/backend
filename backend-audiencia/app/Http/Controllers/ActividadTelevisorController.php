<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ActividadTelevisor;

class ActividadTelevisorController extends Controller
{
    public function index()
    {
        $actividad = ActividadTelevisor::all();

        return response()->json(['success' => true, 'data'=>$actividad]); 
    }

    public function store(Request $request)
    {
        $actividades = ActividadTelevisor::create($request->all());
        return response()->json(['success' => true, 'data'=>$actividades]);
    }

    public function show($id)
    {
        $actividades = ActividadTelevisor::findOrFail($id);
        return response()->json(['success' => true, 'data'=>$actividades]);
    }

    
    public function update(Request $request, $id)
    {
        $actividadTelevisor = ActividadTelevisor::findOrFail($id);
        $actividadTelevisor->update($request->all());

        return response()->json(['success' => true, 'data'=>$actividadTelevisor]);
    }
}
