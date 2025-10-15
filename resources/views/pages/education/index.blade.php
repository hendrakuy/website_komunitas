@extends('layouts.app')

@section('hero')
    <!-- Hero Section - Diperbaiki -->
    <header class="relative min-h-[70vh] sm:min-h-[80vh] md:min-h-screen bg-gray-900 overflow-hidden">
        <!-- Background Image -->
        <img src="{{ asset('images/BG_Edukasi2.png') }}" alt="Batik Edukasi"
            class="absolute inset-0 w-full h-full object-cover object-center">
        <!-- Overlay Gradasi Warna -->
        <div class="absolute inset-0 bg-gray-900/50"></div>
        {{-- <div class="absolute inset-0 bg-gradient-to-r from-indigo-900/80 via-purple-800/50 to-amber-900/30 z-10"></div> --}}
        {{-- <div class="absolute inset-0 bg-gradient-to-br from-blue-900/80 via-purple-800/60 to-indigo-900/70"></div> --}}
        <div class="absolute inset-0 bg-gradient-to-t from-black/20 via-transparent to-transparent z-10"></div>
        <div class="absolute inset-0 z-20 flex flex-col justify-center items-center text-center text-white px-4">
            <h1 class="text-4xl md:text-5xl font-bold mb-6 tracking-tight">Paket Edukasi Membatik</h1>
            <p class="text-xl md:text-2xl mb-8 max-w-2xl leading-relaxed">Nikmati pengalaman membatik langsung dari pengrajin
                profesional Tanjung Bumi dengan teknik tradisional autentik.</p>
            <a href="#paket"
                class="bg-gradient-to-r from-blue-500 to-purple-500 hover:from-blue-600 hover:to-purple-600 px-8 py-4 rounded-xl font-semibold text-lg shadow-lg transition-all duration-300 transform hover:-translate-y-1">
                Jelajahi Paket
            </a>
        </div>
    </header>
@endsection

