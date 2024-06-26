<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\bookController;

// Route::get('/', function () {
//     return view('login');
// });

// Route::get('/register', function () {
//     return view('register');
// });

// Route::get('/private', function () {
//     return view('private');
// })->name('private');
Route::view('/login', "login")->name('login');
Route::view('/registro', "register")->name('registro');
// Route::view('/privada', 'secret')->middleware('auth');
Route::get('/privada', function () {
    $bookController = app()->make(bookController::class);
    $books = $bookController->index();
    return view('secret', ["books" => $books]);
})->middleware();



Route::post('/validar-registro', [LoginController::class, 'register'])->name('validar-registro');
Route::post('/inicia-sesion', [LoginController::class, 'login'])->name('inicia-sesion');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');


Route::post('/create-book', [bookController::class, 'bookController@create'])->name('create-book');
