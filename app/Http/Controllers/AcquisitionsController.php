<?php

namespace App\Http\Controllers;

use App\Models\Acquisition;
use App\Models\Department;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AcquisitionsController extends Controller
{
    public function index(){

        $acquisitions = Acquisition::all();

        return view('acquisitions.index', compact('acquisitions'));
        
    }

    public function create(Department $department){

        return view('acquisitions.create', compact('department'));

    }

    public function store(Request $request){

        $acquisition = Acquisition::create([
            'department_id'     => $request->department_id,
            'date_acquisition'  => Carbon::now(),
            'date_max'          => $request->date_max,
            'description'       => strtoupper($request->description),
            'acquisition_code'  => strtoupper('COD-'. (string) Str::random('7')),
        ]);

        return redirect()->route('acquisitions.index', compact('acquisition'));

    }

    public function edit($id){

        $acquisition = Acquisition::findOrFail($id);

        return view('acquisitions.edit',compact('acquisition'));

    }

    public function update(Request $request, $id){

        $acquisition = Acquisition::where('id', '=', $id)->update([
            'date_acquisition'  => Carbon::now(),
            'date_max'          => $request->date_max,
            'description'       => strtoupper($request->description),
        ]);

        return redirect()->route('acquisitions.index', compact('acquisition'));

    }

    public function show($id){

        $acquisition = Acquisition::findOrFail($id);

        return view('acquisitions.show',compact('acquisition'));

    }

    public function destroy($id){
        $acquisition = Acquisition::findOrFail($id);
        $acquisition->delete();

        return back();
    }

}
