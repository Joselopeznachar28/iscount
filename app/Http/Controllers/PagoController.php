<?php

namespace App\Http\Controllers;

use App\Models\Pago;
use App\Models\Socio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

class PagoController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   /* public function crear($socio_id){

        $socio = Socio::findOrFail($socio_id);
        $socio_id = $socio->id;

        return view('pagos/create' , compact($socio_id));

    }*/

    public function create()
    {
        return view('pagos/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $monto = $request->input('monto');
        $path = Storage::putFile('img', $request->file('comprobante'));
        $meses_membrecia = $this->mesesActivos($monto);
        $pago = Pago::create([
            'socio_id'      => 3,
            'tipo_pago'     => $request->tipo_pago,
            'forma_pago'    => $request->forma_pago,
            'monto'         => $monto,
            'comprobante'   => $path,
            'fecha_vencimiento' => $meses_membrecia,
        ]);
        dd($pago);
        return  [$pago];
    } 
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pago $pago)
    {
        $pago->delete();
        return back();
        
    }

    public function mesesActivos($monto){
        /*Varibles para las condicionales */
        $precio_membrecia=30;
        $meses = ($monto)/$precio_membrecia;

        /*Condicional hasta cuando pago la membresia */
        if($monto >= $precio_membrecia){
            $date = Carbon::now();
            $endDate = $date->addMonths($meses);
        } 
        
        /*Condicional que dice desde cuanto debe 
        if($monto<=0 || $endDate>$date){
            $date = Carbon::now();
            $endDate = $date->subDays();
        //    return `Usted debe la mensualidad desde la fecha del : . $endDate` ;
        }*/
        return $endDate;
    }

}
