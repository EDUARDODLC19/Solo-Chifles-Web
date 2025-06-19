<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PedidoController;
use Illuminate\Support\Facades\Route;

// Página principal
Route::get('/', [PageController::class, 'index'])->name('index');

// Páginas informativas
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/products', [PageController::class, 'products'])->name('products');
Route::get('/store', [PageController::class, 'store'])->name('store');
Route::get('/reviews', [PageController::class, 'reviews'])->name('reviews');

// Autenticación
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Pedidos
Route::get('/pedido', [PedidoController::class, 'form'])->name('pedido.form');
Route::post('/pedido', [PedidoController::class, 'enviar'])->name('pedido.enviar');