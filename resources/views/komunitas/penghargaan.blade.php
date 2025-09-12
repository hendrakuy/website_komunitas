@extends('layouts.app')

@section('hero')
    <!-- Hero Section - Full Width -->
    <section class="relative overflow-hidden">
        <!-- Hero Background -->
        <div class="relative w-full h-64 sm:h-80 md:h-96 lg:h-[28rem] xl:h-[32rem] bg-cover bg-center"
            style="background-image: url('{{ asset('images/bg_komunitas.png') }}');">

            <!-- Overlay hitam transparan -->
            <div class="absolute inset-0 bg-black bg-opacity-20"></div>

            <!-- Konten Teks -->
            <div class="relative z-10 h-full flex items-center justify-center text-center text-white px-4">
                <div>
                    <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold mb-2 md:mb-4 tracking-wide">
                        Penghargaan Dunia Komunitas
                    </h1>
                    <h2 class="text-xl sm:text-2xl md:text-3xl lg:text-4xl font-semibold mb-4 md:mb-6">
                        Kampung Batik Paseseh
                    </h2>
                    <div class="w-16 sm:w-20 md:w-24 h-1 bg-yellow-400 mx-auto"></div>
                </div>
            </div>
        </div>

        <!-- Decorative batik pattern overlay -->
        <div
            class="absolute top-4 sm:top-6 md:top-8 left-4 sm:left-6 md:left-8 w-12 sm:w-16 md:w-20 h-12 sm:h-16 md:h-20 border-2 border-yellow-400 rounded-full opacity-30">
        </div>
        <div
            class="absolute bottom-4 sm:bottom-6 md:bottom-8 right-4 sm:right-6 md:right-8 w-12 sm:w-16 md:w-16 h-12 sm:h-16 md:h-16 border-2 border-yellow-400 rounded-full opacity-20">
        </div>
    </section>
@endsection

