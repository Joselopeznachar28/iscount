<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LobbyPaymentRequest extends FormRequest
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
            'forma_pago'  => 'required',
            'tipo_pago'   => 'required',
            'monto'       => 'required|numeric',
            'comprobante' => 'required|image',
            'descripcion' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'forma_pago.required'  => 'Debe seleccionar una Forma de Pago',
            'tipo_pago.required'   =>  'Debe seleccionar un Tipo de Pago',

            'monto.required'       =>  'Debe ingresar un monto',
            'monto.numeric'        =>  'Debe ingresar caracteres numericos',
            
            'comprobante.required' =>  'Debe subir un archivo que compruebe el Pago Realizado',

            'descripcion.required' => 'Debe elegir el tipo de Operacion a Realizar',
        ];
    }
}
