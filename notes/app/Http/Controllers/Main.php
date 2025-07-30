<?php

namespace App\Http\Controllers;

use App\Models\User;
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
        $id = $this->decryptId($id);
        echo "im editing note with id = $id";
    }

    public function deleteNote($id)
    {
        $id = $this->decryptId($id);
        echo "im deleting note with id = $id";
    }

    private function decryptId($id)
    {
        // check if $id is crypted
        try {
            $id = Crypt::decrypt($id);
        } catch (DecryptException $e) {
            return redirect('/');
        }

        return $id;
    }
}
