<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    // Halaman daftar produk
    public function index()
    {
        // Contoh data produk (nanti bisa ambil dari DB)
        $products = [
            ['id' => 1, 'name' => 'Produk A', 'price' => 100000, 'image' => 'produk-a.jpg'],
            ['id' => 2, 'name' => 'Produk B', 'price' => 150000, 'image' => 'produk-b.jpg'],
            ['id' => 3, 'name' => 'Produk C', 'price' => 200000, 'image' => 'produk-c.jpg'],
        ];

        return view('shop.index', compact('products'));
    }

    // Halaman detail produk
    public function detail($id)
    {
        // Contoh data detail produk
        $product = [
            'id' => $id,
            'name' => 'Produk ' . $id,
            'price' => 100000 * $id,
            'description' => 'Deskripsi lengkap produk ' . $id,
            'image' => 'produk-' . $id . '.jpg'
        ];

        return view('shop.detail', compact('product'));
    }
}
