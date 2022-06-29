<?php

namespace App\Http\Controllers;

use App\Models\Provider;
use Illuminate\Http\Request;

class ProvidersController extends Controller
{

    public function index(){

        $providers = Provider::all();

        return view('providers.index', compact('providers'));

    }

    public function create(){
        return view('providers.create');
    }

    public function store(Request $request){
        
        $providers = Provider::create([
            'name'              => $request->name,
            'type_identification'    => $request->type_identification,
            'identification'    => $request->identification,
            'email'             => $request->email,
            'contact'           => $request->contact,
            'description'       => $request->description,
        ]);

        return redirect()->route('providers.index', compact('providers'));

    }

    public function show($id){

        $provider = Provider::findOrFail($id);

        return view('providers/show', compact('provider'));

    }

    public function edit($id){

        $provider = Provider::findOrFail($id);

        return view('providers.edit', compact('provider'));
        
    }

    public function update(Request $request, $id){

        $provider = Provider::findOrFail($id);

        $provider = Provider::where('id', '=' , $id)->update([
            'name' => $request->name,
            'type_identification' => $request->type_identification,
            'identification' => $request->identification,
            'email' => $request->email,
            'contact' => $request->contact,
            'description' => $request->description,
        ]);

        return redirect()->route('providers.index', compact('provider'));

    }

    public function destroy($id){
        $provider = Provider::findOrFail($id);
        $provider->delete();
        return redirect()->route('providers.index');
    }

}
