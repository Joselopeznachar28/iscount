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

        $families = Family::create([
            'socio_id'          => $request->socio_id,
            'name'              => strtoupper($request->name),
            'lastname'          => strtoupper($request->lastname),
            'identification'    => $request->identification,
            'type'              => strtoupper($request->type),
        ]);

        return redirect()->route('socios.index',compact('families'));
    }
}
