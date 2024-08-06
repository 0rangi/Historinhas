<?php

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

Route::get('/', function () {
    return view('index');
})->name('inicio');

Route::get('/criargenero', [App\Http\Controllers\ControladorGenero::class,'create'])->name('novogenero');
Route::get('/genero', [App\Http\Controllers\ControladorGenero::class, 'index'])->name('exibegenero');
Route::post('/genero', [App\Http\Controllers\ControladorGenero::class, 'store'])->name('gravagenero');

Route::get('/historia', [App\Http\Controllers\ControladorHistorias::class, 'index'])->name('exibehistoria');
Route::get('/criarhistoria', [App\Http\Controllers\ControladorHistorias::class,'create'])->name('novoHistoria');

Route::get('/criarpersonagem', [App\Http\Controllers\ControladorPersonagens::class,'create'])->name('novoPersonagem');