<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\CategoriController;
use App\Http\Controllers\QuestionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LessonsController;

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
    return view('frontend/home');
});

Route::get('/book', function () {
    return view('frontend/book');
});

Route::get('/contributor', function () {
    return view('frontend/contributor');
});

// Existing routes

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');

Route::get('/students', [App\Http\Controllers\SiswaController::class, 'index'])->name('students')->middleware('auth');

Auth::routes();

Route::resource('users', UserController::class)->middleware('auth');
Route::resource('books', BookController::class)->middleware('auth');
Route::resource('categories', CategoriController::class)->middleware('auth');
Route::resource('questions', QuestionController::class)->middleware('auth');
Route::resource('lessons', LessonsController::class);



