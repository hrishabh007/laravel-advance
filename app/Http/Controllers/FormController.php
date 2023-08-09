<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    //
    function getLoginForm(Request $req)
    {
        echo json_encode($req->input());


        $req->validate([
            'username' => 'required | max : 10',
            'password' => 'required | min : 8'
        ]);
        //  echo $req -> input();
    }

}
