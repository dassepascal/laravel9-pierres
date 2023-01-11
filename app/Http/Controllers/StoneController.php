<?php

namespace App\Http\Controllers;

use App\Models\Stone;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Manager\StoneManager;
use App\Http\Requests\StoneRequest;

class StoneController extends Controller
{
    /**
     * definition  StoneController build
     * service
     * class
     * injected
     */

    private $stoneManager;
    public function __construct(StoneManager $stoneManager)
    {
        $this->stoneManager = $stoneManager;
    }
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
        return view('stones.create',[
            'categories'=>Category::all(),
        ]);
    }

    /**
     * Undocumented function
     *
     * @param StoneRequest $request
     * @return void
     */
    public function store(StoneRequest $request)
    {
        $validated = $request->validated();
        $this->stoneManager->build(new Stone(), $request);

        // Stone::create([
        //     'name'=>$request->input('name'),
        //     'composition_chimique'=>$request->input('composition_chimique'),
        //     'density'=>$request->input('density'),
        //     'hardness'=>$request->input('hardness'),
        //     'chakra'=>$request->input('chakra'),
        //     'system_cristalin'=>$request->input('system_cristalin'),
        //     'origin'=>$request->input('origin'),
        //     'scarcity'=>$request->input('scarcity'),
        //     'properties'=>$request->input('properties'),
        //     'purification'=>$request->input('purification'),
        //     'image'=>$request->input('image'),
        // ]);
        return redirect()->route('stones.index')->with('success', "La pierre a bien été enregistré !");
        // return redirect()->route('stones.index')->with('success', 'la pierre a bien été enregistré');
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
        return view('stones.edit', [
            'stone'=> $stone,
            'categories'=> Category::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Stone  $stone
     * @return \Illuminate\Http\Response
     */
    public function update(StoneRequest $request, Stone $stone)
    {

$this->stoneManager->build($stone, $request);

        //dd($stone);
        //dd($this->stoneManager);



        // dd(get_class_methods($this->stoneManager));
        // $stone->name = $request->input('name');
        // $stone->composition_chimique = $request->input('composition_chimique');
        // $stone->density = $request->input('density');
        // $stone->hardness = $request->input('hardness');
        // $stone->chakra = $request->input('chakra');
        // $stone->system_cristalin = $request->input('system_cristalin');
        // $stone->origin = $request->input('origin');
        // $stone->scarcity = $request->input('scarcity');
        // $stone->properties = $request->input('properties');
        // $stone->purification = $request->input('purification');

        // $stone->save();
        return redirect()->route('stones.index')->with('success', "La pierre a bien modifié !");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Stone  $stone
     * @return \Illuminate\Http\Response
     */
    public function delete(Stone $stone)
    {
        $stone->delete();
        return redirect()->route('stones.index')->with('success', 'la pierre a bien été supprimer');
    }
}
