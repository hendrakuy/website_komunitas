{{-- resources/views/pages/event.blade.php --}}
@extends('layouts.app')

@section('hero')
<!-- Hero Section -->
    <section class="relative min-h-[65vh] md:min-h-[80vh] bg-cover bg-center bg-no-repeat flex items-center justify-center text-center" style="background-image: url('/images/event_bg.png');">
        <!-- Overlay dengan gradient untuk meningkatkan keterbacaan teks -->
        <div class="absolute inset-0 bg-gradient-to-b from-black/30 via-black/20 to-black/40"></div>
        
        <!-- Konten teks -->
        <div class="relative z-10 text-white max-w-4xl mx-auto px-4">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-4 animate-fade-in-down">Event & Penawaran Eksklusif</h1>
            <p class="text-xl md:text-2xl lg:text-3xl font-light mb-6 animate-fade-in-up">Kampung Batik Paseseh</p>
            
            <!-- Tombol CTA (opsional) -->
            <div class="animate-fade-in-up delay-300">
                <a href="#event" class="inline-block bg-[#E09B41] hover:bg-amber-600 text-white font-medium py-3 px-6 rounded-3xl transition duration-300 transform hover:scale-105">
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
    <!-- Filter & Content Section -->
    <section class="py-12 px-4 md:px-8 lg:px-16" id="event">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-10">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Event & Promo Terbaru</h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">Temukan berbagai event menarik dan penawaran spesial dari Kampung Batik Paseseh</p>
                
                <!-- Filter Buttons -->
                <div class="inline-flex flex-wrap justify-center gap-3 mt-8">
                    <button class="px-5 py-2 rounded-full bg-blue-600 text-white text-sm font-medium hover:bg-blue-700 transition shadow-md filter-button active" data-filter="all">
                        Semua
                    </button>
                    <button class="px-5 py-2 rounded-full bg-white border border-gray-300 text-sm font-medium hover:bg-gray-100 transition shadow-sm filter-button" data-filter="promo">
                        Promo
                    </button>
                    <button class="px-5 py-2 rounded-full bg-white border border-gray-300 text-sm font-medium hover:bg-gray-100 transition shadow-sm filter-button" data-filter="event">
                        Event
                    </button>
                </div>
            </div>

            {{-- Grid Event --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8 justify-center">
                {{-- Card 1 - Event --}}
                <div class="bg-white rounded-xl shadow-md hover:shadow-xl transition-all overflow-hidden card-hover event-card" data-category="event">
                    <div class="h-56 overflow-hidden">
                        <img src="/images/event_1.png" alt="Workshop Membatik" class="w-full h-full object-cover transition-transform duration-500 hover:scale-105">
                    </div>
                    <div class="p-5">
                        <div class="flex justify-between items-center mb-3">
                            <span class="text-xs font-semibold bg-orange-500 text-white px-3 py-1 rounded-full">Event</span>
                            <span class="text-xs text-gray-400"><i class="far fa-calendar-alt mr-1"></i>31 Agustus 2025</span>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-900 mb-2 line-clamp-2">Workshop Membatik Tanjung Bumi</h3>
                        <p class="text-sm text-gray-600 mb-4 line-clamp-2">Belajar langsung dari pengrajin batik Tanjung Bumi dengan teknik tradisional yang autentik.</p>
                        <a href="#" class="text-primary hover:text-blue-800 text-sm font-medium flex items-center mt-4">
                            Lihat Detail <i class="fas fa-arrow-right ml-2 text-xs"></i>
                        </a>
                    </div>
                </div>

                {{-- Card 2 - Promo --}}
                <div class="bg-white rounded-xl shadow-md hover:shadow-xl transition-all overflow-hidden card-hover event-card" data-category="promo">
                    <div class="h-56 overflow-hidden">
                        <img src="/images/event_2.png" alt="Promo Batik" class="w-full h-full object-cover transition-transform duration-500 hover:scale-105">
                    </div>
                    <div class="p-5">
                        <div class="flex justify-between items-center mb-3">
                            <span class="text-xs font-semibold bg-green-600 text-white px-3 py-1 rounded-full">Promo</span>
                            <span class="text-xs text-gray-400"><i class="far fa-calendar-alt mr-1"></i>15 Agustus 2025</span>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-900 mb-2 line-clamp-2">Promo Spesial Batik Tanjung Bumi</h3>
                        <p class="text-sm text-gray-600 mb-4 line-clamp-2">Diskon 20% untuk koleksi terbaru batik Tanjung Bumi dengan motif eksklusif.</p>
                        <a href="#" class="text-primary hover:text-blue-800 text-sm font-medium flex items-center mt-4">
                            Lihat Detail <i class="fas fa-arrow-right ml-2 text-xs"></i>
                        </a>
                    </div>
                </div>

                {{-- Card 3 - Event --}}
                <div class="bg-white rounded-xl shadow-md hover:shadow-xl transition-all overflow-hidden card-hover event-card" data-category="event">
                    <div class="h-56 overflow-hidden">
                        <img src="/images/event_3.png" alt="Festival Batik" class="w-full h-full object-cover transition-transform duration-500 hover:scale-105">
                    </div>
                    <div class="p-5">
                        <div class="flex justify-between items-center mb-3">
                            <span class="text-xs font-semibold bg-orange-500 text-white px-3 py-1 rounded-full">Event</span>
                            <span class="text-xs text-gray-400"><i class="far fa-calendar-alt mr-1"></i>27 Agustus 2025</span>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-900 mb-2 line-clamp-2">Festival Batik Tanjung Bumi 2025</h3>
                        <p class="text-sm text-gray-600 mb-4 line-clamp-2">Acaranya penuh hiburan, lomba, dan pameran batik dari berbagai pengrajin lokal.</p>
                        <a href="#" class="text-primary hover:text-blue-800 text-sm font-medium flex items-center mt-4">
                            Lihat Detail <i class="fas fa-arrow-right ml-2 text-xs"></i>
                        </a>
                    </div>
                </div>

                {{-- Card 4 - Promo --}}
                <div class="bg-white rounded-xl shadow-md hover:shadow-xl transition-all overflow-hidden card-hover event-card" data-category="promo">
                    <div class="h-56 overflow-hidden">
                        <img src="/images/event_4.png" alt="Gratis Ongkir" class="w-full h-full object-cover transition-transform duration-500 hover:scale-105">
                    </div>
                    <div class="p-5">
                        <div class="flex justify-between items-center mb-3">
                            <span class="text-xs font-semibold bg-green-600 text-white px-3 py-1 rounded-full">Promo</span>
                            <span class="text-xs text-gray-400"><i class="far fa-calendar-alt mr-1"></i>23 Juli 2025</span>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-900 mb-2 line-clamp-2">Gratis Ongkir Seluruh Indonesia</h3>
                        <p class="text-sm text-gray-600 mb-4 line-clamp-2">Nikmati belanja batik tanpa biaya kirim ke seluruh Indonesia dengan minimum pembelian.</p>
                        <a href="#" class="text-primary hover:text-blue-800 text-sm font-medium flex items-center mt-4">
                            Lihat Detail <i class="fas fa-arrow-right ml-2 text-xs"></i>
                        </a>
                    </div>
                </div>

                {{-- Card 5 - Promo --}}
                <div class="bg-white rounded-xl shadow-md hover:shadow-xl transition-all overflow-hidden card-hover event-card" data-category="promo">
                    <div class="h-56 overflow-hidden">
                        <img src="/images/event_5.png" alt="Beli 2 Gratis 1" class="w-full h-full object-cover transition-transform duration-500 hover:scale-105">
                    </div>
                    <div class="p-5">
                        <div class="flex justify-between items-center mb-3">
                            <span class="text-xs font-semibold bg-green-600 text-white px-3 py-1 rounded-full">Promo</span>
                            <span class="text-xs text-gray-400"><i class="far fa-calendar-alt mr-1"></i>06 Juli 2025</span>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-900 mb-2 line-clamp-2">Beli 2 Gratis 1 Koleksi Batik Pilihan</h3>
                        <p class="text-sm text-gray-600 mb-4 line-clamp-2">Promo terbatas untuk koleksi pilihan batik premium dengan kualitas terbaik.</p>
                        <a href="#" class="text-primary hover:text-blue-800 text-sm font-medium flex items-center mt-4">
                            Lihat Detail <i class="fas fa-arrow-right ml-2 text-xs"></i>
                        </a>
                    </div>
                </div>

                {{-- Card 6 - Event --}}
                <div class="bg-white rounded-xl shadow-md hover:shadow-xl transition-all overflow-hidden card-hover event-card" data-category="event">
                    <div class="h-56 overflow-hidden">
                        <img src="/images/event_6.png" alt="Pameran Batik Nusantara" class="w-full h-full object-cover transition-transform duration-500 hover:scale-105">
                    </div>
                    <div class="p-5">
                        <div class="flex justify-between items-center mb-3">
                            <span class="text-xs font-semibold bg-orange-500 text-white px-3 py-1 rounded-full">Event</span>
                            <span class="text-xs text-gray-400"><i class="far fa-calendar-alt mr-1"></i>01 Juli 2025</span>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-900 mb-2 line-clamp-2">Pameran Batik Nusantara</h3>
                        <p class="text-sm text-gray-600 mb-4 line-clamp-2">Ikuti pameran terbesar batik di Indonesia dengan peserta dari berbagai daerah.</p>
                        <a href="#" class="text-primary hover:text-blue-800 text-sm font-medium flex items-center mt-4">
                            Lihat Detail <i class="fas fa-arrow-right ml-2 text-xs"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Load More Button -->
            <div class="text-center mt-12">
                <button class="bg-[#1DA1F2] border border-primary text-white hover:bg-blue-600 hover:text-white font-medium py-3 px-8 rounded-3xl transition duration-300">
                    Muat Lebih Banyak
                </button>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="py-16 px-4 md:px-8 bg-gray-100 mt-12">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-3xl font-bold text-gray-800 mb-4">Dapatkan Info Event Terbaru</h2>
            <p class="text-gray-600 mb-8">Berlangganan newsletter kami untuk mendapatkan informasi event dan promo terbaru</p>
            
            <div class="flex flex-col sm:flex-row gap-4 max-w-lg mx-auto">
                <input type="email" placeholder="Alamat email Anda" class="flex-grow px-4 py-3 rounded-3xl border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary">
                <button class="bg-[#1DA1F2] hover:bg-blue-700 text-white font-medium py-3 px-6 rounded-3xl transition duration-300 whitespace-nowrap">
                    Berlangganan
                </button>
            </div>
        </div>
    </section>
@endsection
