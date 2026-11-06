<?php
use App\Http\Controllers\ClienteController;
use Illuminate\Support\Facades\Route;
/*
Route::get('/', function () {
    return view('clientesIndex');
});
*/
Route::get("/clientes",[ClienteController::class,"index"])->name('cliente.index');