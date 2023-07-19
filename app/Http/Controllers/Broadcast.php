<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Broadcast extends Controller
{
    //
    public function index(){


        $data = [
            'total' => 20,
        ];

        return view('broadcast')->with($data);
    }


    
}
