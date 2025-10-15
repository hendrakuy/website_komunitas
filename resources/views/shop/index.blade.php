@extends('layouts.app')

@section('hero')
    {{-- Modern Hero Section --}}
    <section
        class="relative bg-gradient-to-r from-blue-900 to-purple-800 h-80 md:h-96 flex items-center justify-center overflow-hidden">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-10">
            <div class="absolute inset-0"
                style="background-image: url('data:image/svg+xml,%3Csvg width=\"60\" height=\"60\" viewBox=\"0 0 60 60\" xmlns=\"http://www.w3.org/2000/svg\"%3E%3Cg fill=\"none\" fill-rule=\"evenodd\"%3E%3Cg fill=\"%23ffffff\" fill-opacity=\"0.1\"%3E%3Cpath d=\"M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');">
            </div>
        </div>

        <div class="text-center max-w-4xl px-4 z-10">
            <h1 class="text-3xl md:text-5xl font-bold mb-4 text-white tracking-tight">Koleksi Eksklusif Batik Tanjung Bumi
            </h1>
            <p class="text-lg md:text-xl text-blue-100 mb-8 max-w-3xl mx-auto leading-relaxed">
                Temukan keindahan batik autentik dengan motif tradisional dan kualitas terbaik. Setiap helai kain
                menceritakan warisan budaya Indonesia.
            </p>

            {{-- Modern Search Bar --}}
            <form action="{{ route('shop.index') }}" method="GET" class="max-w-2xl mx-auto">
                <div class="relative flex items-center bg-white rounded-xl shadow-lg overflow-hidden">
                    <div class="pl-4 text-gray-400">
                        <i class="fas fa-search"></i>
                    </div>
                    <input type="text" name="q" value="{{ request('q') }}"
                        placeholder="Cari batik, motif, atau kategori..."
                        class="w-full py-4 px-3 text-gray-700 focus:outline-none placeholder-gray-400">
                    <button type="submit"
                        class="bg-gradient-to-r from-blue-600 to-purple-600 text-white px-6 py-4 hover:from-blue-700 hover:to-purple-700 transition-all duration-300 font-medium">
                        Cari
                    </button>
                </div>
            </form>
        </div>

        <!-- Decorative Elements -->
        <div class="absolute bottom-0 left-0 right-0 h-16 bg-gradient-to-t from-white to-transparent"></div>
    </section>
@endsection

