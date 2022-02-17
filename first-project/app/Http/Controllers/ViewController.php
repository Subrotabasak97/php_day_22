<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function index()
    {
        return 'Hello World';
    }
    public function bitm()
    {
        return'Hello Bitm';
    }
}
