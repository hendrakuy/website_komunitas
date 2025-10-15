<style>
    @keyframes float-slow {

        0%,
        100% {
            transform: translateY(0px) rotate(0deg);
        }

        50% {
            transform: translateY(-20px) rotate(5deg);
        }
    }

    @keyframes float-medium {

        0%,
        100% {
            transform: translateY(0px) rotate(0deg);
        }

        50% {
            transform: translateY(-15px) rotate(-5deg);
        }
    }

    .animate-float-slow {
        animation: float-slow 6s ease-in-out infinite;
    }

    .animate-float-medium {
        animation: float-medium 4s ease-in-out infinite;
    }
</style>

@extends('layouts.app')

@section('hero')
    {{-- Hero Section --}}
    <section class="relative min-h-screen flex items-center justify-center overflow-hidden">
        <!-- Background -->
        <div class="absolute inset-0">
            <img src="/images/BG_Beranda.png" alt="Background Batik" class="w-full h-full object-cover object-center">
            {{-- <div class="absolute inset-0 bg-gradient-to-br from-blue-900/90 via-purple-800/70 to-amber-600/40 z-10"></div> --}}
            <div class="absolute inset-0 bg-gradient-to-t from-black/20 via-transparent to-transparent z-10"></div>
        </div>

        <!-- Floating Elements -->
        <div class="absolute inset-0 overflow-hidden z-10 hidden sm:block">
            <div class="absolute top-1/4 left-10 w-20 h-20 bg-amber-400/20 rounded-full blur-xl animate-float-slow"></div>
            <div class="absolute top-1/3 right-20 w-32 h-32 bg-purple-400/20 rounded-full blur-xl animate-float-medium">
            </div>
            <div
                class="absolute bottom-1/4 left-1/4 w-24 h-24 bg-blue-400/20 rounded-full blur-xl animate-float-slow delay-1000">
            </div>
            <div
                class="absolute bottom-1/3 right-1/3 w-28 h-28 bg-amber-300/15 rounded-full blur-xl animate-float-medium delay-500">
            </div>
        </div>

        <!-- Content -->
        <div class="relative container mx-auto px-6 z-20 py-20">
            <div class="grid grid-cols-1 lg:grid-cols-2 items-center gap-12 lg:gap-16">

                <!-- Text -->
                <div class="text-white space-y-8 text-center lg:text-left">
                    <!-- Badge -->
                    <div
                        class="inline-flex items-center space-x-2 bg-white/10 backdrop-blur-md px-4 py-2 rounded-2xl border border-white/20">
                        <i class="fas fa-star text-amber-400 text-sm"></i>
                        <span class="text-sm font-semibold">Warisan Budaya Indonesia</span>
                    </div>

                    <!-- Title -->
                    <div class="space-y-4">
                        <h1 class="text-2xl md:text-3xl lg:text-4xl xl:text-5xl font-bold leading-tight text-white">
                            Keindahan Batik Tanjung Bumi Warisan Budaya Madura
                        </h1>
                        <div class="h-1 w-20 bg-gradient-to-r from-amber-400 to-orange-500 rounded-full mx-auto lg:mx-0">
                        </div>
                    </div>

                    <!-- Description -->
                    <p class="text-base md:text-lg text-blue-100 max-w-2xl leading-relaxed mx-auto lg:mx-0">
                        Temukan keunikan dan keindahan batik autentik Tanjung Bumi yang penuh dengan makna dan cerita
                        budaya.
                    </p>

                    <!-- CTA -->
                    <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                        <a href="{{ route('shop.index') }}"
                            class="group relative overflow-hidden bg-gradient-to-r from-amber-500 to-orange-500 text-white font-bold py-4 px-8 rounded-2xl shadow-2xl transition-all duration-300 transform hover:-translate-y-1 hover:scale-105 flex items-center justify-center space-x-3">

                            <!-- Konten tombol -->
                            <div class="relative z-10 flex items-center space-x-3">
                                <i class="fas fa-shopping-bag"></i>
                                <span>Jelajahi Koleksi</span>
                            </div>

                            <!-- Overlay hover animasi -->
                            <div
                                class="absolute inset-0 bg-gradient-to-r from-amber-600 to-orange-600 
                                transform scale-x-0 group-hover:scale-x-100 
                                transition-transform duration-500 origin-left z-0">
                            </div>
                        </a>

                        <a href="{{ route('aboutus') }}"
                            class="group border-2 border-white/30 bg-white/10 backdrop-blur-md text-white font-bold py-4 px-8 rounded-2xl hover:bg-white hover:text-gray-900 transition-all duration-300 transform hover:-translate-y-1 flex items-center justify-center space-x-3">
                            <i class="fas fa-play-circle"></i>
                            <span>Tentang Kami</span>
                        </a>
                    </div>

                    <!-- Quick Stats -->
                    <div class="grid grid-cols-3 gap-6 pt-8 max-w-md mx-auto lg:mx-0">
                        <div class="text-center lg:text-left">
                            <div class="text-2xl md:text-3xl font-bold text-amber-400">500+</div>
                            <div class="text-sm text-blue-200">Desain Batik</div>
                        </div>
                        <div class="text-center lg:text-left">
                            <div class="text-2xl md:text-3xl font-bold text-amber-400">50+</div>
                            <div class="text-sm text-blue-200">Pengrajin</div>
                        </div>
                        <div class="text-center lg:text-left">
                            <div class="text-2xl md:text-3xl font-bold text-amber-400">10+</div>
                            <div class="text-sm text-blue-200">Penghargaan</div>
                        </div>
                    </div>
                </div>

                <!-- Image (Hidden on Mobile) -->
                <div class="relative justify-center hidden lg:justify-end md:flex">
                    <div class="relative">
                        <div class="relative w-72 h-72 md:w-96 md:h-96 lg:w-[500px] lg:h-[500px]">
                            <div
                                class="absolute inset-0 bg-gradient-to-br from-amber-400/20 to-purple-600/20 rounded-full blur-2xl animate-pulse">
                            </div>
                            <div
                                class="relative w-full h-full bg-gradient-to-br from-white to-gray-100 rounded-full shadow-2xl overflow-hidden border-8 border-white/20 backdrop-blur-sm">
                                <img src="/images/model_batik_hero.png" alt="Model Batik Tanjung Bumi"
                                    class="w-full h-full object-cover object-center transform hover:scale-105 transition-transform duration-700">
                            </div>
                            <div
                                class="absolute -top-4 -right-4 w-20 h-20 bg-gradient-to-br from-amber-400 to-orange-500 rounded-2xl shadow-2xl flex items-center justify-center transform rotate-12 animate-float-slow">
                                <i class="fas fa-award text-white text-xl"></i>
                            </div>
                            <div
                                class="absolute -bottom-6 -left-6 w-16 h-16 bg-gradient-to-br from-blue-500 to-purple-600 rounded-2xl shadow-2xl flex items-center justify-center transform -rotate-12 animate-float-medium delay-1000">
                                <i class="fas fa-star text-white text-lg"></i>
                            </div>
                            <div
                                class="absolute -left-20 top-1/2 transform -translate-y-1/2 -rotate-90 text-white/30 font-bold text-sm tracking-widest whitespace-nowrap">
                                BATIK TANJUNG BUMI • BATIK TANJUNG BUMI
                            </div>
                        </div>

                        <div
                            class="absolute bottom-8 right-8 bg-white/10 backdrop-blur-md border border-white/20 rounded-2xl p-4 shadow-2xl">
                            <div class="text-center">
                                <div class="text-amber-400 font-bold text-2xl">25+</div>
                                <div class="text-white text-sm font-semibold">Tahun Pengalaman</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="relative min-h-screen py-20 bg-gradient-to-br from-amber-50 to-orange-50">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-10">
            <div class="absolute inset-0"
                style="background-image: url('/images/bg_batik_1.png'); background-size: cover; background-position: center;">
            </div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            {{-- Header Section --}}
            <div class="text-center mb-16">
                <div class="inline-flex items-center justify-center mb-4">
                    <div class="w-3 h-3 bg-amber-500 rounded-full mr-3"></div>
                    <h2 class="text-lg font-semibold text-amber-600 uppercase tracking-wider">Komunitas Lokal</h2>
                    <div class="w-3 h-3 bg-amber-500 rounded-full ml-3"></div>
                </div>

                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-gray-900 mb-6">
                    UMKM
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-amber-600 to-orange-600">
                        Kampung Batik Paseseh
                    </span>
                </h1>

                <p class="text-xl text-gray-600 max-w-4xl mx-auto leading-relaxed">
                    Kampung Batik Paseseh merupakan komunitas yang memiliki
                    <span class="font-semibold text-amber-600">10 UMKM terkenal di Tanjung Bumi</span>.
                    Setiap UMKM memiliki produk unggulan yang mereka produksi dengan keunikan dan kualitas terbaik.
                </p>
            </div>

            {{-- UMKM Grid --}}
            <div id="umkm-list" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8 mb-12">
                @foreach ($umkms->take(4) as $umkm)
                    <div
                        class="group bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 overflow-hidden transform hover:-translate-y-2">
                        <div class="relative h-48">
                            <img src="{{ asset('storage/' . $umkm->background_image) }}" alt="{{ $umkm->name }}"
                                class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent">
                            </div>

                            {{-- Logo Overlay --}}
                            <div class="absolute -bottom-8 left-1/2 transform -translate-x-1/2 z-[9999]">
                                <div class="relative">
                                    <img src="{{ asset('storage/' . $umkm->logo) }}" alt="Logo {{ $umkm->name }}"
                                        class="w-20 h-20 rounded-full border-4 border-white shadow-xl bg-white relative z-[10000]">
                                    <div
                                        class="absolute inset-0 rounded-full border-2 border-amber-400/30 animate-ping z-[9998]">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="pt-10 pb-6 px-6 text-center">
                            <h3 class="text-xl font-bold text-gray-900 mb-2 group-hover:text-amber-600 transition-colors">
                                {{ $umkm->name }}
                            </h3>

                            <div class="flex items-center justify-center text-sm text-gray-500 mb-4">
                                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span>{{ $umkm->address }}</span>
                            </div>

                            <p class="text-gray-600 text-sm leading-relaxed line-clamp-2 mb-4">
                                {{ Str::limit($umkm->about, 100) }}
                            </p>

                            {{-- <div class="flex justify-center space-x-3">
                                <a href="{{ route('event.index', $umkm->id) }}"
                                    class="inline-flex items-center px-4 py-2 bg-amber-500 text-white text-sm font-medium rounded-lg hover:bg-amber-600 transition-colors">
                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    Detail
                                </a>

                                <a href="https://wa.me/{{ $umkm->phone }}" target="_blank"
                                    class="inline-flex items-center px-4 py-2 bg-green-500 text-white text-sm font-medium rounded-lg hover:bg-green-600 transition-colors">
                                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893-.001-3.189-1.262-6.209-3.553-8.496" />
                                    </svg>
                                    WhatsApp
                                </a>
                            </div> --}}
                        </div>
                    </div>
                @endforeach

                {{-- Hidden UMKM Cards --}}
                @foreach ($umkms->skip(4) as $umkm)
                    <div
                        class="group bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 overflow-hidden transform hover:-translate-y-2 hidden more-umkm">
                        <div class="relative h-48">
                            <img src="{{ asset('storage/' . $umkm->background_image) }}" alt="{{ $umkm->name }}"
                                class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent">
                            </div>

                            {{-- Logo Overlay --}}
                            <div class="absolute -bottom-8 left-1/2 transform -translate-x-1/2">
                                <div class="relative">
                                    <img src="{{ asset('storage/' . $umkm->logo) }}" alt="Logo {{ $umkm->name }}"
                                        class="w-20 h-20 rounded-full border-4 border-white shadow-xl bg-white">
                                    <div class="absolute inset-0 rounded-full border-2 border-amber-400/30 animate-ping">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="pt-10 pb-6 px-6 text-center">
                            <h3 class="text-xl font-bold text-gray-900 mb-2 group-hover:text-amber-600 transition-colors">
                                {{ $umkm->name }}
                            </h3>

                            <div class="flex items-center justify-center text-sm text-gray-500 mb-4">
                                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span>{{ $umkm->address }}</span>
                            </div>

                            <p class="text-gray-600 text-sm leading-relaxed line-clamp-2 mb-4">
                                {{ Str::limit($umkm->about, 100) }}
                            </p>

                            {{-- <div class="flex justify-center space-x-3">
                                <a href="{{ route('event.index', $umkm->id) }}"
                                    class="inline-flex items-center px-4 py-2 bg-amber-500 text-white text-sm font-medium rounded-lg hover:bg-amber-600 transition-colors">
                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    Detail
                                </a>

                                <a href="https://wa.me/{{ $umkm->phone }}" target="_blank"
                                    class="inline-flex items-center px-4 py-2 bg-green-500 text-white text-sm font-medium rounded-lg hover:bg-green-600 transition-colors">
                                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893-.001-3.189-1.262-6.209-3.553-8.496" />
                                    </svg>
                                    WhatsApp
                                </a>
                            </div> --}}
                        </div>
                    </div>
                @endforeach
            </div>

            {{-- Load More Button --}}
            <div class="text-center">
                <button id="lihatLengkapBtn"
                    class="group relative inline-flex items-center px-8 py-4 bg-gradient-to-r from-amber-500 to-orange-500 text-white font-bold rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105 hover:from-amber-600 hover:to-orange-600 overflow-hidden">

                    <span class="relative z-10 flex items-center">
                        <svg class="w-5 h-5 mr-3 transition-transform duration-300 group-hover:rotate-180" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                        Lihat Semua UMKM
                        <span class="ml-2 px-2 py-1 text-xs bg-white/20 rounded-full">
                            {{ $umkms->count() }}
                        </span>
                    </span>

                    {{-- Animated Background --}}
                    <div
                        class="absolute inset-0 bg-gradient-to-r from-amber-600 to-orange-600 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    </div>
                </button>
            </div>

            {{-- Statistics Section --}}
            <div class="mt-20 grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
                <div class="bg-white/80 backdrop-blur-sm rounded-2xl p-6 shadow-lg">
                    <div class="text-3xl font-bold text-amber-600 mb-2">{{ $umkms->count() }}+</div>
                    <div class="text-gray-600">UMKM Aktif</div>
                </div>
                <div class="bg-white/80 backdrop-blur-sm rounded-2xl p-6 shadow-lg">
                    <div class="text-3xl font-bold text-amber-600 mb-2">10+</div>
                    <div class="text-gray-600">Tahun Pengalaman</div>
                </div>
                <div class="bg-white/80 backdrop-blur-sm rounded-2xl p-6 shadow-lg">
                    <div class="text-3xl font-bold text-amber-600 mb-2">{{ $batiks->count() }}</div>
                    <div class="text-gray-600">Produk Unggulan</div>
                </div>
                <div class="bg-white/80 backdrop-blur-sm rounded-2xl p-6 shadow-lg">
                    <div class="text-3xl font-bold text-amber-600 mb-2">100%</div>
                    <div class="text-gray-600">Original Batik</div>
                </div>
            </div>
        </div>
    </section>

    {{-- JavaScript for Load More --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const loadMoreBtn = document.getElementById('lihatLengkapBtn');
            const hiddenUmkms = document.querySelectorAll('.more-umkm');
            let isExpanded = false;

            loadMoreBtn.addEventListener('click', function() {
                hiddenUmkms.forEach(umkm => {
                    umkm.classList.toggle('hidden');
                });

                if (isExpanded) {
                    loadMoreBtn.innerHTML = `
                <span class="relative z-10 flex items-center">
                    <svg class="w-5 h-5 mr-3 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                    Lihat Semua UMKM
                    <span class="ml-2 px-2 py-1 text-xs bg-white/20 rounded-full">
                        {{ $umkms->count() }}
                    </span>
                </span>
            `;
                } else {
                    loadMoreBtn.innerHTML = `
                <span class="relative z-10 flex items-center">
                    <svg class="w-5 h-5 mr-3 transition-transform duration-300 rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                    Tampilkan Sedikit
                    <span class="ml-2 px-2 py-1 text-xs bg-white/20 rounded-full">
                        {{ $umkms->count() }}
                    </span>
                </span>
            `;
                }

                isExpanded = !isExpanded;
            });
        });
    </script>
