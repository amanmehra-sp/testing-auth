<?php

use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('register', [UserController::class, 'register'])->name('register');
Route::Post('registeruser', [UserController::class, 'registeruser'])->name('registeruser');


Route::get('login', [UserController::class, 'login'])->name('login');
Route::Post('login', [UserController::class, 'loginsave'])->name('loginsave');

Route::get('dashboard', [UserController::class, 'dashboard'])->name('dashboard');

Route::get('logout', [UserController::class, 'logout'])->name('logout');
