<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class storeciudad extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'codigo'      =>  'required|min:5|max:5|unique:ciudades,codciudad',
            'descripcion' =>  'required|min:3|unique:ciudades,nameciudad',
            'lista'       =>  'required'
        ];
    }
}
