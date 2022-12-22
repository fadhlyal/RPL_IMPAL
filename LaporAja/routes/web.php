<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\KontakController;
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
    Route::get('/laporan', [LaporanController::class, 'create'])->name('laporan');
    Route::post('/laporan', [LaporanController::class, 'store']);
    Route::get('/logout', [UserController::class, 'logout'])->name('logout');
    Route::get('/profile', function() {
        return view('profile');
    })->name('profile');
    Route::get('/profile/laporan-selesai', function() {
        return view('dashboard-selesai');
    })->name('dashboard-selesai');
    Route::get('/profile/laporan-diproses', function() {
        return view('dashboard-progres');
    })->name('dashboard-progres');
    Route::get('/profile/laporan-ditolak', function() {
        return view('dashboard-ditolak');
    })->name('dashboard-ditolak');
});

Route::get('/forum', [ForumController::class, 'create'])->name('forum');

Route::get('/kontakdarurat', [KontakController::class, 'create'])->name('kontak');

Route::get('/dashboard', function() {
    return view('landingpage');
})->name('dashboard');

Route::redirect('/', '/dashboard');