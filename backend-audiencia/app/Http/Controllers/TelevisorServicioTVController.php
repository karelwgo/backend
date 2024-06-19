<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TelevisorServicioTV;

class TelevisorServicioTVController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tele = TelevisorServicioTV::all();
        return response()->json(['success'=>true,'data'=>$tele]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tele = TelevisorServicioTV::create($request->all());
        return response()->json(['success'=>true,'data'=>$tele]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tele = TelevisorServicioTV::findOrFail($id);
        return response()->json(['success'=>true,'data'=>$tele]);
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
        $tele = TelevisorServicioTV::findOrFail($id);
        $tele->update($request->all());

        return response()->json(['success'=>true,'data'=>$tele]);
    }

}
