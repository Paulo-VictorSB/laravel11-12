<?php

use App\Http\Controllers\Main;
use Illuminate\Support\Facades\Route;

Route::get('/teste/{value}', [Main::class, 'teste']);
