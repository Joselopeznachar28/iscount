<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormSocioRequest extends FormRequest
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
            'name'               => 'required|alpha|min:2',
            'lastname'           => 'required|alpha|min:2',
            'typeIdentification' => 'required|string',
            'identification'     => 'required|numeric|min:8|unique:socios,identification',
            'email'              => 'required|email|unique:socios,email',
            'address'            => 'required|string|max:255',
        ];
    }

    //Metodo para personalizar en la vista cuando da error, el nombre del campo.
    public function attributes()
    {
        return[
            //'name' => 'Campo nombre'
        ];
    }

    //Este metodo permite poder personalizar los mensajes en cada validacion
    public function messages()
    {
        return[
            'name.required'                 => 'Debe ingresar un Nombre',
            'name.alpha'                    => 'El nombre solo puede contener letras',
            'name.min'                      => 'El nombre debe tener minimo 2 letras',

            'lastname.required'             => 'Debe ingresar un Apellido',
            'lastname.alpha'                => 'El apellido solo puede contener letras',
            'lastname.min'                  => 'El apellido debe tener minimo 2 letras',

            'typeIdentification.required'   => 'Debe elegir el tipo de Identificacion',
            
            'identification.required'       => 'Debe ingresar una Identificacion',
            'identification.min'            => 'La identificacion debe poseer almenos 8 Digitos',
            'identification.numeric'        => 'La identificacion solo debe poseer Numeros',
            'identification.unique'         => 'Ya existe en nuestro registro esta Identificacion, por favor Ingrese otra',

            'email.required'                => 'Debe ingresar un Correo Electronico',
            'email.email'                   => 'Ingrese un Correo Electronico Existente',
            'email.unique'                  => 'Ya existe en nuestro registro este Correo Electronico, por favor Ingrese otro',

            'address.required'              => 'Debe ingresar una Direccion Valida',
            'address.max'                   => 'Debe tener como maximo 255 Caracteres',
        ];
    }
}
