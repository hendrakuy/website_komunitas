@extends('layouts.app')

@section('content')
    <!-- Main Container -->
    <div class="max-w-7xl mx-auto px-4 py-6">

        <!-- Modern Breadcrumb -->
        <nav class="flex mb-8" aria-label="Breadcrumb">
            <ol class="flex items-center space-x-2 text-sm">
                <li>
                    <a href="{{ route('home') }}" class="text-blue-500 hover:text-blue-700 transition-colors font-medium">
                        Beranda
                    </a>
                </li>
                <li class="flex items-center">
                    <i class="fas fa-chevron-right text-gray-400 text-xs mx-2"></i>
                    <a href="{{ route('shop.index', $filters) }}"
                        class="text-blue-500 hover:text-blue-700 transition-colors font-medium">
                        Belanja
                    </a>
                </li>
                <li class="flex items-center">
                    <i class="fas fa-chevron-right text-gray-400 text-xs mx-2"></i>
                    <span class="text-gray-600 font-medium truncate max-w-[150px] sm:max-w-xs">{{ $batik->title }}</span>
                </li>
            </ol>
        </nav>

        <!-- Product Section -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12 mb-16">

            <!-- Product Image Gallery -->
            <div class="space-y-4">
                <!-- Main Image -->
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden group">
                    @if (!empty($batik->image))
                        <img src="{{ asset('storage/' . $batik->image) }}" alt="{{ $batik->title }}"
                            class="w-full h-96 lg:h-[500px] object-cover object-center group-hover:scale-105 transition-transform duration-500">
                    @else
                        <div
                            class="w-full h-96 lg:h-[500px] bg-gradient-to-br from-gray-100 to-gray-200 flex items-center justify-center">
                            <i class="fas fa-image text-gray-400 text-6xl"></i>
                        </div>
                    @endif
                </div>

                <!-- Thumbnail Gallery (if multiple images available) -->
                <div class="grid grid-cols-4 gap-3">
                    @for ($i = 0; $i < 4; $i++)
                        <div
                            class="aspect-square bg-gray-100 rounded-xl border-2 border-transparent hover:border-blue-500 transition-colors cursor-pointer overflow-hidden">
                            @if (!empty($batik->image))
                                <img src="{{ asset('storage/' . $batik->image) }}" alt="{{ $batik->title }}"
                                    class="w-full h-full object-cover object-center">
                            @else
                                <div class="w-full h-full bg-gray-200 flex items-center justify-center">
                                    <i class="fas fa-image text-gray-400"></i>
                                </div>
                            @endif
                        </div>
                    @endfor
                </div>
            </div>

            <!-- Product Information -->
            <div class="space-y-6">
                <!-- Header -->
                <div class="border-b border-gray-200 pb-6">
                    <div class="flex items-center justify-between mb-3">
                        <span class="bg-blue-100 text-blue-600 text-sm font-medium px-3 py-1 rounded-full">
                            {{ $batik->category->name ?? 'Batik Tradisional' }}
                        </span>
                        {{-- <div class="flex items-center space-x-1 text-amber-400">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <span class="text-gray-600 text-sm ml-1">(4.8)</span>
                        </div> --}}
                    </div>

                    <h1 class="text-2xl lg:text-4xl font-bold text-gray-900 mb-4 leading-tight">
                        {{ $batik->title }}
                    </h1>

                    <div class="flex items-baseline space-x-3">
                        <span class="text-xl sm:text-3xl font-bold text-blue-600">
                            Rp {{ number_format($batik->price, 0, ',', '.') }}
                        </span>
                        {{-- <span class="text-lg text-gray-500 line-through">Rp 450.000</span>
                        <span class="bg-green-100 text-green-600 text-sm font-medium px-2 py-1 rounded">
                            Hemat 15%
                        </span> --}}
                    </div>
                </div>

                <!-- Description -->
                <div class="prose max-w-none">
                    <h3 class="text-lg font-semibold text-gray-900 mb-3 flex items-center">
                        <i class="fas fa-align-left text-blue-500 mr-2 text-sm"></i>
                        Deskripsi Produk
                    </h3>
                    <p class="text-gray-600 leading-relaxed text-sm">
                        {{ $batik->description ?? 'Batik premium dengan motif tradisional Tanjung Bumi yang dibuat dengan teknik khusus untuk menghasilkan karya seni berkualitas tinggi.' }}
                    </p>
                </div>

                <!-- Material & Size -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Material -->
                    <div>
                        <h4 class="font-semibold text-gray-900 mb-3 flex items-center">
                            <i class="fas fa-palette text-blue-500 mr-2 text-sm"></i>
                            Bahan & Material
                        </h4>
                        <div class="bg-gray-50 rounded-xl p-4">
                            @if ($batik->material)
                                @foreach (explode(',', $batik->material) as $m)
                                    <span
                                        class="inline-block bg-blue-100 text-blue-800 text-sm px-3 py-1 rounded-full mr-2 mb-2">
                                        {{ trim($m) }}
                                    </span>
                                @endforeach
                            @else
                                <p class="text-gray-700">Katun Primissima</p>
                            @endif
                        </div>
                    </div>

                    <!-- Size Selection -->
                    <div>
                        <h4 class="font-semibold text-gray-900 mb-3 flex items-center">
                            <i class="fas fa-ruler-combined text-blue-500 mr-2 text-sm"></i>
                            Ukuran
                        </h4>
                        <div class="grid grid-cols-2 gap-2">
                            @foreach (explode(',', $batik->size) as $size)
                                <button
                                    class="px-4 py-3 border-2 border-gray-300 rounded-xl font-medium text-gray-700 hover:border-blue-500 hover:bg-blue-50 hover:text-blue-600 transition-all duration-200">
                                    {{ trim($size) }}
                                </button>
                            @endforeach
                        </div>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="space-y-4 pt-4">
                    <div class="grid grid-cols-1 md:grid-cols-1 gap-4">
                        {{-- <a href="#"
                            class="group bg-gradient-to-r from-orange-500 to-red-500 text-white font-semibold py-4 px-6 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 flex items-center justify-center space-x-3">
                            <i class="fas fa-shopping-cart text-lg"></i>
                            <span>Beli via Shopee</span>
                        </a> --}}

                        <a href="{{ $whatsappLink }}" target="_blank"
                            class="group bg-gradient-to-r from-green-500 to-emerald-600 text-white font-semibold py-4 px-6 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 flex items-center justify-center space-x-3">
                            <i class="fab fa-whatsapp text-lg"></i>
                            <span>Beli via WhatsApp</span>
                        </a>
                        {{-- <form action="{{ route('order.create') }}" method="POST" class="space-y-4">
                            @csrf
                            <input type="hidden" name="total_amount" value="{{ $batik->price }}">
                            <input type="hidden" name="note" value="Pesanan produk {{ $batik->title }}">

                            <div>
                                <label class="block text-gray-700">Nama Anda</label>
                                <input type="text" name="name" required class="w-full border rounded-lg p-2"
                                    placeholder="Masukkan nama Anda">
                            </div>

                            <div>
                                <label class="block text-gray-700">Nomor WhatsApp</label>
                                <input type="text" name="phone" required class="w-full border rounded-lg p-2"
                                    placeholder="Contoh: 081234567890">
                            </div>

                            <button type="submit"
                                class="group bg-gradient-to-r from-green-500 to-emerald-600 text-white font-semibold py-4 px-6 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 flex items-center justify-center space-x-3">
                                <i class="fab fa-whatsapp text-lg"></i>
                                <span>Beli via WhatsApp</span>
                            </button>
                        </form> --}}
                    </div>

                    {{-- <button class="w-full bg-white border-2 border-blue-500 text-blue-600 font-semibold py-4 px-6 rounded-xl hover:bg-blue-50 transition-all duration-200 flex items-center justify-center space-x-3">
                        <i class="far fa-heart text-lg"></i>
                        <span>Tambahkan ke Wishlist</span>
                    </button> --}}
                </div>

                <!-- Quick Features -->
                <div class="grid grid-cols-2 gap-4 pt-6 border-t border-gray-200">
                    <div class="flex items-center space-x-3 text-gray-600">
                        <i class="fas fa-shield-alt text-blue-500 text-lg"></i>
                        <span class="text-sm">Barang Berkualitas</span>
                    </div>
                    <div class="flex items-center space-x-3 text-gray-600">
                        <i class="fas fa-heart text-blue-500 text-lg"></i>
                        <span class="text-sm">Cinta Produk Lokal</span>
                    </div>
                    <div class="flex items-center space-x-3 text-gray-600">
                        <i class="fas fa-tshirt text-blue-500 text-lg"></i>
                        <span class="text-sm">100% Batik Tulis</span>
                    </div>
                    <div class="flex items-center space-x-3 text-gray-600">
                        <i class="fas fa-award text-blue-500 text-lg"></i>
                        <span class="text-sm">Asli Tanjung Bumi</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Product Details & Specifications -->
        <div class="bg-white rounded-2xl shadow-lg p-8 mb-16">
            <h2 class="text-2xl font-bold text-gray-900 mb-8 flex items-center">
                <i class="fas fa-info-circle text-blue-500 mr-3 text-xl"></i>
                Informasi Detail Produk
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Specifications -->
                <div class="space-y-6">
                    <h3 class="text-lg font-semibold text-gray-900 border-b border-gray-200 pb-2">
                        Spesifikasi Produk
                    </h3>
                    <div class="space-y-4">
                        <div class="flex justify-between py-3 border-b border-gray-100">
                            <span class="text-gray-600 font-medium">Nama Produk</span>
                            <span class="text-gray-900 font-semibold">{{ $batik->title }}</span>
                        </div>
                        {{-- <div class="flex justify-between py-3 border-b border-gray-100">
                            <span class="text-gray-600 font-medium">Bahan Material</span>
                            <span class="text-gray-900 font-semibold">{{ $batik->material ?? 'Katun Primissima' }}</span>
                        </div> --}}
                        <div class="flex justify-between py-3 border-b border-gray-100 items-start">
                            <span class="text-gray-600 font-medium">Bahan Material</span>
                            <div class="flex flex-wrap justify-end max-w-[70%]">
                                @if ($batik->material)
                                    @foreach (explode(',', $batik->material) as $m)
                                        <span
                                            class="bg-blue-100 text-blue-800 text-sm px-2.5 py-1 rounded-full font-medium ml-2 mb-2">
                                            {{ trim($m) }}
                                        </span>
                                    @endforeach
                                @else
                                    <span class="text-gray-900 font-semibold">Katun Primissima</span>
                                @endif
                            </div>
                        </div>
                        <div class="flex justify-between py-3 border-b border-gray-100">
                            <span class="text-gray-600 font-medium">Tema Motif</span>
                            <span class="text-gray-900 font-semibold">{{ $batik->title }}</span>
                        </div>
                        <div class="flex justify-between py-3 border-b border-gray-100">
                            <span class="text-gray-600 font-medium">Ukuran Tersedia</span>
                            <span class="text-gray-900 font-semibold">{{ $batik->size }}</span>
                        </div>
                        <div class="flex justify-between py-3 border-b border-gray-100">
                            <span class="text-gray-600 font-medium">Kualitas</span>
                            <span class="text-gray-900 font-semibold">{{ $batik->category->name ?? 'Batik Tulis' }}</span>
                        </div>
                        {{-- <div class="flex justify-between py-3 border-b border-gray-100">
                            <span class="text-gray-600 font-medium">Milik UMKM</span>
                            <span class="text-gray-900 font-semibold">{{ $batik->umkm->name ?? 'Asli Tanjung Bumi' }}</span>    
                            <span class=" bg-green-100 text-green-700 font-semibold px-3 py-1 rounded-full flex">
                                {{ $batik->umkm->name ?? 'Asli Tanjung Bumi' }}
                                <span class="bg-amber-100 text-amber-700 text-xs font-medium px-2 py-1 rounded-full">
                                    UMKM
                                </span>
                            </span>
                        </div> --}}
                        {{-- <div class="flex justify-between py-3">
                            <span class="text-gray-600 font-medium">Kualitas</span>
                            <span class="text-gray-900 font-semibold">{{ $batik->quality ?? 'Premium' }}</span>
                        </div> --}}
                    </div>
                </div>

                <!-- Care Instructions -->
                <div class="space-y-6">
                    <h3 class="text-lg font-semibold text-gray-900 border-b border-gray-200 pb-2">
                        Petunjuk Perawatan
                    </h3>
                    <div class="space-y-4">
                        <div class="flex items-start space-x-3 p-4 bg-blue-50 rounded-xl">
                            <i class="fas fa-hand-sparkles text-blue-500 mt-1"></i>
                            <div>
                                <h4 class="font-semibold text-gray-900">Cuci dengan Tangan</h4>
                                <p class="text-gray-600 text-sm mt-1">Gunakan air dingin dan deterjen lembut</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-3 p-4 bg-blue-50 rounded-xl">
                            <i class="fas fa-wind text-blue-500 mt-1"></i>
                            <div>
                                <h4 class="font-semibold text-gray-900">Keringkan di Tempat Teduh</h4>
                                <p class="text-gray-600 text-sm mt-1">Hindari sinar matahari langsung</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-3 p-4 bg-blue-50 rounded-xl">
                            <i class="fas fa-tshirt text-blue-500 mt-1"></i>
                            <div>
                                <h4 class="font-semibold text-gray-900">Setrika Suhu Rendah</h4>
                                <p class="text-gray-600 text-sm mt-1">Gunakan kain pelindung saat menyetrika</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Testimonials Section -->
        <div class="bg-gradient-to-br from-blue-50 to-indigo-100 rounded-2xl p-8 lg:p-12 mb-12">
            <div class="text-center mb-12">
                <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-4">
                    Apa <span class="text-blue-600">Kata Mereka</span> Tentang Kami
                </h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    Dipercaya oleh <span class="text-blue-600 font-semibold">ratusan pelanggan</span> yang puas dengan
                    kualitas dan pelayanan kami
                </p>
                <div class="mt-6 inline-flex items-center space-x-2 bg-white px-6 py-3 rounded-full shadow-lg">
                    <div class="flex text-amber-400">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <span class="text-gray-700 font-semibold">4.8/5 dari 287 reviews</span>
                </div>
            </div>

            <!-- Testimonials Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
                <!-- Testimonial 1 -->
                <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <div class="flex text-amber-400 mb-4">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="text-gray-600 mb-6 italic">
                        "Batik yang saya beli kualitasnya luar biasa! Motifnya detail sekali dan bahannya nyaman dipakai.
                        Pengiriman juga cepat."
                    </p>
                    <div class="flex items-center space-x-3">
                        <div
                            class="w-12 h-12 bg-gradient-to-br from-blue-500 to-purple-600 rounded-full flex items-center justify-center text-white font-semibold">
                            D
                        </div>
                        <div>
                            <p class="font-semibold text-gray-900">Dewi Sartika</p>
                            <p class="text-sm text-gray-500">Jakarta</p>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <div class="flex text-amber-400 mb-4">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="text-gray-600 mb-6 italic">
                        "Pelayanannya ramah dan responsive. Batiknya original Tanjung Bumi, bisa dilihat dari detail
                        motifnya. Very recommended!"
                    </p>
                    <div class="flex items-center space-x-3">
                        <div
                            class="w-12 h-12 bg-gradient-to-br from-green-500 to-teal-600 rounded-full flex items-center justify-center text-white font-semibold">
                            A
                        </div>
                        <div>
                            <p class="font-semibold text-gray-900">Andi Pratama</p>
                            <p class="text-sm text-gray-500">Surabaya</p>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <div class="flex text-amber-400 mb-4">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="text-gray-600 mb-6 italic">
                        "Sudah beberapa kali belanja di sini dan selalu puas. Koleksi batiknya unik-unik dan kualitas
                        terjaga. Seller terpercaya!"
                    </p>
                    <div class="flex items-center space-x-3">
                        <div
                            class="w-12 h-12 bg-gradient-to-br from-pink-500 to-rose-600 rounded-full flex items-center justify-center text-white font-semibold">
                            S
                        </div>
                        <div>
                            <p class="font-semibold text-gray-900">Sinta Nurhaliza</p>
                            <p class="text-sm text-gray-500">Bandung</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CTA Section -->
            <div class="text-center bg-white rounded-2xl p-8 shadow-lg">
                <h3 class="text-2xl font-bold text-gray-900 mb-4">
                    Sudah Terbukti Kualitasnya?
                </h3>
                <p class="text-gray-600 mb-6 max-w-2xl mx-auto text-lg">
                    "Jangan ragu lagi! Bergabunglah dengan ratusan pelanggan puas kami dan miliki batik Tanjung Bumi asli
                    dengan kualitas premium. Stok terbatas, pesan sekarang sebelum kehabisan!"
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="#"
                        class="bg-gradient-to-r from-blue-600 to-purple-600 text-white font-semibold px-8 py-4 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 inline-flex items-center space-x-3">
                        <i class="fas fa-shopping-cart"></i>
                        <span>Pesan Sekarang</span>
                    </a>
                    <a href="{{ route('shop.index', $filters) }}"
                        class="border-2 border-blue-500 text-blue-600 font-semibold px-8 py-4 rounded-xl hover:bg-blue-50 transition-all duration-200 inline-flex items-center space-x-3">
                        <i class="fas fa-arrow-left"></i>
                        <span>Lihat Koleksi Lain</span>
                    </a>
                </div>
            </div>
        </div>

        <!-- Related Products -->
        {{-- <div class="mb-16">
            <h2 class="text-2xl font-bold text-gray-900 mb-8 flex items-center">
                <i class="fas fa-th-large text-blue-500 mr-3 text-xl"></i>
                Produk Serupa Lainnya
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                @for ($i = 0; $i < 4; $i++)
                    <div class="bg-white rounded-2xl shadow-md overflow-hidden hover:shadow-xl transition-all duration-300 group">
                        <div class="relative overflow-hidden">
                            <div class="w-full h-48 bg-gradient-to-br from-gray-100 to-gray-200 flex items-center justify-center">
                                <i class="fas fa-image text-gray-400 text-2xl"></i>
                            </div>
                            <div class="absolute top-3 left-3">
                                <span class="bg-blue-500 text-white text-xs font-medium px-2 py-1 rounded">
                                    New
                                </span>
                            </div>
                        </div>
                        <div class="p-4">
                            <h3 class="font-semibold text-gray-900 mb-2 line-clamp-1">Batik Tanjung Bumi Motif Parang</h3>
                            <div class="flex items-center justify-between">
                                <span class="text-blue-600 font-bold">Rp 350.000</span>
                                <span class="text-gray-400 text-sm line-through">Rp 420.000</span>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
        </div> --}}
    </div>
@endsection
