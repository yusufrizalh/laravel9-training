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
use App\Http\Controllers\SkillController;

Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisterController::class, 'create'])->name('register');
    Route::post('/register', [RegisterController::class, 'store'])->name('register');
    Route::get('/login', [LoginController::class, 'create'])->name('login');
    Route::post('/login', [LoginController::class, 'store'])->name('login');
});

Route::middleware('auth')->group(function () {
    Route::get('/employees/datatables', [EmployeeController::class, 'datatables'])->name('employees.datatables');
    Route::get('/employees/datatables/list', [EmployeeController::class, 'getAllEmployees'])->name('employees.list');
    Route::resource('/employees', EmployeeController::class);
    Route::post('/logout', LogoutController::class)->name('logout');
});

Route::get('/users', [UserController::class, 'index']);
Route::get('/users/{user:username}', [UserController::class, 'show'])->name('users.show');
Route::get('departments/{department:name}', [DepartmentController::class, 'show']);
Route::get('/skills/{skill:name}', [SkillController::class, 'show']);
Route::get('/profile/{identifier}', [ProfileInformationController::class, '__invoke']);
Route::get('/contact', [ContactController::class, 'create']);
Route::post('/contact', [ContactController::class, 'store']);
Route::get('/', [HomeController::class, 'index']);
Route::view('/about', 'about');
