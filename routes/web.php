<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PdfGeneratorController;

Route::get('/', function () {
    return 'Welcome';
});

Route::get('/user', [UserController::class, 'index']);
Route::get('/user/{id}', [UserController::class, 'get']); 
Route::post('/store-user', [UserController::class, 'store']);
Route::get('/resume/{id}', [PdfGeneratorController::class, 'index']);

