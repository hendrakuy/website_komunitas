@extends('layouts.app')

@section('title', 'Batik Paseseh - Kegiatan')

@section('hero')
    <!-- Modern Hero Section -->
    <section class="relative flex items-center justify-center overflow-hidden min-h-[60vh] sm:min-h-[70vh] md:min-h-[85vh]">
        <!-- Background Image -->
        <div class="absolute inset-0 bg-cover bg-center"
            style="background-image: url('{{ asset('images/BG_Kegiatan.png') }}');"></div>

        <!-- Overlay -->
        <div class="absolute inset-0 bg-gradient-to-br from-gray-900/60 via-gray-900/50 to-gray-900/60"></div>
        <div class="absolute inset-0 bg-gradient-to-t from-black/40 via-transparent to-transparent"></div>

        <!-- Animated Background Elements -->
        <div class="absolute top-10 left-10 w-20 h-20 bg-amber-400/20 rounded-full blur-xl animate-pulse"></div>
        <div class="absolute bottom-20 right-20 w-32 h-32 bg-blue-400/20 rounded-full blur-2xl animate-pulse"
            style="animation-delay: 1s;"></div>
        <div class="absolute top-1/2 left-1/4 w-16 h-16 bg-purple-400/20 rounded-full blur-xl animate-pulse"
            style="animation-delay: 0.5s;"></div>

        <!-- Content -->
        <div class="relative z-10 text-center text-white max-w-5xl mx-auto px-4 sm:px-6">
            <div
                class="inline-flex items-center space-x-2 bg-white/10 backdrop-blur-sm px-4 py-2 rounded-full mb-6 border border-white/20">
                <svg class="w-5 h-5 text-amber-400" fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                </svg>
                <span class="text-sm font-semibold text-white">Event Terbaru</span>
            </div>

            <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold mb-4 md:mb-6 leading-tight">
                <span class="bg-gradient-to-r from-white via-amber-100 to-white bg-clip-text text-transparent">
                    Event & Penawaran Eksklusif
                </span>
            </h1>

            <p class="text-lg sm:text-xl md:text-2xl font-light mb-3 text-blue-100">
                Kampung Batik <span class="text-amber-300 font-semibold">Paseseh</span>
            </p>

            <p class="text-sm sm:text-base md:text-lg text-gray-200 mb-8 max-w-2xl mx-auto leading-relaxed">
                Temukan pengalaman tak terlupakan dengan event spesial dan penawaran terbatas dari komunitas batik
                tradisional kami
            </p>

            <!-- CTA Button -->
            <a href="#events"
                class="group inline-flex items-center space-x-3 bg-gradient-to-r from-amber-500 to-orange-500 hover:from-amber-600 hover:to-orange-600 text-white font-bold py-3 md:py-4 px-6 md:px-8 rounded-2xl shadow-2xl transition-all duration-300 transform hover:-translate-y-1 hover:scale-105">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                </svg>
                <span class="text-sm sm:text-base">Jelajahi Event</span>
                <svg class="w-5 h-5 group-hover:translate-y-1 transition-transform" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
                </svg>
            </a>
        </div>

        <!-- Scroll Indicator -->
        <div class="absolute bottom-6 sm:bottom-8 left-1/2 transform -translate-x-1/2 z-20">
            <div class="animate-bounce">
                <svg class="w-5 h-5 sm:w-6 sm:h-6 text-white/60" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
                </svg>
            </div>
        </div>
    </section>
@endsection

