<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InstagramPost;

class InstagramController extends Controller
{
    public function feed()
    {
        $instagramPosts = InstagramPost::active()
            ->latest()
            ->take(6)
            ->get();

        return view('home', compact('instagramPosts'));
    }
}
