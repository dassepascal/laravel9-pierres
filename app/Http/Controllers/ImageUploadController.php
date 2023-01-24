<?php

namespace App\Http\Controllers;

use App\Models\Postimage;
use Illuminate\Http\Request;

class ImageUploadController extends Controller
{
      //Add image
      public function addImage(){
        return view('add_image');
    }
    //Store image
    public function storeImage(Request $request){
        //$name =Storage::disk('local')->put('images', $request->image);

        $data= new Postimage();
        $data->name=$request->input('name');

        if($request->file('image')){
            $file= $request->file('image');
            $filename= $file->getClientOriginalName();
            $file-> move(public_path('/Images'), $filename);
            $data['image']= $filename;
        }
        $data->save();
        return redirect()->route('images.view');

    }
		//View image
        public function viewImage(){
            $imageData= Postimage::all();
            return view('Image.view_image', compact('imageData'));
        }
}
