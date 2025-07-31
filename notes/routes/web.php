<?php

use App\Http\Controllers\Auth;
use App\Http\Controllers\Main;
use App\Http\Middleware\CheckIsLogged;
use App\Http\Middleware\CheckIsNotLogged;
use Illuminate\Support\Facades\Route;

// auth users - user not logged
Route::middleware([CheckIsNotLogged::class])->group(function () {
    Route::get('/login', [Auth::class, 'login']);
    Route::post('/loginSubmit', [Auth::class, 'loginSubmit']);
});

// app routes - user logged
Route::middleware([CheckIsLogged::class])->group(function () {
    Route::get('/', [Main::class, 'index'])->name('home');
    Route::get('/newNote', [Main::class, 'newNote'])->name('new');
    Route::post('/newNoteSubmit', [Main::class, 'newNoteSubmit'])->name('newNoteSubmit');

    // edit note
    Route::get('/editNote/{id}', [Main::class, 'editNote'])->name('edit');
    Route::post('/editNoteSubmit', [Main::class, 'editNoteSubmit'])->name('editNoteSubmit');

    // delete note
    Route::get('/deleteNote/{id}', [Main::class, 'deleteNote'])->name('delete');
    Route::get('/deleteNoteConfirm', [Main::class, 'deleteNoteConfirm'])->name('deleteNoteConfirm');

    Route::post('/deleteNoteSubmit', [Main::class, 'deleteNoteSubmit'])->name('deleteNoteSubmit');
    Route::get('/logout', [Auth::class, 'logout'])->name('logout');
});
