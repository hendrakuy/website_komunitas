@extends('layouts.app')

@section('title', $wisata->title . ' - Batik Paseseh')

@section('hero')
    <!-- Hero Section for Detail -->
    <section class="relative overflow-hidden bg-gradient-to-br from-blue-900 via-blue-800 to-purple-900">
        <div class="absolute inset-0">
            <img src="{{ $wisata->image ? asset('storage/' . $wisata->image) : '/images/default-wisata.jpg' }}"
                alt="{{ $wisata->title }}" class="w-full h-full object-cover opacity-20"
                onerror="this.src='/images/default-wisata.jpg'">
            <div class="absolute inset-0 bg-gradient-to-r from-blue-900/80 to-purple-900/80"></div>
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
                                <span class="ml-1 text-sm font-medium text-white md:ml-2">{{ $wisata->title }}</span>
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
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-12">
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
                    <div {{-- sticky --}}
                        class="bg-gradient-to-br from-blue-600 to-purple-700 rounded-2xl p-8 text-white shadow-2xl top-8 animate-fade-in-right">
                        <h3 class="text-2xl font-bold mb-6">Informasi Kunjungan</h3>

                        <div class="space-y-4">
                            <div class="flex items-center">
                                <svg class="w-5 h-5 mr-3 text-yellow-400" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <div>
                                    <p class="font-semibold">Jam Operasional</p>
                                    <p class="text-blue-100">08:00 - 17:00 WIB</p>
                                </div>
                            </div>

                            <div class="flex items-center">
                                <svg class="w-5 h-5 mr-3 text-yellow-400" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1">
                                    </path>
                                </svg>
                                <div>
                                    <p class="font-semibold">Tiket Masuk</p>
                                    <p class="text-blue-100">Gratis</p>
                                </div>
                            </div>

                            <div class="flex items-center">
                                <svg class="w-5 h-5 mr-3 text-yellow-400" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                                    </path>
                                </svg>
                                <div>
                                    <p class="font-semibold">Fasilitas</p>
                                    <p class="text-blue-100">Parkir, Toilet, Warung Makan</p>
                                </div>
                            </div>
                        </div>

                        <!-- CTA Buttons -->
                        <div class="mt-8 space-y-4">
                            <a href="#"
                                class="w-full bg-white text-blue-700 font-semibold py-3 px-6 rounded-xl hover:bg-gray-100 transition-all duration-300 transform hover:scale-105 flex items-center justify-center">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                    </path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                                Lihat di Google Maps
                            </a>
                            {{-- <a href="#"
                                class="w-full bg-yellow-500 text-white font-semibold py-3 px-6 rounded-xl hover:bg-yellow-600 transition-all duration-300 transform hover:scale-105 flex items-center justify-center">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                                    </path>
                                </svg>
                                Pesan Tur Sekarang
                            </a> --}}
                        </div>
                    </div>

                    <!-- Rating & Reviews -->
                    <div class="mt-8 bg-white rounded-2xl shadow-lg p-6 border border-gray-100">
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="text-xl font-bold text-gray-900">Rating & Ulasan</h3>
                            <div class="flex items-center">
                                <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                <span class="ml-1 font-bold text-gray-900">4.8</span>
                            </div>
                        </div>
                        <p class="text-gray-600 mb-4">Berdasarkan 124 ulasan pengunjung</p>
                        <button
                            class="w-full bg-gray-100 text-gray-700 font-medium py-3 px-6 rounded-xl hover:bg-gray-200 transition-all duration-300">
                            Lihat Semua Ulasan
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Related Wisata Section -->
    <!-- Related Wisata Section -->
    <div class="py-16 bg-gray-50 relative">
        <div class="max-w-7xl mx-auto px-4 md:px-12">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Destinasi Lainnya</h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    Jelajahi lebih banyak destinasi menarik di sekitar Kampung Batik Paseseh
                </p>
            </div>

            <!-- Tombol Kiri -->
            <button id="relatedScrollLeft"
                class="absolute left-4 top-1/2 -translate-y-1/2 z-10 bg-white/80 hover:bg-white text-blue-700 rounded-full shadow-md p-2 hidden md:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
            </button>

            <!-- Scroll Container -->
            <div id="relatedScroll"
                class="flex md:grid md:grid-cols-3 gap-8 overflow-x-auto md:overflow-visible scroll-smooth snap-x snap-mandatory px-2 md:px-0">
                @foreach ($relatedWisatas as $related)
                    <a href="{{ route('wisata.detail', $related->slug) }}"
                        class="group flex-none snap-center w-72 sm:w-80 md:w-auto bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2">
                        <div class="relative overflow-hidden">
                            <img src="{{ $related->image ? asset('storage/' . $related->image) : '/images/default-wisata.jpg' }}"
                                alt="{{ $related->title }}"
                                class="w-full h-48 object-cover group-hover:scale-110 transition duration-700"
                                onerror="this.src='/images/default-wisata.jpg'">
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            </div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-gray-900 mb-2">{{ $related->title }}</h3>
                            <p class="text-gray-600 text-sm line-clamp-2">
                                {!! Str::limit(strip_tags($related->description), 80) !!}
                            </p>
                        </div>
                    </a>
                @endforeach
            </div>

            <!-- Tombol Kanan -->
            <button id="relatedScrollRight"
                class="absolute right-4 top-1/2 -translate-y-1/2 z-10 bg-white/80 hover:bg-white text-blue-700 rounded-full shadow-md p-2 hidden md:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </button>
        </div>
    </div>
@endsection

@push('styles')
    <style>
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

@section('scripts')
    <script src="{{ asset('js/related-scroll.js') }}"></script>
@endsection
