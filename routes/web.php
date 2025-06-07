<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IctController;

Route::get('/', [IctController::class, 'index'])->name('dashboard');

Route::get('/companies', [IctController::class, 'company'])->name('companies');