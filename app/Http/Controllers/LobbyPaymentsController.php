<?php

namespace App\Http\Controllers;

use App\Http\Requests\LobbyPaymentRequest;
use App\Models\lobbyPayment;
use App\Models\Socio;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class LobbyPaymentsController extends Controller
{

    public function index(Request $request){

        $search = $request->input('search');

        $payments = lobbyPayment::with('socio')->when($search, function ($query, $search) {
                $query->orWhere('lobby_payment_id','LIKE', '%'.$search.'%');
            })
            ->orderBy('id','asc')
            ->paginate(5);
        
        return view ('payments/lobbyPayments.index', compact('payments','search'));
    }

    public function create(Socio $socio){
        return view('payments/lobbyPayments.create', compact('socio'));
    }

    public function store(LobbyPaymentRequest $request){

        $path = Storage::putFile('img', $request->file('comprobante'));

        $monto = $request->monto;
        $fecha_pago = Carbon::now();
        $fecha_vencimiento = $this->fecha_vencimiento($monto, $fecha_pago);

        $payment = lobbyPayment::create([
            'socio_id'      => $request->socio_id,
            'fecha_pago'    => $fecha_pago,
            'forma_pago'    => strtoupper($request->forma_pago),
            'tipo_pago'     => strtoupper($request->tipo_pago),
            'monto'         => $monto,
            'descripcion'   => strtoupper($request->descripcion),
            'lobby_payment_id'    => strtoupper('COD-' . (string) Str::random(5)),
            'comprobante'   => $path,
            'fecha_vencimiento'=> $fecha_vencimiento
        ]);
        return redirect()->route('payments/lobbyPayments.index', compact('payment'));

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
        $payment = lobbyPayment::findOrFail($id);
        return view ('payments/lobbyPayments.show', compact('payment'));
    }

}