@section('content')
    <!-- Video Section - Full Width -->
    <section class="w-full bg-white py-12 mb-0">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <div class="relative bg-gradient-to-br from-amber-100 to-orange-100 rounded-2xl p-8 shadow-xl">
                    <div class="aspect-video bg-gray-900 rounded-xl overflow-hidden relative group cursor-pointer">
                        <img src="/api/placeholder/800/450" alt="Workshop Batik Video" class="w-full h-full object-cover">
                        <!-- Play Button Overlay -->
                        <div
                            class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center group-hover:bg-opacity-60 transition">
                            <div
                                class="w-20 h-20 bg-white rounded-full flex items-center justify-center shadow-xl group-hover:scale-110 transition transform">
                                <i class="fas fa-play text-2xl text-gray-800 ml-1"></i>
                            </div>
                        </div>
                        <!-- Video Label -->
                        <div
                            class="absolute top-4 left-4 bg-red-600 text-white px-3 py-1 rounded-full text-sm font-semibold">
                            <i class="fas fa-video mr-1"></i> LIVE
                        </div>
                    </div>
                    <!-- Decorative elements around video -->
                    <div class="absolute -top-4 -left-4 w-8 h-8 bg-yellow-400 rounded-full opacity-70"></div>
                    <div class="absolute -bottom-4 -right-4 w-12 h-12 bg-orange-400 rounded-full opacity-60"></div>
                    <div class="absolute top-6 -right-6 w-6 h-6 bg-red-400 rounded-full opacity-80"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Awards Section - Full Width -->
    <section class="w-full bg-gradient-to-br from-slate-100 via-blue-50 to-indigo-100 py-16">
        <div class="container mx-auto px-4">
            <!-- Section Header -->
            <div class="text-center mb-12">
                <h3 class="text-4xl font-bold text-blue-600 mb-4">Penghargaan</h3>
                <p class="text-lg text-gray-700 max-w-3xl mx-auto leading-relaxed">
                    Sebagai bentuk menilai keberhasilan perjalanan komunitas batik Pasesen dalam berbagai
                    menciptakan pengrajin dan kekuatan berkarya
                </p>
                <div class="w-24 h-1 bg-blue-600 mx-auto mt-6"></div>
            </div>

            <!-- Awards Display -->
            <div class="max-w-5xl mx-auto">
                <!-- Main Awards Container -->
                <div class="bg-blue-600 rounded-3xl p-8 relative overflow-hidden">
                    <!-- Decorative Background Pattern -->
                    <div class="absolute inset-0 opacity-10">
                        <div class="absolute top-4 left-4 w-32 h-32 border-2 border-white rounded-full"></div>
                        <div class="absolute bottom-8 right-8 w-24 h-24 border-2 border-white rounded-full"></div>
                        <div
                            class="absolute top-1/2 left-1/4 w-16 h-16 border border-white rounded-full transform -translate-y-1/2">
                        </div>
                    </div>

                    <!-- Awards Grid -->
                    <div class="relative z-10">
                        <div class="grid md:grid-cols-3 gap-8 items-center">
                            <!-- Award 1 -->
                            <div class="text-center group">
                                <div class="relative inline-block">
                                    <div
                                        class="w-48 h-64 bg-gradient-to-b from-yellow-400 via-amber-500 to-yellow-600 rounded-xl shadow-2xl transform group-hover:scale-105 transition duration-300 relative overflow-hidden">
                                        <!-- Certificate Design -->
                                        <div
                                            class="absolute inset-2 bg-gradient-to-b from-blue-900 via-blue-800 to-blue-900 rounded-lg">
                                            <!-- Decorative Border -->
                                            <div class="absolute inset-1 border-2 border-yellow-400 rounded-lg">
                                                <!-- Content Area -->
                                                <div class="p-4 text-center flex flex-col justify-center h-full">
                                                    <div class="text-yellow-400 mb-2">
                                                        <i class="fas fa-award text-3xl"></i>
                                                    </div>
                                                    <h4 class="text-white text-sm font-bold mb-2 leading-tight">Piagam
                                                        Penghargaan</h4>
                                                    <div class="text-yellow-300 text-xs mb-2">
                                                        <div class="w-8 h-px bg-yellow-400 mx-auto mb-1"></div>
                                                        Batik Paseseh
                                                        <div class="w-8 h-px bg-yellow-400 mx-auto mt-1"></div>
                                                    </div>
                                                    <p class="text-white text-xs leading-relaxed">Atas Prestasi dalam
                                                        Pengembangan Seni Batik Tradisional</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Certificate Ribbon -->
                                        <div
                                            class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 w-6 h-8 bg-red-600">
                                        </div>
                                        <div
                                            class="absolute -bottom-1 left-1/2 transform -translate-x-1/2 w-4 h-6 bg-red-700 clip-path-triangle">
                                        </div>
                                    </div>
                                    <!-- Glow Effect -->
                                    <div
                                        class="absolute inset-0 bg-yellow-400 rounded-xl opacity-20 blur-xl group-hover:opacity-30 transition">
                                    </div>
                                </div>
                            </div>

                            <!-- Award 2 (Center - Larger) -->
                            <div class="text-center group">
                                <div class="relative inline-block">
                                    <div
                                        class="w-52 h-72 bg-gradient-to-b from-yellow-300 via-amber-400 to-yellow-500 rounded-xl shadow-2xl transform group-hover:scale-105 transition duration-300 relative overflow-hidden">
                                        <!-- Certificate Design -->
                                        <div
                                            class="absolute inset-2 bg-gradient-to-b from-blue-900 via-blue-800 to-blue-900 rounded-lg">
                                            <!-- Decorative Border -->
                                            <div class="absolute inset-1 border-2 border-yellow-400 rounded-lg">
                                                <!-- Content Area -->
                                                <div class="p-4 text-center flex flex-col justify-center h-full">
                                                    <div class="text-yellow-400 mb-3">
                                                        <i class="fas fa-trophy text-4xl"></i>
                                                    </div>
                                                    <h4 class="text-white text-base font-bold mb-3 leading-tight">Piagam
                                                        Penghargaan</h4>
                                                    <div class="text-yellow-300 text-sm mb-3">
                                                        <div class="w-12 h-px bg-yellow-400 mx-auto mb-2"></div>
                                                        Batik Paseseh
                                                        <div class="w-12 h-px bg-yellow-400 mx-auto mt-2"></div>
                                                    </div>
                                                    <p class="text-white text-sm leading-relaxed">Juara Utama Inovasi Batik
                                                        Nusantara 2024</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Certificate Ribbon -->
                                        <div
                                            class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 w-6 h-8 bg-red-600">
                                        </div>
                                        <div
                                            class="absolute -bottom-1 left-1/2 transform -translate-x-1/2 w-4 h-6 bg-red-700">
                                        </div>
                                    </div>
                                    <!-- Glow Effect -->
                                    <div
                                        class="absolute inset-0 bg-yellow-300 rounded-xl opacity-30 blur-xl group-hover:opacity-40 transition">
                                    </div>
                                </div>
                            </div>

                            <!-- Award 3 -->
                            <div class="text-center group">
                                <div class="relative inline-block">
                                    <div
                                        class="w-48 h-64 bg-gradient-to-b from-yellow-400 via-amber-500 to-yellow-600 rounded-xl shadow-2xl transform group-hover:scale-105 transition duration-300 relative overflow-hidden">
                                        <!-- Certificate Design -->
                                        <div
                                            class="absolute inset-2 bg-gradient-to-b from-blue-900 via-blue-800 to-blue-900 rounded-lg">
                                            <!-- Decorative Border -->
                                            <div class="absolute inset-1 border-2 border-yellow-400 rounded-lg">
                                                <!-- Content Area -->
                                                <div class="p-4 text-center flex flex-col justify-center h-full">
                                                    <div class="text-yellow-400 mb-2">
                                                        <i class="fas fa-medal text-3xl"></i>
                                                    </div>
                                                    <h4 class="text-white text-sm font-bold mb-2 leading-tight">Piagam
                                                        Penghargaan</h4>
                                                    <div class="text-yellow-300 text-xs mb-2">
                                                        <div class="w-8 h-px bg-yellow-400 mx-auto mb-1"></div>
                                                        Batik Paseseh
                                                        <div class="w-8 h-px bg-yellow-400 mx-auto mt-1"></div>
                                                    </div>
                                                    <p class="text-white text-xs leading-relaxed">Kontribusi Terbaik dalam
                                                        Pelestarian Budaya</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Certificate Ribbon -->
                                        <div
                                            class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 w-6 h-8 bg-red-600">
                                        </div>
                                        <div
                                            class="absolute -bottom-1 left-1/2 transform -translate-x-1/2 w-4 h-6 bg-red-700">
                                        </div>
                                    </div>
                                    <!-- Glow Effect -->
                                    <div
                                        class="absolute inset-0 bg-yellow-400 rounded-xl opacity-20 blur-xl group-hover:opacity-30 transition">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Achievement Stats -->
                        <div class="mt-12 grid grid-cols-2 md:grid-cols-4 gap-6">
                            <div class="text-center text-white">
                                <div class="text-3xl font-bold text-yellow-400">12</div>
                                <div class="text-sm opacity-90">Penghargaan Diterima</div>
                            </div>
                            <div class="text-center text-white">
                                <div class="text-3xl font-bold text-yellow-400">25</div>
                                <div class="text-sm opacity-90">Tahun Berkarya</div>
                            </div>
                            <div class="text-center text-white">
                                <div class="text-3xl font-bold text-yellow-400">200+</div>
                                <div class="text-sm opacity-90">Karya Diproduksi</div>
                            </div>
                            <div class="text-center text-white">
                                <div class="text-3xl font-bold text-yellow-400">50+</div>
                                <div class="text-sm opacity-90">Pengrajin Terlatih</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
