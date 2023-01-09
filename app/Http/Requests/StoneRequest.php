<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoneRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name'=>'required|min:3|max:50',
            'composition_chimique'=>'required|min:6|max:100',
            'density'=>'required|max:1',
            'hardness'=>'required|max:1',
            'chakra'=>'required|max:100',
            'system_cristalin'=>'required|max:1',
            'origin'=>'required|max:10',
            'scarcity'=>'required|max:1',
            'propertie'=>'required|max:255',
            'purification'=>'required|max:20',

            //todo
            //'image'=>'required',

        ];
    }
}
