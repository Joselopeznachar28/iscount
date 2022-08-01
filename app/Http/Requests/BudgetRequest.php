<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BudgetRequest extends FormRequest
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
            'budgets'=> 'present|array',
            'budgets.*.observations'=> 'required|string',
            'products'=> 'present|array',
            'products.*.quantity' => 'required|numeric',
            'products.*.unitPriceBs' => 'required|numeric',
            'products.*.unitPriceDollar' => 'required|numeric',
            'products.*.name'=> 'required|alpha',
            'products.*.description'=> 'required|string',
        ];
    }

    public function messages()
    {
        return [
            'budgets.*.observations.required' => 'Ingrese las observaciones o notas del proveedor',

            'products.*.quantity.required' => 'Debe Ingresar la cantidad de productos',
            'products.*.quantity.numeric' => 'Este campo solo es de tipo Numerico',
            
            'products.*.unitPriceBs.required' => 'Debe Ingresar el Precio en Bolivares',
            'products.*.unitPriceBs.numeric' => 'Este campo solo es de tipo Numerico',

            'products.*.unitPriceDollar.required' => 'Debe Ingresar el Precio en Dolares',
            'products.*.unitPriceDollar.numeric' => 'Este campo solo es de tipo Numerico',
            
            'products.*.name.required'=> 'Debe ingresar el nombre del producto',
            'products.*.name.alpha'=> 'Este campo solo puede contener letras',

            'products.*.description.required'=> 'Debe Ingresar las caracteristicas del producto',
        ];
    }
}
