<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\CuentaController;
use App\Http\Controllers\TransaccionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/categorias');
});

// CRUD Categorías
Route::resource('categorias', CategoriaController::class);

// CRUD Cuentas
Route::resource('cuentas', CuentaController::class);

// CRUD Transacciones
Route::resource('transacciones', TransaccionController::class);

require __DIR__.'/auth.php';