@section('content')
    {{-- Main Content --}}
    <div class="container mx-auto px-4 py-12">
        <div class="flex flex-col md:flex-row gap-8">
            {{-- Modern Sidebar Filter --}}
            <aside class="md:w-80 flex-shrink-0">
                <div class="bg-white rounded-2xl shadow-lg p-6 sticky top-6">
                    <div class="flex justify-between items-center mb-6">
                        <h2 class="text-xl font-bold text-gray-800">Filter Produk</h2>
                        <a href="{{ route('shop.index') }}" class="text-sm text-blue-600 hover:text-blue-800 font-medium">
                            Reset Filter
                        </a>
                    </div>

                    <form method="GET" action="{{ route('shop.index') }}" class="space-y-8">
                        {{-- Filter Harga --}}
                        {{-- <div x-data="priceSlider()" class="space-y-4">
                            <h3 class="font-semibold text-gray-700 flex items-center">
                                <i class="fas fa-tag text-blue-500 mr-2 text-sm"></i>
                                Kisaran Harga
                            </h3>

                            <div class="pt-2">
                                <div class="relative h-8">
                                    <!-- Track -->
                                    <div class="h-2 bg-gray-200 rounded-full relative">
                                        <div class="absolute h-2 bg-gradient-to-r from-blue-500 to-purple-500 rounded-full"
                                            :style="{
                                                left: ((min - 100000) / 400000 * 100) + '%',
                                                right: (100 - (max - 100000) / 400000 * 100) + '%'
                                            }">
                                        </div>
                                    </div>

                                    <!-- Min Slider -->
                                    <input type="range" min="100000" max="500000" step="10000" x-model="min"
                                        @input="updateMin" @mousedown="active = 'min'"
                                        class="absolute top-0 w-full h-2 opacity-0 cursor-pointer appearance-none"
                                        style="z-index: 1;">

                                    <!-- Max Slider -->
                                    <input type="range" min="100000" max="500000" step="10000" x-model="max"
                                        @input="updateMax" @mousedown="active = 'max'"
                                        class="absolute top-0 w-full h-2 opacity-0 cursor-pointer appearance-none"
                                        style="z-index: 1;">

                                    <!-- Slider Handles -->
                                    <div class="absolute top-0 w-full h-2 pointer-events-none">
                                        <div class="absolute w-4 h-4 bg-white border-2 border-blue-500 rounded-full shadow -mt-1 transform -translate-x-1/2"
                                            :style="{ left: ((min - 100000) / 400000 * 100) + '%' }"></div>
                                        <div class="absolute w-4 h-4 bg-white border-2 border-purple-500 rounded-full shadow -mt-1 transform -translate-x-1/2"
                                            :style="{ left: ((max - 100000) / 400000 * 100) + '%' }"></div>
                                    </div>
                                </div>

                                <div class="flex justify-between text-sm text-gray-600 mt-4">
                                    <span class="bg-gray-100 px-3 py-1 rounded-lg">Rp <span
                                            x-text="min.toLocaleString()"></span></span>
                                    <span class="bg-gray-100 px-3 py-1 rounded-lg">Rp <span
                                            x-text="max.toLocaleString()"></span></span>
                                </div>
                                <input type="hidden" name="min_price" :value="min">
                                <input type="hidden" name="max_price" :value="max">
                            </div>
                        </div> --}}

                        <!-- Kategori -->
                        <div>
                            <h3 class="font-semibold text-gray-700 mb-3 flex items-center">
                                <i class="fas fa-list-alt text-blue-500 mr-2 text-sm"></i>
                                Kategori
                            </h3>
                            <ul class="space-y-2">
                                @foreach ($categories as $category)
                                    <li>
                                        <label class="flex items-center space-x-3 cursor-pointer group">
                                            <input type="checkbox" name="category[]" value="{{ $category->slug }}"
                                                {{ in_array($category->slug, (array) request('category')) ? 'checked' : '' }}
                                                class="rounded text-blue-600 focus:ring-blue-500">
                                            <span
                                                class="text-gray-700 group-hover:text-blue-600 transition-colors">{{ $category->name }}</span>
                                        </label>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                        {{-- Motif / Desain --}}
                        {{-- <div>
                            <h3 class="font-semibold text-gray-700 mb-3 flex items-center">
                                <i class="fas fa-palette text-blue-500 mr-2 text-sm"></i>
                                Motif / Desain
                            </h3>
                            <ul class="space-y-2">
                                <li>
                                    <label class="flex items-center space-x-3 cursor-pointer group">
                                        <input type="checkbox" name="motif[]" value="mega" 
                                            {{ in_array('mega', (array) request('motif')) ? 'checked' : '' }}
                                            class="rounded text-blue-600 focus:ring-blue-500">
                                        <span class="text-gray-700 group-hover:text-blue-600 transition-colors">Mega Mendung</span>
                                    </label>
                                </li>
                                <li>
                                    <label class="flex items-center space-x-3 cursor-pointer group">
                                        <input type="checkbox" name="motif[]" value="parang" 
                                            {{ in_array('parang', (array) request('motif')) ? 'checked' : '' }}
                                            class="rounded text-blue-600 focus:ring-blue-500">
                                        <span class="text-gray-700 group-hover:text-blue-600 transition-colors">Parang</span>
                                    </label>
                                </li>
                                <li>
                                    <label class="flex items-center space-x-3 cursor-pointer group">
                                        <input type="checkbox" name="motif[]" value="flora" 
                                            {{ in_array('flora', (array) request('motif')) ? 'checked' : '' }}
                                            class="rounded text-blue-600 focus:ring-blue-500">
                                        <span class="text-gray-700 group-hover:text-blue-600 transition-colors">Flora</span>
                                    </label>
                                </li>
                            </ul>
                        </div> --}}

                        <button type="submit"
                            class="w-full bg-gradient-to-r from-blue-600 to-purple-600 text-white py-3 rounded-xl font-medium hover:from-blue-700 hover:to-purple-700 transition-all duration-300 shadow-md hover:shadow-lg">
                            Terapkan Filter
                        </button>
                    </form>
                </div>
            </aside>

            {{-- Product Grid --}}
            <section class="flex-1">
                {{-- Header with Results and Sort --}}
                <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-8 gap-4">
                    <div>
                        <h2 class="text-2xl font-bold text-gray-800">Koleksi Batik Kami</h2>
                        <p class="text-gray-600 mt-1">{{ $batiks->total() }} produk ditemukan</p>
                    </div>

                    <div class="flex items-center space-x-4">
                        <span class="text-gray-700 font-medium">Urutkan:</span>
                        <select
                            class="border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                            <option>Terbaru</option>
                            <option>Harga Terendah</option>
                            <option>Harga Tertinggi</option>
                            <option>Nama A-Z</option>
                        </select>
                    </div>
                </div>

                {{-- Product Cards --}}
                @if ($batiks->count() > 0)
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                        @foreach ($batiks as $batik)
                            <div
                                class="bg-white rounded-2xl shadow-md overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 group">
                                <div class="relative overflow-hidden">
                                    {{-- Product Image --}}
                                    @if (!empty($batik->image))
                                        <img src="{{ asset('storage/' . $batik->image) }}" alt="{{ $batik->title }}"
                                            class="w-full h-64 object-cover group-hover:scale-105 transition-transform duration-500">
                                    @else
                                        <div class="w-full h-64 bg-gray-200 flex items-center justify-center">
                                            <i class="fas fa-image text-gray-400 text-4xl"></i>
                                        </div>
                                    @endif

                                    {{-- Category Badge --}}
                                    <div class="absolute top-4 left-4">
                                        <span class="bg-blue-500 text-white text-xs font-medium px-3 py-1 rounded-full">
                                            {{ $batik->category->name ?? 'Batik' }}
                                        </span>
                                    </div>

                                    {{-- Quick Action Overlay --}}
                                    <div
                                        class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-20 transition-all duration-300 flex items-center justify-center opacity-0 group-hover:opacity-100">
                                        <a href="{{ route('shop.detail', $batik->slug) }}"
                                            class="bg-white text-blue-600 px-4 py-2 rounded-lg font-medium transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300 shadow-md">
                                            Lihat Detail
                                        </a>
                                    </div>
                                </div>

                                <div class="p-5">
                                    <h3 class="font-bold text-gray-800 text-lg mb-2 line-clamp-1">{{ $batik->title }}</h3>

                                    @if (!empty($batik->description))
                                        <p class="text-gray-600 text-sm mb-4 line-clamp-2">{{ $batik->description }}</p>
                                    @endif

                                    <div class="flex justify-between items-center">
                                        <div class="text-blue-600 font-bold text-xl">
                                            Rp {{ number_format($batik->price, 0, ',', '.') }}
                                        </div>

                                        <div class="flex space-x-2">
                                            @if ($batik->specs && is_array($batik->specs))
                                                @if (isset($batik->specs['material']))
                                                    <span class="bg-gray-100 text-gray-700 text-xs px-2 py-1 rounded">
                                                        {{ $batik->specs['material'] }}
                                                    </span>
                                                @endif

                                                @if (isset($batik->specs['size']))
                                                    <span class="bg-gray-100 text-gray-700 text-xs px-2 py-1 rounded">
                                                        {{ $batik->specs['size'] }}
                                                    </span>
                                                @endif
                                            @endif
                                        </div>
                                    </div>

                                    <a href="{{ route('shop.detail', $batik->slug) }}"
                                        class="mt-4 w-full bg-gradient-to-r from-blue-500 to-purple-500 text-white text-center py-3 rounded-lg font-medium hover:from-blue-600 hover:to-purple-600 transition-all duration-300 block shadow-md hover:shadow-lg">
                                        Beli Sekarang
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    {{-- Empty State --}}
                    <div class="bg-white rounded-2xl shadow-md p-12 text-center">
                        <div class="max-w-md mx-auto">
                            <i class="fas fa-search text-gray-400 text-6xl mb-6"></i>
                            <h3 class="text-2xl font-bold text-gray-700 mb-4">Produk Tidak Ditemukan</h3>
                            <p class="text-gray-600 mb-8">
                                Maaf, tidak ada produk yang sesuai dengan filter pencarian Anda. Coba ubah kriteria
                                pencarian atau lihat semua produk.
                            </p>
                            <a href="{{ route('shop.index') }}"
                                class="bg-gradient-to-r from-blue-600 to-purple-600 text-white px-6 py-3 rounded-lg font-medium hover:from-blue-700 hover:to-purple-700 transition-all duration-300 inline-block">
                                Lihat Semua Produk
                            </a>
                        </div>
                    </div>
                @endif

                {{-- Pagination --}}
                @if ($batiks->hasPages())
                    <div class="mt-12 flex justify-center">
                        {{ $batiks->links('vendor.pagination.custom-tailwind') }}
                    </div>
                @endif
            </section>
        </div>
    </div>
