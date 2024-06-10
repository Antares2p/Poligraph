<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

Route::get('/', [MainController::class, 'main']);
Route::get('/comment', [MainController::class, 'comment']);
Route::get('/contact', [MainController::class, 'contact']);
Route::get('/design', [MainController::class, 'design']);
Route::get('/production', [MainController::class, 'production']);
Route::get('/tool', [MainController::class, 'tool']);
Route::post('/comment/check', [MainController::class, 'comment_check']); 