<?php

use App\Http\Controllers\Auth;
use App\Http\Controllers\Main;
use App\Http\Middleware\CheckIsLogged;
use Illuminate\Support\Facades\Route;

Route::get('/login', [Auth::class, 'login']);
Route::post('/loginSubmit', [Auth::class, 'loginSubmit']);

Route::middleware([CheckIsLogged::class])->group(function () {
    Route::get('/', [Main::class, 'index']);
    Route::get('/newNote', [Main::class, 'newNote']);
    Route::get('/logout', [Auth::class, 'logout']);
});
