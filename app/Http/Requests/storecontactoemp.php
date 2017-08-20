<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class storecontactoemp extends FormRequest
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
            'empleado'            => 'required',
            'email'               => 'required|max:80|unique:contactoemp,email',
            'telefono'            => 'required|min:7|max:10|unique:contactoemp,telefono',
            'extencion'           => 'required|max:7|unique:contactoemp,estencion',
            'Movil'               => 'required|min:7|max:10|unique:contactoemp,movil'
        ];
    }
}
