<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Socio;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Familiar;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
use phpDocumentor\Reflection\Types\This;

class SocioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {   
        // Se realiza un join con el modelo socio a la tabla familiars y hacen la conexion con el id de la tabla socio y el id de la tabla familiars
        $search = $request->input('search');

       /* $socios = Socio::where('name','LIKE','%'.$consulta.'%')
            ->orWhere('lastname', 'LIKE', '%'.$consulta.'%')
            ->orWhere('identification', 'LIKE', '%'.$consulta.'%')
            ->orWhere('status','LIKE', '%'.$consulta. '%')
            ->orderBy('id','asc')
            ->get();*/

            $socios = Socio::with('payments')->when($search, function ($query, $search) {
                $query->orWhere('lastname', 'LIKE', '%'.$search.'%')
                    ->orWhere('identification', 'LIKE', '%'.$search.'%')
                    ->orWhere('status','LIKE', '%'.$search.'%');
            })
            ->orderBy('id','asc')
            ->paginate(5);

        return view('socios.index',compact('socios','search'));

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    //Este metodo se utiliza simplemente para enviar a la vista.
    public function create()
    {
        return view('socios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //Para crear
    public function store(Request $request)
    {  

       /* $validateData = $request->validate([ 
            'name'           => 'required | min:3',
            'lastname'       => 'required | min:3',
            'identification' => 'required | min:8 | max:9 | numeric',
            'email'          => 'required | email | unique:socios',
            'address'        => 'required | max:250',
            'status'         => 'required',
            'membership'     => 'required'
        ]);*/

        $socio = Socio::create([
            'name'                  => strtoupper($request->name),
            'lastname'              => strtoupper($request->lastname),
            'typeIdentification'    => strtoupper($request->tipo_identificacion),
            'identification'        => $request->identification,
            'email'                 => strtoupper($request->email),
            'address'               => strtoupper($request->address),
            'membership'            => strtoupper('MEM-'. (string) Str::random(5)),
            'status'                => strtoupper($request->status),
        ]);
        
        return redirect()->route('socios.index',compact('socio'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Socio  $socio
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $socio = Socio::findOrFail($id)->load(['families','payments']);

        return view('socios.show', compact('socio'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Socio  $socio
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $socio = Socio::findOrFail($id)->load('families');

        return view('socios.edit', compact('socio'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Socio  $socio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $socio  = Socio::findOrFail($id);

        $socio  = Socio::where('id', '=', $id )->update([
            'name'            => $request->name,
            'lastname'        => $request->lastname,
            'typeIdentification'  => $request->tipo_identificacion,
            'identification'  => $request->identification,
            'email'           => $request->email,
            'address'         => $request->address,
            'status'          => $request->status,
            ]);

        return redirect()->route('socios.index',compact('socio'));
        
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Socio  $socio
     * @return \Illuminate\Http\Response
     */
    
    public function destroy(Socio $socio){
        
        $socio->delete();

        return back();

    }
}