@endsection

@section('content')
    {{-- Section sejarah setelah hero --}}
    <section class="container mx-auto px-6 md:px-12 py-16 md:py-24 grid md:grid-cols-2 gap-12 items-center">
        <!-- Kiri: Foto bertumpuk -->
        <div class="relative w-full max-w-[500px] mx-auto">
            <!-- Background abu-abu -->
            <div class="absolute w-[85%] h-[300px] md:h-[380px] top-5 left-0 bg-gray-100 rounded-xl z-[1]"></div>

            <!-- Foto utama -->
            <div class="relative w-[85%] h-[300px] md:h-[380px] ml-[15%] rounded-xl overflow-hidden shadow-xl z-[2]">
                <img src="/images/bg_batik_3.png" alt="Proses Pembuatan Batik" class="w-full h-full object-cover">
            </div>

            <!-- Foto kecil -->
            <div
                class="absolute w-[120px] h-[120px] md:w-[160px] md:h-[160px] -bottom-8 left-0 rounded-xl overflow-hidden shadow-2xl z-[3] border-4 border-white">
                <img src="/images/bg_batik_2.png" alt="Motif Batik Detail" class="w-full h-full object-cover">
            </div>
        </div>

        <!-- Kanan: Teks -->
        <div class="text-left space-y-6">
            <div>
                <h1 class="font-playfair text-3xl md:text-4xl font-bold text-gray-900 mb-2">Sejarah</h1>
                <h2 class="font-playfair text-4xl md:text-5xl font-semibold text-[#1E41FB]">Batik Tanjung Bumi</h2>
            </div>

            <div class="space-y-4 text-gray-700 text-[14px] md:text-[16px] leading-relaxed">
                <p>
                    Batik tulis Tanjung Bumi ini sudah lama ada, berawal dari kejenuhan para kaum ibu di kawasan pesisir
                    mengisi waktu luang sambil menunggu suami datang kembali dari berlayar di lautan. Batik ini memiliki
                    ciri khusus yang menjadi pembeda dengan batik tulis dari daerah lainnya. Adanya motif burung yang pasti
                    terdapat di batik Tanjung Bumi ini, serta penggunaan warna merah yang sangat mewakili karakter penduduk
                    pesisir khususnya Pulau Madura.
                </p>

                <p>
                    Dari segi seni, tampilan serta corak para pengrajin batik tulis di desa ini berbeda – beda. Hal ini bisa
                    dapat anda buktikan langsung dengan mengunjungi beberapa pengrajin yang ada di kawasan tersebut. Semakin
                    menambha kekayaan motif batik Tanjung Bumi yang ternyata hampir memiliki 1000 jenis motif.
                </p>

                <p>
                    Berbagai macam motif, seperti motif Rongterong, Ramo, Perkaper, Serat Kayu dan sebagainya. Ada satu
                    jenis batik yang menjadi andalan yakni jenis batik Gentongan. Nama batik Gentongan sendiri berasal dari
                    kata Gentong atau sejenis tempat besar yang biasa digunakan untuk menampung air.
                </p>
            </div>

            {{-- <div class="pt-4">
                <button
                    class="px-8 py-3 bg-amber-600 hover:bg-amber-700 text-white font-medium rounded-lg transition duration-300">
                    Pelajari Sejarah Lengkap
                </button>
            </div> --}}
        </div>
    </section>

    <!-- Instagram Section -->
    <div class="w-full px-4 md:px-6 lg:px-12 py-20">
        <!-- Section Header -->
        <div class="text-center mb-16">
            <div
                class="inline-flex items-center space-x-3 bg-gradient-to-r from-blue-50 to-purple-50 px-6 py-3 rounded-2xl shadow-sm mb-6">
                <i
                    class="fab fa-instagram text-2xl bg-gradient-to-r from-purple-600 to-pink-600 bg-clip-text text-transparent"></i>
                <span class="text-sm font-semibold text-gray-700">Follow Our Journey</span>
            </div>
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <span class="bg-gradient-to-r from-purple-600 to-pink-600 bg-clip-text text-transparent">Instagram</span>
                Feed
            </h2>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                Ikuti perjalanan kreatif kami dan lihat karya batik terbaru langsung dari workshop
            </p>
        </div>

        <!-- Instagram Grid -->
        <div class="max-w-7xl mx-auto">
            <div
                class="bg-gradient-to-br from-purple-600 via-pink-500 to-amber-500 rounded-3xl shadow-2xl overflow-hidden">
                <div class="p-6 md:p-8 lg:p-12">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 md:gap-8">
                        <!-- Featured Post (Left) -->
                        @if ($featuredPost = $instagramPosts->first())
                            <a href="{{ $featuredPost->link }}" target="_blank"
                                class="group bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 overflow-hidden transform hover:-translate-y-2">
                                <!-- Image Container -->
                                <div class="relative h-64 md:h-80 overflow-hidden">
                                    @if ($featuredPost->image)
                                        <img src="{{ asset('storage/' . $featuredPost->image) }}"
                                            alt="{{ $featuredPost->caption }}"
                                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                                    @else
                                        <div
                                            class="w-full h-full bg-gradient-to-br from-gray-100 to-gray-200 flex items-center justify-center">
                                            <i class="fab fa-instagram text-gray-400 text-4xl"></i>
                                        </div>
                                    @endif

                                    <!-- Instagram Overlay -->
                                    <div
                                        class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                    </div>

                                    <!-- Instagram Icon -->
                                    <div
                                        class="absolute top-4 right-4 bg-white/90 backdrop-blur-sm rounded-full p-2 transform translate-y-2 opacity-0 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-300">
                                        <i class="fab fa-instagram text-purple-600 text-lg"></i>
                                    </div>
                                </div>

                                <!-- Content -->
                                <div class="p-6 md:p-8">
                                    <div class="flex items-center space-x-2 mb-3">
                                        <div class="w-2 h-2 bg-gradient-to-r from-purple-500 to-pink-500 rounded-full">
                                        </div>
                                        <span
                                            class="text-xs font-semibold text-purple-600 uppercase tracking-wide">Featured
                                            Post</span>
                                    </div>
                                    <h3
                                        class="text-xl md:text-2xl font-bold text-gray-900 mb-3 line-clamp-2 group-hover:text-purple-600 transition-colors">
                                        {{ $featuredPost->caption ?: 'Keunikan Batik Tulis Tanjung Bumi' }}
                                    </h3>
                                    <p class="text-gray-600 leading-relaxed line-clamp-3">
                                        {{ $featuredPost->caption ?: 'Paduan Tradisi, Kisah, dan Ekspresi Seni. Setiap Helai Adalah Mahakarya.' }}
                                    </p>
                                    <div class="flex items-center space-x-4 mt-4 pt-4 border-t border-gray-100">
                                        <div class="flex items-center space-x-1 text-gray-500 text-sm">
                                            <i class="far fa-heart"></i>
                                            <span>2.4k</span>
                                        </div>
                                        <div class="flex items-center space-x-1 text-gray-500 text-sm">
                                            <i class="far fa-comment"></i>
                                            <span>156</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        @endif

                        <!-- Grid Posts (Right) -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            @foreach ($instagramPosts->skip(1)->take(4) as $index => $post)
                                <a href="{{ $post->link }}" target="_blank"
                                    class="group bg-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-500 overflow-hidden transform hover:-translate-y-1">
                                    <!-- Image Container -->
                                    <div class="relative h-48 overflow-hidden">
                                        @if ($post->image)
                                            <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->caption }}"
                                                class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                                        @else
                                            <div
                                                class="w-full h-full bg-gradient-to-br from-gray-100 to-gray-200 flex items-center justify-center">
                                                <i class="fab fa-instagram text-gray-400 text-2xl"></i>
                                            </div>
                                        @endif

                                        <!-- Gradient Overlay -->
                                        <div
                                            class="absolute inset-0 bg-gradient-to-t from-black/40 via-transparent to-transparent">
                                        </div>

                                        <!-- Instagram Badge -->
                                        <div
                                            class="absolute top-3 right-3 bg-white/90 backdrop-blur-sm rounded-lg px-2 py-1">
                                            <i class="fab fa-instagram text-purple-600 text-xs"></i>
                                        </div>
                                    </div>

                                    <!-- Content -->
                                    <div class="p-4">
                                        <h4
                                            class="font-semibold text-gray-900 text-sm line-clamp-2 group-hover:text-purple-600 transition-colors mb-2">
                                            {{ $post->caption ?: $defaultTitles[$index] ?? 'Batik Tulis Tanjung Bumi' }}
                                        </h4>
                                        <div class="flex items-center justify-between text-xs text-gray-500">
                                            <span class="flex items-center space-x-1">
                                                <i class="far fa-heart"></i>
                                                <span>{{ rand(500, 2000) }}</span>
                                            </span>
                                            <span class="flex items-center space-x-1">
                                                <i class="far fa-comment"></i>
                                                <span>{{ rand(50, 200) }}</span>
                                            </span>
                                        </div>
                                    </div>
                                </a>
                            @endforeach

                            <!-- Follow CTA Card -->
                            <a href="https://instagram.com/batikpaseseh" target="_blank"
                                class="group bg-gradient-to-br from-purple-500 to-pink-500 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-500 overflow-hidden transform hover:-translate-y-1 flex flex-col items-center justify-center text-center p-6">
                                <div
                                    class="bg-white/20 backdrop-blur-sm rounded-full p-4 mb-4 transform group-hover:scale-110 transition-transform duration-300">
                                    <i class="fab fa-instagram text-white text-2xl"></i>
                                </div>
                                <h4 class="text-white font-bold text-lg mb-2">Follow Us</h4>
                                <p class="text-white/80 text-sm mb-4">@batikpaseseh</p>
                                <div
                                    class="bg-white text-purple-600 font-semibold py-2 px-6 rounded-full text-sm transform group-hover:scale-105 transition-transform duration-300">
                                    Follow Instagram
                                </div>
                            </a>
                        </div>
                    </div>

                    <!-- View More Button -->
                    <div class="text-center mt-8 pt-8 border-t border-white/20">
                        <a href="https://instagram.com/batikpaseseh" target="_blank"
                            class="group inline-flex items-center space-x-3 bg-white/10 backdrop-blur-md border border-white/20 text-white font-semibold py-4 px-8 rounded-2xl hover:bg-white hover:text-purple-600 transition-all duration-300 transform hover:-translate-y-1">
                            <i class="fab fa-instagram"></i>
                            <span>Lihat Semua Postingan</span>
                            <i class="fas fa-arrow-right group-hover:translate-x-1 transition-transform duration-300"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @php
        $defaultTitles = [
            'Batik Tulis Tanjung Bumi',
            'Keindahan dan Ciri Khas Batik Tulis',
            'Warisan Abadi dari Tanjung Bumi',
            'Karya Seni dalam Setiap Goresan',
        ];
    @endphp

    {{-- Section produk setelah hero --}}
    {{-- <div id="produk" class="container mx-auto px-6 py-12">
        <h2 class="text-3xl font-bold mb-6">Produk Unggulan</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <div class="bg-white p-4 rounded-lg shadow">
                <h3 class="font-semibold">Batik Tulis</h3>
                <p class="text-sm text-slate-500">Deskripsi singkat produk.</p>
            </div>
        </div>
    </div> --}}
@endsection

{{-- <script>
    document.addEventListener('DOMContentLoaded', function() {
        const typingElement = document.getElementById('typing');
        const text = typingElement.getAttribute('data-text');
        let index = 0;
        
        function typeWriter() {
            if (index < text.length) {
                typingElement.innerHTML += text.charAt(index);
                index++;
                setTimeout(typeWriter, 100);
            } else {
                // Menambahkan blinking cursor setelah selesai mengetik
                typingElement.classList.add('border-r-4', 'border-amber-400', 'animate-pulse');
            }
        }
        
        // Memulai efek mengetik
        typeWriter();
    });
</script> --}}

@vite('resources/js/typing.js')
