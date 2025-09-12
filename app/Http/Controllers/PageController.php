<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function products()
    {
        return view('products.index');
    }

    public function perjalanan()
    {
        return view('komunitas.perjalanan');
    }

    public function penghargaan()
    {
        return view('komunitas.penghargaan');
    }

    public function wisata()
    {
        return view('komunitas.wisata');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function event()
    {
        return view('pages.event');
    }
    public function edukasi()
    {
        return view('edukasi');
    }
    public function aboutus()
    {
        return view('aboutus');
    }
}
