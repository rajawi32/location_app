<?php

use App\Http\Controllers\MagasinController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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

Route::prefix('/users')->group(function () {
    Route::controller(UserController::class)->group(function () {
        Route::name('users.')->group(function () {
            Route::get('', 'index')->name('index');
            Route::delete('/{id}', 'destroy')->name('destroy');
        });
    });
});
Route::prefix('/magasins')->group(function () {
    Route::controller(MagasinController::class)->group(function () {
        Route::name('magasins.')->group(function () {
            Route::get('', 'index')->name('index');
            Route::get('/create', 'create')->name('create');
            Route::post('', 'store')->name('store');
            Route::get('/{id}', 'edit')->name('edit');
            Route::put('/{id}', 'update')->name('update');
            Route::delete('/{id}', 'destroy')->name('destroy');
        });
    });
});




Route::get('/locataires', function () {
    return view('locataires.index');
})->name('locataires.index');
Route::get('/contrats', function () {
    return view('contrats.index');
})->name('contrats.index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
