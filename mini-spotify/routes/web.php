<?php

use App\Http\Controllers\AlbumController;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\ConcertController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\TrackController;
use Illuminate\Support\Facades\Route;


Route::get('/1', function () {
    return view('dashboard');
});
Route::get('/artists', [ArtistController::class, 'index']);
Route::get('/artists/create', [ArtistController::class, 'create']);
Route::post('/artists', [ArtistController::class, 'store']);
Route::get('/artists/{id}/edit', [ArtistController::class, 'edit']);
Route::put('/artists/{id}', [ArtistController::class, 'update']);
Route::delete('/artists/{id}', [ArtistController::class, 'destroy']);


Route::get('/albums', [AlbumController::class, 'index']);
Route::get('/albums/create', [AlbumController::class, 'create']);
Route::post('/albums', [AlbumController::class, 'store']);
Route::get('/albums/{id}/edit', [AlbumController::class, 'edit']);
Route::put('/albums/{id}', [AlbumController::class, 'update']);
Route::delete('/albums/{id}', [AlbumController::class, 'destroy']);


Route::get('/tracks', [TrackController::class, 'index']);
Route::get('/tracks/create', [TrackController::class, 'create']);
Route::post('/tracks', [TrackController::class, 'store']);
Route::get('/tracks/{id}/edit', [TrackController::class, 'edit']);
Route::put('/tracks/{id}', [TrackController::class, 'update']);
Route::delete('/tracks/{id}', [TrackController::class, 'destroy']);


Route::get('/concerts', [ConcertController::class, 'index']);
Route::get('/concerts/create', [ConcertController::class, 'create']);
Route::post('/concerts', [ConcertController::class, 'store']);
Route::get('/concerts/{id}/edit', [ConcertController::class, 'edit']);
Route::put('/concerts/{id}', [ConcertController::class, 'update']);
Route::delete('/concerts/{id}', [ConcertController::class, 'destroy']);

Route::get('/tickets/create', [TicketController::class, 'create']);
Route::post('/tickets', [TicketController::class, 'store']);



Route::get('tickets/success', [TicketController::class, 'success']);
