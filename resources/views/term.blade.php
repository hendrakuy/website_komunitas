@extends('layouts.app')

@section('title', 'Batik Paseseh - Syarat dan Ketentuan')

@section('content')
    <!-- Hero Section -->
    <section
        class="relative bg-gradient-to-br from-slate-900 via-indigo-900 to-purple-900 py-16 md:py-20 lg:py-24 overflow-hidden">
        <!-- Decorative Elements -->
        <div class="absolute inset-0 overflow-hidden">
            <div class="absolute top-0 right-0 w-96 h-96 bg-indigo-500/10 rounded-full blur-3xl"></div>
            <div class="absolute bottom-0 left-0 w-96 h-96 bg-purple-500/10 rounded-full blur-3xl"></div>
            <div
                class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-blue-500/5 rounded-full blur-3xl">
            </div>
        </div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <!-- Badge -->
            <div
                class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/10 backdrop-blur-sm border border-white/20 mb-6">
                <svg class="w-4 h-4 text-amber-400" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                        clip-rule="evenodd"></path>
                </svg>
                <span class="text-white text-sm font-medium">Perjanjian Pengguna</span>
            </div>

            <!-- Main Title -->
            <h1 class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-bold text-white mb-4 md:mb-6">
                Syarat & Ketentuan
            </h1>
            <p class="text-lg md:text-xl text-indigo-100 max-w-3xl mx-auto leading-relaxed">
                Panduan penggunaan situs web Kampung Batik Paseseh untuk pengalaman terbaik Anda
            </p>

            <!-- Last Updated -->
            <div class="mt-8 inline-flex items-center gap-2 text-indigo-200 text-sm">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                </svg>
                <span>Terakhir diperbarui: {{ now()->format('d F Y') }}</span>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <section class="py-12 md:py-16 lg:py-20 bg-gradient-to-b from-white via-slate-50 to-white">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Introduction Card -->
            <div
                class="bg-gradient-to-br from-indigo-50 to-purple-50 rounded-2xl md:rounded-3xl p-6 md:p-8 lg:p-10 mb-8 md:mb-12 border border-indigo-100 shadow-lg">
                <div class="flex items-start gap-4">
                    <div
                        class="flex-shrink-0 w-12 h-12 md:w-14 md:h-14 rounded-2xl bg-gradient-to-br from-indigo-500 to-purple-600 flex items-center justify-center shadow-lg">
                        <svg class="w-6 h-6 md:w-7 md:h-7 text-white" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                            </path>
                        </svg>
                    </div>
                    <div class="flex-1">
                        <h2 class="text-xl md:text-2xl font-bold text-slate-900 mb-3">Perjanjian Penggunaan</h2>
                        <p class="text-slate-700 leading-relaxed text-sm md:text-base">
                            Syarat dan Ketentuan ini mengatur penggunaan situs web <strong class="text-indigo-700">Kampung
                                Batik Paseseh</strong>.
                            Dengan mengakses situs ini, Anda dianggap telah membaca, memahami, dan menyetujui isi dari
                            Syarat dan
                            Ketentuan berikut. Mohon baca dengan seksama sebelum menggunakan layanan kami.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Terms Sections -->
            <div class="space-y-6 md:space-y-8">
                <!-- Section 1 -->
                <div
                    class="bg-white rounded-2xl md:rounded-3xl p-6 md:p-8 shadow-lg border border-slate-100 hover:shadow-xl transition-shadow duration-300">
                    <div class="flex items-start gap-4 mb-4">
                        <div
                            class="flex-shrink-0 w-10 h-10 rounded-xl bg-gradient-to-br from-blue-500 to-cyan-600 flex items-center justify-center text-white font-bold text-lg shadow-md">
                            1
                        </div>
                        <div class="flex-1">
                            <h3 class="text-xl md:text-2xl font-bold text-slate-900 mb-4">Penggunaan Situs</h3>
                            <div class="space-y-4">
                                <p class="text-slate-700 leading-relaxed text-sm md:text-base">
                                    Situs ini bertujuan untuk memberikan informasi mengenai kegiatan, produk UMKM, dan
                                    wisata yang ada di
                                    Kampung Batik Paseseh.
                                </p>
                                <div class="bg-blue-50 rounded-xl p-4 md:p-5 border border-blue-100">
                                    <div class="flex items-start gap-3">
                                        <svg class="w-5 h-5 text-blue-600 flex-shrink-0 mt-0.5" fill="currentColor"
                                            viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <p class="text-slate-700 text-sm md:text-base">
                                            Pengguna wajib menggunakan situs ini secara bertanggung jawab dan tidak
                                            melakukan tindakan yang dapat
                                            merugikan pihak lain atau mengganggu operasional situs.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Section 2 -->
                <div
                    class="bg-white rounded-2xl md:rounded-3xl p-6 md:p-8 shadow-lg border border-slate-100 hover:shadow-xl transition-shadow duration-300">
                    <div class="flex items-start gap-4 mb-4">
                        <div
                            class="flex-shrink-0 w-10 h-10 rounded-xl bg-gradient-to-br from-purple-500 to-pink-600 flex items-center justify-center text-white font-bold text-lg shadow-md">
                            2
                        </div>
                        <div class="flex-1">
                            <h3 class="text-xl md:text-2xl font-bold text-slate-900 mb-4">Informasi dan Konten</h3>
                            <div class="space-y-4">
                                <div
                                    class="bg-gradient-to-br from-purple-50 to-pink-50 rounded-xl p-4 md:p-5 border border-purple-100">
                                    <div class="flex items-start gap-3 mb-3">
                                        <svg class="w-6 h-6 text-purple-600 flex-shrink-0" fill="none"
                                            stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                                            </path>
                                        </svg>
                                        <div>
                                            <h4 class="font-semibold text-slate-900 mb-2 text-base md:text-lg">Hak
                                                Kepemilikan</h4>
                                            <p class="text-slate-700 text-sm md:text-base leading-relaxed">
                                                Semua konten, termasuk teks, gambar, video, dan data lainnya di situs ini
                                                adalah milik <strong class="text-purple-700">Kampung Batik Paseseh</strong>
                                                atau pihak yang memberikan izin penggunaan.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex items-start gap-3 bg-rose-50 rounded-xl p-4 border border-rose-100">
                                    <svg class="w-5 h-5 text-rose-600 flex-shrink-0 mt-0.5" fill="currentColor"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M13.477 14.89A6 6 0 015.11 6.524l8.367 8.368zm1.414-1.414L6.524 5.11a6 6 0 018.367 8.367zM18 10a8 8 0 11-16 0 8 8 0 0116 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <p class="text-slate-700 text-sm md:text-base">
                                        <strong>Dilarang</strong> menyalin, mendistribusikan, atau menggunakan konten tanpa
                                        izin tertulis dari pengelola situs.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Section 3 -->
                <div
                    class="bg-white rounded-2xl md:rounded-3xl p-6 md:p-8 shadow-lg border border-slate-100 hover:shadow-xl transition-shadow duration-300">
                    <div class="flex items-start gap-4 mb-4">
                        <div
                            class="flex-shrink-0 w-10 h-10 rounded-xl bg-gradient-to-br from-emerald-500 to-teal-600 flex items-center justify-center text-white font-bold text-lg shadow-md">
                            3
                        </div>
                        <div class="flex-1">
                            <h3 class="text-xl md:text-2xl font-bold text-slate-900 mb-4">Komunikasi dan Layanan</h3>
                            <p class="text-slate-700 leading-relaxed text-sm md:text-base mb-4">
                                Situs ini menyediakan layanan kontak melalui berbagai channel komunikasi:
                            </p>
                            <div class="grid sm:grid-cols-3 gap-3 mb-4">
                                <div class="bg-emerald-50 rounded-xl p-4 border border-emerald-100 text-center">
                                    <svg class="w-8 h-8 text-emerald-600 mx-auto mb-2" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                                        </path>
                                    </svg>
                                    <p class="text-slate-700 font-semibold text-sm">Formulir</p>
                                </div>
                                <div class="bg-emerald-50 rounded-xl p-4 border border-emerald-100 text-center">
                                    <svg class="w-8 h-8 text-emerald-600 mx-auto mb-2" fill="currentColor"
                                        viewBox="0 0 20 20">
                                        <path
                                            d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z">
                                        </path>
                                    </svg>
                                    <p class="text-slate-700 font-semibold text-sm">WhatsApp</p>
                                </div>
                                <div class="bg-emerald-50 rounded-xl p-4 border border-emerald-100 text-center">
                                    <svg class="w-8 h-8 text-emerald-600 mx-auto mb-2" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                        </path>
                                    </svg>
                                    <p class="text-slate-700 font-semibold text-sm">Newsletter</p>
                                </div>
                            </div>
                            <div class="bg-teal-50 rounded-xl p-4 border border-teal-100">
                                <p class="text-slate-700 text-sm md:text-base">
                                    Dengan menggunakan layanan tersebut, Anda memberikan izin kepada kami untuk menghubungi
                                    Anda kembali melalui
                                    informasi kontak yang diberikan.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Section 4 -->
                <div
                    class="bg-white rounded-2xl md:rounded-3xl p-6 md:p-8 shadow-lg border border-slate-100 hover:shadow-xl transition-shadow duration-300">
                    <div class="flex items-start gap-4 mb-4">
                        <div
                            class="flex-shrink-0 w-10 h-10 rounded-xl bg-gradient-to-br from-amber-500 to-orange-600 flex items-center justify-center text-white font-bold text-lg shadow-md">
                            4
                        </div>
                        <div class="flex-1">
                            <h3 class="text-xl md:text-2xl font-bold text-slate-900 mb-4">Keamanan dan Privasi</h3>
                            <div
                                class="bg-gradient-to-br from-amber-50 to-orange-50 rounded-xl p-4 md:p-5 border border-amber-100 mb-4">
                                <div class="flex items-start gap-3">
                                    <svg class="w-6 h-6 text-amber-600 flex-shrink-0" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z">
                                        </path>
                                    </svg>
                                    <div>
                                        <p class="text-slate-700 text-sm md:text-base leading-relaxed mb-2">
                                            Kami menjaga kerahasiaan data pribadi pengguna sesuai dengan
                                            <a href="{{ route('privacy') }}"
                                                class="text-amber-700 hover:text-amber-800 font-semibold underline decoration-2 underline-offset-2 transition-colors">Kebijakan
                                                Privasi</a> kami.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-start gap-3 bg-slate-50 rounded-xl p-4 border border-slate-200">
                                <svg class="w-5 h-5 text-slate-600 flex-shrink-0 mt-0.5" fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <p class="text-slate-600 text-sm md:text-base">
                                    Namun, kami tidak bertanggung jawab atas kebocoran data yang terjadi akibat faktor di
                                    luar kendali kami,
                                    seperti serangan siber atau kesalahan pihak ketiga.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Section 5 -->
                <div
                    class="bg-white rounded-2xl md:rounded-3xl p-6 md:p-8 shadow-lg border border-slate-100 hover:shadow-xl transition-shadow duration-300">
                    <div class="flex items-start gap-4 mb-4">
                        <div
                            class="flex-shrink-0 w-10 h-10 rounded-xl bg-gradient-to-br from-red-500 to-rose-600 flex items-center justify-center text-white font-bold text-lg shadow-md">
                            5
                        </div>
                        <div class="flex-1">
                            <h3 class="text-xl md:text-2xl font-bold text-slate-900 mb-4">Tanggung Jawab Pengguna</h3>
                            <p class="text-slate-700 leading-relaxed text-sm md:text-base mb-4">
                                Sebagai pengguna situs, Anda bertanggung jawab untuk:
                            </p>
                            <div class="space-y-3">
                                <div class="flex items-start gap-3 bg-red-50 rounded-xl p-4 border border-red-100">
                                    <svg class="w-5 h-5 text-red-600 flex-shrink-0 mt-0.5" fill="currentColor"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M13.477 14.89A6 6 0 015.11 6.524l8.367 8.368zm1.414-1.414L6.524 5.11a6 6 0 018.367 8.367zM18 10a8 8 0 11-16 0 8 8 0 0116 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <p class="text-slate-700 text-sm md:text-base">
                                        Tidak mengirimkan pesan yang mengandung ujaran kebencian, spam, atau konten yang
                                        melanggar hukum melalui
                                        formulir kontak atau WhatsApp
                                    </p>
                                </div>
                                <div class="flex items-start gap-3 bg-red-50 rounded-xl p-4 border border-red-100">
                                    <svg class="w-5 h-5 text-red-600 flex-shrink-0 mt-0.5" fill="currentColor"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M13.477 14.89A6 6 0 015.11 6.524l8.367 8.368zm1.414-1.414L6.524 5.11a6 6 0 018.367 8.367zM18 10a8 8 0 11-16 0 8 8 0 0116 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <p class="text-slate-700 text-sm md:text-base">
                                        Tidak melakukan upaya meretas, memanipulasi data, atau mengakses bagian situs yang
                                        tidak diizinkan
                                    </p>
                                </div>
                                <div class="flex items-start gap-3 bg-emerald-50 rounded-xl p-4 border border-emerald-100">
                                    <svg class="w-5 h-5 text-emerald-600 flex-shrink-0 mt-0.5" fill="currentColor"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <p class="text-slate-700 text-sm md:text-base">
                                        Menjaga kebenaran informasi yang diberikan kepada pengelola situs
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Section 6 -->
                <div
                    class="bg-white rounded-2xl md:rounded-3xl p-6 md:p-8 shadow-lg border border-slate-100 hover:shadow-xl transition-shadow duration-300">
                    <div class="flex items-start gap-4 mb-4">
                        <div
                            class="flex-shrink-0 w-10 h-10 rounded-xl bg-gradient-to-br from-cyan-500 to-blue-600 flex items-center justify-center text-white font-bold text-lg shadow-md">
                            6
                        </div>
                        <div class="flex-1">
                            <h3 class="text-xl md:text-2xl font-bold text-slate-900 mb-4">Perubahan dan Pembaruan</h3>
                            <div
                                class="bg-gradient-to-br from-cyan-50 to-blue-50 rounded-xl p-4 md:p-5 border border-cyan-100">
                                <div class="flex items-start gap-3">
                                    <svg class="w-6 h-6 text-cyan-600 flex-shrink-0" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15">
                                        </path>
                                    </svg>
                                    <div>
                                        <p class="text-slate-700 text-sm md:text-base leading-relaxed mb-2">
                                            Pengelola <strong class="text-cyan-700">Kampung Batik Paseseh</strong> berhak
                                            mengubah isi situs, fitur, atau Syarat dan Ketentuan
                                            ini kapan saja tanpa pemberitahuan sebelumnya.
                                        </p>
                                        <p class="text-slate-600 text-sm">
                                            Pengguna diharapkan memeriksa halaman ini secara berkala untuk mengetahui
                                            pembaruan terbaru.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Section 7 -->
                <div
                    class="bg-white rounded-2xl md:rounded-3xl p-6 md:p-8 shadow-lg border border-slate-100 hover:shadow-xl transition-shadow duration-300">
                    <div class="flex items-start gap-4 mb-4">
                        <div
                            class="flex-shrink-0 w-10 h-10 rounded-xl bg-gradient-to-br from-slate-500 to-gray-600 flex items-center justify-center text-white font-bold text-lg shadow-md">
                            7
                        </div>
                        <div class="flex-1">
                            <h3 class="text-xl md:text-2xl font-bold text-slate-900 mb-4">Batasan Tanggung Jawab</h3>
                            <div class="bg-slate-50 rounded-xl p-4 md:p-5 border border-slate-200">
                                <div class="flex items-start gap-3">
                                    <svg class="w-6 h-6 text-slate-600 flex-shrink-0" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z">
                                        </path>
                                    </svg>
                                    <p class="text-slate-700 text-sm md:text-base leading-relaxed">
                                        Kami tidak bertanggung jawab atas kerugian atau kerusakan yang timbul akibat
                                        penggunaan situs ini, termasuk
                                        kesalahan teknis, keterlambatan akses, atau gangguan jaringan.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Section 8 - Contact -->
                <div
                    class="bg-gradient-to-br from-indigo-600 via-purple-700 to-pink-700 rounded-2xl md:rounded-3xl p-5 sm:p-6 md:p-8 lg:p-10 shadow-2xl text-white mx-auto">
                    <div class="flex flex-col sm:flex-row items-start gap-5 sm:gap-6 mb-6">
                        <div
                            class="flex-shrink-0 w-12 h-12 sm:w-14 sm:h-14 rounded-2xl bg-white/20 backdrop-blur-sm flex items-center justify-center border border-white/30">
                            <svg class="w-6 h-6 sm:w-7 sm:h-7 text-white" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                </path>
                            </svg>
                        </div>

                        <div class="flex-1">
                            <h3 class="text-lg sm:text-xl md:text-2xl lg:text-3xl font-bold mb-3">Hubungi Kami</h3>
                            <p class="text-indigo-100 leading-relaxed text-sm sm:text-base mb-5">
                                Jika Anda memiliki pertanyaan mengenai Syarat dan Ketentuan ini, silakan hubungi kami
                                melalui:
                            </p>

                            <div class="space-y-3 sm:space-y-4">
                                <!-- Email -->
                                <a href="mailto:hartonohedra04@gmail.com"
                                    class="flex flex-col sm:flex-row items-start sm:items-center gap-3 bg-white/10 backdrop-blur-sm hover:bg-white/20 rounded-xl p-4 border border-white/20 transition-all duration-300 group">
                                    <div class="flex items-center gap-3 w-full sm:w-auto">
                                        <svg class="w-5 h-5 text-amber-400 flex-shrink-0" fill="none"
                                            stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                            </path>
                                        </svg>
                                        <div class="flex-1 min-w-0">
                                            <p class="text-indigo-100 text-xs sm:text-sm font-medium mb-0.5">Email</p>
                                            <p
                                                class="font-semibold text-sm sm:text-base group-hover:text-amber-400 transition-colors truncate">
                                                hartonohedra04@gmail.com
                                            </p>
                                        </div>
                                    </div>
                                    <svg class="w-5 h-5 text-white/60 group-hover:text-white group-hover:translate-x-1 transition-all flex-shrink-0 self-end sm:self-center"
                                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 5l7 7-7 7"></path>
                                    </svg>
                                </a>

                                <!-- Website -->
                                <a href="{{ url('/') }}"
                                    class="flex flex-col sm:flex-row items-start sm:items-center gap-3 bg-white/10 backdrop-blur-sm hover:bg-white/20 rounded-xl p-4 border border-white/20 transition-all duration-300 group">
                                    <div class="flex items-center gap-3 w-full sm:w-auto">
                                        <svg class="w-5 h-5 text-amber-400 flex-shrink-0" fill="none"
                                            stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9">
                                            </path>
                                        </svg>
                                        <div class="flex-1 min-w-0">
                                            <p class="text-indigo-100 text-xs sm:text-sm font-medium mb-0.5">Website</p>
                                            <p
                                                class="font-semibold text-sm sm:text-base group-hover:text-amber-400 transition-colors truncate">
                                                Kampung Batik Paseseh
                                            </p>
                                        </div>
                                    </div>
                                    <svg class="w-5 h-5 text-white/60 group-hover:text-white group-hover:translate-x-1 transition-all flex-shrink-0 self-end sm:self-center"
                                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 5l7 7-7 7"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Footer Note -->
            <div class="mt-12 md:mt-16 text-center">
                <div class="inline-flex items-center gap-2 px-6 py-3 rounded-full bg-slate-100 border border-slate-200">
                    <svg class="w-4 h-4 text-slate-600" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="text-slate-600 text-sm font-medium">Dengan menggunakan situs ini, Anda menyetujui syarat &
                        ketentuan kami</span>
                </div>
            </div>
        </div>
    </section>
@endsection
