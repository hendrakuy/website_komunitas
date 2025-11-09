@extends('layouts.app')

@section('title', 'Batik Paseseh - Kegiatan')

@section('hero')
    <!-- Modern Hero Section -->
    <section class="relative flex items-center justify-center overflow-hidden min-h-[70vh] sm:min-h-[80vh] md:min-h-screen">
        <!-- Background Image -->
        <div class="absolute inset-0 bg-cover bg-center"
            style="background-image: url('{{ asset('images/BG_Kegiatan.png') }}');">
        </div>

        <!-- Overlay Gradasi Warna -->
        <div class="absolute inset-0 bg-gray-900/45"></div>
        {{-- <div class="absolute inset-0 bg-gradient-to-br from-blue-900/60 via-purple-900/50 to-indigo-900/60"></div> --}}

        {{-- <div class="absolute inset-0 bg-gradient-to-br from-blue-900/80 via-purple-800/60 to-indigo-900/70"></div> --}}
        <div class="absolute inset-0 bg-gradient-to-t from-black/20 via-transparent to-transparent z-10"></div>

        <!-- Animated Background Elements -->
        <div class="absolute top-10 left-10 w-20 h-20 bg-amber-400/20 rounded-full blur-xl animate-pulse"></div>
        <div class="absolute bottom-20 right-20 w-32 h-32 bg-blue-400/20 rounded-full blur-xl animate-pulse delay-1000">
        </div>
        <div class="absolute top-1/2 left-1/4 w-16 h-16 bg-purple-400/20 rounded-full blur-xl animate-pulse delay-500"></div>

        <div class="relative z-10 text-center text-white max-w-4xl mx-auto px-4">
            <h1
                class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 animate-fade-in-down bg-gradient-to-r from-white to-amber-200 bg-clip-text text-transparent">
                Event & Penawaran Eksklusif
            </h1>
            <p class="text-xl md:text-2xl lg:text-3xl font-light mb-8 text-blue-100 animate-fade-in-up">
                Kampung Batik <span class="text-amber-300 font-semibold">Paseseh</span>
            </p>
            <p class="text-lg md:text-xl text-blue-200 mb-8 max-w-2xl mx-auto leading-relaxed animate-fade-in-up delay-300">
                Temukan pengalaman tak terlupakan dengan event spesial dan penawaran terbatas dari komunitas batik
                tradisional kami
            </p>

            <!-- CTA Button -->
            <div class="animate-fade-in-up delay-500">
                <a href="#events"
                    class="group inline-flex items-center space-x-3 bg-gradient-to-r from-amber-500 to-orange-500 text-white font-bold py-4 px-8 rounded-2xl shadow-2xl hover:shadow-3xl transition-all duration-300 transform hover:-translate-y-1 hover:scale-105">
                    <i class="fas fa-calendar-alt"></i>
                    <span>Jelajahi Event</span>
                    <i class="fas fa-arrow-down group-hover:translate-y-1 transition-transform duration-300"></i>
                </a>
            </div>
        </div>

        <!-- Scroll Indicator -->
        <div class="absolute bottom-6 sm:bottom-8 left-1/2 transform -translate-x-1/2 z-20">
            <div class="animate-bounce">
                <svg class="w-5 h-5 sm:w-6 sm:h-6 text-white/60" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3">
                    </path>
                </svg>
            </div>
        </div>
    </section>
@endsection

