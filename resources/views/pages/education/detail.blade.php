@extends('layouts.app')

@section('content')
<section class="py-12 bg-gradient-to-br from-amber-50 via-white to-amber-50 min-h-screen">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Breadcrumb -->
        <nav class="flex mb-8" aria-label="Breadcrumb">
            <ol class="flex items-center space-x-2 text-sm">
                <li>
                    <a href="{{ route('edupackage.index') }}" class="text-gray-500 hover:text-amber-600 transition-colors">
                        Paket Edukasi
                    </a>
                </li>
                <li class="flex items-center">
                    <svg class="h-4 w-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                    <span class="ml-2 text-gray-700 font-medium">{{ $package->title }}</span>
                </li>
            </ol>
        </nav>

        <!-- Main Card -->
        <div class="bg-white rounded-3xl shadow-2xl overflow-hidden transform hover:shadow-2xl transition-all duration-300">
            <!-- Hero Image -->
            <div class="relative h-96 overflow-hidden">
                <img src="{{ asset('storage/' . $package->image) }}" 
                     alt="{{ $package->title }}" 
                     class="w-full h-full object-cover transform hover:scale-105 transition-transform duration-700">
                <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                <div class="absolute bottom-6 left-8">
                    <span class="bg-amber-500 text-white px-4 py-2 rounded-full text-sm font-semibold shadow-lg">
                        Paket Premium
                    </span>
                </div>
            </div>

            <!-- Content -->
            <div class="p-8 lg:p-12">
                <!-- Header Section -->
                <div class="mb-8">
                    <h1 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-4 leading-tight">
                        {{ $package->title }}
                    </h1>
                    <p class="text-lg text-gray-600 leading-relaxed max-w-3xl">
                        {{ $package->description }}
                    </p>
                </div>

                <!-- Price & CTA -->
                <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between mb-12 p-6 bg-gradient-to-r from-amber-50 to-yellow-50 rounded-2xl border border-amber-200">
                    <div class="mb-4 lg:mb-0">
                        <p class="text-gray-600 text-lg mb-2">Investasi</p>
                        <div class="flex items-baseline">
                            <span class="text-4xl font-bold text-amber-700">
                                Rp {{ number_format($package->price, 0, ',', '.') }}
                            </span>
                            <span class="text-gray-500 ml-2">/peserta</span>
                        </div>
                    </div>
                    <a href="{{ $package->whatsapp_link }}" 
                       target="_blank"
                       class="inline-flex items-center justify-center bg-gradient-to-r from-green-500 to-green-600 hover:from-green-600 hover:to-green-700 text-white px-8 py-4 rounded-xl font-semibold text-lg shadow-lg hover:shadow-xl transform hover:-translate-y-1 transition-all duration-300 group">
                        <svg xmlns="http://www.w3.org/2000/svg" 
                             class="w-4 h-4 mr-3 group-hover:scale-110 transition-transform"
                             fill="currentColor" 
                             viewBox="0 0 24 24">
                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893c0-3.176-1.24-6.165-3.495-8.411"/>
                        </svg>
                        Daftar Sekarang via WhatsApp
                    </a>
                </div>

                <!-- Features Grid -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">
                    <div class="text-center p-6 bg-white rounded-2xl shadow-sm border border-gray-100 hover:shadow-md transition-shadow">
                        <div class="w-12 h-12 bg-amber-100 rounded-xl flex items-center justify-center mx-auto mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-amber-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                            </svg>
                        </div>
                        <h3 class="font-semibold text-gray-800 mb-2">Materi Lengkap</h3>
                        <p class="text-gray-600 text-sm">Kurikulum terstruktur dari dasar hingga mahir</p>
                    </div>

                    <div class="text-center p-6 bg-white rounded-2xl shadow-sm border border-gray-100 hover:shadow-md transition-shadow">
                        <div class="w-12 h-12 bg-amber-100 rounded-xl flex items-center justify-center mx-auto mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-amber-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </div>
                        <h3 class="font-semibold text-gray-800 mb-2">Pengajar Profesional</h3>
                        <p class="text-gray-600 text-sm">Didampingi pengrajin berpengalaman</p>
                    </div>

                    <div class="text-center p-6 bg-white rounded-2xl shadow-sm border border-gray-100 hover:shadow-md transition-shadow">
                        <div class="w-12 h-12 bg-amber-100 rounded-xl flex items-center justify-center mx-auto mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-amber-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                        </div>
                        <h3 class="font-semibold text-gray-800 mb-2">Sertifikat Resmi</h3>
                        <p class="text-gray-600 text-sm">Bukti keikutsertaan program</p>
                    </div>
                </div>

                <!-- Content Sections -->
                <div class="space-y-12">
                    <!-- Materi Pelatihan -->
                    <div class="bg-gradient-to-r from-amber-50 to-transparent rounded-2xl p-8 border border-amber-100">
                        <div class="flex items-center mb-6">
                            <div class="w-10 h-10 bg-amber-500 rounded-lg flex items-center justify-center mr-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                </svg>
                            </div>
                            <h2 class="text-2xl font-bold text-gray-900">Materi Pelatihan</h2>
                        </div>
                        <div class="prose prose-lg max-w-none text-gray-700 leading-relaxed">
                            {!! $package->materials !!}
                        </div>
                    </div>

                    <!-- Fasilitas Paket -->
                    <div class="bg-gradient-to-r from-blue-50 to-transparent rounded-2xl p-8 border border-blue-100">
                        <div class="flex items-center mb-6">
                            <div class="w-10 h-10 bg-blue-500 rounded-lg flex items-center justify-center mr-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                                </svg>
                            </div>
                            <h2 class="text-2xl font-bold text-gray-900">Fasilitas Paket</h2>
                        </div>
                        <div class="prose prose-lg max-w-none text-gray-700 leading-relaxed">
                            {!! $package->facilities !!}
                        </div>
                    </div>

                    <!-- Jadwal Pelatihan -->
                    <div class="bg-gradient-to-r from-green-50 to-transparent rounded-2xl p-8 border border-green-100">
                        <div class="flex items-center mb-6">
                            <div class="w-10 h-10 bg-green-500 rounded-lg flex items-center justify-center mr-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <h2 class="text-2xl font-bold text-gray-900">Jadwal Pelatihan</h2>
                        </div>
                        <div class="prose prose-lg max-w-none text-gray-700 leading-relaxed">
                            {!! $package->schedule_info !!}
                        </div>
                    </div>
                </div>

                <!-- Bottom CTA -->
                <div class="mt-12 text-center bg-gradient-to-r from-amber-500 to-amber-600 rounded-2xl p-8 text-white">
                    <h3 class="text-2xl font-bold mb-4">Siap Memulai Perjalanan Membatik Anda?</h3>
                    <p class="text-amber-100 mb-6 text-lg">Bergabunglah dengan ratusan peserta yang telah merasakan pengalaman membatik tak terlupakan</p>
                    <a href="{{ $package->whatsapp_link }}" 
                       target="_blank"
                       class="inline-flex items-center bg-white text-amber-600 hover:bg-gray-100 px-8 py-4 rounded-xl font-bold text-lg shadow-lg hover:shadow-xl transform hover:-translate-y-1 transition-all duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" 
                             class="w-6 h-6 mr-3"
                             fill="currentColor" 
                             viewBox="0 0 24 24">
                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893c0-3.176-1.24-6.165-3.495-8.411"/>
                        </svg>
                        Hubungi Kami Sekarang
                    </a>
                </div>
            </div>
        </div>

        <!-- Back to Packages -->
        <div class="mt-8 text-center">
            <a href="{{ route('edupackage.index') }}" 
               class="inline-flex items-center text-amber-600 hover:text-amber-700 font-semibold transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                </svg>
                Kembali ke Semua Paket
            </a>
        </div>
    </div>
</section>
@endsection