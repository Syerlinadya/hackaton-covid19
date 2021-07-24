<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RumahSakitController; 
use App\Http\Controllers\ProvinsiController;

Route::get('/rumahsakit',[RumahSakitController::class, 'index']);
Route::post('/rumahsakit',[RumahSakitController::class, 'store']);

Route::get('/rumahsakit/{id}',[RumahSakitController::class, 'show']);
Route::put('/rumahsakit/edit{id}',[RumahSakitController::class, 'update']);
Route::delete('/rumahsakit/{id}',[RumahSakitController::class, 'update']);

Route::get('/provinsi',[ProvinsiController::class, 'index']);
Route::post('/provinsi',[ProvinsiController::class, 'store']);

Route::get('/provinsi/{id}',[ProvinsiController::class, 'show']);
Route::put('/provinsi/{id}',[ProvinsiController::class, 'update']);
Route::delete('/provinsi/{id}',[ProvinsiController::class, 'destroy']);
