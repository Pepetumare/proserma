<?php
// routes/web.php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

// Ruta para la página de Inicio
Route::get('/', function () {
    return view('inicio'); // Carga la vista 'inicio.blade.php'
})->name('inicio');

// Ruta para la página de Servicios
Route::get('/servicios', function () {
    return view('servicios'); // Carga la vista 'servicios.blade.php'
})->name('servicios');

// Ruta para la página de Nosotros
Route::get('/nosotros', function () {
    return view('nosotros'); // Carga la vista 'nosotros.blade.php'
})->name('nosotros');

// Ruta para la página de Contacto
Route::get('/contacto', function () {
    return view('contacto'); // Carga la vista 'contacto.blade.php'
})->name('contacto');

Route::post('/contacto/enviar', [ContactController::class, 'enviar'])->name('contacto.enviar');