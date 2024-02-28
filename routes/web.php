<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController; 
use App\Http\Controllers\Auth\LoginController; 
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Login
Route::redirect('/', '/login'); // Redirect the root URL to the login page
Route::get('/login', [LoginController::class, 'create'])->name('login'); // Route for displaying the login form
Route::post('/login', [LoginController::class, 'store']); // Route for handling login form submission


//Register
Route::get('/register', [RegisterController::class, 'create'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

//Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

//profile
Route::get('/profile', [ProfileController::class, 'show'])->name('profile');