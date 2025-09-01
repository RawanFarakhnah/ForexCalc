<?php

use App\Http\Controllers\CurrencyController;
use Illuminate\Support\Facades\Route;

Route::get('/', [CurrencyController::class, 'index'])->name('home');

Route::get('/converter', [CurrencyController::class, 'converter'])->name('converter');