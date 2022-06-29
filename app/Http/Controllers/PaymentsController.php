<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Socio;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class PaymentsController extends Controller
{

    public function index(){
        $payments = Payment::all();
        return view ('payments.index', compact('payments'));
    }

    public function create(Socio $socio){
        return view('payments.create', compact('socio'));
    }

    public function store(Request $request){

        $path = Storage::putFile('img', $request->file('comprobante'));

        $monto = $request->monto;
        $fecha_pago = $request->fecha_pago;
        $fecha_vencimiento = $this->fecha_vencimiento($monto, $fecha_pago);

        $payment = Payment::create([
            'socio_id'      => $request->socio_id,
            'fecha_pago'    => $fecha_pago,
            'forma_pago'    => strtoupper($request->forma_pago),
            'tipo_pago'     => strtoupper($request->tipo_pago),
            'monto'         => $monto,
            'descripcion'   => strtoupper($request->descripcion),
            'payment_id'    => strtoupper('COD-' . (string) Str::random(8)),
            'comprobante'   => $path,
            'fecha_vencimiento'=> $fecha_vencimiento
        ]);
        return redirect()->route('payments.index', compact('payment'));

    }

    public function fecha_vencimiento($monto, $fecha_pago){
        /*Varibles para las condicionales */
        $precio_membrecia=30;
        $meses = ($monto)/$precio_membrecia;

        /*Condicional hasta cuando pago la membresia */
        if($monto >= $precio_membrecia){
            $date = new Carbon($fecha_pago);
            $endDate = $date->addMonths($meses);
        }
        
        /*Condicional que dice desde cuanto debe 
        if($monto=0 ||$monto<30 || $endDate>$date){
            $status = Socio::findOrFail($id);
            $status->status;
            if($status === 'Activo'){
                $status = 'Inactivo';
            }
        }*/
        return $endDate;
    }

    public function show($id){
        $payment = Payment::findOrFail($id);
        return view ('payments.show', compact('payment'));
    }

}
