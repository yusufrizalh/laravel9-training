<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Employee;

class EmployeeController extends Controller
{
    public function index()
    {
        return view('employees/index', [
            'employees' => Employee::orderBy('id', 'desc')->get(),
        ]);
    }

    public function create()
    {
        return view('employees/create');
    }

    public function store(Request $request)
    {
        Employee::create([
            'name' => $request->name,
            'address' => $request->address,
        ]);
        return redirect('/employees');
    }

    public function edit($id)
    {
        // $employee = Employee::where('id', $id)->first();
        $employee = Employee::find($id);
        return view('employees/edit', ['employee' => $employee]);
    }

    public function update(Request $request, $id)
    {
        // Employee::where('id', $id)->update([
        //     'name' => $request->name,
        //     'address' => $request->address,
        // ]);
        Employee::find($id)->update([
            'name' => $request->name,
            'address' => $request->address,
        ]);
        return redirect('/employees');
    }

    public function destroy($id)
    {
        // Employee::where('id', $id)->delete();
        Employee::find($id)->delete();
        return back();
    }
}
