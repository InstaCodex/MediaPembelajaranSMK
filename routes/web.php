<?php

<<<<<<< HEAD
use App\Http\Controllers\UserController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\CategoriController;
use Illuminate\Support\Facades\Route;
=======
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoriController;
use App\Http\Controllers\UserController;
>>>>>>> 18dbade65bd37075951b181fc849fcc75f9424f9

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

=======
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('books', BookController::class);

Route::resource('categories', CategoriController::class);

Route::resource('users', UserController::class);
>>>>>>> 18dbade65bd37075951b181fc849fcc75f9424f9
