<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PublikasiController;


Route::post('/login', [AuthController::class, 'login']); 

Route::middleware('auth:sanctum')->group(function () {
    
    Route::get('/user', function (Request $request){
        return $request->user();
    });
    Route::post('/logout', [AuthController::class, 'logout']);

    // Publikasi
    Route::get('/publikasi', [PublikasiController::class, 'index']);
    Route::post('/publikasi', [PublikasiController::class, 'store']);
    Route::get('/publikasi/{id}', [PublikasiController::class, 'show']); 
    Route::put('/publikasi/{id}', [PublikasiController::class, 'update']); 
    Route::delete('/publikasi/{id}', [PublikasiController::class, 'destroy']); 
});