<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\Api\EmployeeController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\Api\AuthController;

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::apiResource('employees', EmployeeController::class);

Route::post('/students', [StudentController::class, 'store']);
Route::get('/students', [StudentController::class, 'index']);

Route::apiResource('departments', DepartmentController::class);

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::post('/logout-all', [AuthController::class, 'logoutAll']);
});