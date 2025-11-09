@extends('layouts.app')

@section('title', 'Batik Paseseh - Edukasi')

@section('hero')
    <!-- Hero Section - Responsif Diperbarui -->
    <header
        class="relative min-h-[70vh] sm:min-h-[80vh] md:min-h-screen overflow-hidden flex items-center justify-center"
        style="background-image: url('{{ asset('images/Bg_Aboutus.png') }}');">

        {{-- bg-gradient-to-br from-blue-900 via-purple-900 to-indigo-900 --}}

        <!-- Background Pattern -->
        {{-- <div
            class="absolute inset-0 bg-[radial-gradient(ellipse_at_center,_var(--tw-gradient-stops))] from-blue-600/20 via-transparent to-transparent">
        </div> --}}

        <!-- Overlay Gradient -->
        {{-- <div class="absolute inset-0 bg-gradient-to-br from-blue-900/60 via-purple-900/50 to-indigo-900/60"></div> --}}
        <div class="absolute inset-0 bg-gray-900/45"></div>

        <!-- Decorative Elements -->
        <div class="absolute top-10 left-10 w-16 sm:w-20 h-16 sm:h-20 bg-amber-400/10 rounded-full blur-xl"></div>
        <div class="absolute bottom-10 right-10 w-24 sm:w-32 h-24 sm:h-32 bg-purple-500/10 rounded-full blur-2xl"></div>
        <div class="absolute top-1/3 right-1/4 w-10 sm:w-16 h-10 sm:h-16 bg-blue-400/10 rounded-full blur-lg"></div>

        <!-- Main Content -->
        <div class="relative z-20 text-center text-white px-4 sm:px-6 md:px-8 max-w-5xl">
            <!-- Badge -->
            <div
                class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-sm px-5 sm:px-6 py-2.5 sm:py-3 rounded-full border border-white/20 mb-6 sm:mb-8 mt-6 sm:mt-8">
                <div class="w-2 h-2 bg-amber-400 rounded-full animate-pulse"></div>
                <span class="text-xs sm:text-sm font-medium">Pengalaman Membatik Autentik</span>
            </div>

            <h1
                class="text-3xl sm:text-5xl md:text-6xl lg:text-7xl font-bold mb-4 sm:mb-6 tracking-tight bg-gradient-to-r from-white to-amber-100 bg-clip-text text-transparent leading-tight">
                Paket Edukasi <span class="text-amber-400">Membatik</span>
            </h1>

            <p
                class="text-base sm:text-lg md:text-xl lg:text-2xl mb-8 max-w-3xl mx-auto leading-relaxed text-blue-100 px-2">
                Rasakan seni membatik langsung dari tangan pengrajin profesional Tanjung Bumi.
                Pelajari teknik tradisional autentik dan ciptakan karya batik Anda sendiri.
            </p>

            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                <a href="#paket"
                    class="group bg-gradient-to-r from-amber-500 to-amber-600 hover:from-amber-600 hover:to-amber-700 px-6 sm:px-8 py-3 sm:py-4 rounded-2xl font-semibold text-base sm:text-lg shadow-xl transition-all duration-300 transform hover:-translate-y-1 hover:shadow-amber-500/25 flex items-center gap-3">
                    <span>Jelajahi Paket</span>
                    <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6">
                        </path>
                    </svg>
                </a>

                <a href="#fasilitas"
                    class="group border-2 border-white/30 hover:border-white/50 text-white px-6 sm:px-8 py-3 sm:py-4 rounded-2xl font-semibold text-base sm:text-lg backdrop-blur-sm transition-all duration-300 hover:bg-white/10 flex items-center gap-3">
                    <span>Lihat Fasilitas</span>
                    <svg class="w-5 h-5 group-hover:translate-y-1 transition-transform" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 14l-7 7m0 0l-7-7m7 7V3">
                        </path>
                    </svg>
                </a>
            </div>

            <!-- Stats -->
            {{-- <div class="grid grid-cols-3 gap-4 sm:gap-8 mt-10 sm:mt-16">
                <div class="text-center">
                    <div class="text-xl sm:text-2xl md:text-3xl font-bold text-amber-400">500+</div>
                    <div class="text-blue-200 text-xs sm:text-sm">Peserta Edukasi</div>
                </div>
                <div class="text-center">
                    <div class="text-xl sm:text-2xl md:text-3xl font-bold text-amber-400">98%</div>
                    <div class="text-blue-200 text-xs sm:text-sm">Kepuasan Peserta</div>
                </div>
                <div class="text-center">
                    <div class="text-xl sm:text-2xl md:text-3xl font-bold text-amber-400">25+</div>
                    <div class="text-blue-200 text-xs sm:text-sm">Tahun Pengalaman</div>
                </div>
            </div> --}}
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
    </header>
