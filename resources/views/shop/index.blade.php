@extends('layouts.app')

@section('title', 'Batik Paseseh - Shop')

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
            <p class="text-md md:text-lg text-blue-100 mb-8 max-w-3xl mx-auto leading-relaxed">
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
                        placeholder="Cari batik ..."
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
                <div class="bg-white rounded-2xl shadow-lg p-6 sticky top-24">
                    <div class="flex justify-between items-center mb-6">
                        <h2 class="text-xl font-bold text-gray-800">Filter Produk</h2>
                        <a href="{{ route('shop.index') }}" class="text-sm text-blue-600 hover:text-blue-800 font-medium">
                            Reset Filter
                        </a>
                    </div>

                    <form method="GET" action="{{ route('shop.index') }}" class="space-y-8" x-data="filterForm()">
                        <!-- Filter Harga -->
                        <div x-data="priceRange()" x-init="init()">
                            <h3 class="font-semibold text-gray-700 mb-3 flex items-center">
                                <i class="fas fa-tags text-blue-500 mr-2 text-sm"></i> Filter Harga
                            </h3>

                            <div class="space-y-3">
                                <!-- Label harga -->
                                <div class="flex justify-between text-sm text-gray-600">
                                    <span x-text="formatPrice(min)"></span>
                                    <span x-text="formatPrice(max)"></span>
                                </div>

                                <!-- Slider Container -->
                                <div class="relative h-8">
                                    <!-- Track Background -->
                                    <div class="absolute top-3 h-2 w-full bg-gray-200 rounded-lg"></div>

                                    <!-- Active Track -->
                                    <div class="absolute top-3 h-2 bg-blue-500 rounded-lg"
                                        :style="`left:${(min/minLimit)*100}%; right:${100-(max/maxLimit)*100}%`"></div>

                                    <!-- Min Thumb -->
                                    <input type="range" x-model="min" :min="minLimit" :max="maxLimit"
                                        :step="step"
                                        @input="updateMin($event.target.value); $parent.priceChanged = true"
                                        class="absolute w-full h-2 top-3 appearance-none bg-transparent pointer-events-none [&::-webkit-slider-thumb]:appearance-none [&::-webkit-slider-thumb]:h-4 [&::-webkit-slider-thumb]:w-4 [&::-webkit-slider-thumb]:rounded-full [&::-webkit-slider-thumb]:bg-blue-500 [&::-webkit-slider-thumb]:cursor-pointer [&::-webkit-slider-thumb]:pointer-events-auto [&::-webkit-slider-thumb]:border-2 [&::-webkit-slider-thumb]:border-white [&::-webkit-slider-thumb]:shadow-lg [&::-moz-range-thumb]:h-4 [&::-moz-range-thumb]:w-4 [&::-moz-range-thumb]:rounded-full [&::-moz-range-thumb]:bg-blue-500 [&::-moz-range-thumb]:cursor-pointer [&::-moz-range-thumb]:pointer-events-auto [&::-moz-range-thumb]:border-2 [&::-moz-range-thumb]:border-white [&::-moz-range-thumb]:shadow-lg">

                                    <!-- Max Thumb -->
                                    <input type="range" x-model="max" :min="minLimit" :max="maxLimit"
                                        :step="step"
                                        @input="updateMax($event.target.value); $parent.priceChanged = true"
                                        class="absolute w-full h-2 top-3 appearance-none bg-transparent pointer-events-none [&::-webkit-slider-thumb]:appearance-none [&::-webkit-slider-thumb]:h-4 [&::-webkit-slider-thumb]:w-4 [&::-webkit-slider-thumb]:rounded-full [&::-webkit-slider-thumb]:bg-blue-500 [&::-webkit-slider-thumb]:cursor-pointer [&::-webkit-slider-thumb]:pointer-events-auto [&::-webkit-slider-thumb]:border-2 [&::-webkit-slider-thumb]:border-white [&::-webkit-slider-thumb]:shadow-lg [&::-moz-range-thumb]:h-4 [&::-moz-range-thumb]:w-4 [&::-moz-range-thumb]:rounded-full [&::-moz-range-thumb]:bg-blue-500 [&::-moz-range-thumb]:cursor-pointer [&::-moz-range-thumb]:pointer-events-auto [&::-moz-range-thumb]:border-2 [&::-moz-range-thumb]:border-white [&::-moz-range-thumb]:shadow-lg">
                                </div>

                                <!-- Hidden input buat kirim ke server (hanya jika harga diubah) -->
                                <template x-if="shouldIncludePriceFilter()">
                                    <div>
                                        <input type="hidden" name="min_price" :value="min">
                                        <input type="hidden" name="max_price" :value="max">
                                    </div>
                                </template>
                            </div>
                        </div>

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

                        {{-- Tombol submit --}}
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

                    <form method="GET" action="{{ route('shop.index') }}" class="flex items-center space-x-4">
                        <!-- Preserve existing filters -->
                        @foreach (request()->except('sort') as $key => $value)
                            @if (is_array($value))
                                @foreach ($value as $item)
                                    <input type="hidden" name="{{ $key }}[]" value="{{ $item }}">
                                @endforeach
                            @else
                                <input type="hidden" name="{{ $key }}" value="{{ $value }}">
                            @endif
                        @endforeach

                        <span class="text-gray-700 font-medium">Urutkan:</span>
                        <select name="sort" onchange="this.form.submit()"
                            class="border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                            <option value="latest" {{ request('sort') == 'latest' ? 'selected' : '' }}>Terbaru</option>
                            <option value="price_low" {{ request('sort') == 'price_low' ? 'selected' : '' }}>Harga Terendah
                            </option>
                            <option value="price_high" {{ request('sort') == 'price_high' ? 'selected' : '' }}>Harga
                                Tertinggi</option>
                            {{-- <option value="name_asc" {{ request('sort') == 'name_asc' ? 'selected' : '' }}>Nama A-Z
                            </option> --}}
                        </select>
                    </form>
                </div>

                {{-- Product Cards --}}
                @if ($batiks->count() > 0)
                    <div class="grid grid-cols-2 sm:grid-cols-2 lg:grid-cols-3 gap-3 sm:gap-4 lg:gap-6">
                        @foreach ($batiks as $batik)
                            <div
                                class="bg-white rounded-xl sm:rounded-2xl shadow-sm sm:shadow-md overflow-hidden hover:shadow-lg sm:hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 group">
                                <div class="relative overflow-hidden">
                                    {{-- Product Image --}}
                                    @if (!empty($batik->image))
                                        <img src="{{ asset('storage/' . $batik->image) }}" alt="{{ $batik->title }}"
                                            class="w-full h-40 sm:h-48 lg:h-64 object-cover group-hover:scale-105 transition-transform duration-500">
                                    @else
                                        <div
                                            class="w-full h-40 sm:h-48 lg:h-64 bg-gray-100 flex items-center justify-center">
                                            <i class="fas fa-image text-gray-300 text-2xl sm:text-4xl"></i>
                                        </div>
                                    @endif

                                    {{-- Category Badge --}}
                                    <div class="absolute top-2 sm:top-4 left-2 sm:left-4">
                                        <span class="bg-blue-500 text-white text-xs px-2 py-1 rounded-full">
                                            {{ $batik->category->name ?? 'Batik' }}
                                        </span>
                                    </div>

                                    {{-- Quick Action Overlay --}}
                                    <div
                                        class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-20 transition-all duration-300 flex items-center justify-center opacity-0 group-hover:opacity-100">
                                        <a href="{{ route('shop.detail', $batik->slug) }}@if (request()->query()) ?{{ http_build_query(request()->query()) }} @endif"
                                            class="bg-white text-blue-600 px-3 py-1 sm:px-4 sm:py-2 rounded-lg font-medium transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300 shadow-md text-xs sm:text-sm">
                                            Lihat Detail
                                        </a>
                                    </div>
                                </div>

                                <div class="p-3 sm:p-4 lg:p-5">
                                    <h3
                                        class="font-bold text-gray-800 text-sm sm:text-base lg:text-lg mb-1 sm:mb-2 line-clamp-1">
                                        {{ $batik->title }}</h3>

                                    @if (!empty($batik->description))
                                        <p
                                            class="text-gray-600 text-xs sm:text-sm mb-2 sm:mb-4 line-clamp-2 leading-tight sm:leading-relaxed">
                                            {{ $batik->description }}</p>
                                    @endif

                                    <div
                                        class="flex flex-col sm:flex-row sm:justify-between sm:items-center space-y-2 sm:space-y-0">
                                        <div class="text-blue-600 font-bold text-base sm:text-lg lg:text-xl">
                                            Rp {{ number_format($batik->price, 0, ',', '.') }}
                                        </div>

                                        <div class="flex space-x-1 sm:space-x-2">
                                            @if ($batik->specs && is_array($batik->specs))
                                                @if (isset($batik->specs['material']))
                                                    <span
                                                        class="bg-gray-100 text-gray-700 text-xs px-1.5 py-0.5 sm:px-2 sm:py-1 rounded truncate max-w-20 sm:max-w-none">
                                                        {{ $batik->specs['material'] }}
                                                    </span>
                                                @endif

                                                @if (isset($batik->specs['size']))
                                                    <span
                                                        class="bg-gray-100 text-gray-700 text-xs px-1.5 py-0.5 sm:px-2 sm:py-1 rounded truncate max-w-16 sm:max-w-none">
                                                        {{ $batik->specs['size'] }}
                                                    </span>
                                                @endif
                                            @endif
                                        </div>
                                    </div>

                                    <a href="{{ route('shop.detail', $batik->slug) }}@if (request()->query()) ?{{ http_build_query(request()->query()) }} @endif"
                                        class="mt-2 sm:mt-4 w-full bg-gradient-to-r from-blue-500 to-purple-500 text-white text-center py-2 sm:py-3 rounded-lg font-medium hover:from-blue-600 hover:to-purple-600 transition-all duration-300 block shadow-md hover:shadow-lg text-xs sm:text-sm">
                                        Beli Sekarang
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    {{-- Empty State --}}
                    <div class="bg-white rounded-xl sm:rounded-2xl shadow-sm sm:shadow-md p-6 sm:p-8 lg:p-12 text-center">
                        <div class="max-w-md mx-auto">
                            <i class="fas fa-search text-gray-300 text-4xl sm:text-6xl mb-4 sm:mb-6"></i>
                            <h3 class="text-lg sm:text-xl lg:text-2xl font-bold text-gray-700 mb-3 sm:mb-4">Produk Tidak
                                Ditemukan</h3>
                            <p class="text-gray-500 text-sm sm:text-base mb-6 sm:mb-8 leading-relaxed">
                                Maaf, tidak ada produk yang sesuai dengan filter pencarian Anda. Coba ubah kriteria
                                pencarian atau lihat semua produk.
                            </p>
                            <a href="{{ route('shop.index') }}"
                                class="bg-gradient-to-r from-blue-600 to-purple-600 text-white px-4 py-2 sm:px-6 sm:py-3 rounded-lg font-medium hover:from-blue-700 hover:to-purple-700 transition-all duration-300 inline-block text-sm sm:text-base">
                                Lihat Semua Produk
                            </a>
                        </div>
                    </div>
                @endif

                {{-- Pagination --}}
                @if ($batiks->hasPages())
                    <div class="mt-12 flex justify-center">
                        {{ $batiks->appends(request()->query())->links('vendor.pagination.custom-tailwind') }}
                    </div>
                @endif
            </section>
        </div>
    </div>
