<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\DirectorController;
use App\Http\Controllers\ReviewController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/director', [DirectorController::class, 'store']);
Route::post('/movie', [MovieController::class, 'store']);
Route::post('/review', [ReviewController::class, 'store']);

Route::get('/director', [DirectorController::class, 'index']);
Route::get('/movies', [MovieController::class, 'index']);
Route::get('/reviews', [ReviewController::class, 'index']);

Route::put('/director/{id}', [DirectorController::class, 'update']);
Route::put('/movies/{id}', [MovieController::class, 'update']);
Route::put('/review/{id}', [ReviewController::class, 'update']);

Route::delete('/director/{id}', [DirectorController::class, 'destroy']);
Route::delete('/movies/{id}', [MovieController::class, 'destroy']);
Route::delete('/review/{id}', [ReviewController::class, 'destroy']);
