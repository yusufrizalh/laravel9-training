<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function show(Department $department)
    {
        $employees = $department->employees()->get();
        return view('employees/index', compact('employees', 'department'));
    }
}
