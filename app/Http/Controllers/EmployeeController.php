<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    public function index()
    {
        return view('employees/index', [
            'employees' => DB::table('employees')->get(),
        ]);
    }
}


