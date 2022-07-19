<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/profile', function () {
    $nama = "Alexandra";
    // compact('nama') sama dengan ['nama' => $nama]
    return view('profile', compact('nama'));
});

// Route::get('/', fn () => view('home'));
#atau

$appName = "Laravel is Fun";
Route::view('/', 'home', ['appName' => $appName]);

Route::view('/about', 'about');
