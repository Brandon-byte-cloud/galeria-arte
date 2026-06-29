<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ControladorArtistas;

Route::get('personas',[ControladorArtistas::class,"index"]);
Route::post('login',[AuthController::class,'login']);
Route::middleware('auth:api')->group(function(){
    Route::get('me',[AuthController::class,"me"]);
    Route::post('logout',[AuthController::class,"logout"]);

    Route::post('/personas', [ControladorArtistas::class, 'store']);
    Route::put('/personas/{id}', [ControladorArtistas::class, 'update']);
    Route::patch('/personas/{id}', [ControladorArtistas::class, 'update']);
    Route::delete('/personas/{id}', [ControladorArtistas::class, 'destroy']);
    
});
