<?php

use App\Http\Controllers\testing;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

route::get('/testing', [testing::class, 'test'] );