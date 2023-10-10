<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;

//Route home
Route::get('/', [HomeController::class, 'index']);

//Route resource
Route::resource('posts', \App\Http\Controllers\PostController::class);
