<?php
use App\Http\Controllers\ClienteController;
use Illuminate\Support\Facades\Route;
/*
Route::get('/', function () {
    return view('clientesIndex');
});

Route::get("/clientes",[ClienteController::class,"index"])->name('clientes.index');
Route::get('/clientes/create',[ClienteController::class,"create"])->name("clientes.create");
Route::post('/clientes',[ClienteController::class,'store'])->name('clientes.store');
Route::get('/clientes/{id}/edit',[ClienteController::class,'edit'])->name('clientes.edit');
Route::put('/clientes/{id}',[ClienteController::class,'update'])->name('clientes.update');
Route::get('/clientes/{id}',[ClienteController::class,'show'])->name('clientes.show');
Route::delete('/clientes/{id}',[ClienteController::class,'destroy'])->name('clientes.destroy');
*/
Route::resource('clientes', ClienteController::class);