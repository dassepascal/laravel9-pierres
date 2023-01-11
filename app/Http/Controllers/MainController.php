<?php

namespace App\Http\Controllers;

use App\Models\Stone;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home(){


        return view('home',[

        ]);

    }

    public function indexStones()
    {

        $stones = Stone::paginate(4);

        return view('stones',[
            'stones'=>$stones
        ]);
    }
    public function show( Stone $stone){
        // $stone = Stone::where('slug', $slug)->firstOrFail();

        return view('stone',[
            'stone'=>$stone,
        ]);
    }
   
}
