<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function destination()
    {
        return view('front.inNavbar.paketDestinasi');
    }

    public function layanan()
    {
        return view('front.inNavbar.layanan');
    }

    public function about()
    {
        return view('front.inNavbar.tentang');
    }
    public function blog()
    {
        return view('front.inNavbar.blog');
    }
    public function blogDetail()
    {
        return view('front.inNavbar.blogDetail');
    }
}
