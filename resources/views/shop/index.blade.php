@extends('layouts.app')

@section('hero')
{{-- Hero Section --}}
    <section class="relative bg-cover bg-center h-64 md:h-80 flex items-center justify-center text-white"
        style="background-image: url('/images/event_bg.png');">
        <div class="text-center max-w-2xl px-4">
            <h1 class="text-2xl md:text-4xl font-bold mb-4">Shop Batik Tanjung Bumi</h1>
            <p class="text-sm md:text-lg mb-6">
                Temukan koleksi batik Tanjung Bumi dengan desain eksklusif, motif autentik, dan kualitas terbaik.
                Kenyamanan dalam setiap detail dan pesona budaya Indonesia.
            </p>
            {{-- Search Bar --}}
            <form action="{{ route('shop.index') }}" method="GET" class="flex items-center bg-white rounded-full overflow-hidden">
                <input type="text" name="q" placeholder="Temukan batik impianmu..."
                    class="px-4 py-2 text-gray-700 w-full focus:outline-none">
                <button type="submit" class="bg-[#1E41FB] text-white px-4 py-2 hover:bg-[#5A71EC] transition">
                    🔍
                </button>
            </form>
        </div>
    </section>
@endsection

@section('content')
    {{-- Main Content --}}
    <div class="container mx-auto px-4 py-10 grid grid-cols-1 md:grid-cols-12 gap-8">
        {{-- Sidebar Filter --}}
        <aside class="md:col-span-3 space-y-6">
            {{-- Filter Harga --}}
            <div>
                <h2 class="font-semibold mb-2">Kisaran Harga</h2>
                <input type="range" min="100000" max="500000" class="w-full">
                <div class="flex justify-between text-sm text-gray-600">
                    <span>Rp100.000</span>
                    <span>Rp500.000</span>
                </div>
            </div>

            {{-- Kategori --}}
            <div>
                <h2 class="font-semibold mb-2">Kategori</h2>
                <ul class="space-y-1 text-sm">
                    <li><input type="checkbox" id="batik_tulis"> <label for="batik_tulis">Batik Tulis</label></li>
                    <li><input type="checkbox" id="batik_cap"> <label for="batik_cap">Batik Cap</label></li>
                    <li><input type="checkbox" id="batik_print"> <label for="batik_print">Batik Print</label></li>
                </ul>
            </div>

            {{-- Motif --}}
            <div>
                <h2 class="font-semibold mb-2">Motif / Desain</h2>
                <ul class="space-y-1 text-sm">
                    <li><input type="checkbox" id="mega"> <label for="mega">Motif Mega Mendung</label></li>
                    <li><input type="checkbox" id="parang"> <label for="parang">Motif Parang</label></li>
                    <li><input type="checkbox" id="floral"> <label for="floral">Motif Flora</label></li>
                </ul>
            </div>

            {{-- Jenis Kelamin --}}
            <div>
                <h2 class="font-semibold mb-2">Jenis Kelamin</h2>
                <ul class="space-y-1 text-sm">
                    <li><input type="radio" name="gender" id="pria"> <label for="pria">Pria</label></li>
                    <li><input type="radio" name="gender" id="wanita"> <label for="wanita">Wanita</label></li>
                    <li><input type="radio" name="gender" id="unisex"> <label for="unisex">Unisex</label></li>
                </ul>
            </div>

            <button class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600 transition w-full">
                Filter
            </button>
        </aside>

        {{-- Produk --}}
        <section class="md:col-span-9 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            {{-- Loop produk --}}
            @foreach(range(1,9) as $i)
                <div class="bg-white shadow rounded-lg overflow-hidden hover:shadow-lg transition">
                    <img src="/images/produk{{ $i }}.jpg" alt="Produk {{ $i }}" class="w-full h-60 object-cover">
                    <div class="p-4 space-y-2">
                        <h3 class="font-semibold text-gray-800">Batik Tulis Madura Asli</h3>
                        <p class="text-sm text-gray-500">Batik Cap</p>
                        <p class="text-green-600 font-bold">Rp 170.000</p>
                        <a href="{{ route('shop.detail', $i) }}"
                           class="inline-block w-full text-center bg-green-500 text-white py-2 rounded-lg hover:bg-green-600 transition">
                            Lihat Detail
                        </a>
                    </div>
                </div>
            @endforeach
        </section>
    </div>

    {{-- Pagination --}}
    <div class="flex justify-center items-center space-x-2 pb-10">
        <a href="#" class="px-3 py-1 border rounded hover:bg-gray-200">1</a>
        <a href="#" class="px-3 py-1 border rounded bg-gray-800 text-white">2</a>
        <a href="#" class="px-3 py-1 border rounded hover:bg-gray-200">3</a>
        <a href="#" class="px-3 py-1 border rounded hover:bg-gray-200">›</a>
    </div>
@endsection
