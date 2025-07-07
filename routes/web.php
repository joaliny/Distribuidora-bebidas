<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Rotas Públicas (Login e Registro)
|--------------------------------------------------------------------------
*/
Route::get('/login', fn () => view('auth.login'))->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'store'])->name('login.store');
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

Route::get('/register', fn () => view('auth.register'))->name('register');
Route::post('/register', [RegisteredUserController::class, 'store'])->name('register.store');

/*
|--------------------------------------------------------------------------
| Página Inicial
|--------------------------------------------------------------------------
*/
Route::get('/', fn () => view('home'))->name('home');

/*
|--------------------------------------------------------------------------
| Área Protegida por Autenticação
|--------------------------------------------------------------------------
*/
Route::middleware(['auth'])->group(function () {

    // Painel do administrador
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');

    // Produtos
    Route::resource('produtos', ProdutoController::class);

    // Clientes
    Route::resource('clientes', ClienteController::class);

    // Pedidos
    Route::resource('pedidos', PedidoController::class);
});
