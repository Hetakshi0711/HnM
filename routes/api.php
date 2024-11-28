<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;

// GET route to fetch all products
// Route::get('company', [CompanyController::class, 'index']); 
Route::middleware('api')->get('company', [CompanyController::class, 'index']);
Route::post('/company/add', [CompanyController::class, 'store']);