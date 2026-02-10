<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\SessionsController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::get('/', [AdminController::class, 'index']);

    Route::get('/employees', [EmployeeController::class, 'index']);
    Route::get('/employees/create', [EmployeeController::class, 'create']);
    Route::get('/employees/{employee}', [EmployeeController::class, 'show']);
    Route::get('/employees/{employee}/edit', [EmployeeController::class, 'edit']);
    Route::post('/employees/create', [EmployeeController::class, 'store']);
    Route::patch('/employees/{employee}', [EmployeeController::class, 'update']);
    Route::delete('/employees/{employee}', [EmployeeController::class, 'destroy']);

    Route::get('/companies', [CompanyController::class, 'index']);
    Route::get('/companies/create', [CompanyController::class, 'create']);
    Route::get('/companies/{company}', [CompanyController::class, 'show']);
    Route::get('/companies/{company}/edit', [CompanyController::class, 'edit']);
    Route::post('/companies/create', [CompanyController::class, 'store']);
    Route::patch('/companies/{company}', [CompanyController::class, 'update']);
    Route::delete('/companies/{company}', [CompanyController::class, 'destroy']);

    Route::delete('/logout', [SessionsController::class, 'destroy']);
});

Route::middleware('guest')->group(function () {
    Route::get('/login', [SessionsController::class, 'create']);
    Route::post('/login', [SessionsController::class, 'store']);
});
