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
        $searchQuery = trim($request->q);
        if (!empty($searchQuery)) {
            $query->where(function ($q) use ($searchQuery) {
                $q->where('title', 'like', '%' . $searchQuery . '%');
            });
        }
        // if ($request->filled('q')) {
        //     $query->where('title', 'like', '%' . $request->q . '%');
        // }

        // if ($request->filled('q')) {
        //     $query->where(function ($q) use ($request) {
        //         $q->where('title', 'like', '%' . $request->q . '%');
        //         // ->orWhere('description', 'like', '%' . $request->q . '%');
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

        // Filter harga (hanya jika berbeda dari default)
        if ($request->filled('min_price') && $request->filled('max_price')) {
            $minPrice = $request->min_price;
            $maxPrice = $request->max_price;

            // Hanya terapkan filter jika berbeda dari nilai default
            if ($minPrice != 230000 || $maxPrice != 7000000) {
                $query->whereBetween('price', [$minPrice, $maxPrice]);
            }
        }

        // Sorting
        $query->when($request->sort, function($q) use ($request) {
            switch($request->sort) {
                case 'latest':
                    // return $q->orderBy('created_at', 'desc');
                    return $q->latest();
                case 'price_low':
                    return $q->orderBy('price', 'asc');
                case 'price_high':
                    return $q->orderBy('price', 'desc');
                case 'name_asc':
                    return $q->orderBy('title', 'asc');
                default:
                    return $q->latest();
            }
        });


        // Ambil data dengan pagination
        $batiks = $query->paginate(6)->withQueryString();

        $categories = Category::all();


        return view('shop.index', compact('batiks', 'categories'));
    }

    public function detail(Request $request, $slug)
    {
        // Ambil data batik
        $batik = Batik::with(['category', 'media', 'umkm'])->where('slug', $slug)->firstOrFail();

        // Bersihkan judul batik dari karakter yang bermasalah
        $cleanTitle = preg_replace('/[^A-Za-z0-9\s]/', '', $batik->title);

        // Buat teks untuk chat WhatsApp
        $message = urlencode('Halo, saya tertarik membeli ' . $cleanTitle . '. Apakah masih tersedia?');

        // Gunakan format wa.me untuk kompatibilitas lebih baik
        $whatsappLink = 'https://wa.me/6285104005780?text=' . $message;

        // Ambil parameter filter dari request
        $filters = $request->query();

        // Kirim ke view
        return view('shop.detail', compact('batik', 'whatsappLink', 'filters'));
    }
}
