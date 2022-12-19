<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class informasiController extends Controller
{
    public function danautoba()
    {
        return view('front.singlewisata.danautoba');
    }
}
