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
            'Carlos' => [
                'Portugês',
                'Inglês'
            ],
            'Mário' => [
                'Portugês'
            ],
            'João' => [
                'Portugês',
                'Inglês',
                'Francês'
            ]
        ];

        return view('home', ['pessoas_linguas' => $data]);
    }
}
