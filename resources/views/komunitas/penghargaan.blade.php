@extends('layouts.app')

@section('hero')
    <!-- Enhanced Hero Section -->
    <section class="relative min-h-[70vh] sm:min-h-[80vh] md:min-h-screen overflow-hidden flex items-center justify-center"
        style="background-image: url('{{ asset('images/Bg_Aboutus.png') }}');">

        {{-- bg-gradient-to-br from-blue-900 via-purple-900 to-indigo-900 --}}

        <div class="absolute inset-0 bg-gray-900/45"></div>

        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-10 left-10 w-32 h-32 border-2 border-yellow-400 rounded-full animate-pulse"></div>
            <div
                class="absolute bottom-10 right-10 w-24 h-24 border-2 border-yellow-400 rounded-full animate-pulse delay-300">
            </div>
            <div class="absolute top-1/2 left-1/3 w-16 h-16 border border-yellow-400 rounded-full animate-pulse delay-700">
            </div>
        </div>

        <!-- Hero Content -->
        <div class="relative z-10 w-full h-64 sm:h-80 md:h-96 lg:h-[28rem] xl:h-[32rem] flex items-center justify-center">
            <div class="text-center text-white px-4 max-w-6xl mx-auto">
                <!-- Main Title -->
                <h1 class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-bold mb-4 tracking-tight">
                    <span class="bg-gradient-to-r from-yellow-400 to-amber-500 bg-clip-text text-transparent">
                        Penghargaan
                    </span>
                </h1>

                <!-- Subtitle -->
                <h2 class="text-xl sm:text-2xl md:text-3xl lg:text-4xl font-semibold mb-6 text-blue-100">
                    Kampung Batik Paseseh
                </h2>

                <!-- Decorative Line -->
                <div class="w-24 h-1 bg-gradient-to-r from-yellow-400 to-amber-500 mx-auto mb-6 rounded-full"></div>

                <!-- Description -->
                <p class="text-lg sm:text-xl md:text-2xl text-blue-200 max-w-3xl mx-auto leading-relaxed">
                    Menghargai Keberhasilan Perjalanan Komunitas Batik Paseseh dalam Menciptakan Pengrajin Berkualitas
                </p>
            </div>
        </div>

        <!-- Floating Elements -->
        <div class="absolute top-8 left-8 w-16 h-16 bg-yellow-400 rounded-full opacity-20 animate-bounce"></div>
        <div class="absolute bottom-8 right-8 w-12 h-12 bg-amber-500 rounded-full opacity-30 animate-bounce delay-1000">
        </div>
        <div class="absolute top-1/4 right-16 w-8 h-8 bg-orange-400 rounded-full opacity-40 animate-ping"></div>
    </section>
@endsection

@section('content')
    <!-- Video Section -->
<section class="w-full bg-gradient-to-b from-white to-gray-50 py-16 lg:py-20">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-6xl mx-auto">
            <!-- Section Header -->
            <div class="text-center mb-12 lg:mb-16">
                <div class="inline-flex items-center justify-center w-16 h-16 bg-blue-100 rounded-2xl mb-6">
                    <i class="fas fa-play-circle text-3xl text-blue-600"></i>
                </div>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-gray-900 mb-4">
                    Dokumentasi <span class="text-blue-600">Penghargaan</span>
                </h2>
                <p class="text-lg sm:text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    Simak perjalanan inspiratif komunitas batik Paseseh dalam meraih berbagai penghargaan prestisius
                </p>
            </div>

            <!-- Video Container -->
            <div class="relative group">
                <div class="bg-gradient-to-br from-blue-50 to-indigo-100 rounded-3xl p-6 sm:p-8 shadow-2xl max-w-[800px] mx-auto">
                    <!-- Video Wrapper with proper aspect ratio -->
                    <div class="relative rounded-2xl overflow-hidden" style="padding-bottom: 56.25%;">
                        <iframe 
                            class="absolute top-0 left-0 w-full h-full rounded-2xl"
                            src="https://www.youtube.com/embed/pCS1PKItmlU?rel=0&modestbranding=1&showinfo=0&enablejsapi=1"
                            title="Video Dokumentasi Penghargaan" 
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen
                            loading="lazy">
                        </iframe>
                    </div>
                </div>

                <!-- Video Description -->
                <div class="mt-8 text-center">
                    <p class="text-gray-600 text-lg leading-relaxed max-w-2xl mx-auto">
                        Video ini menampilkan momen-momen spesial ketika Kampung Batik Paseseh menerima berbagai
                        penghargaan atas dedikasi dalam melestarikan dan mengembangkan seni batik tradisional Indonesia.
                    </p>
                </div>

                <!-- Decorative Elements -->
                <div class="absolute -top-4 -left-4 w-8 h-8 bg-yellow-400 rounded-full opacity-70 animate-pulse"></div>
                <div class="absolute -bottom-4 -right-4 w-12 h-12 bg-blue-400 rounded-full opacity-60 animate-pulse delay-300"></div>
            </div>
        </div>
    </div>
