<?php

<<<<<<< HEAD
use App\Http\Controllers\Auth\LoginController;
=======
<<<<<<< HEAD
>>>>>>> 3efb018d8a0ddfb7a6701257fa02c365c9134d68
use App\Http\Controllers\UserController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\CategoriController;
use App\Http\Controllers\QuestionController;
use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
use App\Http\Controllers\LessonsController;
=======
=======
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoriController;
use App\Http\Controllers\UserController;
>>>>>>> 18dbade65bd37075951b181fc849fcc75f9424f9
>>>>>>> 3efb018d8a0ddfb7a6701257fa02c365c9134d68

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
<<<<<<< HEAD
    return view('frontend/home');
});

Route::get('/book', function () {
    return view('frontend/book');
});

Route::get('/contributor', function () {
    return view('frontend/contributor');
});

<<<<<<< HEAD
// Existing routes

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');

Route::get('/students', [App\Http\Controllers\SiswaController::class, 'index'])->name('students')->middleware('auth');

Auth::routes();

Route::resource('users', UserController::class)->middleware('auth');
Route::resource('books', BookController::class)->middleware('auth');
Route::resource('categories', CategoriController::class)->middleware('auth');
Route::resource('questions', QuestionController::class)->middleware('auth');
Route::resource('lessons', LessonsController::class);


=======
Route::get('/login', function () {
    return view('frontend/login');
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/home', function () {
//     return view('layouts/backend');
// });

Auth::routes();

Route::resource('users', UserController::class);
Route::resource('books', BookController::class);
Route::resource('categories', CategoriController::class);
Route::resource('students', UserController::class);
>>>>>>> 3efb018d8a0ddfb7a6701257fa02c365c9134d68

=======
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('books', BookController::class);

Route::resource('categories', CategoriController::class);

Route::resource('users', UserController::class);
>>>>>>> 18dbade65bd37075951b181fc849fcc75f9424f9
