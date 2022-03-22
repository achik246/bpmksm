<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function cubaan()
    {
        return view ('test');
    }

    public function astry()
    {
        return view('as');
    }

    public function welcome()
    {
        return view('welcome');
    }
}