@section('content')
    <!-- Events Section -->
    <section class="py-20 px-4 md:px-8 lg:px-16 bg-white" id="events">
        <div class="max-w-7xl mx-auto">
            <!-- Header Section -->
            <div class="text-center mb-16">
                <div
                    class="inline-flex items-center space-x-2 bg-gradient-to-r from-blue-50 to-purple-50 px-6 py-3 rounded-2xl shadow-sm mb-6">
                    <i class="fas fa-star text-amber-500 text-lg"></i>
                    <span class="text-sm font-semibold text-gray-700">Event & Promo Terbaru</span>
                </div>
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                    Jelajahi <span
                        class="bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">Pengalaman
                        Spesial</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    Temukan berbagai event menarik, workshop batik, dan penawaran eksklusif yang hanya tersedia untuk
                    komunitas kami
                </p>
            </div>

            <!-- Filter Buttons -->
            <div class="flex flex-wrap justify-center gap-4 mb-12">
                <button
                    class="filter-button group flex items-center space-x-2 px-6 py-3 rounded-2xl text-sm font-semibold transition-all duration-300 transform hover:-translate-y-0.5 active bg-gradient-to-r from-blue-600 to-purple-600 text-white shadow-lg hover:shadow-xl"
                    data-filter="all">
                    <i class="fas fa-layer-group"></i>
                    <span>Semua Event</span>
                </button>
                <button
                    class="filter-button group flex items-center space-x-2 px-6 py-3 rounded-2xl text-sm font-semibold transition-all duration-300 transform hover:-translate-y-0.5 bg-white border border-gray-200 text-gray-700 shadow-sm hover:shadow-md hover:border-blue-300 hover:text-blue-600"
                    data-filter="promo">
                    <i class="fas fa-tag text-green-500"></i>
                    <span>Promo Spesial</span>
                </button>
                <button
                    class="filter-button group flex items-center space-x-2 px-6 py-3 rounded-2xl text-sm font-semibold transition-all duration-300 transform hover:-translate-y-0.5 bg-white border border-gray-200 text-gray-700 shadow-sm hover:shadow-md hover:border-orange-300 hover:text-orange-600"
                    data-filter="event">
                    <i class="fas fa-calendar-check text-orange-500"></i>
                    <span>Event & Workshop</span>
                </button>
            </div>

            <!-- Events Grid -->
            <div id="events-container" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
                @forelse ($events as $event)
                    <div class="event-card group bg-white rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 overflow-hidden transform hover:-translate-y-2"
                        data-category="{{ $event->is_promo ? 'promo' : 'event' }}">
                        <!-- Image Section -->
                        <div class="relative h-64 overflow-hidden">
                            @if ($event->image)
                                <img src="{{ asset('storage/' . $event->image) }}" alt="{{ $event->title }}"
                                    class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                            @else
                                <div
                                    class="w-full h-full bg-gradient-to-br from-gray-100 to-gray-200 flex items-center justify-center">
                                    <i class="fas fa-calendar-day text-gray-400 text-4xl"></i>
                                </div>
                            @endif

                            <!-- Overlay Gradient -->
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            </div>

                            <!-- Category Badge -->
                            <div class="absolute top-4 left-4">
                                <span
                                    class="inline-flex items-center space-x-1 px-3 py-1.5 rounded-full text-xs font-bold text-white shadow-lg
                                    {{ $event->is_promo ? 'bg-gradient-to-r from-green-500 to-emerald-600' : 'bg-gradient-to-r from-orange-500 to-red-500' }}">
                                    <i class="fas {{ $event->is_promo ? 'fa-tag' : 'fa-calendar' }} text-xs"></i>
                                    <span>{{ $event->is_promo ? 'Promo' : 'Event' }}</span>
                                </span>
                            </div>

                            <!-- Date Badge -->
                            <div
                                class="absolute top-4 right-4 bg-white/95 backdrop-blur-sm rounded-xl p-2 text-center shadow-lg">
                                <div class="text-xs font-bold text-gray-900 leading-none">
                                    {{ \Carbon\Carbon::parse($event->start_at)->format('d') }}
                                </div>
                                <div class="text-xs font-semibold text-blue-600 leading-none mt-1">
                                    {{ \Carbon\Carbon::parse($event->start_at)->format('M') }}
                                </div>
                            </div>
                        </div>

                        <!-- Content Section -->
                        <div class="p-6">
                            <h3
                                class="text-xl font-bold text-gray-900 mb-3 line-clamp-2 group-hover:text-blue-600 transition-colors">
                                {{ $event->title }}
                            </h3>

                            {{-- <p class="text-gray-600 text-sm mb-4 line-clamp-2 leading-relaxed">
                                {{ $event->description }}
                            </p> --}}

                            <p class="text-gray-600 mb-4 line-clamp-2">{!! Str::limit(strip_tags($event->description), 120) !!}</p>


                            <!-- Meta Information -->
                            <div class="flex items-center justify-between text-sm text-gray-500 mb-4">
                                <div class="flex items-center space-x-1">
                                    <i class="far fa-clock text-blue-500"></i>
                                    <span>{{ \Carbon\Carbon::parse($event->start_at)->translatedFormat('d F Y') }}</span>
                                </div>
                                {{-- <div class="flex items-center space-x-1">
                                    <i class="fas fa-map-marker-alt text-red-500"></i>
                                    <span class="text-xs">Lokasi</span>
                                </div> --}}
                            </div>

                            <!-- CTA Button -->
                            <a href="{{ route('event.detail', $event->slug) }}"
                                class="group/btn w-full inline-flex items-center justify-center space-x-2 bg-gradient-to-r from-blue-500 to-purple-500 text-white font-semibold py-3 px-4 rounded-xl hover:from-blue-600 hover:to-purple-600 transition-all duration-300 transform hover:-translate-y-0.5 shadow-lg hover:shadow-xl">
                                <span>Lihat Detail</span>
                                <i
                                    class="fas fa-arrow-right group-hover/btn:translate-x-1 transition-transform duration-300"></i>
                            </a>
                        </div>
                    </div>
                @empty
                    <!-- Empty State -->
                    <div class="col-span-full text-center py-16">
                        <div class="max-w-md mx-auto">
                            <div
                                class="w-24 h-24 bg-gradient-to-br from-gray-100 to-gray-200 rounded-3xl flex items-center justify-center mx-auto mb-6">
                                <i class="fas fa-calendar-times text-gray-400 text-3xl"></i>
                            </div>
                            <h3 class="text-2xl font-bold text-gray-700 mb-3">Belum Ada Event</h3>
                            <p class="text-gray-500 mb-6">Saat ini belum ada event atau promo yang tersedia. Nantikan update
                                terbaru dari kami!</p>
                            <button
                                class="bg-gradient-to-r from-blue-500 to-purple-500 text-white font-semibold py-3 px-6 rounded-xl hover:from-blue-600 hover:to-purple-600 transition-all duration-300 transform hover:-translate-y-0.5">
                                <i class="fas fa-sync-alt mr-2"></i>
                                Refresh Halaman
                            </button>
                        </div>
                    </div>
                @endforelse
            </div>

            @if ($events->total() > $events->perPage())
                <!-- Load More Section -->
                <div id="load-more-section" class="text-center mt-12">
                    <button id="load-more-btn" data-next-page="2"
                        class="group inline-flex items-center space-x-3 bg-white border-2 border-blue-500 text-blue-600 font-bold py-4 px-8 rounded-2xl hover:bg-blue-500 hover:text-white transition-all duration-300 transform hover:-translate-y-1 hover:shadow-xl">
                        <i class="fas fa-plus-circle group-hover:rotate-90 transition-transform duration-300"></i>
                        <span>Muat Lebih Banyak</span>
                        <i class="fas fa-arrow-down group-hover:translate-y-1 transition-transform duration-300"></i>
                    </button>
                    <div id="loading-spinner" class="hidden mt-4">
                        <div class="inline-flex items-center space-x-3 text-blue-600">
                            <div class="w-6 h-6 border-2 border-blue-600 border-t-transparent rounded-full animate-spin"></div>
                            <span class="font-medium">Memuat event...</span>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="py-20 px-4 md:px-8 bg-gradient-to-br from-blue-50 to-purple-50">
        <div class="max-w-4xl mx-auto text-center">
            <div
                class="inline-flex items-center space-x-2 bg-white/80 backdrop-blur-sm px-6 py-3 rounded-2xl shadow-sm mb-6">
                <i class="fas fa-paper-plane text-blue-500 text-lg"></i>
                <span class="text-sm font-semibold text-gray-700">Stay Updated</span>
            </div>
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                Jangan Lewatkan <span
                    class="bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">Event Spesial</span>
            </h2>
            <p class="text-lg text-gray-600 mb-8 max-w-2xl mx-auto">
                Dapatkan notifikasi event terbaru, workshop batik, dan penawaran eksklusif langsung di inbox Anda
            </p>

            <div class="flex flex-col sm:flex-row gap-4 max-w-md mx-auto">
                <div class="flex-1 relative">
                    <input type="email" placeholder="Alamat email Anda"
                        class="w-full px-6 py-4 rounded-2xl border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent shadow-sm">
                    <i class="fas fa-envelope absolute right-4 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                </div>
                <button
                    class="group bg-gradient-to-r from-blue-500 to-purple-500 text-white font-bold py-4 px-8 rounded-2xl hover:from-blue-600 hover:to-purple-600 transition-all duration-300 transform hover:-translate-y-1 hover:shadow-xl flex items-center space-x-2 justify-center">
                    <span>Berlangganan</span>
                    <i class="fas fa-paper-plane group-hover:translate-x-1 transition-transform duration-300"></i>
                </button>
            </div>
            <p class="text-sm text-gray-500 mt-4">Kami janji tidak akan spam. Unsubscribe kapan saja.</p>
        </div>
    </section>
