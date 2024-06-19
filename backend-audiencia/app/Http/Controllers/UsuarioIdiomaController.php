<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UsuarioIdioma;

class UsuarioIdiomaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuario = UsuarioIdioma::all();
        return response()->json(['success'=>true,'data'=>$usuario]);
    }

    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $usuario = UsuarioIdioma::create($request->all());
        return response()->json(['success'=>true,'data'=>$usuario]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $usuario = UsuarioIdioma::findOrFail($id);
        return response()->json(['success'=>true,'data'=>$usuario]);
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
        $usuario = UsuarioIdioma::findOrFail($id);
        $usuario->update($request->all());

        return response()->json(['success'=>true,'data'=>$usuario]);
    }
}
