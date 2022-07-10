<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
//Se utiliza para acceder con username o correo electronico
use Illuminate\Contracts\Validation\Factory as ValidationFactory;
class LoginRequest extends FormRequest
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
            'username' => 'required',
            'password' => 'required'
        ];
    }

    public function getCredentials(){
        $username = $this->get('username');
        if($this->isEmail($username)){
            return [
                'email' => $username,
                'password' => $this->get('password')
            ];
        }

        return $this->only('username', 'password');
    }

    //Debe regresar un bool ara saber si es correo o no.
    public function isEmail($value){
        //Instanciar basado en la clase ValidationFactory
        $factory = $this->container->make(ValidationFactory::class);

        //El metodo make espera parametros
        return !$factory->make(['username' => $value], ['username' => 'email'])->fails();
    }
}
