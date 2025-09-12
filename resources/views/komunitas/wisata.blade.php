@extends('layouts.app')

@section('hero')
    <!-- Hero Section - Full Width -->
    <section class="relative overflow-hidden">
        <!-- Hero Background -->
        <div class="relative w-full h-64 sm:h-80 md:h-96 lg:h-[28rem] xl:h-[32rem] bg-cover bg-center"
            style="background-image: url('{{ asset('images/bg_komunitas.png') }}');">

            <!-- Overlay hitam transparan -->
            <div class="absolute inset-0 bg-black bg-opacity-20"></div>

            <!-- Konten Teks -->
            <div class="relative z-10 h-full flex items-center justify-center text-center text-white px-4">
                <div>
                    <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold mb-2 md:mb-4 tracking-wide">
                        Wisata Dunia Komunitas
                    </h1>
                    <h2 class="text-xl sm:text-2xl md:text-3xl lg:text-4xl font-semibold mb-4 md:mb-6">
                        Kampung Batik Paseseh
                    </h2>
                    <div class="w-16 sm:w-20 md:w-24 h-1 bg-yellow-400 mx-auto"></div>
                </div>
            </div>
        </div>

        <!-- Decorative batik pattern overlay -->
        <div
            class="absolute top-4 sm:top-6 md:top-8 left-4 sm:left-6 md:left-8 w-12 sm:w-16 md:w-20 h-12 sm:h-16 md:h-20 border-2 border-yellow-400 rounded-full opacity-30">
        </div>
        <div
            class="absolute bottom-4 sm:bottom-6 md:bottom-8 right-4 sm:right-6 md:right-8 w-12 sm:w-16 md:w-16 h-12 sm:h-16 md:h-16 border-2 border-yellow-400 rounded-full opacity-20">
        </div>
    </section>
@endsection

@section('content')
    <!-- Section Wisata -->
    <div class="bg-yellow-50 py-16 px-4 md:px-12">
        <div class="text-center mb-12">
            <h2 class="text-2xl md:text-3xl font-bold text-blue-600 mb-4">Wisata Yang Ditawarkan</h2>
            <p class="text-gray-700 max-w-2xl mx-auto">
                Selain menyediakan batik KBP, Menyediakan Layanan yang sangat membantu wisata untuk mengenal lebih jauh
                Madura
            </p>
        </div>

        <!-- Grid Wisata -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
            <!-- Kartu Wisata 1 -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition">
                <img src="/images/wisata_1.png" alt="Wisata Batik Tulis" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="font-bold text-lg text-gray-800 mb-2">Wisata Batik Tulis</h3>
                    <p class="text-gray-600 text-sm mb-4">Desa Tanjung Bumi terkenal sebagai pusat batik tulis khas Madura.
                    </p>
                    <button onclick="openTourismModal('pulau-tungur')"
                        class="w-40 mx-auto bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded block">
                        Detail
                    </button>
                </div>
            </div>

            <!-- Kartu Wisata 2 -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition">
                <img src="/images/wisata_2.png" alt="Makam Pangeran Azimat" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="font-bold text-lg text-gray-800 mb-2">Makam Pangeran Azimat</h3>
                    <p class="text-gray-600 text-sm mb-4">Lokasi bersejarah tempat penyebaran Islam di Tanjung Bumi.</p>
                    <button onclick="openTourismModal('pulau-tungur')"
                        class="w-40 mx-auto bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded block">
                        Detail
                    </button>
                </div>
            </div>

            <!-- Kartu Wisata 3 -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition">
                <img src="/images/wisata_3.png" alt="Pantai Putih Tlangoh" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="font-bold text-lg text-gray-800 mb-2">Pantai Putih Tlangoh</h3>
                    <p class="text-gray-600 text-sm mb-4">Pantai yang terkenal dengan pasir putih halus dan laut biru
                        jernih.</p>
                    <button onclick="openTourismModal('pulau-tungur')"
                        class="w-40 mx-auto bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded block">
                        Detail
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection
