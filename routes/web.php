<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TiposAsientosController;
use App\Http\Controllers\AsientosController;
use App\Http\Controllers\VueloController;

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
    return view('welcome');
});
Route::get('/inicio',function(){return view('inicio');})->name('inicio');
Route::get('/tiposAsientos',[TiposAsientosController::class,'showTiposAsientos'])->name('showTiposAsientos');

Route::get('/agregarAsiento',[AsientosController::class,'agregarAsientos'])->name('agregarAsientos');

Route::get('/editarAsiento/{id}',[TiposAsientosController::class,'editarAsientos'])->name('editarAsientos');
Route::get('/actualizar/{id}',[TiposAsientosController::class,'actualizarAsientos'])->name('actualizarAsientos');
Route::get('/agregarTipoAsiento',[TiposAsientosController::class,'agregarTipoAsientos'])->name('agregarTiposAsientos');
Route::post('/guardarTipoAsiento',[TiposAsientosController::class,'guardarTiposAsientos'])->name('guardarTiposAsientos');
Route::get('/eliminar/{id}',[TiposAsientosController::class,'eliminarTiposAsientos'])->name('eliminarTiposAsientos');

Route::get('/editarVuelo',[VueloController::class,'editarVuelo'])->name('editarVuelo');
Route::get('/nuevoVuelo',[VueloController::class,'nuevoVuelo'])->name('nuevoVuelo');
Route::get('/vueloAsientos',[VueloController::class,'vueloAsientos'])->name('vueloAsientos');
Route::get('/vuelos',[VueloController::class,'showVuelos'])->name('vuelos');
