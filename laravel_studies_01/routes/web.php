<?php

use App\Http\Controllers\Main;
use App\Http\Middleware\EndMiddleware;
use App\Http\Middleware\StartMiddleware;
use Illuminate\Support\Facades\Route;

// Route::get('/', [Main::class, 'index'])->name('index')->middleware([StartMiddleware::class]);
// Route::get('/about', [Main::class, 'about'])->name('about');
// Route::get('/contact', [Main::class, 'contact'])->name('contact');

Route::middleware([StartMiddleware::class, EndMiddleware::class])->group(function () {
    Route::get('/', [Main::class, 'index'])->name('index');
    Route::get('/about', [Main::class, 'about'])->name('about')->withoutMiddleware([EndMiddleware::class]);
    Route::get('/contact', [Main::class, 'contact'])->name('contact');
});

Route::fallback(function () {
    return redirect('/');
});
