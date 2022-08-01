<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DepartmentRequest extends FormRequest
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
            'name'    => 'required|alpha|min:2',
            'description' => 'required|string|max:255',
        ];
    }

    public function messages()
    {
        return [
            'name.required'                 => 'Debe ingresar un Nombre',
            'name.alpha'                    => 'El nombre solo puede contener letras',
            'name.min'                      => 'El nombre debe tener minimo 2 letras',

            'description.required'              => 'Debe ingresar una description Valida',
            'description.max'                   => 'Debe tener como maximo 255 Caracteres',
        ];
    }
}
