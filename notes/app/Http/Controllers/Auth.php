<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Auth extends Controller
{
    public function login()
    {
        return view('Login');
    }

    public function loginSubmit(Request $request)
    {
        // form validation
        $request->validate([
            'text_username' => 'required',
            'text_password' => 'required'
        ]);

        // get user input
        $username = $request->input('text_username');
        $password = $request->input('text_password');

        echo 'OK';
    }

    public function logout()
    {
        echo 'logout';
    }
}
