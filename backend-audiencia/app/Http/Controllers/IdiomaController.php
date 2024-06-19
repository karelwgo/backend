<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Idioma;

class IdiomaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $idiomas = Idioma::all();
        return response()->json(['success' => true, 'data'=>$idiomas]); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $idiomas = Idioma::create($request->all());
        return response()->json(['success' => true, 'data'=>$idiomas]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $idiomas = Idioma::findOrFail($id);
        return response()->json(['success' => true,'data' => $idiomas]);
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
        $idiomas = Idioma::findOrFail($id);
        $idiomas ->update($request->all());

        return response()->json(['success' => true, $idiomas]);
    }

}
