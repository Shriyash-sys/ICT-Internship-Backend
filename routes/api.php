<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IctController;
use App\Http\Controllers\LoginController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::post('/register/candidate', [LoginController::class, 'CandidateRegister']);

Route::post('/login/candidate', [LoginController::class, 'CandidateLogin']);

Route::post('/register/recruiter', [LoginController::class, 'RecruiterRegister']);

Route::post('/login/recruiter', [LoginController::class, 'RecruiterLogin']);

Route::middleware(['auth:sanctum'])->group(function() {
    
    Route::get('/logout/{id}', [LoginController::class, 'CandidateLogout']);

    Route::post('/recruiter/company-info/{id}', [IctController::class, 'companyInfo'])->name('company.info');

    Route::get('/recruiter/company-info', [IctController::class, 'company'])->name('company.view');

    Route::post('/recruiter/vacancy/{id}', [IctController::class, 'postVacancy']);
});