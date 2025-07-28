<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class Main extends Controller
{
    public function index()
    {
        // load users notes
        $id = session('user.id');
        $notes = User::find($id)->notes()->get()->toArray();

        // show home view
        return view('Home', ['notes' => $notes]);
    }

    public function newNotes()
    {
        echo 'I am creating a new note!';
    }
}
