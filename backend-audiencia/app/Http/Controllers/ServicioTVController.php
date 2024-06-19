<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ServicioTV;

class ServicioTVController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $servicio = ServicioTV::all();

        return response()->json(['success' => true, 'response'=> $servicio]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $servicio = ServicioTV::create($request->all());

        return response()->json(['success'=>true, 'data'=>$servicio]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $servicio = ServicioTV::findOrFail($id);

        return response()->json(['success'=>true,'data'=>$servicio]);
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
        $servicio = ServicioTV::findOrFail($id);
        $servicio->update($request->all());

        return response()->json(['success'=>true, 'data'=>$servicio]);
    }
}
