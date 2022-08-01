<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AcquisitionRequest extends FormRequest
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
            'date_max' => 'required',
            'description' => 'required|string|max:255',
        ];
    }

    public function messages()
    {
        return [
            'date_max.required'     => 'Debe ingresar una fecha limite',
            
            'description.required'  => 'Debe ingresar una description Valida',
            'description.max'       => 'Debe tener como maximo 255 Caracteres',
        ];
    }
}
