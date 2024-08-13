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
Route::get('/genero/apagar/{id}', [App\Http\Controllers\ControladorGenero::class, 'destroy'])->name('deletagenero');

Route::get('/criarhistoria', [App\Http\Controllers\ControladorHistorias::class,'create'])->name('novoHistoria');
Route::get('/historia', [App\Http\Controllers\ControladorHistorias::class, 'index'])->name('exibehistoria');
Route::post('/historia', [App\Http\Controllers\ControladorHistorias::class, 'store'])->name('gravahistoria');
Route::get('/historia/apagar/{id}', [App\Http\Controllers\ControladorHistorias::class, 'destroy'])->name('deletahistoria');

Route::get('/criarpersonagem', [App\Http\Controllers\ControladorPersonagens::class,'create'])->name('novoPersonagem');

Route::get('/criararcos', [App\Http\Controllers\ControladorPersonagens::class,'create'])->name('novoArco');
Route::get('/arco', [App\Http\Controllers\ControladorArco::class, 'index'])->name('exibearco');
Route::post('/arco', [App\Http\Controllers\ControladorArco::class, 'store'])->name('gravaarco');
