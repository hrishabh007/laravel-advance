<?php

namespace App\Http\Controllers;

class HelloController extends Controller
{
    public function holiday($name)
    {
        echo $name;
        return view('Hello');
    }
}
