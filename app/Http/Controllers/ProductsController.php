<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Provider;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(){

        $products = Product::all();

        return view('products.index', compact('products'));

    }

    public function create(){

        return view('products.create');

    }

    public function store(Request $request){

        $products = Product::create([
            'name'          => $request->input('name'),
            'description'   => $request->description,
        ]);

        return redirect()->route('products.index', compact('products'));

    }

    public function edit($id){

        $product= Product::find($id);

        return view ('products.edit', compact('product'));

    }

    public function update(Request $request, $id){

        $product = Product::find($id);

        $product = Product::where('id', '=' , $id)->update([
            'name'          => $request->input('name'),
            'description'   => $request->description,
        ]);

        return redirect()->route('products.index',compact('product'));

    }

    public function show($id){

        $products = Product::findOrFail($id);
        
        return view('products.show', compact('products'));

    }

    public function destroy($id){

        $product = Product::findOrFail($id);

        $product->delete();

        return back();
    }


}
