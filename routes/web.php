<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutosController;
Route::get('/', function () {
    return view('welcome');
});

Route::resource('produto', ProdutosController::class);
