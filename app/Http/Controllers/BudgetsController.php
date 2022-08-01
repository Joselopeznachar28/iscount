<?php

namespace App\Http\Controllers;

use App\Http\Requests\BudgetRequest;
use App\Models\Acquisition;
use App\Models\Budget;
use App\Models\BudgetProduct;
use App\Models\Provider;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class BudgetsController extends Controller
{
    public function index(){

        $budgets = Budget::with('provider')->get();

        return view('budgets.index',compact('budgets'));

    }

    public function create(Acquisition $acquisition){

        $providers = Provider::all();

        return view('budgets.create', compact('providers','acquisition'));

    }

    public function store(BudgetRequest $request){

        //GET ACQUISITION
        $acquisition = Acquisition::find($request->acquisition_id);

        //WE CREATE THE VARIABLES WITH VALUE FROM FORM WITH REQUEST
        $budgets = $request->budgets;
        $budgetProducts = $request->products;

        foreach($budgets as $budget){
            $newBudget = $acquisition->budgets()->saveMany([
                new Budget([
                    'provider_id'      => $budget['provider_id'] ,
                    'budget_id'        => strtoupper('COD-' . (string) Str::random(5)),
                    'observations'     => $budget['observations'] ,
                ]),
            ]);
        }
        $hasProducts = $request->has('products');
        //$budget = $newBudget::find($newBudget->id);
        if($hasProducts){
            foreach ($budgetProducts as $budgetProduct){
                //WE CREATE THE VARIABLES TO TOTALPRICEVEF AND TOTALRICEDOLLAR
                $totalPriceBs     = ($budgetProduct['quantity'] * $budgetProduct['unitPriceBs']);
                $totalPriceDollar = ($budgetProduct['quantity'] * $budgetProduct['unitPriceDollar']);
                     $newBudget[0]->budgetProducts()->saveMany([
                        new BudgetProduct([
                            'name'             => $budgetProduct['name'],
                            'description'      => $budgetProduct['description'],
                            'quantity'         => $budgetProduct['quantity'] ,
                            'unitPriceBs'      => $budgetProduct['unitPriceBs'] ,
                            'totalPriceBs'     => $totalPriceBs ,
                            'unitPriceDollar'  => $budgetProduct['unitPriceDollar'] ,
                            'totalPriceDollar' => $totalPriceDollar ,
                        ]),
                ]);
            } 
        }
        
        return redirect()->route('budgets.create', compact('budgets','budgetProducts','acquisition'));

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
