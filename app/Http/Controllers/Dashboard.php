<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TerkirimModel;
use App\Models\KontakModel;

class Dashboard extends Controller
{
    //

    public function index() {

        // $terkirim = TerkirimModel::where('status', 200)->count();

        $kontak = KontakModel::query()
        ->count()
        ;
        $terkirim = TerkirimModel::query()
        ->count()
        ;
        
        $data = [
            'terkirim' => $terkirim,
            'kontak' => $kontak
        ];

        return view('dashboard')->with($data);
    }
}
