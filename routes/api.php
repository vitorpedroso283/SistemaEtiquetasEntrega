<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtiquetaController;
use App\Http\Controllers\TransportadoraController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
// Rota para criar uma etiqueta de entrega
Route::post('/etiquetas', [EtiquetaController::class, 'create']);

// Rota para selecionar a transportadora durante a criação da etiqueta
Route::post('/etiquetas/{etiqueta}/transportadora', [TransportadoraController::class, 'select']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
