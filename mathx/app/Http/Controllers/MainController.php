<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home(): View
    {
        return view('home');
    }

    public function generateExercises(Request $request): void
    {
        echo "Gerar exercícios";
    }

    public function printExercises(): void
    {
        echo "Imprimir exercícios no navegador";
    }

    public function exportExercises(): void
    {
        echo "Exportar exercícios para um arquivo de texto";
    }
}
