<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorPrueba extends Controller
{
    public function welcome()
    {
        $a=5;
        $b=10;
        $c=$a+$b;
        return view('welcome');
    }
}
