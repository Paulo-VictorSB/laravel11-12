<?php

use App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/login', [Auth::class, 'login']);
Route::post('/loginSubmit', [Auth::class, 'loginSubmit']);
Route::get('/logout', [Auth::class, 'logout']);
