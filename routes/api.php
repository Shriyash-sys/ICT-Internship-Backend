<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::post('/register/candidate', [LoginController::class, 'CandidateRegister']);

Route::post('/login/candidate', [LoginController::class, 'CandidateLogin']);

Route::middleware(['auth:sanctum'])->group(function() {
    
    Route::get('/logout/{id}', [LoginController::class, 'CandidateLogout']);
});