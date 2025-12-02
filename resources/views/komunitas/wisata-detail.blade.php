@extends('layouts.app')

@section('title', $wisata->title . ' - Batik Paseseh')

@section('hero')
    <!-- Hero Section for Detail -->
    <section class="relative overflow-hidden bg-gradient-to-br from-blue-900 via-blue-800 to-purple-900">
        <div class="absolute inset-0">
            <img src="{{ $wisata->image ? asset('storage/' . $wisata->image) : '/images/default-wisata.jpg' }}"
                alt="{{ $wisata->title }}" class="w-full h-full object-cover opacity-20"
                onerror="this.src='/images/default-wisata.jpg'">
            <div class="absolute inset-0 bg-gradient-to-r from-blue-900/40 to-purple-900/40"></div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 md:py-28">
            <div class="text-center">
                <!-- Breadcrumb -->
                <nav class="flex justify-center mb-8" aria-label="Breadcrumb">
                    <ol class="inline-flex items-center space-x-1 md:space-x-3">
                        <li class="inline-flex items-center">
                            <a href="{{ route('home') }}"
                                class="inline-flex items-center text-sm font-medium text-white/80 hover:text-white">
                                <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z">
                                    </path>
                                </svg>
                                Home
                            </a>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <svg class="w-6 h-6 text-white/60" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <a href="{{ route('wisata.index') }}"
                                    class="ml-1 text-sm font-medium text-white/80 hover:text-white md:ml-2">Wisata</a>
                            </div>
                        </li>
                        <li aria-current="page">
                            <div class="flex items-center">
                                <svg class="w-6 h-6 text-white/60" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span
                                    class="ml-1 text-sm font-medium text-white md:ml-2
                                    block max-w-[120px] truncate sm:max-w-none sm:whitespace-normal">
                                    {{ $wisata->title }}
                                </span>
                            </div>
                        </li>
                    </ol>
                </nav>

                <!-- Main Heading -->
                <h1 class="text-4xl md:text-6xl lg:text-7xl font-bold text-white mb-6 leading-tight animate-fade-in-up">
                    {{ $wisata->title }}
                </h1>

                <!-- Location Badge -->
                <div
                    class="inline-flex items-center px-6 py-3 rounded-full bg-white/10 backdrop-blur-sm border border-white/20 mb-8">
                    <svg class="w-5 h-5 mr-2 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                    <span class="text-white font-medium">{{ $wisata->address }}</span>
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
    <!-- Detail Section -->
    <div class="py-16 md:py-24 px-4 md:px-12 bg-white">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
                <!-- Main Content -->
                <div class="lg:col-span-2">
                    <!-- Image Gallery -->
                    <div class="mb-8">
                        <div class="rounded-2xl overflow-hidden shadow-2xl mb-4">
                            <img src="{{ $wisata->image ? asset('storage/' . $wisata->image) : '/images/default-wisata.jpg' }}"
                                alt="{{ $wisata->title }}"
                                class="w-full h-96 object-cover transition-transform duration-700 hover:scale-105"
                                onerror="this.src='/images/default-wisata.jpg'">
                        </div>

                        <!-- Additional Media -->
                        @if ($wisata->media && $wisata->media->count() > 0)
                            <div class="grid grid-cols-4 gap-4">
                                @foreach ($wisata->media->take(4) as $media)
                                    <div
                                        class="rounded-lg overflow-hidden shadow-md hover:shadow-lg transition-shadow duration-300">
                                        <img src="{{ asset('storage/' . $media->path) }}"
                                            alt="Gallery Image {{ $loop->iteration }}"
                                            class="w-full h-24 object-cover hover:scale-110 transition-transform duration-300">
                                    </div>
                                @endforeach
                            </div>
                        @endif
                    </div>

                    <!-- Description -->
                    <div class="prose prose-lg max-w-none mb-12 animate-fade-in-up">
                        <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-6">Tentang Destinasi</h2>
                        <div class="text-gray-700 leading-relaxed text-sm md:text-base">
                            {!! $wisata->description !!}
                        </div>
                    </div>

                    <!-- Features -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                        <div
                            class="bg-blue-50 rounded-2xl p-6 hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 rounded-full bg-blue-100 flex items-center justify-center mr-4">
                                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                                <h3 class="text-xl font-bold text-gray-900">Waktu Terbaik</h3>
                            </div>
                            <p class="text-gray-600">Kunjungi destinasi ini pada pagi atau sore hari untuk pengalaman
                                terbaik dengan cuaca yang mendukung.</p>
                        </div>

                        <div
                            class="bg-green-50 rounded-2xl p-6 hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 rounded-full bg-green-100 flex items-center justify-center mr-4">
                                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z">
                                        </path>
                                    </svg>
                                </div>
                                <h3 class="text-xl font-bold text-gray-900">Tips Keamanan</h3>
                            </div>
                            <p class="text-gray-600">Pastikan untuk mengikuti panduan setempat dan menjaga kebersihan
                                lingkungan selama berkunjung.</p>
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="lg:col-span-1">
                    <!-- Quick Info Card -->
                    <div
                        class="bg-gradient-to-br from-blue-600 to-purple-700 rounded-2xl p-5 sm:p-6 md:p-8 text-white shadow-2xl animate-fade-in-right">
                        <h3 class="text-xl sm:text-2xl font-bold mb-4 sm:mb-6">Informasi Kunjungan</h3>

                        <div class="space-y-3 sm:space-y-4 text-sm sm:text-base">
                            <!-- Jam Buka -->
                            <div class="flex items-start">
                                <svg class="w-5 h-5 mr-3 mt-1 text-yellow-400 flex-shrink-0" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <div>
                                    <p class="font-semibold">Jam Buka</p>
                                    <p class="text-blue-100">Setiap hari</p>
                                    {{-- <p class="text-blue-100">24 jam</p> --}}
                                </div>
                            </div>

                            <!-- Tiket Masuk -->
                            <div class="flex items-start">
                                <svg class="w-5 h-5 mr-3 mt-1 text-yellow-400 flex-shrink-0" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1">
                                    </path>
                                </svg>
                                <div>
                                    <p class="font-semibold">Tiket Masuk</p>
                                    <p class="text-blue-100">Informasi tiket belum tersedia</p>
                                </div>
                            </div>

                            <!-- Lokasi -->
                            <div class="flex items-start">
                                <svg class="w-5 h-5 mr-3 mt-1 text-yellow-400 flex-shrink-0" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                    </path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                                <div>
                                    <p class="font-semibold">Lokasi</p>
                                    <p class="text-blue-100">Mudah diakses dengan kendaraan pribadi atau umum</p>
                                </div>
                            </div>

                            <!-- Fasilitas -->
                            <div class="flex items-start">
                                <svg class="w-5 h-5 mr-3 mt-1 text-yellow-400 flex-shrink-0" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                                    </path>
                                </svg>
                                <div>
                                    <p class="font-semibold">Fasilitas</p>
                                    <p class="text-blue-100">Area parkir, spot foto, dan area istirahat</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tips Berkunjung -->
                    <div
                        class="mt-6 sm:mt-8 bg-white rounded-2xl shadow-lg p-4 sm:p-6 border border-gray-100 text-sm sm:text-base">
                        <div class="flex items-center mb-3 sm:mb-4">
                            <svg class="w-5 h-5 sm:w-6 sm:h-6 text-blue-600 mr-2" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <h3 class="text-lg sm:text-xl font-bold text-gray-900">Tips Berkunjung</h3>
                        </div>

                        <ul class="space-y-2 sm:space-y-3 text-gray-700">
                            <li class="flex items-start">
                                <svg class="w-4 h-4 sm:w-5 sm:h-5 text-green-500 mr-2 mt-0.5 flex-shrink-0"
                                    fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span>Datang pagi atau sore hari untuk cuaca yang lebih nyaman</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-4 h-4 sm:w-5 sm:h-5 text-green-500 mr-2 mt-0.5 flex-shrink-0"
                                    fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span>Gunakan pakaian dan alas kaki yang nyaman</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-4 h-4 sm:w-5 sm:h-5 text-green-500 mr-2 mt-0.5 flex-shrink-0"
                                    fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span>Jaga kebersihan dan kelestarian lingkungan</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-4 h-4 sm:w-5 sm:h-5 text-green-500 mr-2 mt-0.5 flex-shrink-0"
                                    fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span>Bawa kamera untuk mengabadikan momen</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Related Wisata Section -->
    <!-- Related Wisata Section -->
    <div class="py-12 md:py-16 lg:py-20 bg-gradient-to-br from-gray-50 via-blue-50/30 to-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section Header -->
            <div class="text-center mb-10 md:mb-12 lg:mb-16">
                <div class="inline-flex items-center space-x-2 bg-blue-100 px-4 py-2 rounded-full mb-4">
                    <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                    <span class="text-sm font-semibold text-blue-700">Jelajahi Lebih</span>
                </div>
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-gray-900 mb-3 md:mb-4">
                    Destinasi Lainnya
                </h2>
                <p class="text-sm sm:text-base md:text-lg text-gray-600 max-w-2xl mx-auto leading-relaxed">
                    Jelajahi lebih banyak destinasi menarik di sekitar Kampung Batik Paseseh
                </p>
            </div>

            <!-- Desktop: Grid Layout -->
            <div class="hidden lg:grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">
                @foreach ($relatedWisatas as $related)
                    <a href="{{ route('wisata.detail', $related->slug) }}"
                        class="group bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 border border-gray-100">

                        <!-- Image Container -->
                        <div class="relative overflow-hidden h-56 bg-gradient-to-br from-gray-100 to-gray-200">
                            <img src="{{ $related->image ? asset('storage/' . $related->image) : '/images/default-wisata.jpg' }}"
                                alt="{{ $related->title }}"
                                class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
                                onerror="this.src='/images/default-wisata.jpg'">
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            </div>

                            <!-- Overlay Badge -->
                            {{-- <div
                                class="absolute top-4 right-4 bg-white/90 backdrop-blur-sm px-3 py-1 rounded-full opacity-0 group-hover:opacity-100 transition-all duration-300 transform translate-y-2 group-hover:translate-y-0">
                                <span class="text-xs font-semibold text-blue-600">Lihat Detail</span>
                            </div> --}}
                        </div>

                        <!-- Content -->
                        <div class="p-6">
                            <h3
                                class="text-xl font-bold text-gray-900 mb-2 line-clamp-2 group-hover:text-blue-600 transition-colors leading-tight min-h-[56px]">
                                {{ $related->title }}
                            </h3>
                            <p class="text-gray-600 text-sm leading-relaxed line-clamp-3 min-h-[63px]">
                                {!! Str::limit(strip_tags($related->description), 100) !!}
                            </p>

                            <!-- Read More -->
                            <div
                                class="mt-4 pt-4 border-t border-gray-100 flex items-center text-blue-600 font-semibold text-sm">
                                <span>Selengkapnya</span>
                                <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>

            <!-- Mobile/Tablet: Horizontal Scroll with Navigation -->
            <div class="lg:hidden relative">
                @if ($relatedWisatas->count() > 0)
                    <!-- Navigation Buttons -->
                    <button data-scroll-nav="prev" data-scroll-target="related-wisata-scroll"
                        class="scroll-nav-btn absolute left-0 top-1/2 -translate-y-1/2 -translate-x-3 sm:-translate-x-4 z-10 bg-white hover:bg-gray-50 text-gray-800 rounded-full p-2.5 sm:p-3 shadow-xl transition-all duration-300 hover:scale-110 disabled:opacity-0 disabled:pointer-events-none">
                        <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                        </svg>
                    </button>

                    <button data-scroll-nav="next" data-scroll-target="related-wisata-scroll"
                        class="scroll-nav-btn absolute right-0 top-1/2 -translate-y-1/2 translate-x-3 sm:translate-x-4 z-10 bg-white hover:bg-gray-50 text-gray-800 rounded-full p-2.5 sm:p-3 shadow-xl transition-all duration-300 hover:scale-110 disabled:opacity-0 disabled:pointer-events-none">
                        <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>

                    <!-- Scrollable Container -->
                    <div id="related-wisata-scroll"
                        class="overflow-x-auto scrollbar-hide snap-x snap-mandatory scroll-smooth pb-4"
                        data-scroll-container>
                        <div class="flex space-x-4 sm:space-x-6 min-w-max px-1">
                            @foreach ($relatedWisatas as $related)
                                <a href="{{ route('wisata.detail', $related->slug) }}"
                                    class="snap-center group bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 border border-gray-100 flex-shrink-0 w-80 sm:w-96">

                                    <!-- Image Container -->
                                    <div class="relative overflow-hidden h-52 bg-gradient-to-br from-gray-100 to-gray-200">
                                        <img src="{{ $related->image ? asset('storage/' . $related->image) : '/images/default-wisata.jpg' }}"
                                            alt="{{ $related->title }}"
                                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
                                            onerror="this.src='/images/default-wisata.jpg'">
                                        <div
                                            class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                        </div>

                                        <!-- Overlay Badge -->
                                        {{-- <div
                                            class="absolute top-3 right-3 bg-white/90 backdrop-blur-sm px-3 py-1 rounded-full opacity-0 group-hover:opacity-100 transition-all duration-300 transform translate-y-2 group-hover:translate-y-0">
                                            <span class="text-xs font-semibold text-blue-600">Lihat Detail</span>
                                        </div> --}}

                                        <!-- Category Badge -->
                                        <div
                                            class="absolute bottom-3 left-3 bg-blue-500/90 backdrop-blur-sm text-white px-3 py-1 rounded-full text-xs font-semibold">
                                            <svg class="w-3 h-3 inline mr-1" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd"
                                                    d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            Destinasi Wisata
                                        </div>
                                    </div>

                                    <!-- Content -->
                                    <div class="p-5">
                                        <h3
                                            class="text-lg font-bold text-gray-900 mb-2 line-clamp-2 group-hover:text-blue-600 transition-colors leading-tight">
                                            {{ $related->title }}
                                        </h3>
                                        <p class="text-gray-600 text-sm leading-relaxed line-clamp-2 mb-4">
                                            {!! Str::limit(strip_tags($related->description), 80) !!}
                                        </p>

                                        <!-- Read More -->
                                        <div
                                            class="pt-3 border-t border-gray-100 flex items-center text-blue-600 font-semibold text-xs">
                                            <span>Selengkapnya</span>
                                            <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform"
                                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M9 5l7 7-7 7" />
                                            </svg>
                                        </div>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>

                    <!-- Scroll Indicators -->
                    <div class="flex justify-center mt-6">
                        <div class="scroll-indicator h-1 w-20 sm:w-24 bg-gray-200 rounded-full overflow-hidden">
                            <div class="scroll-indicator-progress h-full bg-gradient-to-r from-blue-500 to-blue-600 rounded-full transition-all duration-300"
                                style="width: 0%"></div>
                        </div>
                    </div>
                @else
                    <div class="text-center py-12">
                        <div class="inline-block bg-white rounded-2xl p-8 shadow-lg border border-gray-100">
                            <div
                                class="w-16 h-16 bg-gradient-to-br from-gray-100 to-gray-200 rounded-2xl flex items-center justify-center mx-auto mb-4">
                                <svg class="w-8 h-8 text-gray-400" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            </div>
                            <h3 class="text-lg font-bold text-gray-800 mb-2">Belum Ada Destinasi Lain</h3>
                            <p class="text-gray-600 text-sm">Destinasi wisata lainnya akan segera hadir.</p>
                        </div>
                    </div>
                @endif
            </div>

            <!-- View All Button -->
            @if ($relatedWisatas->count() > 3)
                <div class="text-center mt-10 md:mt-12">
                    <a href="{{ route('wisata.index') }}"
                        class="inline-flex items-center bg-gradient-to-r from-blue-500 to-blue-600 hover:from-blue-600 hover:to-blue-700 text-white px-6 md:px-8 py-3 md:py-4 rounded-xl font-semibold text-sm md:text-base shadow-lg hover:shadow-xl transform hover:-translate-y-1 transition-all duration-300 group">
                        <span>Lihat Semua Destinasi</span>
                        <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 7l5 5m0 0l-5 5m5-5H6" />
                        </svg>
                    </a>
                </div>
            @endif
        </div>
    </div>
@endsection

@push('styles')
    <style>
        .scrollbar-hide::-webkit-scrollbar {
            display: none;
        }

        .scrollbar-hide {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }

        .animate-fade-in-up {
            animation: fadeInUp 0.8s ease-out;
        }

        .animate-fade-in-right {
            animation: fadeInRight 0.8s ease-out;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInRight {
            from {
                opacity: 0;
                transform: translateX(30px);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .line-clamp-2 {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
    </style>
@endpush

@vite('resources/js/scroll-horizontal.js')
