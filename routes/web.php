<?php

use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\JobController::class, 'index']);
Route::get('/jobs/create', [\App\Http\Controllers\JobController::class, 'create'])->middleware('auth');
Route::post('/jobs', [\App\Http\Controllers\JobController::class, 'store'])->middleware('auth');

Route::get('/search', SearchController::class);
Route::get('/tags/{tag:name}', TagController::class);

Route::middleware('guest')->group(function () {
    Route::get('/register',[RegisteredUserController::class, 'create']);
    Route::post('/register',[RegisteredUserController::class, 'store']);
    Route::get('/login',[SessionController::class, 'create']);
    Route::post('/login',[SessionController::class, 'store']);
});

Route::delete('/login',[SessionController::class, 'destroy'])->middleware('auth');
