<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NuevoArticuloRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'titulo'=>'required|max:100',
            'descripcion'=>'required|max:200',
            'cuerpo'=>'required'
        ];
    }
}
