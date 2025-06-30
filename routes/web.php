<?php

use App\Http\Controllers\testing;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/jajal', [testing::class, 'test'] );
Route::get('/jajal/{id}', [testing::class, 'testById'] );
Route::get('/jajal/{id}/edit', [testing::class, 'testByIdEdit'] );