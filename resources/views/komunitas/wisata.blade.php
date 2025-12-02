@extends('layouts.app')

@section('title', 'Batik Paseseh - Wisata')

@section('hero')
    <!-- Hero Section - Full Width with Modern Design -->
    <section class="relative min-h-[70vh] sm:min-h-[80vh] md:min-h-screen overflow-hidden flex items-center justify-center"
        style="background-image: url('{{ asset('images/Bg_Aboutus.png') }}');">

        <div class="absolute inset-0 bg-gray-900/45"></div>

        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-10">
            <div
                class="absolute top-0 left-0 w-72 h-72 bg-yellow-400 rounded-full mix-blend-multiply filter blur-xl opacity-30 animate-pulse">
            </div>
            <div
                class="absolute bottom-0 right-0 w-72 h-72 bg-blue-400 rounded-full mix-blend-multiply filter blur-xl opacity-30 animate-pulse animation-delay-2000">
            </div>
        </div>

        <!-- Hero Content -->
        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 md:py-28">
            <div class="text-center">
                <!-- Badge -->
                <div
                    class="inline-flex items-center px-4 py-2 rounded-full bg-white/10 backdrop-blur-sm border border-white/20 mb-8">
                    <span class="w-2 h-2 bg-yellow-400 rounded-full mr-2 animate-ping"></span>
                    <span class="text-sm font-medium text-white">Wisata Eksklusif Madura</span>
                </div>

                <!-- Main Heading -->
                <h1 class="text-4xl md:text-6xl lg:text-7xl font-bold text-white mb-6 leading-tight">
                    <span class="block">Wisata Dunia</span>
                    <span
                        class="block text-transparent bg-clip-text bg-gradient-to-r from-yellow-300 to-yellow-500">Komunitas</span>
                </h1>

                <!-- Subheading -->
                <h2 class="text-xl md:text-2xl lg:text-3xl font-semibold text-white/90 mb-8 max-w-3xl mx-auto">
                    Kampung Batik Paseseh - Menyelami Keindahan Budaya & Alam Madura
                </h2>

                <!-- CTA Buttons -->
                <div class="flex flex-col sm:flex-row gap-4 justify-center mt-10">
                    <a href="#wisata"
                        class="px-8 py-4 bg-gradient-to-r from-yellow-500 to-yellow-600 text-white font-semibold rounded-xl shadow-lg hover:shadow-xl transform hover:-translate-y-1 transition-all duration-300 flex items-center justify-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                        Jelajahi Wisata
                    </a>
                    {{-- <a href="#"
                        class="px-8 py-4 bg-white/10 backdrop-blur-sm border border-white/20 text-white font-semibold rounded-xl hover:bg-white/20 transition-all duration-300 flex items-center justify-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                            </path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        Lihat Lokasi
                    </a> --}}
                </div>
            </div>
        </div>

        <!-- Scroll Indicator -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2">
            <div class="animate-bounce">
                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3">
                    </path>
                </svg>
            </div>
        </div>
    </section>
@endsection

