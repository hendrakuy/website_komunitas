@extends('layouts.app')

@section('title', $package->title . ' - Batik Paseseh')

@section('content')
    <section class="py-8 md:py-12 bg-gradient-to-br from-gray-50 via-white to-amber-50/30 min-h-screen">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Breadcrumb -->
            <nav class="flex mb-6 md:mb-8" aria-label="Breadcrumb">
                <ol class="flex items-center space-x-2 text-xs sm:text-sm">
                    <li>
                        <a href="{{ route('edupackage.index') }}"
                            class="text-gray-500 hover:text-amber-600 transition-colors flex items-center">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                            </svg>
                            <span class="hidden sm:inline">Paket Edukasi</span>
                            <span class="sm:hidden">Home</span>
                        </a>
                    </li>
                    <li class="flex items-center">
                        <svg class="h-4 w-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                        {{-- <span class="ml-2 text-gray-700 font-medium line-clamp-1">{{ $package->title }}</span> --}}
                        <span
                            class="ml-1 text-sm font-medium text-gray-700 md:ml-2
                                    block max-w-[185px] truncate sm:max-w-none sm:whitespace-normal">
                            {{ $package->title }}
                        </span>
                    </li>
                </ol>
            </nav>

            <!-- Main Card -->
            <div class="bg-white rounded-2xl md:rounded-3xl shadow-xl overflow-hidden">
                <!-- Hero Image -->
                <div
                    class="relative h-56 sm:h-72 md:h-96 overflow-hidden bg-gradient-to-br from-gray-100 to-gray-200 object-top">
                    <img src="{{ asset('storage/' . $package->image) }}" alt="{{ $package->title }}"
                        class="w-full h-full object-cover object-top">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent"></div>

                    <!-- Badge -->
                    <div class="absolute bottom-4 left-4 md:bottom-6 md:left-6">
                        <span
                            class="inline-flex items-center bg-amber-500 text-white px-3 py-1.5 md:px-4 md:py-2 rounded-full text-xs md:text-sm font-semibold shadow-lg">
                            <svg class="w-3 h-3 md:w-4 md:h-4 mr-1.5" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z" />
                            </svg>
                            Paket Edukasi
                        </span>
                    </div>

                    <!-- Price Badge Mobile -->
                    {{-- <div class="md:hidden absolute top-4 right-4">
                        <div class="bg-white/95 backdrop-blur-sm rounded-xl px-3 py-2 shadow-lg">
                            <p class="text-xs text-gray-600 mb-0.5">Mulai dari</p>
                            <p class="text-lg font-bold text-amber-600">
                                Rp {{ number_format($package->price, 0, ',', '.') }}
                            </p>
                        </div>
                    </div> --}}
                </div>

                <!-- Content -->
                <div class="p-5 sm:p-6 md:p-8 lg:p-12">
                    <!-- Header Section -->
                    <div class="mb-6 md:mb-8">
                        <h1 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-gray-900 mb-3 md:mb-4 leading-tight">
                            {{ $package->title }}
                        </h1>
                        <p class="text-sm sm:text-base lg:text-lg text-gray-600 leading-relaxed">
                            {{ $package->description }}
                        </p>
                    </div>

                    <!-- Price & CTA -->
                    <div class="mb-8 md:mb-12">
                        <div
                            class="bg-gradient-to-br from-amber-50 via-yellow-50 to-orange-50 rounded-xl md:rounded-2xl p-5 md:p-6 border-2 border-amber-200/50 shadow-sm">
                            <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-4 md:gap-6">
                                <!-- Price Info -->
                                <div class="flex-1">
                                    <div class="flex items-center mb-2">
                                        <svg class="w-5 h-5 text-amber-600 mr-2" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                        <p class="text-sm md:text-base text-gray-700 font-medium">Harga Paket</p>
                                    </div>
                                    <div class="flex flex-wrap items-baseline gap-2 mb-1">
                                        <span class="text-2xl sm:text-3xl lg:text-4xl font-bold text-amber-700">
                                            Rp {{ number_format($package->price, 0, ',', '.') }}
                                        </span>
                                        <span class="text-xs sm:text-sm text-gray-600 font-medium">
                                            / {{ $package->kapasitas ?? '—' }} orang
                                        </span>
                                    </div>
                                    <p class="text-xs sm:text-sm text-gray-600">
                                        <svg class="w-4 h-4 inline mr-1" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                        </svg>
                                        Kapasitas maksimal {{ $package->kapasitas ?? '—' }} peserta
                                    </p>
                                </div>

                                <!-- CTA Button -->
                                <a href="{{ $whatsapp_link }}" target="_blank"
                                    class="group flex items-center justify-center lg:flex-shrink-0 bg-gradient-to-r from-green-500 to-green-600 hover:from-green-600 hover:to-green-700 text-white px-6 md:px-8 py-3 md:py-4 rounded-xl font-semibold text-sm md:text-base shadow-lg hover:shadow-xl transform hover:-translate-y-1 transition-all duration-300">
                                    <svg class="w-5 h-5 mr-2 group-hover:scale-110 transition-transform" fill="currentColor"
                                        viewBox="0 0 24 24">
                                        <path
                                            d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893c0-3.176-1.24-6.165-3.495-8.411" />
                                    </svg>
                                    <span>Daftar via WhatsApp</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Features Grid -->
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 md:gap-6 mb-8 md:mb-12">
                        <div
                            class="group text-center p-4 md:p-6 bg-gradient-to-br from-amber-50 to-white rounded-xl md:rounded-2xl border border-amber-100 hover:border-amber-200 hover:shadow-md transition-all duration-300">
                            <div
                                class="w-12 h-12 md:w-14 md:h-14 bg-gradient-to-br from-amber-400 to-amber-600 rounded-xl md:rounded-2xl flex items-center justify-center mx-auto mb-3 md:mb-4 shadow-md group-hover:scale-110 transition-transform duration-300">
                                <svg class="h-5 w-5 md:h-6 md:w-6 text-white" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                </svg>
                            </div>
                            <h3 class="font-bold text-gray-900 mb-1 md:mb-2 text-sm md:text-base">Materi Lengkap</h3>
                            <p class="text-gray-600 text-xs md:text-sm leading-relaxed">Materi terstruktur dari dasar hingga
                                mahir</p>
                        </div>

                        <div
                            class="group text-center p-4 md:p-6 bg-gradient-to-br from-blue-50 to-white rounded-xl md:rounded-2xl border border-blue-100 hover:border-blue-200 hover:shadow-md transition-all duration-300">
                            <div
                                class="w-12 h-12 md:w-14 md:h-14 bg-gradient-to-br from-blue-400 to-blue-600 rounded-xl md:rounded-2xl flex items-center justify-center mx-auto mb-3 md:mb-4 shadow-md group-hover:scale-110 transition-transform duration-300">
                                <svg class="h-5 w-5 md:h-6 md:w-6 text-white" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                            </div>
                            <h3 class="font-bold text-gray-900 mb-1 md:mb-2 text-sm md:text-base">Pengajar Profesional</h3>
                            <p class="text-gray-600 text-xs md:text-sm leading-relaxed">Didampingi pengrajin berpengalaman
                            </p>
                        </div>

                        <div
                            class="group text-center p-4 md:p-6 bg-gradient-to-br from-green-50 to-white rounded-xl md:rounded-2xl border border-green-100 hover:border-green-200 hover:shadow-md transition-all duration-300">
                            <div
                                class="w-12 h-12 md:w-14 md:h-14 bg-gradient-to-br from-green-400 to-green-600 rounded-xl md:rounded-2xl flex items-center justify-center mx-auto mb-3 md:mb-4 shadow-md group-hover:scale-110 transition-transform duration-300">
                                <svg class="h-5 w-5 md:h-6 md:w-6 text-white" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                </svg>
                            </div>
                            <h3 class="font-bold text-gray-900 mb-1 md:mb-2 text-sm md:text-base">Alat Membatik</h3>
                            <p class="text-gray-600 text-xs md:text-sm leading-relaxed">Semua peralatan membatik disediakan
                            </p>
                        </div>
                    </div>

                    <!-- Content Sections -->
                    <div class="space-y-6 md:space-y-8">
                        <!-- Materi Pelatihan -->
                        <div
                            class="bg-gradient-to-br from-amber-50 via-yellow-50/50 to-white rounded-xl md:rounded-2xl p-5 md:p-8 border border-amber-100 shadow-sm">
                            <div class="flex items-start md:items-center mb-4 md:mb-6">
                                <div
                                    class="w-10 h-10 md:w-12 md:h-12 bg-gradient-to-br from-amber-500 to-amber-600 rounded-lg md:rounded-xl flex items-center justify-center mr-3 md:mr-4 flex-shrink-0 shadow-md">
                                    <svg class="h-5 w-5 md:h-6 md:w-6 text-white" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                    </svg>
                                </div>
                                <h2 class="text-xl md:text-2xl font-bold text-gray-900">Materi Pelatihan</h2>
                            </div>
                            <div class="prose prose-sm md:prose-base lg:prose-lg max-w-none text-gray-700 leading-relaxed">
                                {!! $package->materials !!}
                            </div>
                        </div>

                        <!-- Fasilitas Paket -->
                        <div
                            class="bg-gradient-to-br from-blue-50 via-indigo-50/50 to-white rounded-xl md:rounded-2xl p-5 md:p-8 border border-blue-100 shadow-sm">
                            <div class="flex items-start md:items-center mb-4 md:mb-6">
                                <div
                                    class="w-10 h-10 md:w-12 md:h-12 bg-gradient-to-br from-blue-500 to-blue-600 rounded-lg md:rounded-xl flex items-center justify-center mr-3 md:mr-4 flex-shrink-0 shadow-md">
                                    <svg class="h-5 w-5 md:h-6 md:w-6 text-white" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                                    </svg>
                                </div>
                                <h2 class="text-xl md:text-2xl font-bold text-gray-900">Fasilitas Paket</h2>
                            </div>
                            <div class="prose prose-sm md:prose-base lg:prose-lg max-w-none text-gray-700 leading-relaxed">
                                {!! $package->facilities !!}
                            </div>
                        </div>

                        <!-- Jadwal Pelatihan -->
                        <div
                            class="bg-gradient-to-br from-green-50 via-emerald-50/50 to-white rounded-xl md:rounded-2xl p-5 md:p-8 border border-green-100 shadow-sm">
                            <div class="flex items-start md:items-center mb-4 md:mb-6">
                                <div
                                    class="w-10 h-10 md:w-12 md:h-12 bg-gradient-to-br from-green-500 to-green-600 rounded-lg md:rounded-xl flex items-center justify-center mr-3 md:mr-4 flex-shrink-0 shadow-md">
                                    <svg class="h-5 w-5 md:h-6 md:w-6 text-white" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                </div>
                                <h2 class="text-xl md:text-2xl font-bold text-gray-900">Jadwal Pelatihan</h2>
                            </div>
                            <div class="prose prose-sm md:prose-base lg:prose-lg max-w-none text-gray-700 leading-relaxed">
                                {!! $package->schedule_info !!}
                            </div>
                        </div>
                    </div>

                    <!-- Bottom CTA -->
                    <div
                        class="mt-8 md:mt-12 bg-gradient-to-br from-amber-500 via-amber-600 to-orange-600 rounded-xl md:rounded-2xl p-6 md:p-8 lg:p-10 text-white shadow-xl relative overflow-hidden">
                        <!-- Decorative Elements -->
                        <div
                            class="absolute top-0 right-0 w-40 h-40 bg-white/10 rounded-full -translate-y-1/2 translate-x-1/2 blur-3xl">
                        </div>
                        <div
                            class="absolute bottom-0 left-0 w-32 h-32 bg-white/10 rounded-full translate-y-1/2 -translate-x-1/2 blur-3xl">
                        </div>

                        <div class="relative z-10 text-center">
                            <div
                                class="inline-flex items-center justify-center w-14 h-14 md:w-16 md:h-16 bg-white/20 backdrop-blur-sm rounded-2xl mb-4 md:mb-6">
                                <svg class="w-7 h-7 md:w-8 md:h-8 text-white" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 10V3L4 14h7v7l9-11h-7z" />
                                </svg>
                            </div>

                            <h3 class="text-xl md:text-2xl lg:text-3xl font-bold mb-2 md:mb-4">Siap Memulai Perjalanan
                                Membatik?</h3>
                            <p class="text-amber-50 mb-6 md:mb-8 text-sm md:text-base lg:text-lg max-w-2xl mx-auto">
                                Bergabunglah dengan ratusan peserta yang telah merasakan pengalaman membatik tak terlupakan
                            </p>

                            <a href="{{ $whatsapp_link }}" target="_blank"
                                class="group inline-flex items-center bg-white text-amber-600 hover:bg-amber-50 px-6 md:px-8 lg:px-10 py-3 md:py-4 rounded-xl font-bold text-sm md:text-base lg:text-lg shadow-2xl hover:shadow-3xl transform hover:-translate-y-1 transition-all duration-300">
                                <svg class="w-5 h-5 md:w-6 md:h-6 mr-2 md:mr-3 group-hover:scale-110 transition-transform"
                                    fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893c0-3.176-1.24-6.165-3.495-8.411" />
                                </svg>
                                Daftar Sekarang
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Back to Packages -->
            <div class="mt-6 md:mt-8 text-center">
                <a href="{{ route('edupackage.index') }}"
                    class="inline-flex items-center text-amber-600 hover:text-amber-700 font-semibold transition-colors text-sm md:text-base group">
                    <svg class="h-4 w-4 md:h-5 md:w-5 mr-2 group-hover:-translate-x-1 transition-transform" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                    </svg>
                    Kembali ke Semua Paket
                </a>
            </div>
        </div>
    </section>
@endsection
