<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Navbar extends Component
{
    public function render()
    {
        $navigations = [
            'Home' => '/',
            'Contact' => '/contact',
            'About' => '/about',
            'Profile' => '/profile',
            'Employees' => '/employees',
            'Users' => '/users',
        ];
        return view('layouts.navbar', compact('navigations'));
    }
}
