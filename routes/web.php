<?php

use App\Http\Controllers\QuoteRequestController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/sobre', function () {
    return view('sobre');
});

Route::get('/galeria', function () {
    return view('galeria');
});

Route::post('/orcamento', [QuoteRequestController::class, 'store'])
    ->middleware('throttle:5,1')
    ->name('orcamento.store');