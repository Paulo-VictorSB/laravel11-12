<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function showView(): View
    {
        // Método 1
        $data = [
            "name" => "Paulo",
            "phone" => "81999906183",
            "key" => "a12bc3"
        ];

        return view('Home', $data);
    }
}
