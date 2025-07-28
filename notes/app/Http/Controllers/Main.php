<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Main extends Controller
{
    public function index()
    {
        // load users notes

        // show home view
        return view('Home');
    }

    public function newNotes()
    {
        echo 'I am creating a new note!';
    }
}
