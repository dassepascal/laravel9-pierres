<?php

namespace App\Manager;

use App\Models\Stone;
use App\Http\Requests\StoneRequest;

class StoneManager
{

    public function build(Stone $stone, StoneRequest $request){
       // dd('request',$request->all());
        $stone->name = $request->input('name');
        $stone->composition_chimique = $request->input('composition_chimique');
        $stone->density = $request->input('density');
        $stone->hardness = $request->input('hardness');
        $stone->chakra = $request->input('chakra');
        $stone->system_cristalin = $request->input('system_cristalin');
        $stone->origin = $request->input('origin');
        $stone->scarcity = $request->input('scarcity');
        $stone->properties = $request->input('properties');
        $stone->purification = $request->input('purification');
        $stone->category_id = $request->input('category');

        $stone->save();
    }
}
