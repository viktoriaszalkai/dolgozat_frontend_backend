<?php

use App\Http\Controllers\KategoriaController;
use App\Http\Controllers\TesztController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');



Route::get('/tesztek', [TesztController::class, 'index']);
Route::get('/kategoriak', [KategoriaController::class, 'index']);
Route::get('/tesztek/kategoria/{id}', [TesztController::class, 'tesztek_kategoriankent']);

