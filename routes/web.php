<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('Auth/login');
});


Route::post('/login', [LoginController::class, 'login']);
