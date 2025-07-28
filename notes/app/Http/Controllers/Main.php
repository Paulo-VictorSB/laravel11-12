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
        $user = User::find($id)->toArray();
        $notes = User::find($id)->notes()->get()->toArray();

        echo '<pre>';
        print_r($user);
        print_r($notes);

        die();

        // show home view
        return view('Home');
    }

    public function newNotes()
    {
        echo 'I am creating a new note!';
    }
}
