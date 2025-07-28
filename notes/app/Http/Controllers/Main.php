<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Main extends Controller
{
    public function index()
    {
        echo 'Im inside the app!';
    }

    public function newNotes()
    {
        echo 'I am creating a new note!';
    }
}
