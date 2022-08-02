<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmployeeRequest;
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

    public function show(Employee $employee)
    {
        return view('employees/show', [
            'employee' => $employee,
        ]);
    }

    public function create()
    {
        return view('employees/create', [
            'employee' => new Employee(),
            'submit' => 'Create',
        ]);
    }

    public function store(EmployeeRequest $request)
    {
        Employee::create([
            'name' => $request->name,
            'address' => $request->address,
        ]);
        return redirect('/employees');
    }

    public function edit(Employee $employee)
    {
        return view('employees/edit', [
            'employee' => $employee,
            'submit' => 'Update',
        ]);
    }

    public function update(EmployeeRequest $request, $id)
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
