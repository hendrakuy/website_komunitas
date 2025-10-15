<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar dengan Menu Aktif</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    {{-- <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet"> --}}
    <style>
        .active-menu {
            background-color: white;
            color: #1E41FB !important;
            border-radius: 0.5rem;
        }

        .active-menu-mobile {
            background-color: white;
            color: #1E41FB !important;
            border-radius: 0.5rem;
        }
    </style>
</head>

{{-- <body class="bg-gray-100 min-h-screen">
    <header class="bg-[#1E41FB]" x-data="navbar()"> --}}

<body class="font-sans bg-gray-100 min-h-screen" x-data="{ scrolled: false }" x-init="window.addEventListener('scroll', () => {
    scrolled = window.scrollY > 50;
})">
    <header
        :class="scrolled ? 'sticky top-0 z-50 bg-white/95 backdrop-blur-md shadow-lg border-b border-gray-200' :
            'relative bg-gradient-to-r from-blue-900 to-purple-800'"
        x-data="navbar()" class="transition-all duration-500 ease-in-out">
        <nav aria-label="Global" class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8">
            <!-- Logo Section -->
            <div class="flex lg:flex-1">
                <a href="{{ route('home') }}" class="-m-1.5 p-1.5 flex items-center space-x-3 group">
                    <div class="relative">
                        <img src="{{ asset('images/KOMUNITAS (5).png') }}" alt="Logo"
                            class="h-12 w-auto transform group-hover:scale-105 transition-transform duration-300" />
                        <div
                            class="absolute inset-0 bg-gradient-to-r from-blue-500 to-purple-600 rounded-full opacity-0 group-hover:opacity-10 transition-opacity duration-300">
                        </div>
                    </div>
                    <span :class="scrolled ? 'text-gray-900' : 'text-white'"
                        class="text-lg font-bold bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">
                        Kampung Batik Paseseh
                    </span>
                </a>
            </div>

            <!-- Mobile Menu Button -->
            <div class="flex lg:hidden">
                <button type="button" @click="openMobileMenu()"
                    :class="scrolled ? 'text-gray-700 hover:bg-gray-100' : 'text-white hover:bg-white/20'"
                    class="-m-2.5 inline-flex items-center justify-center rounded-xl p-2.5 transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-inset">
                    <span class="sr-only">Open main menu</span>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" data-slot="icon"
                        aria-hidden="true" class="size-6">
                        <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </button>
            </div>

            <!-- Desktop Navigation -->
            <div class="hidden lg:flex lg:gap-x-2">
                <!-- Beranda -->
                <a href="{{ route('home') }}"
                    :class="scrolled ?
                        '{{ request()->routeIs('home') ? 'bg-gradient-to-r from-blue-500 to-purple-600 text-white shadow-lg' : 'text-gray-700 hover:bg-gray-100' }}' :
                        '{{ request()->routeIs('home') ? 'bg-white text-blue-600 shadow-lg' : 'text-white hover:bg-white/20' }}'"
                    class="relative group flex items-center gap-x-2 text-sm font-semibold py-3 px-3 rounded-xl transition-all duration-300 transform hover:-translate-y-0.5">
                    <i class="fas fa-home text-sm"></i>
                    Beranda
                    <span
                        class="absolute bottom-0 left-1/2 w-0 h-0.5 bg-current transform -translate-x-1/2 group-hover:w-3/4 transition-all duration-300"></span>
                </a>

                <!-- Komunitas Dropdown -->
                @php
                    $komunitasActive =
                        request()->routeIs('perjalanan') ||
                        request()->routeIs('penghargaan') ||
                        request()->routeIs('wisata');
                @endphp

                <div class="relative" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                    <button
                        :class="scrolled ?
                            '{{ $komunitasActive ? 'bg-gradient-to-r from-blue-500 to-purple-600 text-white shadow-lg' : 'text-gray-700 hover:bg-gray-100' }}' :
                            '{{ $komunitasActive ? 'bg-white text-blue-600 shadow-lg' : 'text-white hover:bg-white/20' }}'"
                        class="group flex items-center gap-x-2 text-sm font-semibold py-3 px-3 rounded-xl transition-all duration-300 transform hover:-translate-y-0.5">
                        <i class="fas fa-users text-sm"></i>
                        Komunitas
                        <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true"
                            class="size-4 transition-transform duration-300" :class="open ? 'rotate-180' : ''">
                            <path fill-rule="evenodd"
                                d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>

                    <!-- Dropdown Panel -->
                    <div x-show="open" x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-0 scale-95 translate-y-2"
                        x-transition:enter-end="opacity-100 scale-100 translate-y-0"
                        x-transition:leave="transition ease-in duration-200"
                        x-transition:leave-start="opacity-100 scale-100 translate-y-0"
                        x-transition:leave-end="opacity-0 scale-95 translate-y-2"
                        class="absolute z-50 mt-2 w-80 transform px-2" style="display: none;">
                        <div
                            class="overflow-hidden rounded-2xl bg-white/95 backdrop-blur-md shadow-xl ring-1 ring-gray-200/50">
                            <div class="p-3">
                                <!-- Perjalanan -->
                                <a href="{{ route('perjalanan') }}"
                                    class="group relative flex items-center gap-x-4 rounded-xl p-4 text-sm transition-all duration-300 hover:bg-gradient-to-r hover:from-blue-50 hover:to-purple-50 hover:shadow-md">
                                    <div
                                        class="flex size-12 flex-none items-center justify-center rounded-xl bg-gradient-to-r from-blue-500 to-blue-600 shadow-lg group-hover:scale-110 transition-transform duration-300">
                                        <i class="fas fa-route text-white text-lg"></i>
                                    </div>
                                    <div class="flex-auto">
                                        <p
                                            class="font-semibold text-gray-900 group-hover:text-blue-600 transition-colors">
                                            Perjalanan
                                        </p>
                                        <p class="mt-1 text-gray-500 text-xs">Ketahui perjalanan dan sejarah kami</p>
                                    </div>
                                    <i
                                        class="fas fa-chevron-right text-gray-400 group-hover:text-blue-500 transform group-hover:translate-x-1 transition-all duration-300"></i>
                                </a>

                                <!-- Penghargaan -->
                                <a href="{{ route('penghargaan') }}"
                                    class="group relative flex items-center gap-x-4 rounded-xl p-4 text-sm transition-all duration-300 hover:bg-gradient-to-r hover:from-purple-50 hover:to-pink-50 hover:shadow-md">
                                    <div
                                        class="flex size-12 flex-none items-center justify-center rounded-xl bg-gradient-to-r from-purple-500 to-purple-600 shadow-lg group-hover:scale-110 transition-transform duration-300">
                                        <i class="fas fa-trophy text-white text-lg"></i>
                                    </div>
                                    <div class="flex-auto">
                                        <p
                                            class="font-semibold text-gray-900 group-hover:text-purple-600 transition-colors">
                                            Penghargaan
                                        </p>
                                        <p class="mt-1 text-gray-500 text-xs">Prestasi dan pengakuan yang kami raih</p>
                                    </div>
                                    <i
                                        class="fas fa-chevron-right text-gray-400 group-hover:text-purple-500 transform group-hover:translate-x-1 transition-all duration-300"></i>
                                </a>

                                <!-- Wisata -->
                                <a href="{{ route('wisata') }}"
                                    class="group relative flex items-center gap-x-4 rounded-xl p-4 text-sm transition-all duration-300 hover:bg-gradient-to-r hover:from-green-50 hover:to-teal-50 hover:shadow-md">
                                    <div
                                        class="flex size-12 flex-none items-center justify-center rounded-xl bg-gradient-to-r from-green-500 to-green-600 shadow-lg group-hover:scale-110 transition-transform duration-300">
                                        <i class="fas fa-map-marked-alt text-white text-lg"></i>
                                    </div>
                                    <div class="flex-auto">
                                        <p
                                            class="font-semibold text-gray-900 group-hover:text-green-600 transition-colors">
                                            Wisata
                                        </p>
                                        <p class="mt-1 text-gray-500 text-xs">Jelajahi destinasi wisata terbaik</p>
                                    </div>
                                    <i
                                        class="fas fa-chevron-right text-gray-400 group-hover:text-green-500 transform group-hover:translate-x-1 transition-all duration-300"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Kegiatan -->
                <a href="{{ route('event.index') }}"
                    :class="scrolled ?
                        '{{ request()->routeIs('event.index') ? 'bg-gradient-to-r from-blue-500 to-purple-600 text-white shadow-lg' : 'text-gray-700 hover:bg-gray-100' }}' :
                        '{{ request()->routeIs('event.index') ? 'bg-white text-blue-600 shadow-lg' : 'text-white hover:bg-white/20' }}'"
                    class="relative group flex items-center gap-x-2 text-sm font-semibold py-3 px-3 rounded-xl transition-all duration-300 transform hover:-translate-y-0.5">
                    <i class="fas fa-calendar-alt text-sm"></i>
                    Kegiatan
                    <span
                        class="absolute bottom-0 left-1/2 w-0 h-0.5 bg-current transform -translate-x-1/2 group-hover:w-3/4 transition-all duration-300"></span>
                </a>

                <!-- Edukasi -->
                <a href="{{ route('edupackage.index') }}"
                    :class="scrolled ?
                        '{{ request()->routeIs('edupackage.index') ? 'bg-gradient-to-r from-blue-500 to-purple-600 text-white shadow-lg' : 'text-gray-700 hover:bg-gray-100' }}' :
                        '{{ request()->routeIs('edupackage.index') ? 'bg-white text-blue-600 shadow-lg' : 'text-white hover:bg-white/20' }}'"
                    class="relative group flex items-center gap-x-2 text-sm font-semibold py-3 px-3 rounded-xl transition-all duration-300 transform hover:-translate-y-0.5">
                    <i class="fas fa-graduation-cap text-sm"></i>
                    Edukasi
                    <span
                        class="absolute bottom-0 left-1/2 w-0 h-0.5 bg-current transform -translate-x-1/2 group-hover:w-3/4 transition-all duration-300"></span>
                </a>

                <!-- Belanja -->
                <a href="{{ route('shop.index') }}"
                    :class="scrolled ?
                        '{{ request()->routeIs('shop.index') ? 'bg-gradient-to-r from-blue-500 to-purple-600 text-white shadow-lg' : 'text-gray-700 hover:bg-gray-100' }}' :
                        '{{ request()->routeIs('shop.index') ? 'bg-white text-blue-600 shadow-lg' : 'text-white hover:bg-white/20' }}'"
                    class="relative group flex items-center gap-x-2 text-sm font-semibold py-3 px-3 rounded-xl transition-all duration-300 transform hover:-translate-y-0.5">
                    <i class="fas fa-shopping-bag text-sm"></i>
                    Belanja
                    <span
                        class="absolute bottom-0 left-1/2 w-0 h-0.5 bg-current transform -translate-x-1/2 group-hover:w-3/4 transition-all duration-300"></span>
                </a>

                <!-- Tentang Kami -->
                <a href="{{ route('aboutus') }}"
                    :class="scrolled ?
                        '{{ request()->routeIs('aboutus') ? 'bg-gradient-to-r from-blue-500 to-purple-600 text-white shadow-lg' : 'text-gray-700 hover:bg-gray-100' }}' :
                        '{{ request()->routeIs('aboutus') ? 'bg-white text-blue-600 shadow-lg' : 'text-white hover:bg-white/20' }}'"
                    class="relative group flex items-center gap-x-2 text-sm font-semibold py-3 px-3 rounded-xl transition-all duration-300 transform hover:-translate-y-0.5">
                    <i class="fas fa-info-circle text-sm"></i>
                    Tentang Kami
                    <span
                        class="absolute bottom-0 left-1/2 w-0 h-0.5 bg-current transform -translate-x-1/2 group-hover:w-3/4 transition-all duration-300"></span>
                </a>
            </div>

            <!-- CTA Button -->
            {{-- <div class="hidden lg:flex lg:flex-1 lg:justify-end">
                <a href="{{ route('shop.index') }}" 
                    class="group relative overflow-hidden bg-gradient-to-r from-amber-500 to-orange-500 text-white text-sm font-bold py-3 px-8 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-0.5 hover:scale-105">
                    <span class="relative z-10 flex items-center gap-x-2">
                        <i class="fas fa-shopping-cart"></i>
                        Belanja Sekarang
                    </span>
                    <div class="absolute inset-0 bg-gradient-to-r from-amber-600 to-orange-600 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left"></div>
                </a>
            </div> --}}
        </nav>

        <!-- Mobile menu -->
        <div x-show="mobileMenuOpen" x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0" class="fixed inset-0 z-50 lg:hidden" style="display: none;">

            <!-- Backdrop with gradient -->
            <div class="fixed inset-0 bg-gradient-to-br from-blue-900/90 to-purple-800/90 backdrop-blur-sm"
                @click="mobileMenuOpen = false"></div>

            <!-- Menu Panel -->
            <div
                class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-gradient-to-b from-blue-900 to-purple-800 shadow-2xl">
                <div class="flex flex-col h-full">
                    <!-- Header -->
                    <div class="flex items-center justify-between p-6 border-b border-white/10">
                        <a href="{{ route('home') }}" class="flex items-center space-x-3 group"
                            @click="mobileMenuOpen = false">
                            <div class="relative">
                                <img src="{{ asset('images/KOMUNITAS (5).png') }}" alt="Logo"
                                    class="h-10 w-auto transform group-hover:scale-105 transition-transform duration-300" />
                            </div>
                            <span class="text-lg font-bold text-white">
                                Kampung Batik Paseseh
                            </span>
                        </a>
                        <button type="button" @click="mobileMenuOpen = false"
                            class="p-2 rounded-xl bg-white/10 hover:bg-white/20 text-white transition-all duration-300 transform hover:scale-110">
                            <span class="sr-only">Close menu</span>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                data-slot="icon" aria-hidden="true" class="size-6">
                                <path d="M6 18 18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                    </div>

                    <!-- Navigation Items -->
                    <div class="flex-1 px-4 py-6 space-y-2">
                        <!-- Beranda -->
                        <a href="{{ route('home') }}" @click="mobileMenuOpen = false"
                            class="group flex items-center space-x-3 rounded-2xl p-4 text-base font-semibold transition-all duration-300
                    {{ request()->routeIs('home')
                        ? 'bg-gradient-to-r from-amber-500 to-orange-500 text-white shadow-lg'
                        : 'text-white hover:bg-white/10 hover:shadow-md' }}">
                            <div
                                class="w-8 h-8 rounded-xl bg-white/20 flex items-center justify-center group-hover:scale-110 transition-transform">
                                <i class="fas fa-home text-sm"></i>
                            </div>
                            <span>Beranda</span>
                        </a>

                        <!-- Komunitas Dropdown -->
                        <div class="space-y-2">
                            <button type="button" @click="toggleMobileProductMenu()"
                                class="group flex w-full items-center justify-between rounded-2xl p-4 text-base font-semibold text-white hover:bg-white/10 hover:shadow-md transition-all duration-300">
                                <div class="flex items-center space-x-3">
                                    <div
                                        class="w-8 h-8 rounded-xl bg-white/20 flex items-center justify-center group-hover:scale-110 transition-transform">
                                        <i class="fas fa-users text-sm"></i>
                                    </div>
                                    <span>Komunitas</span>
                                </div>
                                <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true"
                                    class="size-5 transition-transform duration-300 flex-none"
                                    :class="mobileProductMenuOpen ? 'rotate-180' : ''">
                                    <path fill-rule="evenodd"
                                        d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                        clip-rule="evenodd" />
                                </svg>
                            </button>

                            <!-- Dropdown Content -->
                            <div x-show="mobileProductMenuOpen" x-collapse class="space-y-2 pl-4"
                                style="display: none;">
                                <!-- Perjalanan -->
                                <a href="{{ route('perjalanan') }}" @click="mobileMenuOpen = false"
                                    class="group flex items-center space-x-3 rounded-xl p-3 text-sm font-semibold text-white/90 hover:bg-blue-500/30 hover:text-white transition-all duration-300 border-l-2 border-transparent hover:border-blue-400">
                                    <div
                                        class="w-6 h-6 rounded-lg bg-gradient-to-r from-blue-500 to-blue-600 flex items-center justify-center group-hover:scale-110 transition-transform">
                                        <i class="fas fa-route text-xs text-white"></i>
                                    </div>
                                    <span>Perjalanan</span>
                                </a>

                                <!-- Penghargaan -->
                                <a href="{{ route('penghargaan') }}" @click="mobileMenuOpen = false"
                                    class="group flex items-center space-x-3 rounded-xl p-3 text-sm font-semibold text-white/90 hover:bg-purple-500/30 hover:text-white transition-all duration-300 border-l-2 border-transparent hover:border-purple-400">
                                    <div
                                        class="w-6 h-6 rounded-lg bg-gradient-to-r from-purple-500 to-purple-600 flex items-center justify-center group-hover:scale-110 transition-transform">
                                        <i class="fas fa-trophy text-xs text-white"></i>
                                    </div>
                                    <span>Penghargaan</span>
                                </a>

                                <!-- Wisata -->
                                <a href="{{ route('wisata') }}" @click="mobileMenuOpen = false"
                                    class="group flex items-center space-x-3 rounded-xl p-3 text-sm font-semibold text-white/90 hover:bg-green-500/30 hover:text-white transition-all duration-300 border-l-2 border-transparent hover:border-green-400">
                                    <div
                                        class="w-6 h-6 rounded-lg bg-gradient-to-r from-green-500 to-green-600 flex items-center justify-center group-hover:scale-110 transition-transform">
                                        <i class="fas fa-map-marked-alt text-xs text-white"></i>
                                    </div>
                                    <span>Wisata</span>
                                </a>
                            </div>
                        </div>

                        <!-- Kegiatan -->
                        <a href="{{ route('event.index') }}" @click="mobileMenuOpen = false"
                            class="group flex items-center space-x-3 rounded-2xl p-4 text-base font-semibold transition-all duration-300
                    {{ request()->routeIs('event.index')
                        ? 'bg-gradient-to-r from-amber-500 to-orange-500 text-white shadow-lg'
                        : 'text-white hover:bg-white/10 hover:shadow-md' }}">
                            <div
                                class="w-8 h-8 rounded-xl bg-white/20 flex items-center justify-center group-hover:scale-110 transition-transform">
                                <i class="fas fa-calendar-alt text-sm"></i>
                            </div>
                            <span>Kegiatan</span>
                        </a>

                        <!-- Edukasi -->
                        <a href="{{ route('edupackage.index') }}" @click="mobileMenuOpen = false"
                            class="group flex items-center space-x-3 rounded-2xl p-4 text-base font-semibold transition-all duration-300
                    {{ request()->routeIs('edupackage.index')
                        ? 'bg-gradient-to-r from-amber-500 to-orange-500 text-white shadow-lg'
                        : 'text-white hover:bg-white/10 hover:shadow-md' }}">
                            <div
                                class="w-8 h-8 rounded-xl bg-white/20 flex items-center justify-center group-hover:scale-110 transition-transform">
                                <i class="fas fa-graduation-cap text-sm"></i>
                            </div>
                            <span>Edukasi</span>
                        </a>

                        <!-- Belanja -->
                        <a href="{{ route('shop.index') }}" @click="mobileMenuOpen = false"
                            class="group flex items-center space-x-3 rounded-2xl p-4 text-base font-semibold transition-all duration-300
                    {{ request()->routeIs('shop.index')
                        ? 'bg-gradient-to-r from-amber-500 to-orange-500 text-white shadow-lg'
                        : 'text-white hover:bg-white/10 hover:shadow-md' }}">
                            <div
                                class="w-8 h-8 rounded-xl bg-white/20 flex items-center justify-center group-hover:scale-110 transition-transform">
                                <i class="fas fa-shopping-bag text-sm"></i>
                            </div>
                            <span>Belanja</span>
                        </a>

                        <!-- Tentang Kami -->
                        <a href="{{ route('aboutus') }}" @click="mobileMenuOpen = false"
                            class="group flex items-center space-x-3 rounded-2xl p-4 text-base font-semibold transition-all duration-300
                    {{ request()->routeIs('aboutus')
                        ? 'bg-gradient-to-r from-amber-500 to-orange-500 text-white shadow-lg'
                        : 'text-white hover:bg-white/10 hover:shadow-md' }}">
                            <div
                                class="w-8 h-8 rounded-xl bg-white/20 flex items-center justify-center group-hover:scale-110 transition-transform">
                                <i class="fas fa-info-circle text-sm"></i>
                            </div>
                            <span>Tentang Kami</span>
                        </a>
                    </div>

                    <!-- CTA Section -->
                    <div class="p-6 border-t border-white/10">
                        <a href="{{ route('shop.index') }}" @click="mobileMenuOpen = false"
                            class="group w-full bg-gradient-to-r from-amber-500 to-orange-500 text-white font-bold py-4 px-6 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 flex items-center justify-center space-x-3">
                            <i class="fas fa-shopping-cart"></i>
                            <span>Belanja Sekarang</span>
                        </a>

                        <!-- Contact Info -->
                        <div class="mt-6 space-y-3 text-center">
                            <div class="flex items-center justify-center space-x-2 text-white/80 text-sm">
                                <i class="fas fa-phone-alt text-amber-400"></i>
                                <span>+62 867-4423-482</span>
                            </div>
                            <div class="flex items-center justify-center space-x-2 text-white/80 text-sm">
                                <i class="fas fa-envelope text-amber-400"></i>
                                <span>batikpasseeh@gmail.com</span>
                            </div>
                        </div>

                        <!-- Social Media -->
                        <div class="flex justify-center space-x-4 mt-6">
                            <a href="#"
                                class="w-10 h-10 bg-white/10 rounded-xl flex items-center justify-center hover:bg-white/20 transition-all duration-300 transform hover:scale-110">
                                <i class="fab fa-facebook-f text-white text-sm"></i>
                            </a>
                            <a href="#"
                                class="w-10 h-10 bg-white/10 rounded-xl flex items-center justify-center hover:bg-white/20 transition-all duration-300 transform hover:scale-110">
                                <i class="fab fa-instagram text-white text-sm"></i>
                            </a>
                            <a href="#"
                                class="w-10 h-10 bg-white/10 rounded-xl flex items-center justify-center hover:bg-white/20 transition-all duration-300 transform hover:scale-110">
                                <i class="fab fa-whatsapp text-white text-sm"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <script>
        function navbar() {
            return {
                mobileMenuOpen: false,
                mobileProductMenuOpen: false,
                activeMenu: 'beranda', // Set default active menu

                openMobileMenu() {
                    this.mobileMenuOpen = true;
                },

                toggleMobileProductMenu() {
                    this.mobileProductMenuOpen = !this.mobileProductMenuOpen;
                },

                setActiveMenu(menu) {
                    this.activeMenu = menu;
                }
            }
        }
    </script>
</body>

</html>
