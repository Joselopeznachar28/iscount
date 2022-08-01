<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormSocioRequest;
use App\Models\Payment;
use App\Models\Socio;
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

            $socios = Socio::with('lobbypayments')->when($search, function ($query, $search) {
                $query->orWhere('identification', 'LIKE', '%'.$search.'%')
                      ->orWhere('membership','LIKE', '%'.$search.'%');
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
    public function store(FormSocioRequest $request)
    {
        $socio = Socio::create([
            'name'                  => strtoupper($request->name),
            'lastname'              => strtoupper($request->lastname),
            'typeIdentification'    => strtoupper($request->typeIdentification),
            'identification'        => $request->identification,
            'email'                 => strtoupper($request->email),
            'address'               => strtoupper($request->address),
            'membership'            => strtoupper('MEM-'. (string) Str::random(5)),
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
        $socio = Socio::findOrFail($id)->load(['families']);

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

            'name'                  => strtoupper($request->name),
            'lastname'              => strtoupper($request->lastname),
            'typeIdentification'    => strtoupper($request->tipo_identificacion),
            'identification'        => $request->identification,
            'email'                 => strtoupper($request->email),
            'address'               => strtoupper($request->address),
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
