<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;

use App\Http\Controllers\ProfileInformationController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;

Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisterController::class, 'create'])->name('register');
    Route::post('/register', [RegisterController::class, 'store'])->name('register');
    Route::get('/login', [LoginController::class, 'create'])->name('login');
    Route::post('/login', [LoginController::class, 'store'])->name('login');
});

Route::middleware('auth')->group(function () {
    Route::resource('/employees', EmployeeController::class);
    Route::post('/logout', LogoutController::class)->name('logout');
});

Route::get('/users', [UserController::class, 'index']);
Route::get('/users/{user:username}', [UserController::class, 'show'])->name('users.show');

Route::get('departments/{department:name}', [DepartmentController::class, 'show']);

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
