<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [Api\CompanyController::class, 'index'])->name('company.index');
Route::get('/companies/{id}', [Api\CompanyController::class, 'show'])->name('company.show');
Route::get('/assistance', [Api\AssistanceController::class, 'index'])->name('assistance.index');
// Route::get('/categories', [Api\CategoryController::class, 'index'])->name('categories.index');
// Route::get('/categories/{category}/employees', [Api\EmployeeController::class, 'index'])->name('categories.employees');