@extends('layouts.app')

@section('title', 'Batik Paseseh - Perjalanan')

@section('hero')
    <section class="relative overflow-hidden bg-cover bg-center bg-no-repeat"
        style="background-image: url('{{ asset('images/Bg_Aboutus.png') }}');">

        <div class="absolute inset-0 bg-black bg-opacity-50"></div>

        <div class="relative container mx-auto px-4 sm:px-6 lg:px-8 py-20 sm:py-24 lg:py-32 text-center text-white">
            <div class="max-w-4xl mx-auto" data-aos="fade-up">
                <h1 class="text-3xl sm:text-4xl md:text-6xl font-bold mb-3 sm:mb-4 leading-tight">
                    Perjalanan Dunia Komunitas
                </h1>
                <h2 class="text-lg sm:text-xl md:text-2xl font-light mb-5 sm:mb-6 opacity-90">
                    Kampung Batik Paseseh
                </h2>
                <div class="w-20 sm:w-28 md:w-32 h-1 bg-gradient-to-r from-yellow-400 to-orange-500 mx-auto rounded-full">
                </div>
            </div>
        </div>

        <div class="absolute bottom-0 left-0 right-0 h-16 sm:h-20 bg-gradient-to-t from-white to-transparent"></div>
    </section>
@endsection

