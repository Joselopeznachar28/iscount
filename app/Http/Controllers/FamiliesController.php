<?php

namespace App\Http\Controllers;

use App\Models\Family;
use Illuminate\Http\Request;
use App\Models\Socio;

class FamiliesController extends Controller
{
    public function create(Socio $socio){
        return view('families.create', compact('socio'));
    }

    public function store(Request $request){

        $families = new Family($request->input());
        $families->save();

        return redirect()->route('socios.index',compact('families'));
    }
}
