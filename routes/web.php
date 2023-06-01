<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VendedoresController;
use App\Http\Controllers\PedidosController;
use App\Http\Controllers\EtiquetasEntregaController;
use App\Http\Controllers\TransportadorasController;

//página principal
Route::view('/', 'welcome')->name('welcome');

// Rotas para Vendedores
Route::get('/vendedores', [VendedoresController::class, 'index'])->name('vendedores.index');
Route::get('/vendedores/create', [VendedoresController::class, 'create'])->name('vendedores.create');
Route::post('/vendedores', [VendedoresController::class, 'store'])->name('vendedores.store');
Route::get('/vendedores/{vendedor}', [VendedoresController::class, 'show'])->name('vendedores.show');
Route::get('/vendedores/{vendedor}/edit', [VendedoresController::class, 'edit'])->name('vendedores.edit');
Route::put('/vendedores/{vendedor}', [VendedoresController::class, 'update'])->name('vendedores.update');
Route::delete('/vendedores/{vendedor}', [VendedoresController::class, 'destroy'])->name('vendedores.destroy');

// Rotas para Pedidos
Route::get('/pedidos', [PedidosController::class, 'index'])->name('pedidos.index');
Route::get('/pedidos/create', [PedidosController::class, 'create'])->name('pedidos.create');
Route::post('/pedidos', [PedidosController::class, 'store'])->name('pedidos.store');
Route::get('/pedidos/{pedido}', [PedidosController::class, 'show'])->name('pedidos.show');
Route::get('/pedidos/{pedido}/edit', [PedidosController::class, 'edit'])->name('pedidos.edit');
Route::put('/pedidos/{pedido}', [PedidosController::class, 'update'])->name('pedidos.update');
Route::delete('/pedidos/{pedido}', [PedidosController::class, 'destroy'])->name('pedidos.destroy');

// Rotas para Etiquetas de Entrega
Route::get('/etiquetas-entrega', [EtiquetasEntregaController::class, 'index'])->name('etiquetas.index');
Route::get('/etiquetas-entrega/create', [EtiquetasEntregaController::class, 'create'])->name('etiquetas.create');
Route::post('/etiquetas-entrega', [EtiquetasEntregaController::class, 'store'])->name('etiquetas.store');
Route::get('/etiquetas-entrega/{etiqueta}', [EtiquetasEntregaController::class, 'show'])->name('etiquetas.show');
Route::get('/etiquetas-entrega/{etiqueta}/edit', [EtiquetasEntregaController::class, 'edit'])->name('etiquetas.edit');
Route::put('/etiquetas-entrega/{etiqueta}', [EtiquetasEntregaController::class, 'update'])->name('etiquetas.update');
Route::delete('/etiquetas-entrega/{etiqueta}', [EtiquetasEntregaController::class, 'destroy'])->name('etiquetas.destroy');
Route::get('/etiquetas/get-pedido-vendedor/{pedidoId}', [EtiquetasEntregaController::class, 'getPedidoVendedor']);

// Rotas para Transportadoras
Route::get('/transportadoras', [TransportadorasController::class, 'index'])->name('transportadoras.index');
Route::get('/transportadoras/create', [TransportadorasController::class, 'create'])->name('transportadoras.create');
Route::post('/transportadoras', [TransportadorasController::class, 'store'])->name('transportadoras.store');
Route::get('/transportadoras/{transportadora}', [TransportadorasController::class, 'show'])->name('transportadoras.show');
Route::get('/transportadoras/{transportadora}/edit', [TransportadorasController::class, 'edit'])->name('transportadoras.edit');
Route::put('/transportadoras/{transportadora}', [TransportadorasController::class, 'update'])->name('transportadoras.update');
Route::delete('/transportadoras/{transportadora}', [TransportadorasController::class, 'destroy'])->name('transportadoras.destroy');

