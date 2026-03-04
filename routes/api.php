<?php

use Illuminate\Http\Request;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

route::post('login', [AuthController::class, 'login']);
route::post('logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');