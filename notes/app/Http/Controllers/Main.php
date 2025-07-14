<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Main extends Controller
{
    public function index($id)
    {
        return view('Main')->with('id', $id);
    }

    public function page2($value)
    {
        return view('page2')->with('value', $value);
    }

    public function page3($value)
    {
        return view('page3')->with('value', $value);
    }
}
