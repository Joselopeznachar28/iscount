<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentsController extends Controller
{
    public function index(){
        
        $departments = Department::all();

        return view('departments.index', compact('departments'));

    }

    public function create(){

        return view('departments.create');

    }

    public function store(Request $request){

        $departments = Department::create([
            'name'          => $request->name,
            'description'   => $request->description,
        ]);

        return  redirect()->route('departments.index', compact('departments'));

    }

    public function edit($id){

        $department = Department::findOrFail($id);

        return view('departments.edit', compact('department'));

    }

    public function update(Request $request, $id){

        $department = Department::findOrFail($id);

        $department = Department::where('id', '=' , $id)->update([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return redirect()->route('departments.index', compact('department'));

    }

    public function show($id){
        
        $department = Department::findOrFail($id);

        return view('departments.show', compact('department'));

    }

    public function destroy($id){

        $department = Department::find($id);

        $department->delete();
        
        return back();

    }
}
