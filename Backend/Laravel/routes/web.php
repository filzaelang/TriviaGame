<?php

use App\Http\Controllers\QuestionController;
use Illuminate\Support\Facades\Route;

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

// Rute CRUD untuk pertanyaan
// Route::resource('questions', QuestionController::class);
// Route::resource('/questions', \App\Http\Controllers\QuestionController::class);
// Route::resource('/posts', \App\Http\Controllers\PostController::class);

Route::get('/', function () {
    return view('welcome');
});
