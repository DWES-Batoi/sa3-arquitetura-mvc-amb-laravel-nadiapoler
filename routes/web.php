<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EquipController;
use App\Http\Controllers\EstadiController;

// Ruta de bienvenida (GET /)
Route::get('/', fn() => "Benvingut a la Guia d'Equips de Futbol Femení!");

// Genera automáticamente varias rutas REST para 'equips'
Route::resource('equips', EquipController::class);

// Genera automáticamente varias rutas REST para 'estadis'
Route::resource('estadis', EstadiController::class);