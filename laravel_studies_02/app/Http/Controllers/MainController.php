<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function showView(): View
    {
        $data = [
            'valor' => 100,
            'bairros' => ['Curado', 'Afogados', 'Várzea'],
            'nomes' => []
        ];

        return view('Home', $data);
    }

    public function setSession(): View
    {
        session(['name' => 'John Doe']);
        return view('home');
    }

    public function clearSession(): View
    {
        session()->forget('name');
        return view('home');
    }
}
