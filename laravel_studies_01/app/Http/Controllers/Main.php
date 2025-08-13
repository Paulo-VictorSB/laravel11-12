<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Main extends Controller
{
    public function teste(string $value): void
    {
        echo "A string final é: " . $this->cleanUpperCaseString($value);
    }
}
