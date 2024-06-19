<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Televisor;


class TelevisorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tele = Televisor::all();

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
        $tele = Televisor::create($request->all());

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
        $tele = Televisor::findOrFail($id);

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
        $tele = Televisor::findOrFail($id);
        $tele->update($request->all());

        return response()->json(['success'=>true,'data'=>$tele]);
    }
}