@endsection

{{-- Custom JS --}}
<script>
    function filterForm() {
        return {
            priceChanged: false,
            originalMin: {{ request('min_price', 230000) }},
            originalMax: {{ request('max_price', 7000000) }},

            init() {
                // Cek apakah harga sudah diubah dari nilai default
                this.priceChanged = this.originalMin !== 230000 || this.originalMax !== 7000000;
            },
        }
    }

    function priceRange() {
        return {
            min: {{ request('min_price', 230000) }},
            max: {{ request('max_price', 7000000) }},
            minLimit: 230000,
            maxLimit: 7000000,
            step: 10000,
            defaultMin: 230000,
            defaultMax: 7000000,

            init() {
                // Pastikan min tidak lebih besar dari max
                if (this.min > this.max) {
                    this.min = this.max - this.step;
                }

                // Pastikan nilai berada dalam batas yang ditentukan
                this.min = Math.max(this.min, this.minLimit);
                this.max = Math.min(this.max, this.maxLimit);
            },

            updateMin(value) {
                const newMin = parseInt(value);
                if (newMin <= this.max) {
                    this.min = newMin;
                } else {
                    this.min = this.max - this.step;
                }
            },

            updateMax(value) {
                const newMax = parseInt(value);
                if (newMax >= this.min) {
                    this.max = newMax;
                } else {
                    this.max = this.min + this.step;
                }
            },

            formatPrice(value) {
                return 'Rp' + value.toLocaleString('id-ID');
            },

            isPriceChanged() {
                return this.min !== this.defaultMin || this.max !== this.defaultMax;
            },

            shouldIncludePriceFilter() {
                return this.isPriceChanged();
            }
        }
    }
</script>
