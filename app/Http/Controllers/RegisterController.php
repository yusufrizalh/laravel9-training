<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function create()
    {
        return view('auth/register');
    }

    public function store(Request $request)
    {
        $request->validate([
            'username' => ['required', 'alpha_num', 'min:8', 'max:24'],
            'name' => ['required', 'string', 'min:8'],
            'email' => ['required', 'email'],
            'password' => ['required', 'min:8'],
        ]);

        User::create([
            'username' => $request->username,
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        return redirect('/users');
    }
}
