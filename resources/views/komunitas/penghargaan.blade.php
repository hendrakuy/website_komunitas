<style>
/* Smooth animation for decorative elements */
@keyframes pulse {
    0%, 100% {
        opacity: 0.7;
        transform: scale(1);
    }
    50% {
        opacity: 0.4;
        transform: scale(1.1);
    }
}

.animate-pulse {
    animation: pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
}

/* Remove default iframe border for better appearance */
iframe {
    border: none;
}

/* Ensure smooth transitions */
* {
    transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
}
</style>

@extends('layouts.app')

@section('title', 'Batik Paseseh - Penghargaan')

@section('hero')
    <!-- Enhanced Hero Section -->
    <section class="relative min-h-[70vh] sm:min-h-[80vh] md:min-h-screen overflow-hidden flex items-center justify-center"
        style="background-image: url('{{ asset('images/Bg_Aboutus.png') }}');">

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

        <!-- Scroll Indicator -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2">
            <div class="animate-bounce">
                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3">
                    </path>
                </svg>
            </div>
        </div>
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
                        Dokumentasi <span class="text-blue-600">Komunitas</span>
                    </h2>
                    <p class="text-base sm:text-lg text-gray-600 max-w-3xl mx-auto leading-relaxed">
                        Simak perjalanan inspiratif komunitas batik Paseseh dalam meraih berbagai penghargaan prestisius
                    </p>
                </div>

                <!-- Video Container -->
                <div class="relative group px-4 sm:px-6">
                    <div
                        class="bg-gradient-to-br from-blue-50 to-indigo-100 rounded-3xl p-6 sm:p-8 shadow-2xl max-w-[800px] mx-auto relative overflow-visible">

                        <!-- Video Wrapper with proper aspect ratio -->
                        <div class="relative rounded-2xl overflow-hidden shadow-lg" style="padding-bottom: 56.25%;">
                            <iframe class="absolute top-0 left-0 w-full h-full rounded-2xl"
                                src="https://www.youtube-nocookie.com/embed/oi_DnJ9MDL0?rel=0&modestbranding=1&enablejsapi=1"
                                title="Video Dokumentasi Penghargaan Kampung Batik Paseseh" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen loading="lazy"
                                aria-label="Video dokumentasi penghargaan Kampung Batik Paseseh">
                            </iframe>

                            <!-- Loading Overlay (opsional) -->
                            <div class="absolute inset-0 bg-gray-200 animate-pulse rounded-2xl -z-10"></div>
                        </div>

                        <!-- Play Button Overlay (opsional untuk visual enhancement) -->
                        <div
                            class="absolute inset-0 flex items-center justify-center pointer-events-none opacity-0 group-hover:opacity-10 transition-opacity duration-300">
                            <div class="w-20 h-20 bg-white rounded-full flex items-center justify-center shadow-2xl">
                                <svg class="w-10 h-10 text-red-600 ml-1" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M8 5v14l11-7z" />
                                </svg>
                            </div>
                        </div>

                        <!-- Decorative Elements - positioned relative to container -->
                        <div
                            class="absolute -top-3 -left-3 sm:-top-4 sm:-left-4 w-6 h-6 sm:w-8 sm:h-8 bg-yellow-400 rounded-full opacity-70 animate-pulse z-10">
                        </div>
                        <div class="absolute -bottom-3 -right-3 sm:-bottom-4 sm:-right-4 w-8 h-8 sm:w-12 sm:h-12 bg-blue-400 rounded-full opacity-60 animate-pulse z-10"
                            style="animation-delay: 300ms;"></div>
                    </div>

                    <!-- Video Description -->
                    <div class="mt-6 sm:mt-8 text-center px-4">
                        <p class="text-gray-600 text-sm sm:text-base lg:text-lg leading-relaxed max-w-2xl mx-auto">
                            Video ini menampilkan momen-momen spesial ketika Kampung Batik Paseseh menerima berbagai
                            penghargaan atas dedikasi dalam melestarikan dan mengembangkan seni batik tradisional Indonesia.
                        </p>
                    </div>
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
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-gray-900 mb-6">
                    <span class="bg-gradient-to-r from-blue-600 to-purple-700 bg-clip-text text-transparent">
                        Galeri Penghargaan
                    </span>
                </h2>
                <p class="text-base sm:text-lg text-gray-600 max-w-4xl mx-auto leading-relaxed">
                    Kumpulan penghargaan yang telah diraih oleh Kampung Batik Paseseh sebagai bentuk apresiasi
                    terhadap dedikasi dalam melestarikan dan mengembangkan seni batik tradisional
                </p>
                <div class="w-32 h-1 bg-gradient-to-r from-blue-600 to-purple-700 mx-auto mt-8 rounded-full"></div>
            </div>

            <!-- Awards Grid -->
            <div class="max-w-7xl mx-auto">
                <!-- Desktop: Grid Layout -->
                <div class="hidden lg:grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-8">
                    @forelse($awards as $award)
                        <div class="group">
                            <div
                                class="relative bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 border border-gray-100">

                                <!-- Top Accent Bar -->
                                <div
                                    class="absolute top-0 left-0 right-0 h-2 bg-gradient-to-r from-yellow-400 via-amber-500 to-yellow-600">
                                </div>

                                <!-- Trophy Badge -->
                                <div class="absolute top-6 right-6 z-10">
                                    <div class="relative">
                                        <div
                                            class="w-16 h-16 bg-gradient-to-br from-yellow-400 to-amber-600 rounded-full flex items-center justify-center shadow-lg transform -rotate-12 group-hover:rotate-0 transition-transform duration-500">
                                            <i class="fas fa-trophy text-white text-xl"></i>
                                        </div>
                                        <div
                                            class="absolute inset-0 bg-yellow-400 rounded-full blur-xl opacity-30 group-hover:opacity-50 transition-opacity duration-500">
                                        </div>
                                    </div>
                                </div>

                                <!-- Award Image -->
                                @if ($award->image)
                                    <div class="relative h-64 overflow-hidden bg-gradient-to-br from-gray-50 to-gray-100">
                                        <img src="{{ asset('storage/' . $award->image) }}" alt="{{ $award->title }}"
                                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                                        <div
                                            class="absolute inset-0 bg-gradient-to-t from-black/40 via-transparent to-transparent">
                                        </div>
                                    </div>
                                @else
                                    <div
                                        class="relative h-64 bg-gradient-to-br from-yellow-50 via-amber-50 to-orange-50 flex items-center justify-center">
                                        <i class="fas fa-award text-yellow-300 text-6xl opacity-30"></i>
                                    </div>
                                @endif

                                <!-- Content -->
                                <div class="p-6">
                                    <!-- Title -->
                                    <h3
                                        class="text-xl font-bold text-gray-900 mb-3 leading-tight min-h-[56px] line-clamp-2 group-hover:text-amber-600 transition-colors">
                                        {{ $award->title }}
                                    </h3>

                                    <!-- Description -->
                                    <p class="text-gray-600 text-sm leading-relaxed mb-4 line-clamp-3 min-h-[60px]">
                                        {{ $award->description }}
                                    </p>

                                    <!-- Details Grid -->
                                    <div class="space-y-2 mb-4">
                                        @if ($award->year)
                                            <div class="flex items-center text-sm">
                                                <div
                                                    class="w-8 h-8 bg-blue-50 rounded-lg flex items-center justify-center mr-3 flex-shrink-0">
                                                    <i class="fas fa-calendar-alt text-blue-600 text-xs"></i>
                                                </div>
                                                <span class="text-gray-700 font-medium">Tahun {{ $award->year }}</span>
                                            </div>
                                        @endif

                                        @if ($award->institution)
                                            <div class="flex items-center text-sm">
                                                <div
                                                    class="w-8 h-8 bg-green-50 rounded-lg flex items-center justify-center mr-3 flex-shrink-0">
                                                    <i class="fas fa-university text-green-600 text-xs"></i>
                                                </div>
                                                <span
                                                    class="text-gray-700 font-medium line-clamp-1">{{ $award->institution }}</span>
                                            </div>
                                        @endif

                                        @if ($award->category)
                                            <div class="flex items-center text-sm">
                                                <div
                                                    class="w-8 h-8 bg-purple-50 rounded-lg flex items-center justify-center mr-3 flex-shrink-0">
                                                    <i class="fas fa-tag text-purple-600 text-xs"></i>
                                                </div>
                                                <span
                                                    class="text-gray-700 font-medium line-clamp-1">{{ $award->category }}</span>
                                            </div>
                                        @endif
                                    </div>

                                    <!-- Certificate Badge -->
                                    <div class="pt-4 border-t border-gray-100">
                                        <div class="flex items-center justify-center space-x-2 text-amber-600">
                                            <i class="fas fa-certificate"></i>
                                            <span class="text-sm font-semibold">Sertifikat Resmi</span>
                                        </div>
                                    </div>
                                </div>

                                <!-- Decorative Corner -->
                                <div
                                    class="absolute bottom-0 right-0 w-24 h-24 bg-gradient-to-tl from-yellow-50 to-transparent opacity-50">
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="lg:col-span-2 xl:col-span-3 text-center py-12">
                            <div class="inline-block bg-white rounded-2xl p-8 shadow-lg max-w-md border border-gray-100">
                                <div
                                    class="w-20 h-20 bg-gradient-to-br from-gray-100 to-gray-200 rounded-2xl flex items-center justify-center mx-auto mb-4">
                                    <i class="fas fa-trophy text-3xl text-gray-400"></i>
                                </div>
                                <h3 class="text-xl font-bold text-gray-800 mb-2">Belum Ada Penghargaan</h3>
                                <p class="text-gray-600 text-sm leading-relaxed">Saat ini belum ada data penghargaan yang
                                    tersedia.</p>
                            </div>
                        </div>
                    @endforelse
                </div>

                <!-- Mobile/Tablet: Horizontal Scroll with Navigation -->
                <div class="lg:hidden relative">
                    @if ($awards->count() > 0)
                        <!-- Navigation Buttons -->
                        <button data-scroll-nav="prev" data-scroll-target="awards-scroll"
                            class="scroll-nav-btn absolute left-0 top-1/2 -translate-y-1/2 -translate-x-3 sm:-translate-x-4 z-10 bg-white hover:bg-gray-50 text-gray-800 rounded-full p-2.5 sm:p-3 shadow-xl transition-all duration-300 hover:scale-110 disabled:opacity-0 disabled:pointer-events-none">
                            <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 19l-7-7 7-7"></path>
                            </svg>
                        </button>

                        <button data-scroll-nav="next" data-scroll-target="awards-scroll"
                            class="scroll-nav-btn absolute right-0 top-1/2 -translate-y-1/2 translate-x-3 sm:translate-x-4 z-10 bg-white hover:bg-gray-50 text-gray-800 rounded-full p-2.5 sm:p-3 shadow-xl transition-all duration-300 hover:scale-110 disabled:opacity-0 disabled:pointer-events-none">
                            <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                                </path>
                            </svg>
                        </button>

                        <!-- Scrollable Container -->
                        <div id="awards-scroll"
                            class="overflow-x-auto scrollbar-hide snap-x snap-mandatory scroll-smooth pb-4"
                            data-scroll-container>
                            <div class="flex space-x-4 sm:space-x-6 min-w-max px-1">
                                @foreach ($awards as $award)
                                    <div class="snap-center group flex-shrink-0 w-80 sm:w-96">
                                        <div
                                            class="relative bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 border border-gray-100 h-full">

                                            <!-- Top Accent Bar -->
                                            <div
                                                class="absolute top-0 left-0 right-0 h-2 bg-gradient-to-r from-yellow-400 via-amber-500 to-yellow-600">
                                            </div>

                                            <!-- Trophy Badge -->
                                            <div class="absolute top-4 right-4 z-10">
                                                <div class="relative">
                                                    <div
                                                        class="w-14 h-14 bg-gradient-to-br from-yellow-400 to-amber-600 rounded-full flex items-center justify-center shadow-lg transform -rotate-12 group-hover:rotate-0 transition-transform duration-500">
                                                        <i class="fas fa-trophy text-white text-lg"></i>
                                                    </div>
                                                    <div
                                                        class="absolute inset-0 bg-yellow-400 rounded-full blur-xl opacity-30 group-hover:opacity-50 transition-opacity duration-500">
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Award Image -->
                                            @if ($award->image)
                                                <div
                                                    class="relative h-52 overflow-hidden bg-gradient-to-br from-gray-50 to-gray-100">
                                                    <img src="{{ asset('storage/' . $award->image) }}"
                                                        alt="{{ $award->title }}"
                                                        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                                                    <div
                                                        class="absolute inset-0 bg-gradient-to-t from-black/40 via-transparent to-transparent">
                                                    </div>
                                                </div>
                                            @else
                                                <div
                                                    class="relative h-52 bg-gradient-to-br from-yellow-50 via-amber-50 to-orange-50 flex items-center justify-center">
                                                    <i class="fas fa-award text-yellow-300 text-5xl opacity-30"></i>
                                                </div>
                                            @endif

                                            <!-- Content -->
                                            <div class="p-5">
                                                <!-- Title -->
                                                <h3
                                                    class="text-lg font-bold text-gray-900 mb-2 leading-tight line-clamp-2 group-hover:text-amber-600 transition-colors">
                                                    {{ $award->title }}
                                                </h3>

                                                <!-- Description -->
                                                <p class="text-gray-600 text-sm leading-relaxed mb-4 line-clamp-2">
                                                    {{ $award->description }}
                                                </p>

                                                <!-- Details -->
                                                <div class="space-y-2 mb-4">
                                                    @if ($award->year)
                                                        <div class="flex items-center text-xs">
                                                            <div
                                                                class="w-7 h-7 bg-blue-50 rounded-lg flex items-center justify-center mr-2 flex-shrink-0">
                                                                <i
                                                                    class="fas fa-calendar-alt text-blue-600 text-[10px]"></i>
                                                            </div>
                                                            <span class="text-gray-700 font-medium">Tahun
                                                                {{ $award->year }}</span>
                                                        </div>
                                                    @endif

                                                    @if ($award->institution)
                                                        <div class="flex items-center text-xs">
                                                            <div
                                                                class="w-7 h-7 bg-green-50 rounded-lg flex items-center justify-center mr-2 flex-shrink-0">
                                                                <i
                                                                    class="fas fa-university text-green-600 text-[10px]"></i>
                                                            </div>
                                                            <span
                                                                class="text-gray-700 font-medium line-clamp-1">{{ $award->institution }}</span>
                                                        </div>
                                                    @endif

                                                    @if ($award->category)
                                                        <div class="flex items-center text-xs">
                                                            <div
                                                                class="w-7 h-7 bg-purple-50 rounded-lg flex items-center justify-center mr-2 flex-shrink-0">
                                                                <i class="fas fa-tag text-purple-600 text-[10px]"></i>
                                                            </div>
                                                            <span
                                                                class="text-gray-700 font-medium line-clamp-1">{{ $award->category }}</span>
                                                        </div>
                                                    @endif
                                                </div>

                                                <!-- Certificate Badge -->
                                                <div class="pt-3 border-t border-gray-100">
                                                    <div class="flex items-center justify-center space-x-2 text-amber-600">
                                                        <i class="fas fa-certificate text-sm"></i>
                                                        <span class="text-xs font-semibold">Sertifikat Resmi</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Decorative Corner -->
                                            <div
                                                class="absolute bottom-0 right-0 w-20 h-20 bg-gradient-to-tl from-yellow-50 to-transparent opacity-50">
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <!-- Scroll Indicators -->
                        <div class="flex justify-center mt-6">
                            <div class="scroll-indicator h-1 w-20 sm:w-24 bg-gray-200 rounded-full overflow-hidden">
                                <div class="scroll-indicator-progress h-full bg-gradient-to-r from-yellow-400 to-amber-600 rounded-full transition-all duration-300"
                                    style="width: 0%"></div>
                            </div>
                        </div>
                    @else
                        <div class="text-center py-12">
                            <div class="inline-block bg-white rounded-2xl p-8 shadow-lg max-w-md border border-gray-100">
                                <div
                                    class="w-20 h-20 bg-gradient-to-br from-gray-100 to-gray-200 rounded-2xl flex items-center justify-center mx-auto mb-4">
                                    <i class="fas fa-trophy text-3xl text-gray-400"></i>
                                </div>
                                <h3 class="text-xl font-bold text-gray-800 mb-2">Belum Ada Penghargaan</h3>
                                <p class="text-gray-600 text-sm leading-relaxed">Saat ini belum ada data penghargaan yang
                                    tersedia.</p>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>

    <!-- Achievement Stats Section -->
    <section class="w-full bg-gradient-to-br from-blue-900 via-purple-900 to-indigo-900 py-12 sm:py-16 lg:py-20">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-6xl mx-auto">
                <!-- Section Header -->
                <div class="text-center mb-12 sm:mb-16">
                    <h2 class="text-3xl sm:text-4xl lg:text-5xl xl:text-6xl font-bold text-white mb-4 sm:mb-6 px-2">
                        Prestasi <span class="text-yellow-400">Membanggakan</span>
                    </h2>
                    <p class="text-base sm:text-lg lg:text-xl text-blue-200 max-w-3xl mx-auto px-4">
                        Perjalanan panjang yang diukir dengan dedikasi dan passion dalam melestarikan warisan budaya batik
                    </p>
                </div>

                <!-- Stats Grid -->
                <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6 lg:gap-8">
                    <!-- Stat 1 -->
                    <div class="text-center group">
                        <div
                            class="bg-white bg-opacity-10 rounded-2xl sm:rounded-3xl p-4 sm:p-6 lg:p-8 backdrop-blur-sm border border-white border-opacity-20 transform transition-all duration-500 hover:scale-105 hover:bg-opacity-20">
                            <div
                                class="w-12 h-12 sm:w-14 sm:h-14 lg:w-16 lg:h-16 bg-gradient-to-br from-yellow-400 to-amber-500 rounded-xl sm:rounded-2xl flex items-center justify-center mx-auto mb-3 sm:mb-4 shadow-lg">
                                <i class="fas fa-trophy text-lg sm:text-xl lg:text-2xl text-white"></i>
                            </div>
                            <div class="text-3xl sm:text-4xl font-bold text-yellow-400 mb-1 sm:mb-2">{{ count($awards) }}+
                            </div>
                            <div class="text-sm sm:text-base lg:text-lg text-blue-200 font-semibold">Penghargaan</div>
                            <div class="text-xs sm:text-sm text-blue-300 mt-1 sm:mt-2">Diterima</div>
                        </div>
                    </div>

                    <!-- Stat 2 -->
                    <div class="text-center group">
                        <div
                            class="bg-white bg-opacity-10 rounded-2xl sm:rounded-3xl p-4 sm:p-6 lg:p-8 backdrop-blur-sm border border-white border-opacity-20 transform transition-all duration-500 hover:scale-105 hover:bg-opacity-20">
                            <div
                                class="w-12 h-12 sm:w-14 sm:h-14 lg:w-16 lg:h-16 bg-gradient-to-br from-green-400 to-emerald-500 rounded-xl sm:rounded-2xl flex items-center justify-center mx-auto mb-3 sm:mb-4 shadow-lg">
                                <i class="fas fa-calendar-alt text-lg sm:text-xl lg:text-2xl text-white"></i>
                            </div>
                            <div class="text-3xl sm:text-4xl font-bold text-green-400 mb-1 sm:mb-2">25+</div>
                            <div class="text-sm sm:text-base lg:text-lg text-blue-200 font-semibold">Tahun</div>
                            <div class="text-xs sm:text-sm text-blue-300 mt-1 sm:mt-2">Berkarya</div>
                        </div>
                    </div>

                    <!-- Stat 3 -->
                    <div class="text-center group">
                        <div
                            class="bg-white bg-opacity-10 rounded-2xl sm:rounded-3xl p-4 sm:p-6 lg:p-8 backdrop-blur-sm border border-white border-opacity-20 transform transition-all duration-500 hover:scale-105 hover:bg-opacity-20">
                            <div
                                class="w-12 h-12 sm:w-14 sm:h-14 lg:w-16 lg:h-16 bg-gradient-to-br from-blue-400 to-cyan-500 rounded-xl sm:rounded-2xl flex items-center justify-center mx-auto mb-3 sm:mb-4 shadow-lg">
                                <i class="fas fa-palette text-lg sm:text-xl lg:text-2xl text-white"></i>
                            </div>
                            <div class="text-3xl sm:text-4xl font-bold text-blue-400 mb-1 sm:mb-2">{{ count($batiks) }}+
                            </div>
                            <div class="text-sm sm:text-base lg:text-lg text-blue-200 font-semibold">Karya</div>
                            <div class="text-xs sm:text-sm text-blue-300 mt-1 sm:mt-2">Diproduksi</div>
                        </div>
                    </div>

                    <!-- Stat 4 -->
                    <div class="text-center group">
                        <div
                            class="bg-white bg-opacity-10 rounded-2xl sm:rounded-3xl p-4 sm:p-6 lg:p-8 backdrop-blur-sm border border-white border-opacity-20 transform transition-all duration-500 hover:scale-105 hover:bg-opacity-20">
                            <div
                                class="w-12 h-12 sm:w-14 sm:h-14 lg:w-16 lg:h-16 bg-gradient-to-br from-purple-400 to-pink-500 rounded-xl sm:rounded-2xl flex items-center justify-center mx-auto mb-3 sm:mb-4 shadow-lg">
                                <i class="fas fa-users text-lg sm:text-xl lg:text-2xl text-white"></i>
                            </div>
                            <div class="text-3xl sm:text-4xl font-bold text-purple-400 mb-1 sm:mb-2">{{ count($umkms) }}+
                            </div>
                            <div class="text-sm sm:text-base lg:text-lg text-blue-200 font-semibold">Pengrajin</div>
                            <div class="text-xs sm:text-sm text-blue-300 mt-1 sm:mt-2">Terlatih</div>
                        </div>
                    </div>
                </div>

                <!-- CTA Section -->
                <div class="text-center mt-12 sm:mt-16">
                    <div
                        class="bg-white bg-opacity-10 rounded-2xl sm:rounded-3xl p-6 sm:p-8 backdrop-blur-sm border border-white border-opacity-20">
                        <h3 class="text-xl sm:text-2xl lg:text-3xl font-bold text-white mb-3 sm:mb-4 px-2">
                            Ingin Mengetahui Lebih Lanjut?
                        </h3>
                        <p class="text-sm sm:text-base lg:text-lg text-blue-200 mb-6 max-w-2xl mx-auto px-4">
                            Jelajahi lebih dalam tentang perjalanan Kampung Batik Paseseh dan karya-karya luar biasa yang
                            telah dihasilkan
                        </p>
                        <div class="flex flex-col sm:flex-row gap-3 sm:gap-4 justify-center px-4">
                            <a href="{{ route('aboutus') }}"
                                class="inline-flex items-center justify-center bg-yellow-400 text-gray-900 px-6 sm:px-8 py-3 sm:py-4 rounded-xl hover:bg-yellow-500 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl font-semibold text-sm sm:text-base">
                                <i class="fas fa-info-circle mr-2 sm:mr-3"></i>
                                Tentang Kami
                            </a>
                            <a href="{{ route('shop.index') }}"
                                class="inline-flex items-center justify-center bg-white text-gray-900 px-6 sm:px-8 py-3 sm:py-4 rounded-xl hover:bg-gray-100 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl font-semibold text-sm sm:text-base">
                                <i class="fas fa-shop mr-2 sm:mr-3"></i>
                                Lihat Koleksi Batik
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@vite('resources/js/scroll-horizontal.js')
