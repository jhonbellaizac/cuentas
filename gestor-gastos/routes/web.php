<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\CuentaController;
use App\Http\Controllers\TransaccionController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return auth()->check()
        ? redirect()->route('dashboard')
        : view('welcome');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // CRUD Categorías
    Route::resource('categorias', CategoriaController::class);

    // CRUD Cuentas
    Route::resource('cuentas', CuentaController::class);

    // CRUD Transacciones
    Route::resource('transacciones', TransaccionController::class);

    Route::view('/menu', 'dashboard')->name('menu');
});

require __DIR__.'/auth.php';