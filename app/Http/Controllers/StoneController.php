<?php

namespace App\Http\Controllers;

use App\Models\Stone;
use Illuminate\Http\Request;

class StoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stones = Stone::paginate(7);

        return view('stones.index', [
            'stones'=>$stones,

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('stones.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Stone::create([
            'name'=>$request->input('name'),
            'composition_chimique'=>$request->input('composition_chimique'),
            'density'=>$request->input('density'),
            'hardness'=>$request->input('hardness'),
            'chakra'=>$request->input('chakra'),
            'system_cristalin'=>$request->input('system_cristalin'),
            'origin'=>$request->input('origin'),
            'scarcity'=>$request->input('scarcity'),
            'properties'=>$request->input('properties'),
            'purification'=>$request->input('purification'),
            'image'=>$request->input('image'),



        ]);
        return redirect()->route('stones.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Stone  $stone
     * @return \Illuminate\Http\Response
     */
    public function show(Stone $stone)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Stone  $stone
     * @return \Illuminate\Http\Response
     */
    public function edit(Stone $stone)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Stone  $stone
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Stone $stone)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Stone  $stone
     * @return \Illuminate\Http\Response
     */
    public function destroy(Stone $stone)
    {
        //
    }
}
