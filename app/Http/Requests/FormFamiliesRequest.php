<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormFamiliesRequest extends FormRequest
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
            'familyMembers'                       => 'present|array',
            'familyMembers.*.name'                => 'required|alpha|min:2',
            'familyMembers.*.lastname'            => 'required|alpha|min:2',
            'familyMembers.*.tipo_identification' => 'required',
            'familyMembers.*.identification'      => 'required|numeric|unique:families,identification',
            'familyMembers.*.type'                => 'required',
        ];
    }

    public function messages()
    {
        return[

            'familyMembers.*.name.required' => 'Ingrese el nombre del Familiar',
            'familyMembers.*.name.alpha'    => 'El nombre solo debe contener Letras',
            'familyMembers.*.name.min'      => 'El nombre debe tener minimo 2 Caracteres',

            'familyMembers.*.lastname.required' => 'Ingrese el apellido del Familiar',
            'familyMembers.*.lastname.alpha'    => 'El apellido solo debe contener Letras',
            'familyMembers.*.lastname.min'      => 'El apellido debe tener minimo 2 Caracteres',

            'familyMembers.*.tipo_identification.required' => 'Debe elegir la Nacionalidad',

            'familyMembers.*.identification.required' => 'Debe Ingresar el numero de Identificacion',
            'familyMembers.*.identification.numeric' => 'Este campo solo acepta caracteres de tipo numerico',
            'familyMembers.*.identification.unique' => 'Esta identificacion ya existe en nuesta base de datos',

            'familyMembers.*.type.required' => 'Elija el tipo de Familiar',

        ];
    }
}
