<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

// Route::get('/', [HomeController::class, 'index']);
/**
 * En caso de que el controlador únicamente tenga 1 función
 * La función única se define como invoke y el router solo habrá que introducir
 * el controlador y ya interpreta que usará invoke
 */
Route::get('/', HomeController::class);

Route::get('/posts', [PostController::class, 'index']);

Route::get('/posts/add', [PostController::class, 'addPost']);

Route::get('/posts/{post}', [PostController::class, 'getPost']);