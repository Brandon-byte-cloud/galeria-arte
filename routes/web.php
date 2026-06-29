<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorArtistas;
Route::get('/', function () {
    return view('index');
});
Route::get('/arte-en-la-actualidad', function () {
    return view('content.arte_en_la_actualidad');
});

Route::get('/origenes', function () {
    return view('content.origenes');
});
Route::get('/historia', function () {
    return view('content.Historia');
});
Route::get('/que-es-arte', function () {
    return view('content.que_es_arte');
});
Route::get('/que_se_puede_considerar_arte', function () {
    return view('content.que_se_puede_considerar_arte');
});
Route::get('/buscar-obras', function () {
    return view('content.donde_estan_las_obras');
});





