@extends('layouts.app')

@section('hero')
    {{-- Hero Section --}}
    <section class="relative bg-cover bg-center h-64 md:h-80 flex items-center justify-center bg-gray-400 text-white"
        style="background-image: url('/images/bg_shop.png');">
        <div class="text-center max-w-3xl px-4">
            <h1 class="text-2xl md:text-4xl font-bold mb-4">Shop Batik Tanjung Bumi</h1>
            <p class="text-sm md:text-lg mb-6 max-w-3xl mx-auto w-full">
                Temukan koleksi batik Tanjung Bumi dengan desain eksklusif, motif autentik, dan kualitas terbaik.
                Kenyamanan dalam setiap detail dan pesona budaya Indonesia.
            </p>
            {{-- Search Bar --}}
            <form action="{{ route('shop.index') }}" method="GET"
                class="flex items-center bg-white rounded-full overflow-hidden">
                <input type="text" name="q" placeholder="Temukan batik impianmu..."
                    class="px-4 py-2 text-gray-700 w-full focus:outline-none">
                <button type="submit" class="bg-[#1E41FB] text-white px-4 py-3 hover:bg-[#5A71EC] transition">
                    <i class="fas fa-search"></i>
                </button>
            </form>
        </div>
    </section>
@endsection

@section('content')
    {{-- Main Content --}}
    <div class="container mx-auto px-4 py-10 grid grid-cols-1 md:grid-cols-12 gap-8">
        {{-- Sidebar Filter --}}
        <aside class="md:col-span-3 space-y-6">
            <form method="GET" action="{{ route('shop.index') }}">
                {{-- Filter Harga --}}
                <div x-data="priceSlider()" class="space-y-3">
                    <h2 class="font-semibold mb-2">Kisaran Harga</h2>

                    <!-- Range Slider -->
                    <div class="relative">
                        <!-- Min -->
                        <input type="range" min="100000" max="500000" step="10000" x-model="min" @input="updateMin"
                            class="absolute appearance-none w-full h-2 bg-transparent z-10">
                        <!-- Max -->
                        <input type="range" min="100000" max="500000" step="10000" x-model="max" @input="updateMax"
                            class="absolute appearance-none w-full h-2 bg-transparent z-20">

                        <!-- Track -->
                        <div class="h-2 bg-gray-300 rounded relative">
                            <div class="absolute h-2 bg-red-500 rounded"
                                :style="{
                                    left: ((min - 100000) / 400000 * 100) + '%',
                                    right: (100 - (max - 100000) / 400000 * 100) + '%'
                                }">
                            </div>
                        </div>
                    </div>

                    <!-- Output -->
                    <div class="flex justify-between text-sm text-gray-600">
                        <span>Rp <span x-text="min.toLocaleString()"></span></span>
                        <span>Rp <span x-text="max.toLocaleString()"></span></span>
                    </div>

                    <!-- Hidden input buat kirim ke controller -->
                    <input type="hidden" name="min_price" :value="min">
                    <input type="hidden" name="max_price" :value="max">
                </div>

                {{-- Kategori --}}
                <div>
                    <h2 class="font-semibold mb-2 mt-3">Kategori</h2>
                    <ul class="space-y-1 text-sm">
                        <li>
                            <input type="checkbox" name="category[]" value="batik-tulis"
                                {{ in_array('batik-tulis', (array) request('category')) ? 'checked' : '' }}>
                            <label>Batik Tulis</label>
                        </li>
                        <li>
                            <input type="checkbox" name="category[]" value="batik-cap"
                                {{ in_array('batik-cap', (array) request('category')) ? 'checked' : '' }}>
                            <label>Batik Cap</label>
                        </li>
                        <li>
                            <input type="checkbox" name="category[]" value="batik-print"
                                {{ in_array('batik-print', (array) request('category')) ? 'checked' : '' }}>
                            <label>Batik Print</label>
                        </li>
                    </ul>
                </div>

                {{-- Motif / Desain --}}
                <div>
                    <h2 class="font-semibold mb-2 mt-3">Motif / Desain</h2>
                    <ul class="space-y-1 text-sm">
                        <li><input type="checkbox" name="motif[]" value="mega"> Mega Mendung</li>
                        <li><input type="checkbox" name="motif[]" value="parang"> Parang</li>
                        <li><input type="checkbox" name="motif[]" value="flora"> Flora</li>
                    </ul>
                </div>

                {{-- Jenis Kelamin --}}
                <div>
                    <h2 class="font-semibold mb-2 mt-3">Jenis Kelamin</h2>
                    <ul class="space-y-1 text-sm">
                        <li><input type="radio" name="gender" value="pria"
                                {{ request('gender') == 'pria' ? 'checked' : '' }}> Pria</li>
                        <li><input type="radio" name="gender" value="wanita"
                                {{ request('gender') == 'wanita' ? 'checked' : '' }}> Wanita</li>
                        <li><input type="radio" name="gender" value="unisex"
                                {{ request('gender') == 'unisex' ? 'checked' : '' }}> Unisex</li>
                    </ul>
                </div>

                <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600 transition w-full mt-3">
                    Filter
                </button>
            </form>
        </aside>

        {{-- Produk --}}
        <section class="md:col-span-9 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @forelse ($batiks as $batik)
                <div class="bg-white shadow rounded-lg overflow-hidden hover:shadow-lg transition">
                    {{-- Ambil gambar pertama jika ada --}}
                    @if ($batik->media->count() > 0)
                        <img src="{{ asset('storage/' . $batik->media->first()->file_path) }}"
                            alt="{{ $batik->media->first()->alt ?? $batik->title }}"
                            class="w-full h-[300px] object-cover object-top items-center justify-center">
                    @else
                        <img src="{{ asset('images/no-image.png') }}" alt="No Image"
                            class="w-full h-64 object-cover object-top items-center justify-center">
                    @endif

                    <div class="p-4 space-y-2">
                        <h3 class="font-semibold text-gray-800">{{ $batik->title }}</h3>
                        <p class="text-sm text-gray-500">{{ $batik->category->name ?? '-' }}</p>
                        <p class="text-black-600 font-medium flex items-center gap-2">
                            <i class="fas fa-tag text-red-500"></i>Rp {{ number_format($batik->price, 0, ',', '.') }}
                        </p>
                        <a href="{{ route('shop.detail', $batik->slug) }}"
                            class="inline-block w-full text-center bg-green-500 text-white py-2 rounded-lg hover:bg-green-600 transition">
                            Lihat Detail
                        </a>
                    </div>
                </div>
                @empty
                <p class="col-span-3 text-center text-gray-500">Belum ada produk tersedia</p>
                @endforelse
            </section>
        </div>
        {{-- Pagination --}}
        <div class="flex justify-center items-center space-x-2 pb-10 col-span-3">
            {{ $batiks->links('vendor.pagination.custom-tailwind') }}
        </div>

    {{-- Pagination --}}
    {{-- <div class="flex justify-center items-center space-x-2 pb-10">
        <a href="#" class="px-3 py-1 border rounded hover:bg-gray-200">1</a>
        <a href="#" class="px-3 py-1 border rounded bg-gray-800 text-white">2</a>
        <a href="#" class="px-3 py-1 border rounded hover:bg-gray-200">3</a>
        <a href="#" class="px-3 py-1 border rounded hover:bg-gray-200">›</a>
    </div> --}}
@endsection

<script>
    function priceSlider() {
        return {
            min: {{ request('min_price', 100000) }},
            max: {{ request('max_price', 500000) }},
            updateMin() {
                if (this.min > this.max - 10000) this.min = this.max - 10000; // jaga jarak min < max
            },
            updateMax() {
                if (this.max < this.min + 10000) this.max = this.min + 10000; // jaga jarak max > min
            }
        }
    }
</script>
