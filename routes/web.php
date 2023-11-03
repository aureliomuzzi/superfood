<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;

Auth::routes();

Route::middleware('auth')->group(function() {

    Route::get('/', [HomeController::class, 'index'])->name('home.index');

    Route::resource('users', UserController::class)->except(['destroy']);
    Route::get('/users/{id}/destroy', [UserController::class, 'destroy'])->name('users.destroy');

    // Route::resource('clientepf', ClientePfController::class)->except(['destroy']);
    // Route::get('/clientepf/{id}/destroy', [ClientePfController::class, 'destroy'])->name('clientepf.destroy');

});
