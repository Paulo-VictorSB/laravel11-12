<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Main extends Controller
{
    public function index(): void
    {
        echo "<p>index</p>";
    }

    public function about(): void
    {
        echo "<p>about</p>";
    }

    public function contact(): void
    {
        echo "<p>contact</p>";
    }
}
