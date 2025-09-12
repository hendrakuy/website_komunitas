<?php

namespace App\Http\Controllers;

use App\Models\Batik;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index(Request $request)
    {
        // Query dasar
        $query = Batik::with(['category', 'media', 'umkm']);

        // Filter pencarian (search bar)
        if ($request->filled('q')) {
            $query->where('title', 'like', '%' . $request->q . '%');
        }

        // Filter kategori
        if ($request->filled('category')) {
            $query->whereHas('category', function ($q) use ($request) {
                $q->whereIn('slug', (array) $request->category);
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

        // Filter harga
        if ($request->filled('min_price') && $request->filled('max_price')) {
            $query->whereBetween('price', [$request->min_price, $request->max_price]);
        }

        // Ambil data dengan pagination
        $batiks = $query->paginate(6);

        return view('shop.index', compact('batiks'));
    }

    public function detail($slug)
    {
        $batik = Batik::with(['category', 'media', 'umkm'])->where('slug', $slug)->firstOrFail();
        return view('shop.detail', compact('batik'));
    }
}
