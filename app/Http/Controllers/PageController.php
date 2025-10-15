<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Umkm;
use App\Models\Batik;
use App\Models\InstagramPost;

class PageController extends Controller
{
    public function home()
    {
        $umkms = Umkm::take(10)->get();
        $batiks = Batik::all();
        $instagramPosts = InstagramPost::orderBy('created_at', 'desc')->take(6)->get();

        return view('home', compact('umkms', 'batiks', 'instagramPosts'));
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
        // ambil semua event, urutkan berdasarkan tanggal mulai terbaru
        $events = \App\Models\Event::orderBy('start_at', 'desc')->get();

        // tampilkan halaman event
        return view('pages.event', compact('events'));
    }

    public function eventDetail($slug)
    {
        // cari event berdasarkan slug
        $event = \App\Models\Event::where('slug', $slug)->firstOrFail();

        // ambil 3 event lain untuk rekomendasi
        $relatedEvents = \App\Models\Event::where('id', '!=', $event->id)
                              ->orderBy('start_at', 'desc')
                              ->take(3)
                              ->get();

        // tampilkan halaman detail event
        return view('pages.event-detail', compact('event', 'relatedEvents'));
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
