<?php

use App\Http\Controllers\AlbumController;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\TrackController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/artists', [ArtistController::class, 'store']);
Route::get('/artists', [ArtistController::class, 'index']);
Route::put('/artists/{id}', [ArtistController::class, 'update']);
Route::delete('/artists/{id}', [ArtistController::class, 'destroy']);

Route::post('/albums', [AlbumController::class, 'store']);
Route::get('/albums', [AlbumController::class, 'index']);
Route::put('/albums/{id}', [AlbumController::class, 'update']);
Route::delete('/albums/{id}', [AlbumController::class, 'destroy']);

Route::post('/tracks', [TrackController::class, 'store']);
Route::get('/tracks', [TrackController::class, 'index']);
Route::put('/tracks/{id}', [TrackController::class, 'update']);
Route::delete('/tracks/{id}', [TrackController::class, 'destroy']);
