<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
//Clase para manejar autenthications in laravel, tiene muichos methodos.
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function view_login(){

        return view('auth.login');

    } 

    public function login(LoginRequest $request){

        $credentials = $request->getCredentials();

        //valida credenciales

        //Si no existe el usuario en la base de datos, sera redirigido a la vista de login nuevamente
        if(!Auth::validate($credentials)){

            return redirect()->route('view_login')->withErrors('auth.failed');

        }

        // Si las credenciales son correctas, creamos un usuario a partir de la autenthication.
        $user = Auth::getProvider()->retrieveByCredentials($credentials);

        //Funcion para hacer login y crear nuestras sessiones. 
        Auth::login($user);
        //Mandamos un objeto para saber que estamos autenticados.
        return $this->Authenticated($request, $user);
    }

    public function authenticated(Request $request, $user){
        return redirect()->route('departments.index');
    }

}
