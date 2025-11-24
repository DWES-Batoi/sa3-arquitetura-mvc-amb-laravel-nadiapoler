<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EquipController;
use App\Http\Controllers\EstadiController;
use App\Http\Controllers\JugadoraController;
use App\Http\Controllers\PartitController;

// Ruta de bienvenida (GET /)
Route::get('/', fn() => "Benvingut a la Guia d'Equips de Futbol Femení!");

// Genera automáticamente varias rutas REST para 'equips'
Route::resource('equips', EquipController::class);

// Genera automáticamente varias rutas REST para 'estadis'
Route::resource('estadis', EstadiController::class);

// Genera automáticamente varias rutas REST para 'jugadores'
Route::resource('jugadores', JugadoraController::class);

// Genera automáticamente varias rutas REST para 'partits'
Route::resource('partits', PartitController::class);