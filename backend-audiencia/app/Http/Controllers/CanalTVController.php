<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CanalTV;

class CanalTVController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $chanel = CanalTV::all();
        return response()->json(['success' => true, 'data'=>$chanel]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $chanel = CanalTV::create($request);
        return response()->json(['success' => true, 'data'=>$chanel]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $chanel = CanalTV::findOrFail($id);
        return response()->json(['success' => true, 'data'=>$chanel]);
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
        $chanel = CanalTV::findOrFail($id);
        $chanel->update($request->all());

        return response()->json(['success' => true, 'data'=>$chanel]);
    }

}
