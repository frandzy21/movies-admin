<?php

use App\Http\Controllers\DirectorController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ShowtimeController;
use App\Http\Controllers\TicketController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/directors', [DirectorController::class, 'index']);
Route::get('/directors/create', [DirectorController::class, 'create']);
Route::post('/directors', [DirectorController::class, 'store']);
Route::get('/directors/{director}/edit', [DirectorController::class, 'edit']);
Route::put('/directors/{director}', [DirectorController::class, 'update']);
Route::delete('/directors/{director}', [DirectorController::class, 'destroy']);


Route::get('/movies', [MovieController::class, 'index']);
Route::get('/movies/create', [MovieController::class, 'create']);
Route::post('/movies', [MovieController::class, 'store']);
Route::get('/movies/{movie}/edit', [MovieController::class, 'edit']);
Route::put('/movies/{movie}', [MovieController::class, 'update']);
Route::delete('/movies/{movie}', [MovieController::class, 'destroy']);


Route::get('/reviews', [ReviewController::class, 'index']);
Route::get('/reviews/create', [ReviewController::class, 'create']);
Route::post('/reviews', [ReviewController::class, 'store']);
Route::get('/reviews/{review}/edit', [ReviewController::class, 'edit']);
Route::put('/reviews/{review}', [ReviewController::class, 'update']);
Route::delete('/reviews/{review}', [ReviewController::class, 'destroy']);


Route::get('/showtimes', [ShowtimeController::class, 'index']);
Route::get('/showtimes/create', [ShowtimeController::class, 'create']);
Route::post('showtimes', [ShowtimeController::class, 'store']);
Route::get('/showtimes/{showtime}/edit', [ShowtimeController::class, 'edit']);
Route::put('showtimes/{showtime}', [ShowtimeController::class, 'update']);
Route::delete('showtimes/{showtime}', [ShowtimeController::class, 'destroy']);


Route::get('/tickets/create', [TicketController::class, 'create']);
Route::post('/tickets', [TicketController::class, 'store']);

Route::get('/tickets/success', [TicketController::class, 'success']);