@section('content')
    <!-- Section Wisata -->
    <div id="wisata" class="py-16 md:py-24 px-4 md:px-12 bg-gradient-to-b from-white to-blue-50">
        <div class="max-w-7xl mx-auto">
            <!-- Section Header -->
            <div class="text-center mb-16">
                <div class="inline-flex items-center px-4 py-2 rounded-full bg-blue-100 text-blue-700 font-medium mb-4">
                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                            clip-rule="evenodd"></path>
                    </svg>
                    Destinasi Unggulan
                </div>
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-gray-900 mb-4">Wisata Yang Ditawarkan</h2>
                <p class="text-lg md:text-xl text-gray-600 max-w-3xl mx-auto">
                    Selain menyediakan batik KBP, kami menawarkan pengalaman wisata yang tak terlupakan untuk mengenal lebih
                    jauh keindahan dan budaya Madura
                </p>
            </div>

            <!-- Container Wisata -->
            <div class="relative">
                <!-- Tombol Kiri -->
                <button id="scrollLeft"
                    class="absolute left-2 top-1/2 -translate-y-1/2 z-10 bg-white/80 hover:bg-white text-blue-700 rounded-full shadow-md p-2 hidden md:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>

                <!-- Grid / Scrollable Wrapper -->
                <div id="wisataScroll"
                    class="flex md:grid md:grid-cols-2 lg:grid-cols-3 gap-6 overflow-x-auto md:overflow-visible scroll-smooth px-2 md:px-0 snap-x snap-mandatory">
                    @foreach ($wisatas as $wisata)
                        <div
                            class="group flex-none snap-center w-72 sm:w-80 md:w-auto bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2">
                            <div class="relative overflow-hidden">
                                <img src="{{ $wisata->image ? asset('storage/' . $wisata->image) : '/images/default-wisata.jpg' }}"
                                    alt="{{ $wisata->title }}"
                                    class="w-full h-52 sm:h-64 object-cover group-hover:scale-110 transition duration-700"
                                    onerror="this.src='/images/default-wisata.jpg'">
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                </div>
                            </div>

                            <div class="p-5">
                                <div class="flex items-center mb-3">
                                    <div class="w-9 h-9 rounded-full bg-blue-100 flex items-center justify-center mr-3">
                                        <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                            </path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        </svg>
                                    </div>
                                    <h3 class="text-lg font-bold text-gray-900">{{ $wisata->title }}</h3>
                                </div>
                                <p class="text-gray-600 mb-4 text-sm line-clamp-2">
                                    {!! Str::limit(strip_tags($wisata->description), 100) !!}
                                </p>
                                <div class="flex justify-between items-center">
                                    <div class="flex items-center text-sm text-gray-500">
                                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                            </path>
                                        </svg>
                                        {{ Str::limit($wisata->address, 18) }}
                                    </div>
                                    <a href="{{ route('wisata.detail', $wisata->slug) }}"
                                        class="px-4 py-2 bg-gradient-to-r from-blue-600 to-blue-700 text-white font-medium rounded-lg hover:from-blue-700 hover:to-blue-800 transition-all duration-300 transform hover:scale-105 flex items-center text-sm">
                                        <span>Detail</span>
                                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Tombol Kanan -->
                <button id="scrollRight"
                    class="absolute right-2 top-1/2 -translate-y-1/2 z-10 bg-white/80 hover:bg-white text-blue-700 rounded-full shadow-md p-2 hidden md:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </button>
            </div>

            <!-- Pagination -->
            @if ($wisatas->hasPages())
                <div class="mt-12 flex justify-center">
                    <div class="flex space-x-2">
                        {{ $wisatas->links() }}
                    </div>
                </div>
            @endif

            <!-- CTA Section -->
            <div class="mt-16 text-center">
                <div class="bg-gradient-to-r from-blue-600 to-purple-700 rounded-2xl p-8 md:p-12 text-white shadow-xl">
                    <h3 class="text-2xl md:text-3xl font-bold mb-4">Siap Menjelajahi Keindahan Madura?</h3>
                    <p class="text-base md:text-lg mb-6 max-w-2xl mx-auto">Rencanakan perjalanan Anda sekarang dan dapatkan pengalaman
                        wisata yang tak terlupakan di Kampung Batik Paseseh.</p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        {{-- <a href="#"
                            class="text-sm md:text-base px-6 py-3 bg-white text-blue-700 font-semibold rounded-lg hover:bg-gray-100 transition-all duration-300 transform hover:scale-105">
                            Hubungi Pemandu Wisata
                        </a> --}}
                        <a href="#wisata"
                            class="text-sm md:text-base px-6 py-3 bg-transparent border-2 border-white text-white font-semibold rounded-lg hover:bg-white/10 transition-all duration-300">
                            <i class="text-xs md:text-sm fas fa-info-circle mr-2"></i>
                            Lihat Wisata
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('styles')
    <style>
        .line-clamp-2 {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .animation-delay-2000 {
            animation-delay: 2s;
        }
    </style>
@endpush

@section('scripts')
    <script src="{{ asset('js/wisata-scroll.js') }}"></script>
@endsection
