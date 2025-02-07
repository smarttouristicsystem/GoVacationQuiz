<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [Api\CompanyController::class, 'index']);
