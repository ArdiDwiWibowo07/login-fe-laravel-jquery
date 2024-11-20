<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('logout', [LoginController::class, 'logout']);
Route::post('auth/login', [LoginController::class, 'login'])->name('auth.login');