@endsection

<script>
    function priceSlider() {
        return {
            min: {{ request('min_price', 100000) }},
            max: {{ request('max_price', 500000) }},
            active: null,
            updateMin() {
                if (this.min > this.max - 10000) {
                    this.min = this.max - 10000; // Cegah min > max
                }
                if (this.min < 100000) {
                    this.min = 100000;
                }
            },
            updateMax() {
                if (this.max < this.min + 10000) {
                    this.max = this.min + 10000; // Cegah max < min
                }
                if (this.max > 500000) {
                    this.max = 500000;
                }
            },
            init() {
                // Tambahkan listener untuk update z-index dinamis
                this.$watch('min', () => this.updateZIndex());
                this.$watch('max', () => this.updateZIndex());
            },
            updateZIndex() {
                // Logika sederhana: Jika min dan max dekat, prioritaskan yang active
                const minInput = this.$el.querySelector('input[x-model="min"]');
                const maxInput = this.$el.querySelector('input[x-model="max"]');
                if (Math.abs(this.min - this.max) < 20000) { // Jika terlalu dekat
                    if (this.active === 'min') {
                        minInput.style.zIndex = 3;
                        maxInput.style.zIndex = 2;
                    } else {
                        minInput.style.zIndex = 2;
                        maxInput.style.zIndex = 3;
                    }
                } else {
                    minInput.style.zIndex = 1;
                    maxInput.style.zIndex = 1;
                }
            }
        }
    }
</script>