@section('content')
    <!-- Events Section -->
    <section class="py-12 md:py-16 lg:py-20 px-4 sm:px-6 lg:px-8 bg-gradient-to-br from-white via-gray-50 to-white"
        id="events">
        <div class="max-w-7xl mx-auto">
            <!-- Header Section -->
            <div class="text-center mb-10 md:mb-12 lg:mb-16">
                <div
                    class="inline-flex items-center space-x-2 bg-gradient-to-r from-blue-50 to-purple-50 px-5 py-2.5 rounded-full shadow-sm mb-4 md:mb-6 border border-blue-100">
                    <svg class="w-5 h-5 text-amber-500" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg>
                    <span class="text-xs sm:text-sm font-semibold text-gray-700">Event & Promo Terbaru</span>
                </div>
                <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold text-gray-900 mb-3 md:mb-4">
                    Jelajahi <span
                        class="bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">Pengalaman
                        Spesial</span>
                </h2>
                <p class="text-sm sm:text-base md:text-lg text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    Temukan berbagai event menarik, workshop batik, dan penawaran eksklusif yang hanya tersedia untuk
                    komunitas kami
                </p>
            </div>

            <!-- Filter Buttons -->
            <div class="flex flex-wrap justify-center gap-2 sm:gap-3 md:gap-4 mb-8 md:mb-12">
                <button
                    class="filter-button group flex items-center space-x-2 px-4 sm:px-5 md:px-6 py-2 sm:py-2.5 md:py-3 rounded-xl md:rounded-2xl text-xs sm:text-sm font-semibold transition-all duration-300 transform hover:-translate-y-0.5 active bg-gradient-to-r from-blue-600 to-purple-600 text-white shadow-lg hover:shadow-xl"
                    data-filter="all">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                    </svg>
                    <span>Semua Event</span>
                </button>

                <button
                    class="filter-button group flex items-center space-x-2 px-4 sm:px-5 md:px-6 py-2 sm:py-2.5 md:py-3 rounded-xl md:rounded-2xl text-xs sm:text-sm font-semibold transition-all duration-300 transform hover:-translate-y-0.5 bg-white border border-gray-200 text-gray-700 shadow-sm hover:shadow-md hover:border-green-400 hover:text-green-600"
                    data-filter="promo">
                    <svg class="w-4 h-4 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M17.707 9.293a1 1 0 010 1.414l-7 7a1 1 0 01-1.414 0l-7-7A.997.997 0 012 10V5a3 3 0 013-3h5c.256 0 .512.098.707.293l7 7zM5 6a1 1 0 100-2 1 1 0 000 2z"
                            clip-rule="evenodd" />
                    </svg>
                    <span>Promo Spesial</span>
                </button>

                <button
                    class="filter-button group flex items-center space-x-2 px-4 sm:px-5 md:px-6 py-2 sm:py-2.5 md:py-3 rounded-xl md:rounded-2xl text-xs sm:text-sm font-semibold transition-all duration-300 transform hover:-translate-y-0.5 bg-white border border-gray-200 text-gray-700 shadow-sm hover:shadow-md hover:border-orange-400 hover:text-orange-600"
                    data-filter="event">
                    <svg class="w-4 h-4 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4" />
                    </svg>
                    <span>Event & Workshop</span>
                </button>
            </div>

            <!-- Events Grid -->
            <div id="events-container"
                class="grid max-[400px]:grid-cols-1 grid-cols-2 sm:grid-cols-2 md:grid-cols-3 gap-3 sm:gap-4 md:gap-6 mb-8 md:mb-12">
                @forelse ($events as $event)
                    <div class="event-card group bg-white rounded-xl md:rounded-2xl shadow-md hover:shadow-xl transition-all duration-500 overflow-hidden transform hover:-translate-y-1 border border-gray-100"
                        data-category="{{ $event->is_promo ? 'promo' : 'event' }}">

                        <!-- Image Section -->
                        <div
                            class="relative h-32 sm:h-40 md:h-56 overflow-hidden bg-gradient-to-br from-gray-100 to-gray-200">
                            @if ($event->image)
                                <img src="{{ asset('storage/' . $event->image) }}" alt="{{ $event->title }}"
                                    class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                            @else
                                <div class="w-full h-full flex items-center justify-center">
                                    <svg class="w-10 h-10 text-gray-400" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                </div>
                            @endif

                            <!-- Overlay Gradient -->
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            </div>

                            <!-- Category Badge -->
                            <div class="absolute top-2 left-2 sm:top-3 sm:left-3">
                                <span
                                    class="inline-flex items-center space-x-1 px-2 py-0.5 sm:px-2.5 sm:py-1 rounded-full text-[9px] sm:text-[10px] font-semibold text-white shadow-md {{ $event->is_promo ? 'bg-gradient-to-r from-green-500 to-emerald-600' : 'bg-gradient-to-r from-orange-500 to-red-500' }}">
                                    <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                                        @if ($event->is_promo)
                                            <path fill-rule="evenodd"
                                                d="M17.707 9.293a1 1 0 010 1.414l-7 7a1 1 0 01-1.414 0l-7-7A.997.997 0 012 10V5a3 3 0 013-3h5c.256 0 .512.098.707.293l7 7zM5 6a1 1 0 100-2 1 1 0 000 2z"
                                                clip-rule="evenodd" />
                                        @else
                                            <path fill-rule="evenodd"
                                                d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                                clip-rule="evenodd" />
                                        @endif
                                    </svg>
                                    <span>{{ $event->is_promo ? 'Promo' : 'Event' }}</span>
                                </span>
                            </div>

                            <!-- Date Badge -->
                            <div
                                class="absolute top-2 right-2 bg-white/90 backdrop-blur-sm rounded-lg p-1.5 text-center shadow-md min-w-[38px]">
                                <div class="text-sm font-bold text-gray-900 leading-none">
                                    {{ \Carbon\Carbon::parse($event->start_at)->format('d') }}
                                </div>
                                <div class="text-[8px] font-semibold text-blue-600 leading-none mt-0.5">
                                    {{ \Carbon\Carbon::parse($event->start_at)->format('M') }}
                                </div>
                            </div>
                        </div>

                        <!-- Content Section -->
                        <div class="p-2.5 sm:p-3 md:p-5">
                            <h3
                                class="text-[11px] sm:text-sm md:text-lg font-bold text-gray-900 mb-1 sm:mb-2 line-clamp-2 group-hover:text-blue-600 transition-colors leading-tight min-h-[28px] sm:min-h-[36px]">
                                {{ $event->title }}
                            </h3>

                            <p
                                class="text-gray-600 text-[9px] sm:text-[11px] md:text-sm mb-2 line-clamp-2 leading-relaxed min-h-[24px]">
                                {!! Str::limit(strip_tags($event->description), 70) !!}
                            </p>

                            <!-- Meta -->
                            <div class="flex items-center text-[9px] sm:text-[10px] md:text-sm text-gray-500 mb-2">
                                <svg class="w-3 h-3 sm:w-4 sm:h-4 text-blue-500 mr-1 flex-shrink-0" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span
                                    class="line-clamp-1">{{ \Carbon\Carbon::parse($event->start_at)->translatedFormat('d M Y') }}</span>
                            </div>

                            <!-- Button -->
                            <a href="{{ route('event.show', $event->slug) }}"
                                class="group/btn w-full inline-flex items-center justify-center space-x-1 bg-gradient-to-r from-blue-500 to-purple-500 text-white font-semibold py-1.5 sm:py-2 md:py-3 px-2 sm:px-3 rounded-md sm:rounded-lg hover:from-blue-600 hover:to-purple-600 transition-all duration-300 transform hover:-translate-y-0.5 shadow-md text-[10px] sm:text-xs md:text-sm">
                                <span>Lihat Detail</span>
                                <svg class="w-3 h-3 sm:w-4 sm:h-4 group-hover/btn:translate-x-1 transition-transform"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 7l5 5m0 0l-5 5m5-5H6" />
                                </svg>
                            </a>
                        </div>
                    </div>
                @empty
                    <div class="col-span-full text-center py-10 sm:py-14">
                        <div class="max-w-md mx-auto">
                            <div
                                class="w-16 h-16 sm:w-20 sm:h-20 bg-gradient-to-br from-gray-100 to-gray-200 rounded-xl flex items-center justify-center mx-auto mb-4">
                                <svg class="w-8 h-8 sm:w-10 sm:h-10 text-gray-400" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <h3 class="text-lg sm:text-xl font-bold text-gray-700 mb-1">Belum Ada Event</h3>
                            <p class="text-xs sm:text-sm text-gray-500 mb-3">Saat ini belum ada event atau promo yang
                                tersedia. Nantikan update terbaru dari kami!</p>
                            <button onclick="location.reload()"
                                class="bg-gradient-to-r from-blue-500 to-purple-500 text-white font-semibold py-2 px-4 rounded-lg hover:from-blue-600 hover:to-purple-600 transition-all duration-300 text-xs sm:text-sm">
                                <svg class="w-3 h-3 inline mr-1" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                                </svg>
                                Refresh
                            </button>
                        </div>
                    </div>
                @endforelse
            </div>


            @if ($events->hasMorePages())
                <!-- Load More Section -->
                <div id="load-more-section" class="text-center">
                    <button id="load-more-btn" data-next-page="{{ $events->currentPage() + 1 }}"
                        class="group inline-flex items-center space-x-2 sm:space-x-3 bg-white border-2 border-blue-500 text-blue-600 font-bold py-2.5 sm:py-3 md:py-4 px-5 sm:px-6 md:px-8 rounded-xl md:rounded-2xl hover:bg-blue-500 hover:text-white transition-all duration-300 transform hover:-translate-y-1 hover:shadow-xl text-xs sm:text-sm md:text-base">
                        <svg class="w-4 h-4 sm:w-5 sm:h-5 group-hover:rotate-90 transition-transform duration-300"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                        </svg>
                        <span>Muat Lebih Banyak</span>
                        <svg class="w-4 h-4 sm:w-5 sm:h-5 group-hover:translate-y-1 transition-transform" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 14l-7 7m0 0l-7-7m7 7V3" />
                        </svg>
                    </button>
                    <div id="loading-spinner" class="hidden mt-4">
                        <div class="inline-flex items-center space-x-3 text-blue-600">
                            <div
                                class="w-5 h-5 md:w-6 md:h-6 border-2 border-blue-600 border-t-transparent rounded-full animate-spin">
                            </div>
                            <span class="font-medium text-sm md:text-base">Memuat event...</span>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </section>

    <!-- Contact CTA Section -->
    <section
        class="py-12 md:py-16 lg:py-20 px-4 sm:px-6 lg:px-8 bg-gradient-to-br from-blue-600 via-purple-600 to-indigo-600 relative overflow-hidden">
        <!-- Decorative Elements -->
        <div class="absolute top-0 left-0 w-64 h-64 bg-white/10 rounded-full blur-3xl -translate-x-1/2 -translate-y-1/2">
        </div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-white/10 rounded-full blur-3xl translate-x-1/2 translate-y-1/2">
        </div>

        <div class="max-w-4xl mx-auto text-center relative z-10">
            <div
                class="inline-flex items-center space-x-2 bg-white/20 backdrop-blur-sm px-5 py-2.5 rounded-full shadow-sm mb-4 md:mb-6 border border-white/30">
                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                </svg>
                <span class="text-xs sm:text-sm font-semibold text-white">Butuh Informasi Lebih?</span>
            </div>

            <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-white mb-3 md:mb-4">
                Punya Pertanyaan Tentang Event Kami?
            </h2>
            <p class="text-sm sm:text-base md:text-lg text-blue-100 mb-6 md:mb-8 max-w-2xl mx-auto leading-relaxed">
                Tim kami siap membantu Anda dengan informasi lengkap mengenai event, workshop, dan penawaran spesial
            </p>

            <div class="flex flex-col sm:flex-row gap-3 sm:gap-4 max-w-lg mx-auto justify-center">
                <a href="https://wa.me/6285104005780" target="_blank"
                    class="group flex items-center justify-center space-x-2 bg-white text-blue-600 hover:bg-blue-50 font-bold py-3 md:py-4 px-6 md:px-8 rounded-xl transition-all duration-300 transform hover:-translate-y-1 shadow-lg hover:shadow-xl text-sm md:text-base">
                    <svg class="w-5 h-5 group-hover:scale-110 transition-transform" fill="currentColor"
                        viewBox="0 0 24 24">
                        <path
                            d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893 0-3.176-1.24-6.165-3.495-8.411" />
                    </svg>
                    <span>Hubungi via WhatsApp</span>
                </a>

                {{-- <a href="tel:+6281234567890"
                    class="group flex items-center justify-center space-x-2 bg-white/10 backdrop-blur-sm border-2 border-white/30 text-white hover:bg-white/20 font-bold py-3 md:py-4 px-6 md:px-8 rounded-xl transition-all duration-300 transform hover:-translate-y-1 text-sm md:text-base">
                    <svg class="w-5 h-5 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                    </svg>
                    <span>Telepon Kami</span>
                </a> --}}
            </div>

            <p class="text-xs sm:text-sm text-blue-200 mt-4 md:mt-6">Layanan informasi tersedia setiap hari pukul 08.00 -
                17.00 WIB</p>
        </div>
    </section>
@endsection

@vite('resources/js/events-filter.js')
