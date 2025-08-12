<?php

use App\Http\Controllers\Main;
use App\Http\Controllers\User;
use App\Http\Middleware\OnlyAdmin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Assinatura base de uma rota
// Route::verb('uri', callback);

// Rota com função anonima
Route::get('/rota', function () {
    return '<h1>Olá Laravel!</h1>';
});

Route::get('/injection', function (Request $request) {
    return dd($request);
});

Route::match(['get', 'post'], '/getOrPost', function () {
    return "<h1>Aceita GET ou POST</h1>";
});

Route::any('/any', function () {
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

Route::get('/exp1/{value}', function ($value) {
    echo $value;
})->where('value', '[0-9]+');

// ------------------------------------------------------ //
// ---------------------ROUTE NAMES---------------------- //
// ------------------------------------------------------ //

Route::get('/rota_abc', function () {
    return 'Rota nomeada';
})->name('rota_nomeada');

Route::get('/rota_referenciada', function () {
    return redirect()->route('rota_nomeada');
});

Route::prefix('ex')->group(function () {
    Route::get('um', function () {
        return "Rota '/ex/um'";
    });
    Route::get('dois', function () {
        return "Rota '/ex/dois'";
    });
});

Route::middleware([OnlyAdmin::class])->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('home', function () {
            return "Home";
        })->name('adminHome');

        Route::get('about', function () {
            return "About";
        })->name('adminAbout');

        Route::get('reports', function () {
            return "Reports";
        })->name('adminReports');
    });
});

Route::controller(User::class)->group(function () {
    Route::prefix('user')->group(function () {
        Route::get('new', 'new');
        Route::get('edit', 'edit');
        Route::get('delete', 'delete');
    });
});

Route::fallback(function(){
    return "Página não encontrada ";
});
