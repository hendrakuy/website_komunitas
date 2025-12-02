@extends('layouts.app')

@section('title', $batik->title . ' - Batik Paseseh')

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
                    {{-- <span class="text-gray-600 font-medium truncate max-w-[150px] sm:max-w-xs">{{ $batik->title }}</span> --}}
                    <span
                        class="text-sm font-medium text-gray-600
                                    block max-w-[185px] truncate sm:max-w-none sm:whitespace-normal">
                        {{ $batik->title }}
                    </span>
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
        <div class="bg-white rounded-2xl shadow-lg p-4 sm:p-6 lg:p-8 mb-16">
            <h2 class="text-xl sm:text-2xl font-bold text-gray-900 mb-6 sm:mb-8 flex items-center">
                <i class="fas fa-info-circle text-blue-500 mr-2 sm:mr-3 text-lg sm:text-xl"></i>
                Informasi Detail Produk
            </h2>

            <!-- Tabs Navigation (Mobile Only) -->
            <div class="flex gap-2 mb-6 md:hidden">
                <button onclick="switchTab('specifications')" id="tab-specifications"
                    class="flex-1 py-3 px-4 rounded-xl font-semibold text-sm transition-all duration-300 bg-blue-500 text-white">
                    <i class="fas fa-list-ul mr-2"></i>
                    Spesifikasi
                </button>
                <button onclick="switchTab('care')" id="tab-care"
                    class="flex-1 py-3 px-4 rounded-xl font-semibold text-sm transition-all duration-300 bg-gray-100 text-gray-600">
                    <i class="fas fa-heart mr-2"></i>
                    Perawatan
                </button>
            </div>

            <!-- Content Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 sm:gap-8">
                <!-- Specifications -->
                <div id="content-specifications" class="space-y-6">
                    <h3
                        class="text-base sm:text-lg font-semibold text-gray-900 border-b border-gray-200 pb-2 hidden md:block">
                        Spesifikasi Produk
                    </h3>
                    <div class="space-y-3 sm:space-y-4">
                        <div class="flex justify-between py-2 sm:py-3 border-b border-gray-100">
                            <span class="text-gray-600 font-medium text-sm sm:text-base">Nama Produk</span>
                            <span
                                class="text-gray-900 font-semibold text-sm sm:text-base text-right ml-4">{{ $batik->title }}</span>
                        </div>
                        <div class="flex justify-between py-2 sm:py-3 border-b border-gray-100 items-start">
                            <span class="text-gray-600 font-medium text-sm sm:text-base">Bahan Material</span>
                            <div class="flex flex-wrap justify-end max-w-[60%] sm:max-w-[70%]">
                                <span
                                    class="bg-blue-100 text-blue-800 text-xs sm:text-sm px-2 sm:px-2.5 py-0.5 sm:py-1 rounded-full font-medium ml-1 sm:ml-2 mb-1 sm:mb-2">
                                    {{ $batik->material }}
                                </span>
                            </div>
                        </div>
                        <div class="flex justify-between py-2 sm:py-3 border-b border-gray-100">
                            <span class="text-gray-600 font-medium text-sm sm:text-base">Tema Motif</span>
                            <span
                                class="text-gray-900 font-semibold text-sm sm:text-base text-right ml-4">{{ $batik->title }}</span>
                        </div>
                        <div class="flex justify-between py-2 sm:py-3 border-b border-gray-100">
                            <span class="text-gray-600 font-medium text-sm sm:text-base">Ukuran Tersedia</span>
                            <span class="text-gray-900 font-semibold text-sm sm:text-base">{{ $batik->size }}</span>
                        </div>
                        <div class="flex justify-between py-2 sm:py-3">
                            <span class="text-gray-600 font-medium text-sm sm:text-base">Kualitas</span>
                            <span
                                class="text-gray-900 font-semibold text-sm sm:text-base">{{ $batik->category->name ?? 'Batik Tulis' }}</span>
                        </div>
                    </div>
                </div>

                <!-- Care Instructions -->
                <div id="content-care" class="space-y-6 hidden md:block">
                    <h3
                        class="text-base sm:text-lg font-semibold text-gray-900 border-b border-gray-200 pb-2 hidden md:block">
                        Petunjuk Perawatan
                    </h3>
                    <div class="space-y-3 sm:space-y-4">
                        <div class="flex items-start space-x-3 p-3 sm:p-4 bg-blue-50 rounded-xl">
                            <i class="fas fa-hand-sparkles text-blue-500 mt-1 text-sm sm:text-base"></i>
                            <div>
                                <h4 class="font-semibold text-gray-900 text-sm sm:text-base">Cuci dengan Tangan</h4>
                                <p class="text-gray-600 text-xs sm:text-sm mt-1">Gunakan air dingin dan deterjen lembut</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-3 p-3 sm:p-4 bg-blue-50 rounded-xl">
                            <i class="fas fa-wind text-blue-500 mt-1 text-sm sm:text-base"></i>
                            <div>
                                <h4 class="font-semibold text-gray-900 text-sm sm:text-base">Keringkan di Tempat Teduh</h4>
                                <p class="text-gray-600 text-xs sm:text-sm mt-1">Hindari sinar matahari langsung</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-3 p-3 sm:p-4 bg-blue-50 rounded-xl">
                            <i class="fas fa-tshirt text-blue-500 mt-1 text-sm sm:text-base"></i>
                            <div>
                                <h4 class="font-semibold text-gray-900 text-sm sm:text-base">Setrika Suhu Rendah</h4>
                                <p class="text-gray-600 text-xs sm:text-sm mt-1">Gunakan kain pelindung saat menyetrika</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-3 p-3 sm:p-4 bg-blue-50 rounded-xl">
                            <i class="fas fa-droplet text-blue-500 mt-1 text-sm sm:text-base"></i>
                            <div>
                                <h4 class="font-semibold text-gray-900 text-sm sm:text-base">Hindari Pemutih</h4>
                                <p class="text-gray-600 text-xs sm:text-sm mt-1">Jangan gunakan bahan kimia keras</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            function switchTab(tabName) {
                // Update button styles
                const allTabs = ['specifications', 'care'];
                allTabs.forEach(tab => {
                    const button = document.getElementById(`tab-${tab}`);
                    const content = document.getElementById(`content-${tab}`);

                    if (tab === tabName) {
                        button.classList.remove('bg-gray-100', 'text-gray-600');
                        button.classList.add('bg-blue-500', 'text-white');
                        content.classList.remove('hidden');
                    } else {
                        button.classList.remove('bg-blue-500', 'text-white');
                        button.classList.add('bg-gray-100', 'text-gray-600');
                        content.classList.add('hidden');
                    }
                });
            }
        </script>

        <!-- Why Choose Us Section -->
        <div class="bg-gradient-to-br from-blue-50 to-indigo-100 rounded-2xl p-6 sm:p-8 lg:p-12 mb-12">
            <div class="text-center mb-8 sm:mb-12">
                <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-gray-900 mb-3 sm:mb-4 px-2">
                    Mengapa Memilih <span class="text-blue-600">Batik Kami?</span>
                </h2>
                <p class="text-base sm:text-lg text-gray-600 max-w-2xl mx-auto px-4">
                    Dipercaya oleh <span class="text-blue-600 font-semibold">ratusan pelanggan</span> untuk kualitas dan
                    keaslian batik Tanjung Bumi
                </p>
                <div
                    class="mt-4 sm:mt-6 inline-flex items-center space-x-2 bg-white px-4 sm:px-6 py-2 sm:py-3 rounded-full shadow-lg">
                    <div class="flex text-amber-400 text-sm sm:text-base">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <span class="text-gray-700 font-semibold text-sm sm:text-base">4.8/5</span>
                </div>
            </div>

            <!-- Features Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6 mb-6 sm:mb-8">
                <!-- Feature 1 -->
                <div
                    class="bg-white rounded-xl sm:rounded-2xl p-5 sm:p-6 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                    <div
                        class="w-12 h-12 sm:w-14 sm:h-14 bg-gradient-to-br from-blue-500 to-purple-600 rounded-xl flex items-center justify-center mb-4 mx-auto">
                        <i class="fas fa-certificate text-xl sm:text-2xl text-white"></i>
                    </div>
                    <h3 class="font-bold text-gray-900 text-base sm:text-lg mb-2 text-center">Kualitas Premium</h3>
                    <p class="text-gray-600 text-sm sm:text-base text-center">
                        Batik tulis dan cap asli dengan motif khas Tanjung Bumi yang detail dan berkualitas tinggi
                    </p>
                </div>

                <!-- Feature 2 -->
                <div
                    class="bg-white rounded-xl sm:rounded-2xl p-5 sm:p-6 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                    <div
                        class="w-12 h-12 sm:w-14 sm:h-14 bg-gradient-to-br from-green-500 to-teal-600 rounded-xl flex items-center justify-center mb-4 mx-auto">
                        <i class="fas fa-hand-holding-heart text-xl sm:text-2xl text-white"></i>
                    </div>
                    <h3 class="font-bold text-gray-900 text-base sm:text-lg mb-2 text-center">Warisan Budaya</h3>
                    <p class="text-gray-600 text-sm sm:text-base text-center">
                        Setiap pembelian mendukung pelestarian budaya dan pemberdayaan pengrajin lokal Kampung Batik Paseseh
                    </p>
                </div>

                <!-- Feature 3 -->
                <div
                    class="bg-white rounded-xl sm:rounded-2xl p-5 sm:p-6 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                    <div
                        class="w-12 h-12 sm:w-14 sm:h-14 bg-gradient-to-br from-pink-500 to-rose-600 rounded-xl flex items-center justify-center mb-4 mx-auto">
                        <i class="fas fa-shield-alt text-xl sm:text-2xl text-white"></i>
                    </div>
                    <h3 class="font-bold text-gray-900 text-base sm:text-lg mb-2 text-center">Terpercaya</h3>
                    <p class="text-gray-600 text-sm sm:text-base text-center">
                        Pengalaman lebih dari 25 tahun dalam produksi batik dengan standar kualitas yang terjaga
                    </p>
                </div>
            </div>

            <!-- CTA Section -->
            <div class="text-center bg-white rounded-xl sm:rounded-2xl p-6 sm:p-8 shadow-lg">
                <h3 class="text-xl sm:text-2xl font-bold text-gray-900 mb-3 sm:mb-4 px-2">
                    Tertarik dengan Produk Kami?
                </h3>
                <p class="text-gray-600 mb-5 sm:mb-6 max-w-2xl mx-auto text-sm sm:text-base lg:text-lg px-4">
                    Jelajahi koleksi batik Tanjung Bumi lainnya dan temukan motif yang sesuai dengan gaya Anda. Setiap
                    produk adalah karya seni yang dibuat dengan penuh dedikasi.
                </p>
                <div class="flex flex-col sm:flex-row gap-3 sm:gap-4 justify-center px-4">
                    <a href="{{ route('shop.index', $filters) }}"
                        class="bg-gradient-to-r from-blue-600 to-purple-600 text-white font-semibold px-6 sm:px-8 py-3 sm:py-4 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 inline-flex items-center justify-center space-x-2 sm:space-x-3 text-sm sm:text-base">
                        {{-- <i class="fas fa-th"></i> --}}
                        <i class="fas fa-shop"></i>
                        <span>Lihat Koleksi Lainnya</span>
                    </a>
                    <a href="{{ route('aboutus') }}"
                        class="border-2 border-blue-500 text-blue-600 font-semibold px-6 sm:px-8 py-3 sm:py-4 rounded-xl hover:bg-blue-50 transition-all duration-200 inline-flex items-center justify-center space-x-2 sm:space-x-3 text-sm sm:text-base">
                        <i class="fas fa-info-circle"></i>
                        <span>Tentang Kami</span>
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
