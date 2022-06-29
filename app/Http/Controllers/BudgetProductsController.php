<?php

namespace App\Http\Controllers;

use App\Models\Budget;
use App\Models\BudgetProduct;
use Illuminate\Http\Request;

class BudgetProductsController extends Controller
{
    public function index(){

        $budgetProducts = BudgetProduct::all();

        return view('budgetProducts.index', compact('budgetProducts'));
        
    }
}
