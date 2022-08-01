<?php

namespace App\Http\Controllers;

use App\Models\Budget;
use App\Models\budgetPayment;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BudgetPaymentsController extends Controller
{

    public function index(Request $request){

        $search = $request->input('search');

        $payments = budgetPayment::with('budget')->when($search, function ($query, $search) {
                $query->orWhere('budget_payment_id','LIKE', '%'.$search.'%');
            })
            ->orderBy('id','asc')
            ->paginate(5);
        
        return view ('payments/budgetPayments.index', compact('payments','search'));
    }

    public function create(Budget $budget){
        return view('payments/budgetPayments.create', compact('budget'));
    }

    public function store(Request $request){

        $path = Storage::putFile('img', $request->file('comprobante'));

        $payment = budgetPayment::create([
            'budget_id'     => $request->budget_id,
            'fecha_pago'    => $request->fecha_pago,
            'forma_pago'    => strtoupper($request->forma_pago),
            'tipo_pago'     => strtoupper($request->tipo_pago),
            'monto'         => $request->monto,
            'descripcion'   => strtoupper($request->descripcion),
            'budget_payment_id'    => strtoupper('COD-' . (string) Str::random(5)),
            'comprobante'   => $path,
        ]);
        return redirect()->route('payments/budgetPayments.index', compact('payment'));

    }

    public function show($id){
        $payment = budgetPayment::findOrFail($id);
        return view ('payments/budgetPayments.show', compact('payment'));
    }
}