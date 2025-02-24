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
<<<<<<< HEAD
Route::get('/employees', [Api\EmployeeController::class, 'index'])->name('employees.index');
=======
>>>>>>> 8bb4c43b877eae3f52c8d84d69ea1b2c8d532118
