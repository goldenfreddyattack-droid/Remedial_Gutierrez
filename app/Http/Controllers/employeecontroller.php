<?php

namespace App\Http\Controllers;
use Illuminate\Support\Fascades\DB;
use Response;
use Illuminate\Http\Request;
use App\Models\employee;
use App\Models\employeemngt;

class employeecontroller extends Controller
{
    public function index()
    {   
        $employee = employeemngt::all();
        return view ('employee.index', compact('employee'));
    }


    public function create()
    {
        return view ('employee.create');
    }


    public function store(Request $request)
    {
         $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'mname' => 'required',
            'add' => 'required',
            'dob' => 'required',
            'contact' => 'required'
        ]);

        employeemngt::create($request->all());
        return redirect()->route('employee.index');
    }

    public function edit( int $id)
    {
        $employee = employeemngt::findorfail($id);
        return view('employee.edit', compact('employee'));
    }

    public function update(Request $request, int $id) {
        $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'mname' => 'required',
            'add' => 'required',
            'dob' => 'required',
            'contact' => 'required'
        ]);

        $employee = employeemngt::findorfail($id);
        $employee->update($request->all());
        return redirect()->route('employee.index');
    }

    public function delete(int $id){
      $employee = employeemngt::find($id);
      $employee->delete();
      return redirect()->route('employee.index');
    }
}
