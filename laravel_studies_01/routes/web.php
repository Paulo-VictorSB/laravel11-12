<?php

use App\Http\Controllers\Main;
use Illuminate\Support\Facades\Route;

Route::get('/init', [Main::class, 'initMethod'])->name('init');
Route::get('/view', [Main::class, 'viewPage'])->name('view');