@endsection

@section('content')
    <!-- Deskripsi Program - Diperbarui -->
    <section class="py-20 px-4 max-w-6xl mx-auto">
        <div class="text-center mb-16">
            <div
                class="inline-flex items-center gap-2 bg-gradient-to-r from-blue-500 to-purple-500 text-white px-6 py-2 rounded-full text-sm font-medium mb-4">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z">
                    </path>
                </svg>
                Program Unggulan
            </div>
            <h2 class="text-4xl md:text-5xl font-bold text-gray-800 mb-6">Deskripsi Program</h2>
            <div class="w-24 h-1 bg-gradient-to-r from-blue-500 to-purple-500 mx-auto mb-6 rounded-full"></div>
        </div>

        <div
            class="bg-gradient-to-br from-white to-blue-50 rounded-3xl shadow-2xl p-8 md:p-12 border border-blue-100 max-w-4xl mx-auto relative overflow-hidden">
            <!-- Background Pattern -->
            <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-bl from-amber-400/10 to-transparent rounded-bl-3xl">
            </div>
            <div class="absolute bottom-0 left-0 w-20 h-20 bg-purple-400/10 rounded-tr-3xl"></div>

            <div class="relative z-10">
                <p class="text-gray-700 text-base md:text-lg leading-relaxed text-center font-medium">
                    Program <span class="text-amber-600 font-semibold">Edukasi Membatik</span> dirancang khusus
                    untuk melestarikan dan memperkenalkan tradisi batik autentik kepada generasi muda.
                    Peserta akan mempelajari <span class="text-blue-600 font-semibold">sejarah batik</span>,
                    <span class="text-purple-600 font-semibold">teknik membatik tradisional</span>, hingga menciptakan
                    karya batik sendiri di bawah bimbingan langsung pengrajin profesional dengan pengalaman puluhan tahun.
                </p>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-8">
                    <div class="text-center p-4">
                        <div class="w-12 h-12 bg-blue-100 rounded-2xl flex items-center justify-center mx-auto mb-3">
                            <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253">
                                </path>
                            </svg>
                        </div>
                        <h4 class="font-semibold text-gray-800">Materi Lengkap</h4>
                    </div>
                    <div class="text-center p-4">
                        <div class="w-12 h-12 bg-amber-100 rounded-2xl flex items-center justify-center mx-auto mb-3">
                            <svg class="w-6 h-6 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z">
                                </path>
                            </svg>
                        </div>
                        <h4 class="font-semibold text-gray-800">Pengrajin Profesional</h4>
                    </div>
                    <div class="text-center p-4">
                        <div class="w-12 h-12 bg-purple-100 rounded-2xl flex items-center justify-center mx-auto mb-3">
                            <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z">
                                </path>
                            </svg>
                        </div>
                        <h4 class="font-semibold text-gray-800">Alat Membatik</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Paket Edukasi - Diperbarui & Responsif -->
    <section id="paket" class="py-16 sm:py-20 px-4 sm:px-6 lg:px-8 bg-gradient-to-b from-white to-blue-50/30">
        <div class="max-w-7xl mx-auto">
            <!-- Header -->
            <div class="text-center mb-12 sm:mb-16">
                <div
                    class="inline-flex items-center gap-2 bg-gradient-to-r from-amber-500 to-amber-600 text-white px-5 sm:px-6 py-2 rounded-full text-xs sm:text-sm font-medium mb-4">
                    <svg class="w-4 h-4 sm:w-5 sm:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                    </svg>
                    Pilihan Paket
                </div>
                <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold text-gray-800 mb-4">
                    Paket Edukasi Membatik
                </h1>
                <div class="w-16 sm:w-24 h-1 bg-gradient-to-r from-amber-500 to-amber-600 mx-auto rounded-full mb-6"></div>
                <p class="text-gray-600 text-base sm:text-lg max-w-2xl mx-auto">
                    Pilih paket yang sesuai dengan kebutuhan Anda. Setiap paket dirancang untuk memberikan pengalaman
                    membatik yang tak terlupakan.
                </p>
            </div>

            <!-- Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
                @foreach ($packages as $package)
                    <div
                        class="group bg-white rounded-2xl sm:rounded-3xl shadow-md sm:shadow-xl hover:shadow-2xl transition-all duration-500 overflow-hidden border border-gray-100 hover:border-amber-200 relative">

                        <!-- Gambar -->
                        <div class="overflow-hidden relative">
                            <img src="{{ asset('storage/' . $package->image) }}" alt="{{ $package->title }}"
                                class="w-full h-52 sm:h-60 md:h-64 object-cover group-hover:scale-110 transition-transform duration-700" />
                            <div class="absolute inset-0 bg-gradient-to-t from-black/30 to-transparent"></div>
                        </div>

                        <!-- Konten -->
                        <div class="p-6 sm:p-8">
                            <h2
                                class="text-xl sm:text-2xl font-bold mb-3 sm:mb-4 text-gray-800 group-hover:text-amber-600 transition-colors duration-300">
                                {{ $package->title }}
                            </h2>

                            <p class="text-gray-600 mb-5 sm:mb-6 leading-relaxed line-clamp-3 text-sm sm:text-base">
                                {{ $package->description }}
                            </p>

                            <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 mt-6">
                                <div>
                                    <span class="font-bold text-amber-600 text-base sm:text-lg">
                                        Rp {{ number_format($package->price, 0, ',', '.') }}
                                    </span>
                                    <p class="text-gray-500 text-xs sm:text-sm">
                                        Untuk {{ $package->kapasitas ?? '—' }} orang
                                    </p>
                                </div>
                                <a href="{{ route('edupackage.detail', $package->slug) }}"
                                    class="group/btn w-full sm:w-auto bg-gradient-to-r from-blue-500 to-purple-500 hover:from-blue-600 hover:to-purple-600 text-white px-5 sm:px-6 py-2.5 sm:py-3 rounded-lg sm:rounded-xl font-semibold transition-all duration-300 transform hover:-translate-y-1 hover:shadow-lg flex items-center justify-center sm:justify-start gap-2 text-sm sm:text-base">
                                    <span>Lihat Detail</span>
                                    <svg class="w-4 h-4 group-hover/btn:translate-x-1 transition-transform" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Fasilitas & Pengajar - Diperbarui -->
    <section id="fasilitas" class="py-20 px-4 max-w-7xl mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
            <!-- Fasilitas -->
            <div>
                <div class="flex items-center gap-3 mb-8">
                    <div
                        class="w-12 h-12 bg-gradient-to-r from-blue-500 to-blue-600 rounded-2xl flex items-center justify-center">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z">
                            </path>
                        </svg>
                    </div>
                    <div>
                        <h2 class="text-3xl font-bold text-gray-800">Fasilitas Unggulan</h2>
                        <p class="text-gray-600">Semua yang Anda butuhkan untuk belajar membatik</p>
                    </div>
                </div>

                <div class="space-y-6">
                    @php
                        $facilities = [
                            [
                                'icon' =>
                                    'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z',
                                'title' => 'Alat Membatik Lengkap',
                                'desc' =>
                                    'Semua peralatan membatik disediakan, termasuk canting, wajan, kompor, dan lilin batik.',
                            ],
                            [
                                'icon' =>
                                    'M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z',
                                'title' => 'Bahan Kain Batik',
                                'desc' =>
                                    'Kain mori berkualitas untuk memastikan hasil batik yang maksimal dan tahan lama.',
                            ],
                            [
                                'icon' =>
                                    'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.356-1.283.988-1.857l.548-.547a5.002 5.002 0 019.288 0l.548.547C18.644 16.717 19 17.576 19 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z',
                                'title' => 'Pengajar Profesional',
                                'desc' =>
                                    'Didampingi langsung oleh pengrajin batik berpengalaman dengan metode pengajaran yang mudah dipahami.',
                            ],
                            [
                                'icon' =>
                                    'M12 2a1 1 0 01.894.553l9 18A1 1 0 0121 22H3a1 1 0 01-.894-1.447l9-18A1 1 0 0112 2zm0 4.618L6.382 20h11.236L12 6.618zM11 10h2v5h-2v-5zm0 6h2v2h-2v-2z',
                                'title' => 'Tempat Pelatihan',
                                'desc' =>
                                    'Pelatihan dilakukan di sentra batik dengan fasilitas lengkap dan suasana nyaman.',
                            ],
                        ];
                    @endphp

                    @foreach ($facilities as $facility)
                        <div
                            class="group bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 border border-gray-100 hover:border-blue-200">
                            <div class="flex items-start gap-4">
                                <div
                                    class="w-12 h-12 bg-gradient-to-r from-blue-500 to-purple-500 rounded-xl flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform duration-300">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="{{ $facility['icon'] }}"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="font-bold text-lg text-gray-800 mb-2">{{ $facility['title'] }}</h3>
                                    <p class="text-gray-600 leading-relaxed">{{ $facility['desc'] }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Profil Pengajar -->
            <div>
                <div class="flex items-center gap-3 mb-8">
                    <div
                        class="w-12 h-12 bg-gradient-to-r from-amber-500 to-amber-600 rounded-2xl flex items-center justify-center">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                    </div>
                    <div>
                        <h2 class="text-3xl font-bold text-gray-800">Tim Pengajar</h2>
                        <p class="text-gray-600">Pengrajin profesional dengan pengalaman puluhan tahun</p>
                    </div>
                </div>

                <div class="space-y-6">
                    @php
                        $teachers = [
                            [
                                'image' => '/images/Pengajar1.png',
                                'name' => 'Ibu Mesnari',
                                'role' => 'Pengrajin Batik Senior',
                                'exp' => '25+ Tahun Pengalaman',
                                'desc' => 'Ahli dalam pewarnaan alami maupun sintetis dengan pengalaman 25 tahun.',
                            ],
                            [
                                'image' => '/images/Pengajar2.png',
                                'name' => 'Ibu Mahruha',
                                'role' => 'Instruktur Batik',
                                'exp' => '23+ Tahun Pengalaman',
                                'desc' =>
                                    'Spesialis motif batik gentongan tradisional madura dengan pengalaman 23 tahun.',
                            ],
                            [
                                'image' => '/images/Pengajar3.png',
                                'name' => 'Mbak Toyyina',
                                'role' => 'Desainer Batik',
                                'exp' => '18+ Tahun Pengalaman',
                                'desc' =>
                                    'Spesialis motif batik kontemporer dengan sentuhan tradisional madura selama 18 tahun.',
                            ],
                        ];
                    @endphp

                    @foreach ($teachers as $teacher)
                        {{-- Spesialis teknik tulis dan cap tradisional dengan pengalaman lebih dari 25 tahun. --}}
                        {{-- Ahli dalam pewarnaan alami dan motif tradisional dengan pengalaman 23 tahun. --}}
                        <div
                            class="group bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 border border-gray-100 hover:border-amber-200">
                            <div class="flex flex-col md:flex-row items-center md:items-start gap-5">
                                <div class="relative">
                                    <img src="{{ $teacher['image'] }}"
                                        class="w-20 h-20 rounded-2xl object-cover border-4 border-amber-100 group-hover:border-amber-200 transition-colors duration-300"
                                        alt="{{ $teacher['name'] }}">
                                    <div
                                        class="absolute -bottom-2 -right-2 bg-gradient-to-r from-amber-500 to-amber-600 text-white text-xs px-2 py-1 rounded-full font-semibold">
                                        {{ $teacher['exp'] }}
                                    </div>
                                </div>
                                <div class="text-center md:text-left flex-1">
                                    <h3 class="font-bold text-xl text-gray-800 mb-1">{{ $teacher['name'] }}</h3>
                                    <p class="text-amber-600 font-semibold mb-2">{{ $teacher['role'] }}</p>
                                    <p class="text-gray-600 text-sm leading-relaxed">{{ $teacher['desc'] }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!-- Pencapaian & Keunggulan - Diperbarui -->
    <section class="py-20 bg-gradient-to-br from-gray-50 to-blue-50/50 px-4">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16">
                <div
                    class="inline-flex items-center gap-2 bg-gradient-to-r from-purple-500 to-purple-600 text-white px-6 py-2 rounded-full text-sm font-medium mb-4">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z">
                        </path>
                    </svg>
                    Keunggulan Program
                </div>
                <h2 class="text-4xl md:text-5xl font-bold text-gray-800 mb-6">
                    Mengapa Memilih <span
                        class="bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">Kami</span>
                </h2>
                <p class="text-gray-600 text-lg max-w-2xl mx-auto">
                    Program edukasi membatik terbaik dengan standar kualitas tertinggi dan pengalaman belajar yang optimal
                </p>
            </div>

            <!-- Achievement Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
                @php
                    $achievements = [
                        [
                            'icon' => 'M13 7h8m0 0v8m0-8l-8 8-4-4-6 6',
                            'title' => 'Metode Terstruktur',
                            'description' =>
                                'Materi pembelajaran yang sistematis dari dasar hingga mahir, cocok untuk pemula maupun yang ingin mendalami batik',
                            'color' => 'from-blue-500 to-blue-600',
                        ],
                        [
                            'icon' => 'M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z',
                            'title' => 'Pengajar Profesional',
                            'description' =>
                                'Didampingi langsung oleh pengrajin batik berpengalaman yang siap membimbing setiap langkah Anda dalam proses membatik',
                            'color' => 'from-green-500 to-green-600',
                        ],
                        [
                            'icon' =>
                                'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.356-1.283.988-1.857l.548-.547a5.002 5.002 0 019.288 0l.548.547C18.644 16.717 19 17.576 19 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z',
                            'title' => 'Komunitas Eksklusif',
                            'description' =>
                                'Bergabung dengan komunitas umkm batik untuk berbagi pengalaman dan mengembangkan jaringan profesional',
                            'color' => 'from-purple-500 to-purple-600',
                        ],
                        [
                            'icon' =>
                                'M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z',
                            'title' => 'Fasilitas Terbaik',
                            'description' =>
                                'Akses penuh ke workshop dengan peralatan profesional dan bahan-bahan berkualitas',
                            'color' => 'from-amber-500 to-amber-600',
                        ],
                        [
                            'icon' =>
                                'M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z',
                            'title' => 'Lokasi Strategis',
                            'description' =>
                                'Bertempat di sentra batik Tanjung Bumi dengan akses mudah dan suasana tradisional yang autentik',
                            'color' => 'from-red-500 to-red-600',
                        ],
                        [
                            'icon' => 'M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z',
                            'title' => 'Fleksibel Waktu',
                            'description' =>
                                'Jadwal belajar yang dapat disesuaikan dengan kebutuhan Anda, termasuk program weekend dan weekday',
                            'color' => 'from-indigo-500 to-indigo-600',
                        ],
                    ];
                @endphp

                @foreach ($achievements as $achievement)
                    <div
                        class="group bg-white rounded-3xl p-8 shadow-lg hover:shadow-2xl transition-all duration-500 border border-gray-100 hover:border-purple-200">
                        <!-- Icon -->
                        <div class="mb-6">
                            <div
                                class="w-16 h-16 bg-gradient-to-r {{ $achievement['color'] }} rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="{{ $achievement['icon'] }}"></path>
                                </svg>
                            </div>
                        </div>

                        <!-- Content -->
                        <h3 class="text-xl font-bold text-gray-800 mb-4 group-hover:text-gray-900 transition-colors">
                            {{ $achievement['title'] }}
                        </h3>
                        <p class="text-gray-600 leading-relaxed">
                            {{ $achievement['description'] }}
                        </p>
                    </div>
                @endforeach
            </div>

            <!-- Stats Section -->
            {{-- <div class="grid grid-cols-2 md:grid-cols-4 gap-8 mb-12">
                @php
                    $stats = [
                        ['number' => '500+', 'label' => 'Peserta Terlatih'],
                        ['number' => '98%', 'label' => 'Tingkat Kepuasan'],
                        ['number' => '25+', 'label' => 'Tahun Pengalaman'],
                        ['number' => '50+', 'label' => 'Motif Diajarkan'],
                    ];
                @endphp

                @foreach ($stats as $stat)
                    <div class="text-center">
                        <div
                            class="text-3xl md:text-4xl font-bold bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent mb-2">
                            {{ $stat['number'] }}
                        </div>
                        <div class="text-gray-600 font-medium">{{ $stat['label'] }}</div>
                    </div>
                @endforeach
            </div> --}}

            <!-- CTA Section -->
            <div
                class="bg-gradient-to-r from-blue-600 to-purple-600 rounded-3xl p-12 text-center text-white relative overflow-hidden">
                <!-- Background Pattern -->
                <div
                    class="absolute inset-0 bg-[radial-gradient(ellipse_at_center,_var(--tw-gradient-stops))] from-white/10 via-transparent to-transparent">
                </div>

                <div class="relative z-10">
                    <h3 class="text-3xl md:text-4xl font-bold mb-6">
                        Siap Memulai Perjalanan Membatik Anda?
                    </h3>
                    <p class="text-blue-100 text-lg mb-8 max-w-2xl mx-auto leading-relaxed">
                        Jangan lewatkan kesempatan untuk belajar membatik langsung dari pengrajin profesional.
                        Dapatkan pengalaman tak terlupakan dan ciptakan karya batik Anda sendiri!
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                        <a href="#paket"
                            class="group bg-white text-blue-600 hover:bg-blue-50 font-semibold px-8 py-4 rounded-2xl shadow-2xl transition-all duration-300 transform hover:-translate-y-1 inline-flex items-center gap-3">
                            <svg class="w-5 h-5 group-hover:scale-110 transition-transform" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                            </svg>
                            <span>Daftar Sekarang</span>
                        </a>
                        <a href="{{ route('shop.index') }}"
                            class="group border-2 border-white/30 hover:border-white/50 text-white hover:bg-white/10 font-semibold px-8 py-4 rounded-2xl backdrop-blur-sm transition-all duration-300 inline-flex items-center gap-3">
                            <svg class="w-5 h-5 group-hover:-translate-x-1 transition-transform" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                            </svg>
                            <span>Lihat Koleksi Batik</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
