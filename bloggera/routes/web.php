<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{UserController,RegisterController};

Route::get('/',[UserController::class,'index']);
Route::get('/register',[RegisterController::class,'register']);

Route::post('/register/store',[RegisterController::class,'store'])->name('register.store');

Route::get('/login',[RegisterController::class,'login']);

Route::post('/login/verify_user',[RegisterController::class,'verify_user'])->name('login.verify_user');

Route::get('/logout',[RegisterController::class,'logout']);