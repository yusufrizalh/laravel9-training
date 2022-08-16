<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmployeeRequest;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Employee;
use App\Models\Skill;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;

class EmployeeController extends Controller
{
    public function index()
    {
        return view('employees/index', [
            'employees' => Employee::latest()->paginate(3),
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
            'departments' => Department::get(),
            'skills' => Skill::get(),
            'submit' => 'Create',
        ]);
    }

    public function store(EmployeeRequest $request)
    {
        $attributes = $request->all();
        // $imagepath = $request->file('thumbnail')->store('images/employees', 'public');
        $imagepath = $request->file('thumbnail') ? $request->file('thumbnail')->store('images/employees', 'public') : null;
        $attributes['department_id'] = request('department');
        $attributes['thumbnail'] = $imagepath;
        $employee = Employee::create($attributes);
        $employee->skills()->attach(request('skills'));
        return redirect('/employees');
    }

    public function edit(Employee $employee)
    {
        return view('employees/edit', [
            'employee' => $employee,
            'departments' => Department::get(),
            'skills' => Skill::get(),
            'submit' => 'Update',
        ]);
    }

    public function update(Employee $employee, EmployeeRequest $request)
    {
        if (!Gate::allows(['isAdmin'])) {
            abort(403);
        } else {
            if (request()->file('thumbnail')) {
                Storage::delete($employee->thumbnail);
                $imagepath = $request->file('thumbnail')->store('images/employees', 'public');
            } else {
                $imagepath = $employee->thumbnail;
            }
            $attributes = $request->all();
            $attributes['department_id'] = request('department');
            $attributes['thumbnail'] = $imagepath;
            $employee->update($attributes);
            $employee->skills()->sync(request('skills'));
            return redirect('/employees');
        }
    }

    public function destroy(Employee $employee)
    {
        if (!Gate::allows('isManager')) {
            abort(403);
        } else {
            $employee->skills()->detach();
            $employee->delete();
            return back();
        }
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