@endsection

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const buttons = document.querySelectorAll('.filter-button');
        const cards = document.querySelectorAll('.event-card');
        const loadMoreBtn = document.getElementById('load-more-btn');
        const loadingSpinner = document.getElementById('loading-spinner');
        const eventsContainer = document.getElementById('events-container');

        let currentPage = 1;
        let currentFilter = 'all';
        let isLoading = false;

        // Filter functionality
        buttons.forEach(button => {
            button.addEventListener('click', () => {
                const filter = button.dataset.filter;
                currentFilter = filter;
                currentPage = 1;

                // Update button states
                buttons.forEach(btn => {
                    btn.classList.remove('active', 'bg-gradient-to-r', 'from-blue-600',
                        'to-purple-600', 'text-white', 'shadow-lg');
                    btn.classList.add('bg-white', 'border', 'border-gray-200',
                        'text-gray-700', 'shadow-sm');
                });

                button.classList.add('active', 'bg-gradient-to-r', 'from-blue-600',
                    'to-purple-600', 'text-white', 'shadow-lg');
                button.classList.remove('bg-white', 'border', 'border-gray-200',
                    'text-gray-700', 'shadow-sm');

                // Filter cards with animation
                cards.forEach(card => {
                    if (filter === 'all' || card.dataset.category === filter) {
                        card.style.display = 'block';
                        setTimeout(() => {
                            card.classList.remove('opacity-0', 'scale-95');
                            card.classList.add('opacity-100', 'scale-100');
                        }, 50);
                    } else {
                        card.classList.remove('opacity-100', 'scale-100');
                        card.classList.add('opacity-0', 'scale-95');
                        setTimeout(() => {
                            card.style.display = 'none';
                        }, 300);
                    }
                });
            });
        });

        // Load More functionality
        loadMoreBtn.addEventListener('click', async function() {
            if (isLoading) return;

            isLoading = true;
            loadMoreBtn.classList.add('hidden');
            loadingSpinner.classList.remove('hidden');

            try {
                // Simulate API call - replace with actual endpoint
                const response = await fetch(
                    `/api/events?page=${currentPage + 1}&filter=${currentFilter}`);
                const data = await response.json();

                if (data.events && data.events.length > 0) {
                    // In a real implementation, you would append new events here
                    // For now, we'll just simulate success
                    currentPage++;

                    // Show success message (remove in production)
                    setTimeout(() => {
                        loadingSpinner.classList.add('hidden');
                        loadMoreBtn.classList.remove('hidden');

                        // Show temporary message
                        const tempMessage = document.createElement('div');
                        tempMessage.className = 'text-green-600 font-medium mb-4';
                        tempMessage.innerHTML =
                            '<i class="fas fa-check-circle mr-2"></i>Event berhasil dimuat!';
                        eventsContainer.parentNode.insertBefore(tempMessage, loadMoreBtn
                            .parentNode);

                        setTimeout(() => tempMessage.remove(), 3000);
                    }, 1000);
                } else {
                    // No more events
                    loadingSpinner.classList.add('hidden');
                    loadMoreBtn.innerHTML =
                        '<i class="fas fa-check mr-2"></i>Semua Event Telah Dimuat';
                    loadMoreBtn.disabled = true;
                    loadMoreBtn.classList.remove('hover:-translate-y-1', 'hover:shadow-xl');
                    loadMoreBtn.classList.add('opacity-50');
                }
            } catch (error) {
                console.error('Error loading more events:', error);
                loadingSpinner.classList.add('hidden');
                loadMoreBtn.classList.remove('hidden');

                // Show error message
                const errorMessage = document.createElement('div');
                errorMessage.className = 'text-red-600 font-medium mb-4';
                errorMessage.innerHTML =
                    '<i class="fas fa-exclamation-triangle mr-2"></i>Gagal memuat event';
                eventsContainer.parentNode.insertBefore(errorMessage, loadMoreBtn.parentNode);

                setTimeout(() => errorMessage.remove(), 3000);
            } finally {
                isLoading = false;
            }
        });

        // Add initial animation to cards
        cards.forEach((card, index) => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(20px)';
            card.style.transition = 'opacity 0.5s ease, transform 0.5s ease';

            setTimeout(() => {
                card.style.opacity = '1';
                card.style.transform = 'translateY(0)';
            }, index * 100);
        });
    });
</script>
