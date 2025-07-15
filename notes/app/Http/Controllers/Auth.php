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
        echo $request->input('text_username');
        echo '<br>';
        echo $request->input('text_password');
    }

    public function logout()
    {
        echo 'logout';
    }
}
