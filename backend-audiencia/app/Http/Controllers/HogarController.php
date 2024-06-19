<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hogares;

class HogarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $home = Hogares::all();
        return response()->json(['success' => true, 'data'=>$home]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $home = Hogares::create($request->all());
        return response()->json(['success' => true, 'data'=>$home]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $home = Hogares::findOrFail($id);
        return response()->json(['success' => true, 'data'=>$home]);   
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
        $home = Hogares::findOrFail($id);
        $home->update($request->all());

        return response()->json(['success' => true, 'data'=>$home]);
    }
}