<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{UserController,RegisterController,PostController,SearchController};

Route::get('/register',[RegisterController::class,'register'])->middleware('guest');

Route::post('/register/store',[RegisterController::class,'store'])->name('register.store')->middleware('guest');

Route::get('/login',[RegisterController::class,'login'])->name('login')->middleware('guest');

Route::post('/login/verify_user',[RegisterController::class,'verify_user'])->name('login.verify_user')->middleware('guest');

Route::get('/logout',[RegisterController::class,'logout'])->middleware('auth');





Route::get('/',[PostController::class,'index'])->name('posts.index');
Route::get('/posts',[PostController::class,'index'])->name('posts.index');

Route::get('/posts/create',[PostController::class,'create'])->name('posts.create')->middleware('auth');
Route::post('/posts/store',[PostController::class,'store'])->name('posts.store')->middleware('auth');
Route::get('/posts/show/{post}',[PostController::class,'show'])->name('posts.show');

Route::get('/posts/search/',[SearchController::class,'postsSearch'])->name('posts.search');



Route::get('/users/myposts',[PostController::class,'myPosts'])->name('users.myposts');
Route::get('/users',[UserController::class,'index'])->name('users.index');