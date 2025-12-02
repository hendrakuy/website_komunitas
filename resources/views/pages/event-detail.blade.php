@extends('layouts.app')

@section('title', $event->title . ' - Batik Paseseh')

@section('content')
    <section class="min-h-screen bg-gradient-to-br from-gray-50 to-blue-50 py-8 px-4 md:px-8 lg:px-16">
        <div class="max-w-7xl mx-auto">
            <!-- Enhanced Breadcrumb -->
            <nav class="flex mb-10" aria-label="Breadcrumb">
                <ol class="flex items-center space-x-3 text-sm">
                    <li>
                        <a href="{{ route('home') }}"
                            class="text-blue-600 hover:text-blue-800 transition-all duration-300 font-medium flex items-center">
                            {{-- <i class="fas fa-home mr-2"></i> --}}
                            Beranda
                        </a>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-chevron-right text-gray-400 text-xs"></i>
                        <a href="{{ route('event.index') }}"
                            class="text-blue-600 hover:text-blue-800 transition-all duration-300 font-medium ml-3 flex items-center">
                            {{-- <i class="fas fa-calendar-alt mr-2"></i> --}}
                            Kegiatan
                        </a>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-chevron-right text-gray-400 text-xs"></i>
                        <span
                            class="ml-1 text-sm font-medium text-gray-700 md:ml-2
                                    block max-w-[185px] truncate sm:max-w-none sm:whitespace-normal">
                            {{ $event->title }}
                        </span>
                    </li>
                </ol>
            </nav>

            {{-- Enhanced Hero Section --}}
            <div
                class="relative rounded-3xl overflow-hidden shadow-2xl mb-14 group transform transition-all duration-500 hover:shadow-3xl">
                @if ($event->image)
                    <img src="{{ asset('storage/' . $event->image) }}" alt="{{ $event->title }}"
                        class="w-full h-[500px] md:h-[600px] object-cover transition-all duration-700 group-hover:scale-105">
                @else
                    <img src="/images/default_event.png" alt="{{ $event->title }}"
                        class="w-full h-[500px] md:h-[600px] object-cover transition-all duration-700 group-hover:scale-105">
                @endif

                {{-- Enhanced Gradient Overlay --}}
                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/30 to-transparent"></div>

                {{-- Event Badge --}}
                <div class="absolute top-6 left-6">
                    <span
                        class="px-5 py-2.5 rounded-full text-sm font-bold tracking-wide shadow-xl backdrop-blur-sm
                             {{ $event->is_promo ? 'bg-gradient-to-r from-green-500 to-emerald-600' : 'bg-gradient-to-r from-orange-500 to-red-500' }} text-white transform transition-all duration-300 hover:scale-105">
                        {{ $event->is_promo ? 'Promo Spesial' : 'Event' }}
                    </span>
                </div>

                {{-- Enhanced Event Info Overlay --}}
                <div class="absolute bottom-0 left-0 right-0 p-8 md:p-12 text-white">
                    <div class="max-w-4xl">
                        <h1 class="text-2xl md:text-5xl font-bold mb-6 leading-tight tracking-tight">{{ $event->title }}
                        </h1>

                        <div class="flex flex-wrap items-center gap-4 md:gap-6 text-lg">
                            <div
                                class="flex items-center bg-white/20 backdrop-blur-lg rounded-full px-5 py-3 border border-white/30 transform transition-all duration-300 hover:bg-white/30">
                                <i class="far fa-calendar-alt mr-3"></i>
                                <span
                                    class="font-medium text-sm md:text-base">{{ \Carbon\Carbon::parse($event->start_at)->translatedFormat('d F Y') }}</span>
                            </div>

                            @if ($event->location)
                                <div
                                    class="flex items-center bg-white/20 backdrop-blur-lg rounded-full px-5 py-3 border border-white/30 transform transition-all duration-300 hover:bg-white/30">
                                    <i class="fas fa-map-marker-alt mr-3"></i>
                                    <span class="font-medium">{{ $event->location }}</span>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            {{-- Enhanced Content Section --}}
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-16">
                {{-- Main Content --}}
                <div class="lg:col-span-2">
                    <div class="bg-white rounded-2xl shadow-xl p-8 transform transition-all duration-300 hover:shadow-2xl">
                        <div class="flex items-center mb-6 pb-4 border-b border-gray-100">
                            <div class="bg-gradient-to-r from-blue-500 to-indigo-600 p-3 rounded-xl mr-4">
                                <i class="fas fa-info-circle text-white text-xl"></i>
                            </div>
                            <h2 class="text-2xl font-bold text-gray-800">Tentang Event</h2>
                        </div>

                        <article class="prose prose-lg max-w-none text-gray-700 leading-relaxed text-sm md:text-base">
                            {!! $event->description !!}
                        </article>

                        {{-- Enhanced Action Buttons --}}
                        <div class="flex flex-wrap gap-4 mt-10 pt-6 border-t border-gray-100">
                            <a href="{{ route('event.index') }}"
                                class="inline-flex items-center bg-gradient-to-r from-blue-600 to-indigo-700 text-white px-6 py-3 rounded-xl hover:from-blue-700 hover:to-indigo-800 transition-all shadow-lg hover:shadow-xl text-sm md:text-base font-medium transform hover:-translate-y-1">
                                <i class="fas fa-arrow-left mr-3"></i>
                                Kembali ke Event
                            </a>

                            {{-- <button
                                class="inline-flex items-center bg-white border border-gray-300 text-gray-700 px-6 py-3 rounded-xl hover:bg-gray-50 transition-all shadow hover:shadow-md font-medium transform hover:-translate-y-1">
                                <i class="far fa-bookmark mr-3"></i>
                                Simpan Event
                            </button>

                            <button
                                class="inline-flex items-center bg-white border border-gray-300 text-gray-700 px-6 py-3 rounded-xl hover:bg-gray-50 transition-all shadow hover:shadow-md font-medium transform hover:-translate-y-1">
                                <i class="fas fa-share-alt mr-3"></i>
                                Bagikan
                            </button> --}}
                        </div>
                    </div>

                    {{-- Additional Details Section --}}
                    @if ($event->location || $event->price)
                        <div
                            class="bg-white rounded-2xl shadow-xl p-8 mt-8 transform transition-all duration-300 hover:shadow-2xl">
                            <div class="flex items-center mb-6">
                                <div class="bg-gradient-to-r from-green-500 to-emerald-600 p-3 rounded-xl mr-4">
                                    <i class="fas fa-map-marked-alt text-white text-xl"></i>
                                </div>
                                <h2 class="text-2xl font-bold text-gray-800">Detail Event</h2>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                @if ($event->location)
                                    <div class="flex items-start">
                                        <div class="bg-blue-100 p-3 rounded-lg mr-4">
                                            <i class="fas fa-map-marker-alt text-blue-600"></i>
                                        </div>
                                        <div>
                                            <h3 class="font-semibold text-gray-800 mb-1">Lokasi</h3>
                                            <p class="text-gray-600">{{ $event->location }}</p>
                                        </div>
                                    </div>
                                @endif

                                @if ($event->price)
                                    <div class="flex items-start">
                                        <div class="bg-green-100 p-3 rounded-lg mr-4">
                                            <i class="fas fa-tag text-green-600"></i>
                                        </div>
                                        <div>
                                            <h3 class="font-semibold text-gray-800 mb-1">Biaya</h3>
                                            <p class="text-gray-600">{{ $event->price }}</p>
                                        </div>
                                    </div>
                                @endif

                                <div class="flex items-start">
                                    <div class="bg-purple-100 p-3 rounded-lg mr-4">
                                        <i class="fas fa-users text-purple-600"></i>
                                    </div>
                                    <div>
                                        <h3 class="font-semibold text-gray-800 mb-1">Kategori</h3>
                                        <p class="text-gray-600">{{ $event->is_promo ? 'Promo' : 'Event' }}</p>
                                    </div>
                                </div>

                                <div class="flex items-start">
                                    <div class="bg-orange-100 p-3 rounded-lg mr-4">
                                        <i class="far fa-clock text-orange-600"></i>
                                    </div>
                                    <div>
                                        <h3 class="font-semibold text-gray-800 mb-1">Tanggal</h3>
                                        <p class="text-gray-600">
                                            {{ \Carbon\Carbon::parse($event->start_at)->translatedFormat('d F Y') }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>

                {{-- Enhanced Sidebar --}}
                <div class="space-y-6">
                    {{-- Quick Info Card --}}
                    <div
                        class="bg-gradient-to-br from-indigo-600 to-purple-700 rounded-2xl shadow-xl p-6 text-white transform transition-all duration-300 hover:shadow-2xl">
                        <div class="flex items-center mb-4">
                            <div class="bg-white/20 p-2 rounded-lg mr-3">
                                <i class="fas fa-info-circle"></i>
                            </div>
                            <h3 class="text-lg md:text-xl font-bold">Informasi Event</h3>
                        </div>

                        <div class="space-y-4">
                            <div class="flex items-start">
                                <div class="bg-white/20 p-2 rounded-lg mr-3 mt-1">
                                    <i class="far fa-calendar-alt text-sm"></i>
                                </div>
                                <div>
                                    <p class="text-sm text-indigo-100">Tanggal</p>
                                    <p class="font-medium">
                                        {{ \Carbon\Carbon::parse($event->start_at)->translatedFormat('d F Y') }}</p>
                                </div>
                            </div>

                            @if ($event->end_at)
                                <div class="flex items-start">
                                    <div class="bg-white/20 p-2 rounded-lg mr-3 mt-1">
                                        <i class="far fa-calendar-check text-sm"></i>
                                    </div>
                                    <div>
                                        <p class="text-sm text-indigo-100">Berakhir</p>
                                        <p class="font-medium">
                                            {{ \Carbon\Carbon::parse($event->end_at)->translatedFormat('d F Y') }}</p>
                                    </div>
                                </div>
                            @endif

                            <div class="flex items-start">
                                <div class="bg-white/20 p-2 rounded-lg mr-3 mt-1">
                                    <i class="fas fa-tag text-sm"></i>
                                </div>
                                <div>
                                    <p class="text-sm text-indigo-100">Kategori</p>
                                    <p class="font-medium">{{ $event->is_promo ? 'Promo' : 'Event' }}</p>
                                </div>
                            </div>

                            @if ($event->capacity)
                                <div class="flex items-start">
                                    <div class="bg-white/20 p-2 rounded-lg mr-3 mt-1">
                                        <i class="fas fa-user-friends text-sm"></i>
                                    </div>
                                    <div>
                                        <p class="text-sm text-indigo-100">Kapasitas</p>
                                        <p class="font-medium">{{ $event->capacity }} Peserta</p>
                                    </div>
                                </div>
                            @endif
                        </div>

                        {{-- <button
                            class="w-full mt-6 bg-white text-indigo-600 font-bold py-3 rounded-xl hover:bg-gray-100 transition-all shadow-lg transform hover:-translate-y-1">
                            Daftar Sekarang
                        </button> --}}
                    </div>

                    {{-- Enhanced Organizer Info --}}
                    <div class="bg-white rounded-2xl shadow-xl p-6 transform transition-all duration-300 hover:shadow-2xl">
                        <div class="flex items-center mb-4">
                            <div class="bg-gradient-to-r from-blue-500 to-indigo-600 p-2 rounded-lg mr-3">
                                <i class="fas fa-building text-white"></i>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800">Diselenggarakan Oleh</h3>
                        </div>

                        <div class="flex items-center">
                            <div
                                class="w-14 h-14 bg-gradient-to-r from-blue-500 to-indigo-600 rounded-full flex items-center justify-center text-white font-bold text-xl mr-4 shadow-md">
                                {{ substr($event->organizer ?? 'Event', 0, 1) }}
                            </div>
                            <div>
                                <p class="font-semibold text-gray-800 text-lg">{{ $event->organizer ?? 'Komunitas' }}</p>
                                <p class="text-sm text-gray-500">Penyelenggara Event</p>
                            </div>
                        </div>

                        {{-- <div class="mt-4 pt-4 border-t border-gray-100">
                            <div class="flex space-x-3">
                                <button
                                    class="flex-1 bg-blue-50 text-blue-600 py-2 rounded-lg text-sm font-medium hover:bg-blue-100 transition-colors">
                                    <i class="fas fa-envelope mr-1"></i> Email
                                </button>
                                <button
                                    class="flex-1 bg-green-50 text-green-600 py-2 rounded-lg text-sm font-medium hover:bg-green-100 transition-colors">
                                    <i class="fas fa-phone-alt mr-1"></i> Telepon
                                </button>
                            </div>
                        </div> --}}
                    </div>

                    {{-- Registration Stats --}}
                    <div class="bg-gradient-to-br from-cyan-500 to-blue-600 rounded-2xl shadow-xl p-4 sm:p-6 text-white">
                        <h3 class="text-base sm:text-lg font-bold mb-3 sm:mb-4">Informasi Umum</h3>

                        <div class="space-y-3 sm:space-y-4">
                            <!-- Baris Pertama -->
                            <div class="grid grid-cols-2 gap-3 sm:gap-4">
                                <div class="text-center sm:text-left">
                                    <p class="text-xl sm:text-2xl font-bold">{{ $umkms->count() }}</p>
                                    <p class="text-xs sm:text-sm text-cyan-100">Pengrajin Aktif</p>
                                </div>
                                <div class="text-center sm:text-right">
                                    <p class="text-xl sm:text-2xl font-bold">{{ $batiks->count() }}</p>
                                    <p class="text-xs sm:text-sm text-cyan-100">Motif Batik Terdokumentasi</p>
                                </div>
                            </div>

                            <!-- Baris Kedua -->
                            <div class="grid grid-cols-2 gap-3 sm:gap-4 border-t border-white/30 pt-3 sm:pt-4">
                                <div class="text-center sm:text-left">
                                    <p class="text-xl sm:text-2xl font-bold">{{ $edukasi->count() }}</p>
                                    <p class="text-xs sm:text-sm text-cyan-100">Kegiatan Edukasi</p>
                                </div>
                                <div class="text-center sm:text-right">
                                    <p class="text-xl sm:text-2xl font-bold">{{ $award->count() }}</p>
                                    <p class="text-xs sm:text-sm text-cyan-100">Penghargaan Diterima</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Enhanced Related Events --}}
            <div class="mb-12">
                <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-8">
                    <div>
                        <h2 class="text-3xl font-bold text-gray-800 mb-2">Event & Promo Lainnya</h2>
                        <p class="text-gray-600 max-w-2xl">Jangan lewatkan event dan promo menarik lainnya yang mungkin
                            sesuai dengan minat Anda</p>
                    </div>
                    <a href="{{ route('event.index') }}"
                        class="text-indigo-600 hover:text-indigo-700 font-medium flex items-center mt-4 md:mt-0 transform hover:translate-x-1 transition-transform">
                        Lihat Semua
                        <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>

                <!-- Desktop: Grid Layout -->
                <div class="hidden md:grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach ($relatedEvents as $item)
                        <div
                            class="bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden group transform hover:-translate-y-2">
                            <a href="{{ route('event.show', $item->slug) }}" class="block">
                                <div class="relative h-48 overflow-hidden">
                                    <img src="{{ asset('storage/' . $item->image) }}"
                                        class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
                                        alt="{{ $item->title }}">
                                    <div class="absolute top-4 right-4">
                                        <span
                                            class="px-3 py-1 rounded-full text-xs font-semibold shadow-lg
                                     {{ $item->is_promo ? 'bg-green-500' : 'bg-orange-500' }} text-white">
                                            {{ $item->is_promo ? 'Promo' : 'Event' }}
                                        </span>
                                    </div>
                                    <div
                                        class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                    </div>
                                </div>
                                <div class="p-5">
                                    <h3
                                        class="text-lg font-bold text-gray-900 mb-2 line-clamp-2 group-hover:text-indigo-600 transition-colors">
                                        {{ $item->title }}</h3>
                                    <p class="text-sm text-gray-600 line-clamp-2 mb-3">{!! strip_tags($item->description) !!}</p>
                                    <div class="flex items-center text-sm text-gray-500">
                                        <i class="far fa-calendar-alt mr-2"></i>
                                        <span>{{ \Carbon\Carbon::parse($item->start_at)->translatedFormat('d M Y') }}</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>

                <!-- Mobile/Tablet: Horizontal Scroll with Navigation -->
                <div class="md:hidden relative">
                    <!-- Navigation Buttons -->
                    <button data-scroll-nav="prev" data-scroll-target="related-events-scroll"
                        class="scroll-nav-btn absolute left-0 top-1/2 -translate-y-1/2 -translate-x-3 z-10 bg-white hover:bg-gray-50 text-gray-800 rounded-full p-2.5 shadow-xl transition-all duration-300 hover:scale-110 disabled:opacity-0 disabled:pointer-events-none">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7">
                            </path>
                        </svg>
                    </button>

                    <button data-scroll-nav="next" data-scroll-target="related-events-scroll"
                        class="scroll-nav-btn absolute right-0 top-1/2 -translate-y-1/2 translate-x-3 z-10 bg-white hover:bg-gray-50 text-gray-800 rounded-full p-2.5 shadow-xl transition-all duration-300 hover:scale-110 disabled:opacity-0 disabled:pointer-events-none">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                            </path>
                        </svg>
                    </button>

                    <!-- Scrollable Container -->
                    <div id="related-events-scroll"
                        class="overflow-x-auto scrollbar-hide snap-x snap-mandatory scroll-smooth pb-4"
                        data-scroll-container>
                        <div class="flex space-x-4 min-w-max px-1">
                            @foreach ($relatedEvents as $item)
                                <div
                                    class="snap-center group bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden flex-shrink-0 w-80">
                                    <a href="{{ route('event.show', $item->slug) }}" class="block">
                                        <div class="relative h-48 overflow-hidden">
                                            <img src="{{ asset('storage/' . $item->image) }}"
                                                class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
                                                alt="{{ $item->title }}">
                                            <div class="absolute top-4 right-4">
                                                <span
                                                    class="px-3 py-1 rounded-full text-xs font-semibold shadow-lg
                                             {{ $item->is_promo ? 'bg-green-500' : 'bg-orange-500' }} text-white">
                                                    {{ $item->is_promo ? 'Promo' : 'Event' }}
                                                </span>
                                            </div>
                                            <div
                                                class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                            </div>
                                        </div>
                                        <div class="p-5">
                                            <h3
                                                class="text-lg font-bold text-gray-900 mb-2 line-clamp-2 group-hover:text-indigo-600 transition-colors">
                                                {{ $item->title }}</h3>
                                            <p class="text-sm text-gray-600 line-clamp-2 mb-3">{!! strip_tags($item->description) !!}</p>
                                            <div class="flex items-center text-sm text-gray-500">
                                                <i class="far fa-calendar-alt mr-2"></i>
                                                <span>{{ \Carbon\Carbon::parse($item->start_at)->translatedFormat('d M Y') }}</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- Scroll Indicators -->
                    <div class="flex justify-center mt-4">
                        <div class="scroll-indicator h-1 w-20 bg-gray-200 rounded-full overflow-hidden">
                            <div class="scroll-indicator-progress h-full bg-gradient-to-r from-indigo-500 to-purple-500 rounded-full transition-all duration-300"
                                style="width: 0%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@vite('resources/js/scroll-horizontal.js')