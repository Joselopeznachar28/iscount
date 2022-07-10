<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormRegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;

class RegistersController extends Controller
{
    public function create(){
        return view('auth.register');
    }

    public function store(FormRegisterRequest $request){
        
        $user = User::create($request->validated());
        
        return view('auth.login')->with('success', 'Cuenta creada Satisfactoriamente');
    }


}
