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
    scrolled = window.scrollY > 300; // nempel setelah scroll 100px
})">
    <header :class="scrolled ? 'sticky top-0 z-50 bg-[#1E41FB] shadow-md' : 'relative bg-[#1E41FB]'"
        x-data="navbar()" class="transition-all duration-500 ease-in-out">
        <nav aria-label="Global" class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8">
            <div class="flex lg:flex-1">
                <a href="{{ route('home') }}" class="-m-1.5 p-1.5">
                    <span class="sr-only">Your Company</span>
                    <img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=white" alt=""
                        class="h-8 w-auto" />
                </a>
            </div>
            <div class="flex lg:hidden">
                <button type="button" @click="openMobileMenu()"
                    class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-white hover:bg-white/10 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white">
                    <span class="sr-only">Open main menu</span>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon"
                        aria-hidden="true" class="size-6">
                        <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </button>
            </div>
            <div class="hidden lg:flex lg:gap-x-4">
                <a href="{{ route('home') }}"
                    class="text-sm/6 font-semibold py-2 px-4 rounded-lg transition-colors duration-200
                    {{ request()->routeIs('home') ? 'bg-white text-[#1E41FB]' : 'text-white hover:bg-white/20' }}">
                    Beranda
                </a>

                <!-- Product Menu -->
                <div class="relative" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                    <button
                        class="flex items-center gap-x-1 text-sm/6 font-semibold py-2 px-4 text-white hover:bg-white/20 rounded-lg transition-colors duration-200"
                        :class="{ 'active-menu': activeMenu === 'komunitas' }" @click="setActiveMenu('komunitas')">
                        Komunitas
                        <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true"
                            class="size-5 flex-none text-white">
                            <path
                                d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z"
                                clip-rule="evenodd" fill-rule="evenodd" />
                        </svg>
                    </button>

                    <!-- Dropdown Panel -->
                    <div x-show="open" x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="opacity-0 translate-y-1"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-transition:leave="transition ease-in duration-150"
                        x-transition:leave-start="opacity-100 translate-y-0"
                        x-transition:leave-end="opacity-0 translate-y-1"
                        class="absolute z-50 mt-3 w-screen max-w-sm transform px-2 sm:px-0" style="display: none;">
                        <div class="overflow-hidden rounded-3xl bg-white shadow-lg ring-1 ring-black ring-opacity-5">
                            <div class="p-4">
                                <div
                                    class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm/6 hover:bg-black/5">
                                    <!-- Bulat icon -->
                                    <div
                                        class="flex size-11 flex-none items-center justify-center rounded-lg bg-[#5A71EC]">
                                        <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                            class="size-6 text-white group-hover:text-gray-100" data-slot="icon"
                                            aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0 3.181 3.183a8.25 8.25 0 0 0 13.803-3.7M4.031 9.865a8.25 8.25 0 0 1 13.803-3.7l3.181 3.182m0-4.991v4.99" />
                                        </svg>

                                    </div>
                                    <!-- Teks -->
                                    <div class="flex-auto">
                                        <a href="/products"
                                            class="block font-semibold text-gray-900 group-hover:text-[#5A71EC]">
                                            Perjalanan
                                            <span class="absolute inset-0"></span>
                                        </a>
                                        <p class="mt-1 text-gray-500">Ketahui perjalanan kami</p>
                                    </div>
                                </div>
                                <div
                                    class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm/6 hover:bg-black/5">
                                    <!-- Bulat icon -->
                                    <div
                                        class="flex size-11 flex-none items-center justify-center rounded-lg bg-[#5A71EC]">
                                        <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                            class="size-6 text-white group-hover:text-gray-100" data-slot="icon"
                                            aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M16.5 18.75h-9m9 0a3 3 0 0 1 3 3h-15a3 3 0 0 1 3-3m9 0v-3.375c0-.621-.503-1.125-1.125-1.125h-.871M7.5 18.75v-3.375c0-.621.504-1.125 1.125-1.125h.872m5.007 0H9.497m5.007 0a7.454 7.454 0 0 1-.982-3.172M9.497 14.25a7.454 7.454 0 0 0 .981-3.172M5.25 4.236c-.982.143-1.954.317-2.916.52A6.003 6.003 0 0 0 7.73 9.728M5.25 4.236V4.5c0 2.108.966 3.99 2.48 5.228M5.25 4.236V2.721C7.456 2.41 9.71 2.25 12 2.25c2.291 0 4.545.16 6.75.47v1.516M7.73 9.728a6.726 6.726 0 0 0 2.748 1.35m8.272-6.842V4.5c0 2.108-.966 3.99-2.48 5.228m2.48-5.492a46.32 46.32 0 0 1 2.916.52 6.003 6.003 0 0 1-5.395 4.972m0 0a6.726 6.726 0 0 1-2.749 1.35m0 0a6.772 6.772 0 0 1-3.044 0" />
                                        </svg>
                                    </div>
                                    <!-- Teks -->
                                    <div class="flex-auto">
                                        <a href="#"
                                            class="block font-semibold text-gray-900 group-hover:text-[#5A71EC]">
                                            Penghargaan
                                            <span class="absolute inset-0"></span>
                                        </a>
                                        <p class="mt-1 text-gray-500">Lihat daftar penghargaan</p>
                                    </div>
                                </div>
                                <div
                                    class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm/6 hover:bg-black/5">
                                    <div
                                        class="flex size-11 flex-none items-center justify-center rounded-lg bg-[#5A71EC]">
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                            data-slot="icon" aria-hidden="true"
                                            class="size-6 text-white group-hover:text-gray-100">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M9.813 15.904 9 18.75l-.813-2.846a4.5 4.5 0 0 0-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 0 0 3.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 0 0 3.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 0 0-3.09 3.09ZM18.259 8.715 18 9.75l-.259-1.035a3.375 3.375 0 0 0-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 0 0 2.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 0 0 2.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 0 0-2.456 2.456ZM16.894 20.567 16.5 21.75l-.394-1.183a2.25 2.25 0 0 0-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 0 0 1.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 0 0 1.423 1.423l1.183.394-1.183.394a2.25 2.25 0 0 0-1.423 1.423Z" />
                                        </svg>
                                    </div>
                                    <div class="flex-auto">
                                        <a href="#"
                                            class="block font-semibold text-gray-900 group-hover:text-[#5A71EC]">
                                            Wisata
                                            <span class="absolute inset-0"></span>
                                        </a>
                                        <p class="mt-1 text-gray-500">Jelajahi destinasi wisata terbaik</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Product Menu -->
                <a href="{{ route('event') }}"
                    class="text-sm/6 font-semibold py-2 px-4 rounded-lg transition-colors duration-200
                    {{ request()->routeIs('event') ? 'bg-white text-[#1E41FB]' : 'text-white hover:bg-white/20' }}">Event</a>
                <a href="{{ route('edukasi') }}"
                    class="text-sm/6 font-semibold py-2 px-4 rounded-lg transition-colors duration-200
                    {{ request()->routeIs('edukasi') ? 'bg-white text-[#1E41FB]' : 'text-white hover:bg-white/20' }}">Edukasi</a>
                <a href="{{ route('shop.index') }}"
                    class="text-sm/6 font-semibold py-2 px-4 rounded-lg transition-colors duration-200
                    {{ request()->routeIs('shop.index') ? 'bg-white text-[#1E41FB]' : 'text-white hover:bg-white/20' }}">Shop</a>
                <a href="{{ route('aboutus') }}"
                    class="text-sm/6 font-semibold py-2 px-4 rounded-lg transition-colors duration-200
                    {{ request()->routeIs('aboutus') ? 'bg-white text-[#1E41FB]' : 'text-white hover:bg-white/20' }}">About
                    Us</a>
            </div>
        </nav>

        <!-- Mobile menu -->
        <div x-show="mobileMenuOpen" x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0" class="fixed inset-0 z-50 lg:hidden" style="display: none;">
            <div class="fixed inset-0 bg-black bg-opacity-25" @click="mobileMenuOpen = false"></div>
            <div class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-[#1E41FB] px-6 py-6 sm:max-w-sm">
                <div class="flex items-center justify-between">
                    <a href="#" class="-m-1.5 p-1.5">
                        <span class="sr-only">Your Company</span>
                        <img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=white" alt=""
                            class="h-8 w-auto" />
                    </a>
                    <button type="button" @click="mobileMenuOpen = false"
                        class="-m-2.5 rounded-md p-2.5 text-white">
                        <span class="sr-only">Close menu</span>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                            data-slot="icon" aria-hidden="true" class="size-6">
                            <path d="M6 18 18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>
                <div class="mt-6 flow-root">
                    <div class="-my-6 divide-y divide-white/10">
                        <div class="space-y-2 py-6">
                            <a href="{{ route('home') }}"
                                class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold transition-colors duration-200
                                {{ request()->routeIs('home') ? 'bg-white text-[#1E41FB]' : 'text-white hover:bg-white/20' }}">
                                Beranda
                            </a>

                            <div class="-mx-3">
                                <button type="button" @click="toggleMobileProductMenu()"
                                    class="flex w-full items-center justify-between rounded-lg px-3 py-2 text-base/7 font-semibold text-white hover:bg-white/20 transition-colors duration-200"
                                    :class="{ 'active-menu-mobile': activeMenu === 'komunitas' }">
                                    Komunitas
                                    <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true"
                                        class="size-5 flex-none transition-transform duration-200"
                                        :class="mobileProductMenuOpen ? 'rotate-180' : ''">
                                        <path
                                            d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z"
                                            clip-rule="evenodd" fill-rule="evenodd" />
                                    </svg>
                                </button>
                                <div x-show="mobileProductMenuOpen" class="mt-2 space-y-2 pl-4"
                                    style="display: none;">
                                    <a href="/products" @click="setActiveMenu('komunitas'); mobileMenuOpen = false;"
                                        class="block rounded-lg py-2 px-3 text-sm/7 font-semibold text-white hover:bg-white/20 transition-colors duration-200">Perjalanan</a>
                                    <a href="#" @click="setActiveMenu('komunitas'); mobileMenuOpen = false;"
                                        class="block rounded-lg py-2 px-3 text-sm/7 font-semibold text-white hover:bg-white/20 transition-colors duration-200">Penghargaan</a>
                                    <a href="#" @click="setActiveMenu('komunitas'); mobileMenuOpen = false;"
                                        class="block rounded-lg py-2 px-3 text-sm/7 font-semibold text-white hover:bg-white/20 transition-colors duration-200">Wisata</a>
                                </div>
                            </div>

                            <a href="{{ route('event') }}"
                                class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold transition-colors duration-200
                                {{ request()->routeIs('event') ? 'bg-white text-[#1E41FB]' : 'text-white hover:bg-white/20' }}">
                                Event
                            </a>
                            <a href="{{ route('edukasi') }}"
                                class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold transition-colors duration-200
                                {{ request()->routeIs('edukasi') ? 'bg-white text-[#1E41FB]' : 'text-white hover:bg-white/20' }}">
                                Edukasi
                            </a>
                            <a href="{{ route('shop.index') }}"
                                class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold transition-colors duration-200
                                {{ request()->routeIs('shop.index') ? 'bg-white text-[#1E41FB]' : 'text-white hover:bg-white/20' }}">
                                Shop
                            </a>
                            <a href="{{ route('aboutus') }}"
                                class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold transition-colors duration-200
                                {{ request()->routeIs('aboutus') ? 'bg-white text-[#1E41FB]' : 'text-white hover:bg-white/20' }}">
                                About Us
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
