<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Kontak extends Controller
{
    public function index(){

        return view('kontak.kontak');
    }

    public function import()
    {

        return view('kontak.import');
    }
}
