<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [Api\CompanyController::class, 'index'])->name('company.index');
Route::get('/companies/{id}', [Api\CompanyController::class, 'show'])->name('company.show');
Route::get('/assistance', [Api\AssistanceController::class, 'index'])->name('assistance.index');
Route::get('/assistance/{id}', [Api\AssistanceController::class, 'show'])->name('assistance.show');
