<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmployeeRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

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
        Employee::find($id)->update([
            'name' => $request->name,
            'address' => $request->address,
        ]);
        return redirect('/employees');
    }

    public function destroy($id)
    {
        Employee::find($id)->delete();
        return back();
    }

    // membuka halaman employees dengan datatables
    public function datatables()
    {
        return view('employees/employees');
    }

    // mengambil semua data employees dengan datatables
    public function getAllEmployees(Request $request)
    {
        if ($request->ajax()) {
            $data = Employee::latest()->get();
            return DataTables::of($data)->addIndexColumn()->addColumn('action', function ($row) {
                $actionBtn = '<a href="#" class="edit btn btn-success btn-sm">Edit</a> &nbsp;
                <a href="#" class="delete btn btn-danger btn-sm">Delete</a>';
                return $actionBtn;
            })->rawColumns(['action'])->make(true);
        }
    }
}
