<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    public function index()
    {
        return view('employees/index', [
            'employees' => DB::table('employees')->orderBy('id', 'desc')->get(),
        ]);
    }

    public function create()
    {
        return view('employees/create');
    }

    public function store(Request $request)
    {
        DB::table('employees')->insert([
            'name' => $request->name,
            'address' => $request->address,
        ]);
        return redirect('/employees');
    }

    public function edit($id)
    {
        $employee = DB::table('employees')->where('id', $id)->first();
        return view('employees/edit', ['employee' => $employee]);
    }

    public function update(Request $request, $id)
    {
        DB::table('employees')->where('id', $id)->update([
            'name' => $request->name,
            'address' => $request->address,
        ]);
        return redirect('/employees');
    }
}
