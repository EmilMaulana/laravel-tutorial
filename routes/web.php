<?php

use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;



Route::get('/', function () {
    return view('welcome');
});


Route::get('/contacts', [ContactController::class, 'index'])->name('contacts.index');



Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');

Route::get('/form', [FormController::class, 'create']);
Route::post('/form', [FormController::class, 'store']);

Route::get('/home', [HomeController::class, 'index']);
