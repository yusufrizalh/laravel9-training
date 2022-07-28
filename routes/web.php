<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileInformationController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\UserController;


use App\Http\Controllers\RegisterController;

Route::get('/register', [RegisterController::class, 'create'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register');

Route::get('/users', [UserController::class, 'index']);
Route::get('/users/{user:username}', [UserController::class, 'show'])->name('users.show');

Route::resource('/employees', EmployeeController::class);

// Route::get('/employees', [EmployeeController::class, 'index']);
// Route::get('/employees/create', [EmployeeController::class, 'create']);
// Route::post('/employees', [EmployeeController::class, 'store']);
// Route::get('/employees/{id}/edit', [EmployeeController::class, 'edit']);
// Route::put('/employees/{id}', [EmployeeController::class, 'update']);
// Route::delete('/employees/{id}', [EmployeeController::class, 'destroy']);

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
