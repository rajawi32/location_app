<?php

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

Route::get('/magasins', function () {
    return view('magasins.index');
})->name('magasins.index');
Route::get('/locataires', function () {
    return view('locataires.index');
})->name('locataires.index');
Route::get('/contrats', function () {
    return view('contrats.index');
})->name('contrats.index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
