<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/mysql_test', function() {
    try {
        DB::connection()->getPdo();
        echo "OK!";
    } catch (\Throwable $th) {
        die($th);
    }
});
