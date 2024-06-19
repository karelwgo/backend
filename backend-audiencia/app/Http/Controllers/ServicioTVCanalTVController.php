<?php

namespace App\Http\Controllers;

use App\Models\ServicioTV;
use Illuminate\Http\Request;
use App\Models\ServicioTVCanalTV;

class ServicioTVCanalTVController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $servicio = ServicioTVCanalTV::all();
        return response()->json(['success'=>true,'data'=>$servicio]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $servicio = ServicioTVCanalTV::create($request->all());
        
        return response()->json(['success'=>true,'data'=>$servicio]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $servicio = ServicioTVCanalTV::findOrFail($id);

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
        $servicio = ServicioTVCanalTV::findOrFail($id);
        $servicio->update($request->all());

        return response()->json(['success'=>true,'data'=>$servicio]);
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
