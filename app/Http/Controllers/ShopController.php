<?php

namespace App\Http\Controllers;

use App\Models\Batik;
use App\Models\Category;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index(Request $request)
    {
        // Query dasar
        $query = Batik::with(['category', 'media', 'umkm']);

        // Filter pencarian (search bar)
        // if ($request->filled('q')) {
        //     $query->where('title', 'like', '%' . $request->q . '%');
        // }

        if ($request->filled('q')) {
            $query->where(function ($q) use ($request) {
                $q->where('title', 'like', '%' . $request->q . '%');
                    // ->orWhere('description', 'like', '%' . $request->q . '%');
            });
        }

        // // Filter kategori
        // if ($request->filled('category')) {
        //     $query->whereHas('category', function ($q) use ($request) {
        //         $q->whereIn('slug', (array) $request->category);
        //     });
        // }

        // Filter kategori
        if ($request->filled('category')) {
            $query->whereHas('category', function ($q) use ($request) {
                $q->whereIn('slug', (array) $request->input('category'));
            });
        }

        // Filter gender
        $genderMap = [
            'priaa' => 'male',
            'wanita' => 'female',
            'unisex' => 'unisex',
        ];

        if ($request->filled('gender')) {
            $gender = $genderMap[$request->gender] ?? null;
            if ($gender) {
                $query->where('gender', $gender);
            }
        }

        // // Filter harga
        // if ($request->filled('min_price') && $request->filled('max_price')) {
        //     $query->whereBetween('price', [$request->min_price, $request->max_price]);
        // }

        // Filter harga: Hanya terapkan jika bukan nilai default
        $minPrice = $request->input('min_price', 100000);
        $maxPrice = $request->input('max_price', 500000);
        if ($request->has('min_price') && $minPrice > 100000) {  // Lebih dari default min
            $query->where('price', '>=', $minPrice);
        }
        if ($request->has('max_price') && $maxPrice < 500000) {  // Kurang dari default max
            $query->where('price', '<=', $maxPrice);
        }

        // Ambil data dengan pagination
        $batiks = $query->paginate(6);

        $categories = Category::all();


        return view('shop.index', compact('batiks', 'categories'));
    }

    public function detail($slug)
    {
        // Ambil data batik
        $batik = Batik::with(['category', 'media', 'umkm'])->where('slug', $slug)->firstOrFail();

        // Bersihkan judul batik dari karakter yang bermasalah
        $cleanTitle = preg_replace('/[^A-Za-z0-9\s]/', '', $batik->title);
        // Buat teks untuk chat WhatsApp
        $message = urlencode('Halo, saya tertarik membeli ' . $cleanTitle . ' dari UMKM ' . $batik->umkm->name . '. Apakah masih tersedia?');

        // Gunakan format wa.me untuk kompatibilitas lebih baik
        $whatsappLink = 'https://wa.me/6287846696379?text=' . $message;

        // Kirim ke view
        return view('shop.detail', compact('batik', 'whatsappLink'));
    }
}
