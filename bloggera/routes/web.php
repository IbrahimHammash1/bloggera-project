<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{UserController,RegisterController,PostController};

Route::get('/register',[RegisterController::class,'register']);

Route::post('/register/store',[RegisterController::class,'store'])->name('register.store');

Route::get('/login',[RegisterController::class,'login']);

Route::post('/login/verify_user',[RegisterController::class,'verify_user'])->name('login.verify_user');

Route::get('/logout',[RegisterController::class,'logout']);





Route::get('/',[PostController::class,'index']);
Route::get('/posts',[PostController::class,'index']);

Route::get('/posts/create',[PostController::class,'create']);
Route::post('/posts/store',[PostController::class,'store'])->name('posts.store');
Route::get('/posts/show/{post}',[PostController::class,'show'])->name('posts.show');