<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Edupackage;

class EdupackageController extends Controller
{
    // Menampilkan semua paket
    public function index()
    {
        $packages = Edupackage::where('is_active', true)->latest()->get();
        return view('pages.education.index', compact('packages'));
    }

    // Halaman detail berdasarkan slug
    public function show($slug)
    {
        $package = Edupackage::where('slug', $slug)->firstOrFail();
        return view('pages.education.detail', compact('package'));
    }
}
