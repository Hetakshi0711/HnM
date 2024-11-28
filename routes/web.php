<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/company', [CompanyController::class, 'index']);
Route::post('/company/add', [CompanyController::class, 'store']);