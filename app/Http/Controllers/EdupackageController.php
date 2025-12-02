<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Edupackage;

class EdupackageController extends Controller
{
    // Menampilkan semua paket
    public function index()
    {
        $packages = Edupackage::where('is_active', true)->oldest()->get();
        return view('pages.education.index', compact('packages'));
    }

    // Halaman detail berdasarkan slug
    public function show($slug)
    {
        $package = Edupackage::where('slug', $slug)->firstOrFail();
        $whatsappNumber = '6285104005780';
        $message = "Halo, saya tertarik dengan *{$package->title}*. Bisa saya dapatkan informasi lebih lanjut?";

        $encodedMessage = urlencode($message);
        $whatsapp_link = "https://wa.me/{$whatsappNumber}?text={$encodedMessage}";

        return view('pages.education.detail', compact('package', 'whatsapp_link'));
    }
}
