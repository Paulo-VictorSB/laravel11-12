<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/', function() {
    try {

        DB::connection()->getPdo();
        echo "Conexão realizada com sucesso com o banco: " . DB::connection()->getDatabaseName();

    } catch (\Throwable $th) {

        die("Erro ao se conectar com o banco: " . $th);

    }
});
