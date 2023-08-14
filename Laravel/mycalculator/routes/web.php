<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalculatorController;

Route::get('/mycalculator', [CalculatorController::class, 'index'])->name('calculator');
Route::post('/mycalculator', [CalculatorController::class, 'calculate'])->name('calculate');

