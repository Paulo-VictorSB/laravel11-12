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
        echo "Login submit";
    }

    public function logout()
    {
        echo 'logout';
    }
}