@section('content')
    <!-- Deskripsi Program - Diperbaiki -->
    <section class="py-16 px-4 max-w-6xl mx-auto">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Deskripsi Program</h2>
            <div class="w-24 h-1 bg-gradient-to-r from-blue-500 to-purple-500 mx-auto mb-6"></div>
        </div>
        <div class="bg-white rounded-2xl shadow-lg p-8 md:p-10 border border-gray-100 max-w-4xl mx-auto">
            <p class="text-gray-700 text-lg leading-relaxed text-center">
                Program Edukasi Membatik Tanjung Bumi dirancang khusus untuk memperkenalkan tradisi batik autentik dan
                meningkatkan rasa cinta terhadap warisan budaya Indonesia kepada generasi muda.
                Peserta akan mempelajari sejarah batik, teknik membatik tradisional, hingga menciptakan karya batik sendiri
                di bawah bimbingan langsung pengrajin profesional dengan pengalaman puluhan tahun.
            </p>
        </div>
    </section>

    <!-- Paket Edukasi - Diperbaiki -->
    <section id="paket" class="py-16 px-4 bg-gray-50">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-12">
                <h1 class="text-4xl font-bold text-gray-800 mb-4">Paket Edukasi Membatik</h1>
                <div class="w-24 h-1 bg-gradient-to-r from-blue-500 to-purple-500 mx-auto"></div>
                <p class="text-gray-600 mt-6 max-w-2xl mx-auto text-lg">Pilih paket yang sesuai dengan kebutuhan dan jadwal
                    Anda. Semua paket termasuk materi lengkap dan bimbingan pengrajin profesional.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-12">
                @foreach ($packages as $package)
                    <div
                        class="bg-white rounded-2xl shadow-md hover:shadow-xl transition-all duration-300 overflow-hidden group border border-gray-100">
                        <div class="overflow-hidden">
                            <img src="{{ asset('storage/' . $package->image) }}"
                                class="w-full h-64 object-cover group-hover:scale-105 transition-transform duration-500"
                                alt="{{ $package->title }}">
                        </div>
                        <div class="p-6">
                            <h2 class="text-xl font-bold mb-3 text-gray-800 group-hover:text-amber-600 transition-colors">
                                {{ $package->title }}</h2>
                            <p class="text-gray-600 mb-4 line-clamp-3">{{ $package->description }}</p>
                            <div class="flex justify-between items-center mt-6">
                                <span class="font-bold text-amber-600 text-lg">
                                    Rp {{ number_format($package->price, 0, ',', '.') }}
                                </span>
                                <a href="{{ route('edupackage.detail', $package->slug) }}"
                                    class="border-2 border-blue-500 text-blue-600 hover:bg-blue-50 transition-all duration-200 px-5 py-2 rounded-lg font-medium flex items-center">
                                    Lihat Detail
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Fasilitas & Pengajar - Diperbaiki -->
    <section class="py-16 px-4 max-w-7xl mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <!-- Fasilitas -->
            <div>
                <h2 class="text-3xl font-bold text-gray-800 mb-8">Fasilitas yang Didapat</h2>
                <div class="space-y-6">
                    <div
                        class="flex items-start p-4 bg-white rounded-xl shadow-sm border border-gray-100 hover:shadow-md transition-shadow">
                        <div class="bg-amber-100 p-3 rounded-lg mr-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-amber-600" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-lg text-gray-800 mb-1">Alat Membatik Lengkap</h3>
                            <p class="text-gray-600">Semua peralatan membatik disediakan, termasuk canting, wajan, kompor,
                                dan lilin batik.</p>
                        </div>
                    </div>

                    <div
                        class="flex items-start p-4 bg-white rounded-xl shadow-sm border border-gray-100 hover:shadow-md transition-shadow">
                        <div class="bg-amber-100 p-3 rounded-lg mr-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-amber-600" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 8v8m-4-5v5m-4-2v2m-2 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-lg text-gray-800 mb-1">Bahan Kain Batik Premium</h3>
                            <p class="text-gray-600">Kain mori prima kualitas terbaik untuk memastikan hasil batik yang
                                maksimal.</p>
                        </div>
                    </div>

                    <div
                        class="flex items-start p-4 bg-white rounded-xl shadow-sm border border-gray-100 hover:shadow-md transition-shadow">
                        <div class="bg-amber-100 p-3 rounded-lg mr-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-amber-600" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-lg text-gray-800 mb-1">Pengajar Profesional</h3>
                            <p class="text-gray-600">Didampingi langsung oleh pengrajin batik berpengalaman dengan metode
                                pengajaran yang mudah dipahami.</p>
                        </div>
                    </div>

                    <div
                        class="flex items-start p-4 bg-white rounded-xl shadow-sm border border-gray-100 hover:shadow-md transition-shadow">
                        <div class="bg-amber-100 p-3 rounded-lg mr-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-amber-600" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-lg text-gray-800 mb-1">Sertifikat Peserta</h3>
                            <p class="text-gray-600">Sertifikat resmi sebagai bukti telah menyelesaikan program edukasi
                                membatik.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Profil Pengajar -->
            <div>
                <h2 class="text-3xl font-bold text-gray-800 mb-8 text-center lg:text-left">Tim Pengajar Profesional</h2>
                <div class="space-y-6">
                    <div
                        class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 hover:shadow-md transition-shadow">
                        <div class="flex flex-col md:flex-row items-center md:items-start gap-5">
                            <img src="/images/Pengajar1.png"
                                class="w-24 h-24 rounded-full object-cover border-4 border-amber-100" alt="Pengajar 1">
                            <div class="text-center md:text-left">
                                <h3 class="font-bold text-xl text-gray-800">Siti Aminah</h3>
                                <p class="text-amber-600 font-medium mb-2">Pengrajin Batik Senior</p>
                                <p class="text-gray-600">Memiliki pengalaman lebih dari 25 tahun dalam membatik dengan
                                    spesialisasi teknik tulis dan cap tradisional.</p>
                            </div>
                        </div>
                    </div>

                    <div
                        class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 hover:shadow-md transition-shadow">
                        <div class="flex flex-col md:flex-row items-center md:items-start gap-5">
                            <img src="/images/Pengajar2.png"
                                class="w-24 h-24 rounded-full object-cover border-4 border-amber-100" alt="Pengajar 2">
                            <div class="text-center md:text-left">
                                <h3 class="font-bold text-xl text-gray-800">Hj Abdullah Rahman</h3>
                                <p class="text-amber-600 font-medium mb-2">Instruktur Batik</p>
                                <p class="text-gray-600">Bergelut di dunia batik selama 18 tahun dengan keahlian khusus
                                    dalam pewarnaan alami dan motif tradisional.</p>
                            </div>
                        </div>
                    </div>

                    <div
                        class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 hover:shadow-md transition-shadow">
                        <div class="flex flex-col md:flex-row items-center md:items-start gap-5">
                            <img src="/images/Pengajar3.png"
                                class="w-24 h-24 rounded-full object-cover border-4 border-amber-100" alt="Pengajar 3">
                            <div class="text-center md:text-left">
                                <h3 class="font-bold text-xl text-gray-800">Nurul Hayati</h3>
                                <p class="text-amber-600 font-medium mb-2">Desainer Batik</p>
                                <p class="text-gray-600">Ahli dalam merancang motif batik kontemporer dengan sentuhan
                                    tradisional selama 12 tahun.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimoni - Diperbaiki -->
    <section class="py-16 bg-gradient-to-br from-gray-50 to-amber-50 px-4">
        {{-- <div class="max-w-6xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Apa Kata Peserta?</h2>
                <div class="w-24 h-1 bg-amber-500 mx-auto"></div>
                <p class="text-gray-600 mt-6 max-w-2xl mx-auto">Dengarkan pengalaman langsung dari peserta yang telah mengikuti program edukasi membatik kami.</p>
            </div>

            <div class="relative">
                <div id="testimonial-wrapper" class="flex overflow-hidden rounded-2xl">
                    <!-- Testimoni 1 -->
                    <div class="testimonial-slide flex-shrink-0 w-full">
                        <div class="bg-white rounded-2xl shadow-lg p-8 mx-2 h-full">
                            <div class="flex items-center mb-6">
                                <div class="flex text-amber-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                </div>
                            </div>
                            <p class="text-gray-600 text-lg mb-6 italic">"Belajar membatik di sini sangat menyenangkan! Saya jadi tahu proses batik tulis secara langsung dari awal hingga akhir. Pengajarnya sangat sabar dan profesional."</p>
                            <div class="flex items-center">
                                <div class="bg-gradient-to-r from-amber-400 to-amber-500 w-12 h-12 rounded-full flex items-center justify-center text-white font-bold mr-4">D</div>
                                <div>
                                    <p class="font-semibold text-gray-800">Dewi Lestari</p>
                                    <p class="text-gray-500 text-sm">Peserta Paket Premium</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Testimoni 2 -->
                    <div class="testimonial-slide flex-shrink-0 w-full">
                        <div class="bg-white rounded-2xl shadow-lg p-8 mx-2 h-full">
                            <div class="flex items-center mb-6">
                                <div class="flex text-amber-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                </div>
                            </div>
                            <p class="text-gray-600 text-lg mb-6 italic">"Instruktur ramah dan sabar, cocok untuk pemula seperti saya. Semua alat disediakan lengkap dan bahan berkualitas. Sangat direkomendasikan untuk yang ingin belajar batik dari nol."</p>
                            <div class="flex items-center">
                                <div class="bg-gradient-to-r from-amber-400 to-amber-500 w-12 h-12 rounded-full flex items-center justify-center text-white font-bold mr-4">A</div>
                                <div>
                                    <p class="font-semibold text-gray-800">Andi Pratama</p>
                                    <p class="text-gray-500 text-sm">Peserta Paket Dasar</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Testimoni 3 -->
                    <div class="testimonial-slide flex-shrink-0 w-full">
                        <div class="bg-white rounded-2xl shadow-lg p-8 mx-2 h-full">
                            <div class="flex items-center mb-6">
                                <div class="flex text-amber-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                </div>
                            </div>
                            <p class="text-gray-600 text-lg mb-6 italic">"Pengalaman yang tidak terlupakan, saya bisa membuat batik karya sendiri yang bisa dibawa pulang. Lokasinya nyaman dan suasana belajar sangat menyenangkan."</p>
                            <div class="flex items-center">
                                <div class="bg-gradient-to-r from-amber-400 to-amber-500 w-12 h-12 rounded-full flex items-center justify-center text-white font-bold mr-4">S</div>
                                <div>
                                    <p class="font-semibold text-gray-800">Sinta Wulandari</p>
                                    <p class="text-gray-500 text-sm">Peserta Paket Keluarga</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Tombol Navigasi -->
                <button id="prev" class="absolute left-0 top-1/2 -translate-y-1/2 -translate-x-4 bg-white hover:bg-amber-50 text-amber-600 w-10 h-10 rounded-full shadow-lg flex items-center justify-center transition-colors z-10">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>
                <button id="next" class="absolute right-0 top-1/2 -translate-y-1/2 translate-x-4 bg-white hover:bg-amber-50 text-amber-600 w-10 h-10 rounded-full shadow-lg flex items-center justify-center transition-colors z-10">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </button>
                
                <!-- Indikator -->
                <div class="flex justify-center mt-8 space-x-2" id="testimonial-indicators">
                    <button class="testimonial-indicator w-3 h-3 rounded-full bg-amber-200 transition-all duration-300"></button>
                    <button class="testimonial-indicator w-3 h-3 rounded-full bg-amber-200 transition-all duration-300"></button>
                    <button class="testimonial-indicator w-3 h-3 rounded-full bg-amber-200 transition-all duration-300"></button>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 px-4 bg-gradient-to-r from-amber-500 to-amber-600 text-white">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">Siap Memulai Perjalanan Membatik Anda?</h2>
            <p class="text-xl mb-8 max-w-2xl mx-auto">Jangan lewatkan kesempatan langka untuk belajar langsung dari pengrajin batik Tanjung Bumi dengan teknik tradisional autentik.</p>
            <a href="#paket" class="inline-block bg-white text-amber-600 hover:bg-gray-100 px-8 py-4 rounded-xl font-bold text-lg shadow-lg transition-all duration-300 transform hover:-translate-y-1">
                Daftar Sekarang
            </a>
        </div>
    </section> --}}

        <!-- Testimonials Section -->
        <div class="bg-gradient-to-br from-blue-50 to-indigo-100 rounded-2xl p-8 lg:p-12">
            <div class="text-center mb-12">
                <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-4">
                    Apa <span class="text-blue-600">Kata Mereka</span> Tentang Kami
                </h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    Dipercaya oleh <span class="text-blue-600 font-semibold">ratusan pelanggan</span> yang puas dengan
                    kualitas dan pelayanan kami
                </p>
                <div class="mt-6 inline-flex items-center space-x-2 bg-white px-6 py-3 rounded-full shadow-lg">
                    <div class="flex text-amber-400">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <span class="text-gray-700 font-semibold">4.8/5 dari 287 reviews</span>
                </div>
            </div>

            <!-- Testimonials Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
                <!-- Testimonial 1 -->
                <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <div class="flex text-amber-400 mb-4">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="text-gray-600 mb-6 italic">
                        "Batik yang saya beli kualitasnya luar biasa! Motifnya detail sekali dan bahannya nyaman dipakai.
                        Pengiriman juga cepat."
                    </p>
                    <div class="flex items-center space-x-3">
                        <div
                            class="w-12 h-12 bg-gradient-to-br from-blue-500 to-purple-600 rounded-full flex items-center justify-center text-white font-semibold">
                            D
                        </div>
                        <div>
                            <p class="font-semibold text-gray-900">Dewi Sartika</p>
                            <p class="text-sm text-gray-500">Jakarta</p>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <div class="flex text-amber-400 mb-4">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="text-gray-600 mb-6 italic">
                        "Pelayanannya ramah dan responsive. Batiknya original Tanjung Bumi, bisa dilihat dari detail
                        motifnya. Very recommended!"
                    </p>
                    <div class="flex items-center space-x-3">
                        <div
                            class="w-12 h-12 bg-gradient-to-br from-green-500 to-teal-600 rounded-full flex items-center justify-center text-white font-semibold">
                            A
                        </div>
                        <div>
                            <p class="font-semibold text-gray-900">Andi Pratama</p>
                            <p class="text-sm text-gray-500">Surabaya</p>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <div class="flex text-amber-400 mb-4">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="text-gray-600 mb-6 italic">
                        "Sudah beberapa kali belanja di sini dan selalu puas. Koleksi batiknya unik-unik dan kualitas
                        terjaga. Seller terpercaya!"
                    </p>
                    <div class="flex items-center space-x-3">
                        <div
                            class="w-12 h-12 bg-gradient-to-br from-pink-500 to-rose-600 rounded-full flex items-center justify-center text-white font-semibold">
                            S
                        </div>
                        <div>
                            <p class="font-semibold text-gray-900">Sinta Nurhaliza</p>
                            <p class="text-sm text-gray-500">Bandung</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CTA Section -->
            <div class="text-center bg-white rounded-2xl p-8 shadow-lg">
                <h3 class="text-2xl font-bold text-gray-900 mb-4">
                    Sudah Terbukti Kualitasnya?
                </h3>
                <p class="text-gray-600 mb-6 max-w-2xl mx-auto text-lg">
                    "Jangan ragu lagi! Bergabunglah dengan ratusan pelanggan puas kami dan miliki batik Tanjung Bumi asli
                    dengan kualitas premium. Stok terbatas, pesan sekarang sebelum kehabisan!"
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="#"
                        class="bg-gradient-to-r from-blue-600 to-purple-600 text-white font-semibold px-8 py-4 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 inline-flex items-center space-x-3">
                        <i class="fas fa-shopping-cart"></i>
                        <span>Pesan Sekarang</span>
                    </a>
                    <a href="{{ route('shop.index') }}"
                        class="border-2 border-blue-500 text-blue-600 font-semibold px-8 py-4 rounded-xl hover:bg-blue-50 transition-all duration-200 inline-flex items-center space-x-3">
                        <i class="fas fa-arrow-left"></i>
                        <span>Lihat Koleksi Lain</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const wrapper = document.getElementById('testimonial-wrapper');
            const next = document.getElementById('next');
            const prev = document.getElementById('prev');
            const indicators = document.querySelectorAll('.testimonial-indicator');
            const total = document.querySelectorAll('.testimonial-slide').length;
            let index = 0;

            function updateIndicators() {
                indicators.forEach((indicator, i) => {
                    if (i === index) {
                        indicator.classList.remove('bg-amber-200', 'w-3');
                        indicator.classList.add('bg-amber-500', 'w-8');
                    } else {
                        indicator.classList.remove('bg-amber-500', 'w-8');
                        indicator.classList.add('bg-amber-200', 'w-3');
                    }
                });
            }

            function showSlide(i) {
                if (i >= total) index = 0;
                else if (i < 0) index = total - 1;
                else index = i;

                wrapper.style.transform = `translateX(-${index * 100}%)`;
                updateIndicators();
            }

            next.addEventListener('click', () => showSlide(index + 1));
            prev.addEventListener('click', () => showSlide(index - 1));

            // Add click events to indicators
            indicators.forEach((indicator, i) => {
                indicator.addEventListener('click', () => showSlide(i));
            });

            // Auto slide every 5 seconds
            setInterval(() => showSlide(index + 1), 5000);

            // Initialize
            updateIndicators();
        });
    </script>
@endsection
