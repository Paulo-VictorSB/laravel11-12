<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class MainController extends Controller
{
    public function showPage(): View
    {
        // as línguas que cada pessoa fala
        $data = [
            'João' => [
                'Portugês',
                'Inglês'
            ],
            'Maria' => [
                'Portugês',
                'Espanhol'
            ],
            'Ana' => [
                'Portugês',
                'Inglês',
                'Francês'
            ]
        ];

        return view('home', ['pessoas_linguas' => $data]);
    }
}
