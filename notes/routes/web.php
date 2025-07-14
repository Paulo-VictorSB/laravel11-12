<?php

use App\Http\Controllers\Main;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    echo "Hello, World!";
});

Route::get('/about', function () {
    echo "About us";
});

Route::get('/main/{id}', [Main::class, 'index']);
Route::get('/page2/{value}', [Main::class, 'page2']);
Route::get('/page3/{value}', [Main::class, 'page3']);