</section>

    <!-- Awards Gallery Section -->
    <section class="w-full bg-gradient-to-br from-slate-50 via-blue-50 to-indigo-100 py-16 lg:py-20">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section Header -->
            <div class="text-center mb-16 lg:mb-20">
                <div
                    class="inline-flex items-center justify-center w-20 h-20 bg-gradient-to-br from-blue-600 to-purple-700 rounded-3xl mb-6 shadow-lg">
                    <i class="fas fa-award text-2xl text-white"></i>
                </div>
                <h2 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-gray-900 mb-6">
                    <span class="bg-gradient-to-r from-blue-600 to-purple-700 bg-clip-text text-transparent">
                        Gallery Penghargaan
                    </span>
                </h2>
                <p class="text-xl text-gray-600 max-w-4xl mx-auto leading-relaxed">
                    Kumpulan penghargaan yang telah diraih oleh Kampung Batik Paseseh sebagai bentuk apresiasi
                    terhadap dedikasi dalam melestarikan dan mengembangkan seni batik tradisional
                </p>
                <div class="w-32 h-1 bg-gradient-to-r from-blue-600 to-purple-700 mx-auto mt-8 rounded-full"></div>
            </div>

            <!-- Awards Grid -->
            <div class="max-w-7xl mx-auto">
                <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-8">
                    @forelse($awards as $award)
                        <div class="group">
                            <div
                                class="bg-gradient-to-br from-white to-blue-50 rounded-3xl p-8 shadow-2xl hover:shadow-3xl transform transition-all duration-500 hover:-translate-y-2 border border-blue-100 relative overflow-hidden">
                                <!-- Certificate Border Effect -->
                                <div
                                    class="absolute inset-4 border-2 border-yellow-400 rounded-2xl opacity-20 group-hover:opacity-40 transition-all duration-300">
                                </div>

                                <!-- Award Badge -->
                                <div
                                    class="absolute -top-4 -right-4 w-24 h-24 bg-gradient-to-br from-yellow-400 to-amber-500 rounded-full flex items-center justify-center shadow-lg transform rotate-12">
                                    <i class="fas fa-trophy text-white text-xl"></i>
                                </div>

                                <!-- Award Icon -->
                                <div class="flex justify-center mb-6 mt-4">
                                    <div
                                        class="w-16 h-16 bg-gradient-to-br from-blue-600 to-purple-700 rounded-2xl flex items-center justify-center shadow-lg">
                                        <i class="fas fa-award text-xl text-white"></i>
                                    </div>
                                </div>

                                <!-- Award Content -->
                                <div class="text-center relative z-10">
                                    <h3
                                        class="text-xl font-bold text-gray-900 mb-4 group-hover:text-blue-700 transition-colors leading-tight">
                                        {{ $award->title }}
                                    </h3>

                                    <p class="text-gray-600 leading-relaxed mb-6 text-sm">
                                        {{ $award->description }}
                                    </p>

                                    <!-- Award Details -->
                                    <div class="flex flex-col gap-2 mb-6">
                                        @if ($award->year)
                                            <div
                                                class="inline-flex items-center justify-center bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-xs font-semibold">
                                                <i class="fas fa-calendar-alt mr-2"></i>
                                                Tahun {{ $award->year }}
                                            </div>
                                        @endif

                                        @if ($award->institution)
                                            <div
                                                class="inline-flex items-center justify-center bg-green-100 text-green-700 px-3 py-1 rounded-full text-xs font-semibold">
                                                <i class="fas fa-university mr-2"></i>
                                                {{ $award->institution }}
                                            </div>
                                        @endif

                                        @if ($award->category)
                                            <div
                                                class="inline-flex items-center justify-center bg-purple-100 text-purple-700 px-3 py-1 rounded-full text-xs font-semibold">
                                                <i class="fas fa-tag mr-2"></i>
                                                {{ $award->category }}
                                            </div>
                                        @endif
                                    </div>

                                    <!-- Certificate Style Footer -->
                                    <div class="border-t border-gray-200 pt-4 mt-4">
                                        <div class="flex items-center justify-center space-x-2 text-gray-500">
                                            <i class="fas fa-certificate text-yellow-500"></i>
                                            <span class="text-sm font-semibold">Sertifikat Penghargaan</span>
                                        </div>
                                    </div>
                                </div>

                                <!-- Hover Effect -->
                                <div
                                    class="absolute inset-0 rounded-3xl border-2 border-transparent group-hover:border-yellow-300 transition-all duration-300 opacity-0 group-hover:opacity-100">
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="lg:col-span-2 xl:col-span-3 text-center py-12">
                            <div class="inline-block bg-white rounded-2xl p-8 shadow-lg max-w-md">
                                <div
                                    class="w-16 h-16 bg-gray-200 rounded-2xl flex items-center justify-center mx-auto mb-4">
                                    <i class="fas fa-trophy text-2xl text-gray-400"></i>
                                </div>
                                <h3 class="text-xl font-semibold text-gray-800 mb-2">Belum Ada Penghargaan</h3>
                                <p class="text-gray-600 text-sm">Saat ini belum ada data penghargaan. Cek kembali nanti atau
                                    hubungi admin untuk informasi lebih lanjut.</p>
                            </div>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </section>

    <!-- Achievement Stats Section -->
    <section class="w-full bg-gradient-to-br from-blue-900 via-purple-900 to-indigo-900 py-16 lg:py-20">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-6xl mx-auto">
                <!-- Section Header -->
                <div class="text-center mb-16">
                    <h2 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-white mb-6">
                        Prestasi <span class="text-yellow-400">Membanggakan</span>
                    </h2>
                    <p class="text-xl text-blue-200 max-w-3xl mx-auto">
                        Perjalanan panjang yang diukir dengan dedikasi dan passion dalam melestarikan warisan budaya batik
                    </p>
                </div>

                <!-- Stats Grid -->
                <div class="grid grid-cols-2 lg:grid-cols-4 gap-8">
                    <!-- Stat 1 -->
                    <div class="text-center group">
                        <div
                            class="bg-white bg-opacity-10 rounded-3xl p-8 backdrop-blur-sm border border-white border-opacity-20 transform transition-all duration-500 hover:scale-105 hover:bg-opacity-20">
                            <div
                                class="w-16 h-16 bg-gradient-to-br from-yellow-400 to-amber-500 rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-lg">
                                <i class="fas fa-trophy text-2xl text-white"></i>
                            </div>
                            <div class="text-4xl lg:text-5xl font-bold text-yellow-400 mb-2">{{ count($awards) }}+</div>
                            <div class="text-lg text-blue-200 font-semibold">Penghargaan</div>
                            <div class="text-sm text-blue-300 mt-2">Diterima</div>
                        </div>
                    </div>

                    <!-- Stat 2 -->
                    <div class="text-center group">
                        <div
                            class="bg-white bg-opacity-10 rounded-3xl p-8 backdrop-blur-sm border border-white border-opacity-20 transform transition-all duration-500 hover:scale-105 hover:bg-opacity-20">
                            <div
                                class="w-16 h-16 bg-gradient-to-br from-green-400 to-emerald-500 rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-lg">
                                <i class="fas fa-calendar-alt text-2xl text-white"></i>
                            </div>
                            <div class="text-4xl lg:text-5xl font-bold text-green-400 mb-2">25+</div>
                            <div class="text-lg text-blue-200 font-semibold">Tahun</div>
                            <div class="text-sm text-blue-300 mt-2">Berkarya</div>
                        </div>
                    </div>

                    <!-- Stat 3 -->
                    <div class="text-center group">
                        <div
                            class="bg-white bg-opacity-10 rounded-3xl p-8 backdrop-blur-sm border border-white border-opacity-20 transform transition-all duration-500 hover:scale-105 hover:bg-opacity-20">
                            <div
                                class="w-16 h-16 bg-gradient-to-br from-blue-400 to-cyan-500 rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-lg">
                                <i class="fas fa-palette text-2xl text-white"></i>
                            </div>
                            <div class="text-4xl lg:text-5xl font-bold text-blue-400 mb-2">{{ count($batiks) }}+</div>
                            <div class="text-lg text-blue-200 font-semibold">Karya</div>
                            <div class="text-sm text-blue-300 mt-2">Diproduksi</div>
                        </div>
                    </div>

                    <!-- Stat 4 -->
                    <div class="text-center group">
                        <div
                            class="bg-white bg-opacity-10 rounded-3xl p-8 backdrop-blur-sm border border-white border-opacity-20 transform transition-all duration-500 hover:scale-105 hover:bg-opacity-20">
                            <div
                                class="w-16 h-16 bg-gradient-to-br from-purple-400 to-pink-500 rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-lg">
                                <i class="fas fa-users text-2xl text-white"></i>
                            </div>
                            <div class="text-4xl lg:text-5xl font-bold text-purple-400 mb-2">{{ count($umkms) }}+</div>
                            <div class="text-lg text-blue-200 font-semibold">Pengrajin</div>
                            <div class="text-sm text-blue-300 mt-2">Terlatih</div>
                        </div>
                    </div>
                </div>

                <!-- CTA Section -->
                <div class="text-center mt-16">
                    <div
                        class="bg-white bg-opacity-10 rounded-3xl p-8 backdrop-blur-sm border border-white border-opacity-20">
                        <h3 class="text-2xl sm:text-3xl font-bold text-white mb-4">
                            Ingin Mengetahui Lebih Lanjut?
                        </h3>
                        <p class="text-lg text-blue-200 mb-6 max-w-2xl mx-auto">
                            Jelajahi lebih dalam tentang perjalanan Kampung Batik Paseseh dan karya-karya luar biasa yang
                            telah dihasilkan
                        </p>
                        <div class="flex flex-col sm:flex-row gap-4 justify-center">
                            <a href="{{ route('aboutus') }}"
                                class="inline-flex items-center bg-yellow-400 text-gray-900 px-8 py-4 rounded-xl hover:bg-yellow-500 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl font-semibold">
                                <i class="fas fa-info-circle mr-3"></i>
                                Tentang Kami
                            </a>
                            <a href="{{ route('shop.index') }}"
                                class="inline-flex items-center bg-white text-gray-900 px-8 py-4 rounded-xl hover:bg-gray-100 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl font-semibold">
                                <i class="fas fa-shop mr-3"></i>
                                Lihat Koleksi Batik
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Recognition Section -->
    {{-- <section class="w-full bg-white py-16 lg:py-20">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-6xl mx-auto">
                <!-- Section Header -->
                <div class="text-center mb-16">
                    <h2 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-gray-900 mb-6">
                        Diakui <span class="text-blue-600">Secara Nasional</span>
                    </h2>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                        Penghargaan yang diterima merupakan bukti pengakuan atas kontribusi Kampung Batik Paseseh 
                        dalam melestarikan dan mengembangkan warisan budaya Indonesia
                    </p>
                </div>

                <!-- Recognition Grid -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Recognition 1 -->
                    <div class="text-center group">
                        <div class="bg-gradient-to-br from-blue-50 to-indigo-100 rounded-3xl p-8 transform transition-all duration-500 hover:scale-105 hover:shadow-2xl border-2 border-transparent hover:border-blue-200">
                            <div class="w-20 h-20 bg-blue-600 rounded-2xl flex items-center justify-center mx-auto mb-6 shadow-lg">
                                <i class="fas fa-landmark text-2xl text-white"></i>
                            </div>
                            <h3 class="text-2xl font-bold text-gray-900 mb-4">Kementerian Pendidikan & Kebudayaan</h3>
                            <p class="text-gray-600 leading-relaxed">
                                Penghargaan Pelestari Budaya Tradisional Tahun 2024
                            </p>
                        </div>
                    </div>

                    <!-- Recognition 2 -->
                    <div class="text-center group">
                        <div class="bg-gradient-to-br from-green-50 to-emerald-100 rounded-3xl p-8 transform transition-all duration-500 hover:scale-105 hover:shadow-2xl border-2 border-transparent hover:border-green-200">
                            <div class="w-20 h-20 bg-green-600 rounded-2xl flex items-center justify-center mx-auto mb-6 shadow-lg">
                                <i class="fas fa-industry text-2xl text-white"></i>
                            </div>
                            <h3 class="text-2xl font-bold text-gray-900 mb-4">Kementerian Pariwisata & Ekonomi Kreatif</h3>
                            <p class="text-gray-600 leading-relaxed">
                                Desa Wisata Kreatif Terbaik 2024
                            </p>
                        </div>
                    </div>

                    <!-- Recognition 3 -->
                    <div class="text-center group">
                        <div class="bg-gradient-to-br from-purple-50 to-pink-100 rounded-3xl p-8 transform transition-all duration-500 hover:scale-105 hover:shadow-2xl border-2 border-transparent hover:border-purple-200">
                            <div class="w-20 h-20 bg-purple-600 rounded-2xl flex items-center justify-center mx-auto mb-6 shadow-lg">
                                <i class="fas fa-globe-asia text-2xl text-white"></i>
                            </div>
                            <h3 class="text-2xl font-bold text-gray-900 mb-4">UNESCO Indonesia</h3>
                            <p class="text-gray-600 leading-relaxed">
                                Warisan Budaya Takbenda Indonesia 2024
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
@endsection
