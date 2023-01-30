<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [EventController::class, 'index']);

Route::post('/save', [EventController::class, 'store']);
Route::get('/show', [EventController::class, 'show']);
Route::post('/reload/{id}', [EventController::class, 'edit']);
Route::post('/edit/{event}', [EventController::class, 'update']);
Route::post('/delete/{id}', [EventController::class, 'destroy']);
