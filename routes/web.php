<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarroController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/carros', [CarroController::class, 'index'])->name('carros.index');
Route::get('/carros/create', [CarroController::class, 'create'])->name('carros.create');
Route::post('/carros', [CarroController::class, 'store'])->name('carros.store');
Route::get('/carros/{carro}', [CarroController::class, 'show'])->name('carros.show');
Route::get('/carros/{carro}/edit', [CarroController::class, 'edit'])->name('carros.edit');
Route::put('/carros/{carro}', [CarroController::class, 'update'])->name('carros.update');   
Route::delete('/carros/{carro}', [CarroController::class, 'destroy'])->name('carros.destroy');