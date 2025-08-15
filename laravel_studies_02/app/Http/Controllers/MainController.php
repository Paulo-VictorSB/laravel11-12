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
}
