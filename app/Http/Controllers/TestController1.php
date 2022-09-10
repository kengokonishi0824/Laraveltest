<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController1 extends Controller
{
    public function index($text = "建物です")
    {
        return $text;
    }
}


