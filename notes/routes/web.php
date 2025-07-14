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
