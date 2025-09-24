<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

route::get('/', [MainController::class, 'index']);
