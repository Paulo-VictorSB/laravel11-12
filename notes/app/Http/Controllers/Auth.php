<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Auth extends Controller
{
    public function login()
    {
        return view('Login');
    }

    public function loginSubmit(Request $request)
    {
        // form validation
        $request->validate(
            [
                'text_username' => 'required|email',
                'text_password' => 'required|min:6|max:16'
            ],
            [
                'text_username.required' => 'O username é obrigatório',
                'text_username.email' => 'O username deve ser um email válido',

                'text_password.required' => 'O password é obrigatório',
                'text_password.min' => 'O password deve ter no mínimo :min caracteres',
                'text_password.max' => 'O password deve ter no máximo :max caracteres'
            ]
        );

        // get user input
        $username = $request->input('text_username');
        $password = $request->input('text_password');

        // test databse conn
        try {
            DB::connection()->getPdo();
            echo "Conn is OK!";
        } catch (\PDOException $e) {
            echo "Conn failed: " . $e->getMessage();
        }
    }

    public function logout()
    {
        echo 'logout';
    }
}
