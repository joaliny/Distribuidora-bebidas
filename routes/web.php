<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;

Route::get('/', function () {
    return ['Laravel' => app()->version()];
});

Route::resource('produtos', ProdutoController::class);

require __DIR__.'/auth.php';
