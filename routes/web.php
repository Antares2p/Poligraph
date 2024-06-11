<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\RequestController;

Route::get('/', [MainController::class, 'main']);
Route::get('/comment', [MainController::class, 'comment']);
Route::get('/contact', [MainController::class, 'contact']);
Route::get('/design', [MainController::class, 'design']);
Route::get('/production', [MainController::class, 'production']);
Route::get('/tool', [MainController::class, 'tool']);
Route::post('/comment/check', [MainController::class, 'comment_check']); 
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

Route::get('/request-form', [RequestController::class, 'showForm'])->name('request.form');
Route::post('/submit-request', [RequestController::class, 'submitRequest'])->name('submit.request');
