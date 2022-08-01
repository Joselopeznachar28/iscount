<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormFamiliesRequest;
use App\Models\Family;
use Illuminate\Http\Request;
use App\Models\Socio;

class FamiliesController extends Controller
{
    public function create(Socio $socio){
        return view('families.create', compact('socio'));
    }

    public function store(FormFamiliesRequest $request){

        $socio = Socio::find($request->socio_id);

        $hasMembers = $request->has('familyMembers');
        if ($hasMembers) {
            $familyMembers = $request->familyMembers;
            foreach ($familyMembers as $member) {
              $socio->families()->saveMany([
                  new Family([
                      'name'                  => $member['name'],
                      'lastname'              => $member['lastname'],
                      'identification'        => $member['identification'],
                      'tipo_identification'   => $member['tipo_identification'],
                      'type'                  => $member['type'],
                  ]),
              ]);
            }
        }
        
        /*$families = new Family( $request->input());
        $families->save();*/

        return redirect()->route('socios.index',compact('socio'));
    }
}
