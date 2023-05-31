<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImportController;
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
        Route::post('/ishihara-test', 'storeIshiharaTest')->name('store.ishihara');
        Route::get('/ishihara-result/{id}', 'ishiharaResult')->name('result.ishihara');

        Route::get('/cambridge-test/red-green/{id}', 'cambridgeTestRG')->name('redgreen.test');
        Route::post('/cambridge-test/red-green', 'storeCambridgeTestRG')->name('store.cambridge.rg');

        Route::get('/cambridge-test/blue/{id}', 'cambridgeTestBlue')->name('blue.test');
        Route::post('/cambridge-test/blue', 'storeCambridgeTestBlue')->name('store.cambridge.blue');

        Route::get('/cambridge-result/{id}', 'cambridgeResult')->name('result.cambridge');

        Route::get('/result', 'resultTest')->name('result');
        Route::get('/result/{id}', 'resultData')->name('result.data');
        Route::get('/unduh-hasil-tes/{id}', 'generatePDF')->name('unduh.pdf');

        Route::get('/about', 'about')->name('about');
        Route::get('/instruction', 'howtodo')->name('howtodo');
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

    // import excel
    Route::get('/import', [ImportController::class, 'import'])->name('import');
    Route::post('/import-ishihara', [ImportController::class, 'importIshihara'])->name('import.ishihara');
    Route::post('/import-cambridge-rg', [ImportController::class, 'importCambridgeRG'])->name('import.rg');
    Route::post('/import-cambridge-blue', [ImportController::class, 'importCambridgeBlue'])->name('import.blue');
});
