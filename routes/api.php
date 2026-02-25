<?php

use Illuminate\Http\Request;
use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::post('/register', [AuthController::class, 'register']);

Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->post('/logout', [AuthController::class, 'logout']);

Route::get('/user', function (Request $request) {
    return $request->user();
<<<<<<< HEAD
})->middleware('auth:sanctum');

//FERRER
Route::get('/news', [NewsController::class, 'index']);
=======
})->middleware('auth:sanctum');
>>>>>>> feature/dev2-Matias
