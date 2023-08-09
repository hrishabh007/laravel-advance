<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class newuser extends Controller
{
    //
    function loaduserView($passvalue)
    {

        $data = ['Rishabh', 'Boko', 'kaka'];
        return view('newuser', ['users' => $data]);
    }
}