@section('content')
    <section class="relative py-14 sm:py-16 lg:py-20 bg-gradient-to-br from-gray-50 to-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12 sm:mb-16">
                <span class="inline-block mb-3 px-4 py-1 bg-blue-100 text-blue-800 rounded-full text-sm font-medium">
                    Sejarah Kami
                </span>
                <h3 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-3">Perjalanan Komunitas</h3>
                <h4 class="text-base sm:text-lg md:text-xl text-gray-600 max-w-2xl mx-auto">
                    Mengikuti jejak perkembangan Kampung Batik Paseseh dari masa ke masa
                </h4>

                <!-- Dropdown Tahun -->
                {{-- <div class="mt-8 sm:mt-10 relative inline-block w-full sm:w-auto">
                <form method="GET" action="{{ route('perjalanan') }}">
                    <select name="year" onchange="this.form.submit()"
                        class="block w-full sm:w-auto appearance-none bg-white border-2 border-gray-200 rounded-xl pl-5 pr-12 py-3 sm:py-4 text-base sm:text-lg font-medium text-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all shadow-md hover:shadow-xl cursor-pointer">
                        @foreach ($years as $year)
                            <option value="{{ $year }}" {{ $year == $selectedYear ? 'selected' : '' }}>
                                Tahun {{ $year }}
                            </option>
                        @endforeach
                    </select>
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-4 text-gray-700">
                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                </form>
            </div> --}}

                <div class="mt-8 sm:mt-10 relative inline-block w-full sm:w-auto" data-aos="zoom-in"
                    x-data="{ open: false }">

                    <!-- Tombol Dropdown -->
                    <button @click="open = !open"
                        class="flex items-center justify-between w-full sm:w-64 px-6 py-3 bg-gradient-to-r from-blue-500 to-indigo-600 text-white rounded-xl shadow-lg hover:shadow-xl transition">
                        <span class="font-semibold">Tahun {{ $selectedYear }}</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 transform transition-transform"
                            :class="{ 'rotate-180': open }" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M5.23 7.21a.75.75 0 011.06.02L10 10.94l3.71-3.71a.75.75 0 011.08 1.04l-4.25 4.25a.75.75 0 01-1.08 0L5.23 8.27a.75.75 0 01.02-1.06z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>

                    <!-- Daftar Tahun -->
                    <div x-show="open" @click.away="open = false"
                        class="absolute left-0 sm:right-0 mt-3 w-full sm:w-64 bg-white border border-gray-200 rounded-xl shadow-2xl overflow-hidden z-50">

                        @foreach ($years as $year)
                            <a href="{{ route('perjalanan', ['year' => $year]) }}"
                                class="block px-5 py-3 text-gray-800 hover:bg-blue-100 hover:text-blue-700 font-medium transition">
                                Tahun {{ $year }}
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="max-w-7xl mx-auto">
                @if ($journeys->count() > 0)
                    <div class="relative">
                        <!-- Timeline Line -->
                        <div
                            class="hidden lg:block absolute left-1/2 transform -translate-x-1/2 h-full w-1 bg-gradient-to-b from-blue-400 to-purple-500">
                        </div>

                        <!-- Journey Items -->
                        <div class="flex flex-col gap-12 sm:gap-16">
                            @foreach ($journeys as $index => $journey)
                                <div class="relative flex flex-col lg:flex-row items-center gap-10 lg:gap-16"
                                    data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">

                                    <!-- Konten kiri (genap) -->
                                    @if ($index % 2 == 0)
                                        <div class="lg:w-1/2 w-full">
                                            <div
                                                class="bg-white rounded-2xl p-6 sm:p-8 shadow-xl border border-gray-100 hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-1">
                                                <div class="flex items-center mb-3 sm:mb-4">
                                                    <div class="w-3 h-3 rounded-full bg-blue-500 mr-3"></div>
                                                    <span class="text-blue-600 font-semibold">{{ $journey->year }}</span>
                                                </div>
                                                <h5 class="text-xl sm:text-2xl font-bold text-gray-900 mb-3 sm:mb-4">
                                                    {{ $journey->title }}</h5>
                                                {{-- <p class="text-gray-700 text-base leading-relaxed">{{ $journey->content }}
                                                </p> --}}
                                                <div class="text-gray-700 text-base leading-relaxed prose max-w-none">
                                                    {!! $journey->content !!}
                                                </div>

                                            </div>
                                        </div>

                                        <div
                                            class="hidden lg:flex items-center justify-center w-10 h-10 sm:w-12 sm:h-12 rounded-full bg-gradient-to-r from-blue-500 to-purple-600 text-white font-bold shadow-lg z-10">
                                            {{ $loop->iteration }}
                                        </div>

                                        <div class="lg:w-1/2 w-full">
                                            {{-- <div
                                                class="bg-white rounded-2xl overflow-hidden shadow-xl border border-gray-100 transform transition-all duration-500 hover:scale-105">
                                                <img src="{{ $journey->image ? asset('storage/' . $journey->image) : asset('images/perjalanan.png') }}"
                                                    alt="Perjalanan {{ $journey->year }}"
                                                    class="w-full h-56 sm:h-64 object-cover">
                                            </div> --}}
                                            <div
                                                class="relative group bg-gradient-to-br from-blue-50 to-indigo-100 rounded-3xl shadow-2xl border border-blue-200 overflow-hidden transform transition-all duration-500 hover:scale-105 hover:shadow-blue-300/50">

                                                <!-- Decorative corner SVG -->
                                                <svg class="absolute top-0 left-0 w-16 h-16 text-blue-300 opacity-40 group-hover:opacity-70 transition"
                                                    fill="none" viewBox="0 0 100 100">
                                                    <circle cx="50" cy="50" r="40" stroke="currentColor"
                                                        stroke-width="8" stroke-dasharray="10 10" />
                                                </svg>

                                                <svg class="absolute bottom-0 right-0 w-16 h-16 text-purple-400 opacity-40 group-hover:opacity-70 transition"
                                                    fill="none" viewBox="0 0 100 100">
                                                    <path d="M10 90 L90 10" stroke="currentColor" stroke-width="6"
                                                        stroke-linecap="round" />
                                                </svg>

                                                <!-- Frame and Image -->
                                                <div class="relative p-2 bg-white rounded-2xl m-3 shadow-inner">
                                                    <img src="{{ $journey->image ? asset('storage/' . $journey->image) : asset('images/perjalanan.png') }}"
                                                        alt="Perjalanan {{ $journey->year }}"
                                                        class="w-full h-56 sm:h-64 object-cover rounded-xl border border-gray-200 shadow-lg">

                                                    <!-- Overlay gradient + icon -->
                                                    <div
                                                        class="absolute inset-0 bg-gradient-to-t from-black/40 via-transparent rounded-xl opacity-0 group-hover:opacity-100 transition flex items-end justify-end p-4">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            class="w-7 h-7 text-white opacity-90" fill="none"
                                                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="M12 4v16m8-8H4" />
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    @else
                                        <!-- Konten kanan (ganjil) -->
                                        <div class="lg:w-1/2 w-full order-2 lg:order-1">
                                            {{-- <div
                                                class="bg-white rounded-2xl overflow-hidden shadow-xl border border-gray-100 transform transition-all duration-500 hover:scale-105">
                                                <img src="{{ $journey->image ? asset('storage/' . $journey->image) : asset('images/perjalanan.png') }}"
                                                    alt="Perjalanan {{ $journey->year }}"
                                                    class="w-full h-56 sm:h-64 object-cover">
                                            </div> --}}
                                            <div
                                                class="relative group bg-gradient-to-br from-blue-50 to-indigo-100 rounded-3xl shadow-2xl border border-blue-200 overflow-hidden transform transition-all duration-500 hover:scale-105 hover:shadow-blue-300/50">

                                                <!-- Decorative corner SVG -->
                                                <svg class="absolute top-0 left-0 w-16 h-16 text-blue-300 opacity-40 group-hover:opacity-70 transition"
                                                    fill="none" viewBox="0 0 100 100">
                                                    <circle cx="50" cy="50" r="40" stroke="currentColor"
                                                        stroke-width="8" stroke-dasharray="10 10" />
                                                </svg>

                                                <svg class="absolute bottom-0 right-0 w-16 h-16 text-purple-400 opacity-40 group-hover:opacity-70 transition"
                                                    fill="none" viewBox="0 0 100 100">
                                                    <path d="M10 90 L90 10" stroke="currentColor" stroke-width="6"
                                                        stroke-linecap="round" />
                                                </svg>

                                                <!-- Frame and Image -->
                                                <div class="relative p-2 bg-white rounded-2xl m-3 shadow-inner">
                                                    <img src="{{ $journey->image ? asset('storage/' . $journey->image) : asset('images/perjalanan.png') }}"
                                                        alt="Perjalanan {{ $journey->year }}"
                                                        class="w-full h-56 sm:h-64 object-cover rounded-xl border border-gray-200 shadow-lg">

                                                    <!-- Overlay gradient + icon -->
                                                    <div
                                                        class="absolute inset-0 bg-gradient-to-t from-black/40 via-transparent rounded-xl opacity-0 group-hover:opacity-100 transition flex items-end justify-end p-4">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            class="w-7 h-7 text-white opacity-90" fill="none"
                                                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="M12 4v16m8-8H4" />
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div
                                            class="hidden lg:flex items-center justify-center w-10 h-10 sm:w-12 sm:h-12 rounded-full bg-gradient-to-r from-blue-500 to-purple-600 text-white font-bold shadow-lg z-10 order-1">
                                            {{ $loop->iteration }}
                                        </div>

                                        <div class="lg:w-1/2 w-full order-1 lg:order-2">
                                            <div
                                                class="bg-white rounded-2xl p-6 sm:p-8 shadow-xl border border-gray-100 hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-1">
                                                <div class="flex items-center mb-3 sm:mb-4">
                                                    <div class="w-3 h-3 rounded-full bg-blue-500 mr-3"></div>
                                                    <span class="text-blue-600 font-semibold">{{ $journey->year }}</span>
                                                </div>
                                                <h5 class="text-xl sm:text-2xl font-bold text-gray-900 mb-3 sm:mb-4">
                                                    {{ $journey->title }}</h5>
                                                {{-- <p class="text-gray-700 text-base leading-relaxed">{{ $journey->content }}
                                                </p> --}}
                                                <div class="text-gray-700 text-base leading-relaxed prose max-w-none">
                                                    {!! $journey->content !!}
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            @endforeach
                        </div>
                    </div>
                @else
                    <div class="text-center py-16" data-aos="fade-up">
                        <div
                            class="inline-flex items-center justify-center w-20 h-20 sm:w-24 sm:h-24 rounded-full bg-blue-50 text-blue-500 mb-6">
                            <svg class="w-10 h-10 sm:w-12 sm:h-12" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-xl sm:text-2xl font-bold text-gray-700 mb-3">Belum Ada Data</h3>
                        <p class="text-gray-500 max-w-md mx-auto text-base sm:text-lg">
                            Tidak ada data perjalanan untuk tahun {{ $selectedYear }}. Silakan pilih tahun lain untuk
                            melihat sejarah komunitas kami.
                        </p>
                    </div>
                @endif
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            if (typeof AOS !== 'undefined') {
                AOS.init({
                    duration: 800,
                    once: true,
                    offset: 50
                });
            }
        });
    </script>
@endpush
