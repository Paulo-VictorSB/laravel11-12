<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class User extends Controller
{
    public function new()
    {
        return "new";
    }

    public function edit()
    {
        return "edit";
    }

    public function delete()
    {
        return "delete";
    }
}
