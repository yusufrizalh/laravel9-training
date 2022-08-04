<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function create()
    {
        return view('auth/login');
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $user = User::whereEmail($request->email)->first();
        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                Auth::login($user);
                return redirect('/')->with('success', 'You are now logged in!');
            }
        }

        throw ValidationException::withMessages([
            'email' => 'Your email credentials does not match our records!',
        ]);
    }
}
