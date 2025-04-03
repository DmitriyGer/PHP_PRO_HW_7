<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/store-user', [UserController::class, 'store']);
Route::get('/user', [UserController::class, 'index']);
Route::get('/user/{id}', [UserController::class, 'get']);