<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function create()
    {
        return view('auth/register');
    }

    public function store(RegisterRequest $request)
    {
        User::create($request->all());
        return redirect('/')->with('success', 'Thank you, now you are registered!');
    }
}
