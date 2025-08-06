<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Main extends Controller
{
    public function index()
    {
        echo "index";
    }

    public function about()
    {
        echo "about";
    }

    public function mostrarValor($valor)
    {
        echo "Valor enviado pela rota: $valor";
    }

    public function mostrarValores(Request $request, $valor1, $valor2)
    {
        echo "Valores enviados pela rota: $valor1 e $valor2";
    }

    public function mostrarValorOpcional($valor = null)
    {
        if ($valor == null) {
            echo "Nenhum valor enviado pela rota";
            return;
        }

        echo "Valor enviado pela rota: $valor";
    }
}
