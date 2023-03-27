<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

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

Route::middleware(['auth'])->group(function () {
    Route::controller(HomeController::class)->group(function() {
        Route::get('/', 'index')->name('beranda');
        Route::get('/ishihara-test', 'ishiharaTest')->name('ishihara.test');
        Route::get('/result', 'resultTest')->name('result');
    });

    Route::controller(UserController::class)->group(function() {
        Route::get('/profile', 'profile')->name('profile');
        Route::get('/profile-update', 'profileUpdate')->name('profile.update');
        Route::put('/profile-update/{id}', 'profileAction')->name('profile.action');
    });

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

Route::middleware(['guest'])->group(function () {
    Route::controller(AuthController::class)->group(function() {
        Route::get('/login', 'login')->name('login');
        Route::post('/login', 'loginAction')->name('login.action');
        Route::get('/register', 'register')->name('register');
        Route::post('/register', 'registerAction')->name('register.action');
    });
});
