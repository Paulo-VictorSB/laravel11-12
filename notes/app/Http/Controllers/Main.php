<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Services\Operations;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

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

    public function editNote($id)
    {
        $id = Operations::decryptId($id);
        echo "im editing note with id = $id";
    }

    public function deleteNote($id)
    {
        $id = Operations::decryptId($id);
        echo "im deleting note with id = $id";
    }


}
