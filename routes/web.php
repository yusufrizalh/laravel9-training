<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileInformationController;


use App\Http\Controllers\EmployeeController;

Route::get('/employees', [EmployeeController::class, 'index']);


Route::get('/profile/{identifier}', [ProfileInformationController::class, '__invoke']);
Route::get('/contact', [ContactController::class, 'create']);
Route::post('/contact', [ContactController::class, 'store']);

Route::get('/', [HomeController::class, 'index']);

// Route::get('/profile/{username}', function ($username) {
//     return view('profile', ['nama' => $username]);
// });

// Route::get('/', function () {
//     return view('home');
// });

// Route::get('/contact', function () {
//     return view('contact');
// });



// Route::get('/', fn () => view('home'));
#atau

// $appName = "Laravel is Fun";
// Route::view('/', 'home', ['appName' => $appName]);

Route::view('/about', 'about');
