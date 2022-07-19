<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/profile/{username}', function ($username) {
    return view('profile', ['nama' => $username]);
});

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/contact', function () {
    return view('contact');
});



// Route::get('/', fn () => view('home'));
#atau

$appName = "Laravel is Fun";
Route::view('/', 'home', ['appName' => $appName]);

Route::view('/about', 'about');
