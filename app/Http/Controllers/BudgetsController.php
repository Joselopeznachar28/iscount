<?php

namespace App\Http\Controllers;

use App\Models\Acquisition;
use App\Models\Budget;
use App\Models\Provider;
use Illuminate\Http\Request;

class BudgetsController extends Controller
{
    public function index(){

        $budgets = Budget::all();
        $providers = Provider::all();

        return view('budgets.index',compact('providers','budgets'));

    }

    public function create(Acquisition $acquisition){

        $providers = Provider::all();
        
        return view('budgets.create', compact('providers','acquisition'));

    }

    public function store(Request $request){

        $budget = Budget::create([
            'acquisition_id' => $request->acquisition_id ,
            'provider_id' => $request->provider_id ,
            'quantity' => $request->quantity ,
            'unitPriceBs' => $request->unitPriceBs ,
            'totalPriceBs' => $request->totalPriceBs ,
            'unitPriceDollar' => $request->unitPriceDollar ,
            'totalPriceDollar' => $request->totalPriceDollar ,
            'observations' => $request->observations ,
        ]);

        return redirect()->route('budgets.index', compact('budget'));

    }

    public function edit($id){

        $providers = Provider::all();

        $budget = Budget::findOrFail($id);

        return view('budgets.edit', compact('budget','providers'));

    }

    public function update(Request $request, $id){

        $budget = Budget::findOrFail($id);

        $budget = Budget::where('id', '=', $id)->update([
            'provider_id'       => $request->provider_id ,
            'quantity'          => $request->quantity ,
            'unitPriceBs'       => $request->unitPriceBs ,
            'totalPriceBs'      => $request->totalPriceBs ,
            'unitPriceDollar'   => $request->unitPriceDollar ,
            'totalPriceDollar'  => $request->totalPriceDollar ,
            'observations'      => $request->observations ,
        ]);

        return redirect()->route('budgets.index', compact('budget'));
    }

    public function show($id){

        $budget = Budget::findOrfail($id);

        return view('budgets.show', compact('budget'));
    }

    public function destroy(Budget $budget){

        $budget->delete();

        return back();
        
    }
}
