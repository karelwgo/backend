<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dispositivo;

class DispositivoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $disp =  Dispositivo::all();
        return response()->json(['success' => true, 'data'=>$disp]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $disp = Dispositivo::create($request->all());
        return response()->json(['success' => true, 'data'=>$disp]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $disp = Dispositivo::findOrFail($id);
        return response()->json(['success' => true, 'data'=>$disp]);
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
        $disp = Dispositivo::findOrFail($id);
        $disp->update($request->all());

        return response()->json(['success' => true, 'data'=>$disp]);
    }

}
