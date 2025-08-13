<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function cleanUpperCaseString(string $string): string
    {
        // remover espaços em branco do inicio e do fim de uma string
        // Converter a string para uppercase
        return strtoupper(trim($string));
    }
}
