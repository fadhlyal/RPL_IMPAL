<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(['middleware' => ['guest']], function() {
    Route::get('/login', [LoginController::class, 'create'])->name('login');
    Route::post('/login', [LoginController::class, 'store']);

    Route::get('/register', [RegisterController::class, 'create'])->name('register');
    Route::post('/register', [RegisterController::class, 'store']);
});

Route::group(['middleware' => ['auth']], function() {
    Route::get('/laporan', function() {
        return view('lapor');
    })->name('laporan');
    Route::get('/logout', [UserController::class, 'logout'])->name('logout');
});

Route::get('/forum', function() {
    return view('forum');
})->name('forum');

Route::get('/kontakdarurat', function() {
    return view('telepon');
})->name('kontak');

Route::get('/dashboard', function() {
    return view('landingpage');
})->name('dashboard');

Route::redirect('/', '/dashboard');