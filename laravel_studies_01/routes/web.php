<?php

use App\Http\Controllers\Main;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Assinatura base de uma rota
// Route::verb('uri', callback);

// Rota com função anonima
Route::get('/rota', function() {
    return '<h1>Olá Laravel!</h1>';
});

Route::get('/injection', function(Request $request) {
    return dd($request);
});

Route::match(['get', 'post'], '/getOrPost', function() {
    return "<h1>Aceita GET ou POST</h1>";
});

Route::any('/any', function() {
    return "<h1>Aceita qualquer HTTP VERB</h1>";
});

Route::get('/index', [Main::class, 'index']);
Route::get('/about', [Main::class, 'about']);

Route::redirect('/home', 'index');

Route::view('/iindex', 'home');

// ------------------------------------------------------ //
// --------------------ROUTE PARAMTERS-------------------- //
// ------------------------------------------------------ //

Route::get('/valor/{value}', [Main::class, 'mostrarValor']);
Route::get('/valor/{value1}/{value2}', [Main::class, 'mostrarValores']);
Route::get('/valorOpcional/{value?}', [Main::class, 'mostrarValorOpcional']);

// ------------------------------------------------------ //
// -----------ROUTE PARAMTERS WITH CONSTRAINTS----------- //
// ------------------------------------------------------ //

Route::get('/exp1/{value}', function($value){
    echo $value;
})->where('value', '[0-9]+');
