{{-- resources/views/pages/event.blade.php --}}
@extends('layouts.app')

@section('hero')
<!-- Hero Section -->
    <section class="relative min-h-[65vh] md:min-h-[80vh] bg-cover bg-center bg-no-repeat flex items-center justify-center text-center" style="background-image: url('/images/bg_event.png');">
        <!-- Overlay dengan gradient untuk meningkatkan keterbacaan teks -->
        <div class="absolute inset-0 bg-gradient-to-b from-black/30 via-black/20 to-black/40"></div>
        
        <!-- Konten teks -->
        <div class="relative z-10 text-white max-w-4xl mx-auto px-4">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-4 animate-fade-in-down">Event & Penawaran Eksklusif</h1>
            <p class="text-xl md:text-2xl lg:text-3xl font-light mb-6 animate-fade-in-up">Kampung Batik Paseseh</p>
            
            <!-- Tombol CTA (opsional) -->
            <div class="animate-fade-in-up delay-300">
                <a href="#event" class="inline-block bg-indigo-600 hover:bg-indigo-700 text-white font-medium py-3 px-6 rounded-3xl transition duration-300 transform hover:scale-105">
                    Jelajahi Event
                </a>
            </div>
        </div>
        
        <!-- Elemen dekoratif (opsional) -->
        <div class="absolute bottom-0 left-0 right-0 flex justify-center">
            <div class="w-12 h-1 bg-amber-500 rounded-full mb-8"></div>
        </div>
    </section>
@endsection

@section('content')
    <div class="text-center mb-8" id="event">
        <div class="inline-flex space-x-3">
            <button
                class="px-5 py-2 rounded-full bg-blue-600 text-white text-sm font-medium hover:bg-blue-700 transition">Semua</button>
            <button
                class="px-5 py-2 rounded-full bg-white border border-gray-300 text-sm font-medium hover:bg-gray-100 transition">Promo</button>
            <button
                class="px-5 py-2 rounded-full bg-white border border-gray-300 text-sm font-medium hover:bg-gray-100 transition">Event</button>
        </div>
    </div>

    {{-- Grid Event --}}
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        {{-- Card 1 --}}
        <div class="bg-white rounded-xl shadow hover:shadow-lg transition overflow-hidden">
            <img src="/images/event_1.png" alt="Workshop Membatik" class="w-full h-45 object-cover">
            <div class="p-4">
                <span class="text-xs font-semibold bg-orange-500 text-white px-2 py-1 rounded">Event</span>
                <h3 class="mt-3 font-semibold text-gray-900">Workshop Membatik Tanjung Bumi</h3>
                <p class="text-sm text-gray-600 mt-2">Belajar langsung dari pengrajin batik Tanjung Bumi...</p>
                <p class="text-xs text-gray-400 mt-3">31 Agustus 2025</p>
            </div>
        </div>

        {{-- Card 2 --}}
        <div class="bg-white rounded-xl shadow hover:shadow-lg transition overflow-hidden">
            <img src="/images/event_2.png" alt="Promo Batik" class="w-full h-45 object-cover">
            <div class="p-4">
                <span class="text-xs font-semibold bg-green-600 text-white px-2 py-1 rounded">Promo</span>
                <h3 class="mt-3 font-semibold text-gray-900">Promo Spesial Batik Tanjung Bumi</h3>
                <p class="text-sm text-gray-600 mt-2">Diskon 20% untuk koleksi terbaru...</p>
                <p class="text-xs text-gray-400 mt-3">15 Agustus 2025</p>
            </div>
        </div>

        {{-- Card 3 --}}
        <div class="bg-white rounded-xl shadow hover:shadow-lg transition overflow-hidden">
            <img src="/images/event_3.png" alt="Festival Batik" class="w-full h-45 object-cover">
            <div class="p-4">
                <span class="text-xs font-semibold bg-orange-500 text-white px-2 py-1 rounded">Event</span>
                <h3 class="mt-3 font-semibold text-gray-900">Festival Batik Tanjung Bumi 2025</h3>
                <p class="text-sm text-gray-600 mt-2">Acaranya penuh hiburan, lomba, dan pameran...</p>
                <p class="text-xs text-gray-400 mt-3">27 Agustus 2025</p>
            </div>
        </div>

        {{-- Card 4 --}}
        <div class="bg-white rounded-xl shadow hover:shadow-lg transition overflow-hidden">
            <img src="/images/event_4.png" alt="Gratis Ongkir" class="w-full h-45 object-cover">
            <div class="p-4">
                <span class="text-xs font-semibold bg-green-600 text-white px-2 py-1 rounded">Promo</span>
                <h3 class="mt-3 font-semibold text-gray-900">Gratis Ongkir Seluruh Indonesia</h3>
                <p class="text-sm text-gray-600 mt-2">Nikmati belanja batik tanpa biaya kirim...</p>
                <p class="text-xs text-gray-400 mt-3">23 Juli 2025</p>
            </div>
        </div>

        {{-- Card 5 --}}
        <div class="bg-white rounded-xl shadow hover:shadow-lg transition overflow-hidden">
            <img src="/images/event_5.png" alt="Beli 2 Gratis 1" class="w-full h-45 object-cover">
            <div class="p-4">
                <span class="text-xs font-semibold bg-green-600 text-white px-2 py-1 rounded">Promo</span>
                <h3 class="mt-3 font-semibold text-gray-900">Beli 2 Gratis 1 Koleksi Batik Pilihan</h3>
                <p class="text-sm text-gray-600 mt-2">Promo terbatas untuk koleksi pilihan...</p>
                <p class="text-xs text-gray-400 mt-3">06 Juli 2025</p>
            </div>
        </div>

        {{-- Card 6 --}}
        <div class="bg-white rounded-xl shadow hover:shadow-lg transition overflow-hidden">
            <img src="/images/event_6.png" alt="Pameran Batik Nusantara" class="w-full h-45 object-cover">
            <div class="p-4">
                <span class="text-xs font-semibold bg-orange-500 text-white px-2 py-1 rounded">Event</span>
                <h3 class="mt-3 font-semibold text-gray-900">Pameran Batik Nusantara</h3>
                <p class="text-sm text-gray-600 mt-2">Ikuti pameran terbesar batik di Indonesia...</p>
                <p class="text-xs text-gray-400 mt-3">01 Juli 2025</p>
            </div>
        </div>
    </div>
@endsection
