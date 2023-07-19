<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TerkirimModel;

class Terkirim extends Controller
{
    //

    public function index() {
        $count = TerkirimModel::where('status', 200)->count();
        $list = TerkirimModel::where('status', 200)->get();

        $data = [
            'jumlah' => $count,
            'data' => $list
        ];

        return view('terkirim');
    }
}
