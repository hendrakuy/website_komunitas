@extends('layouts.app')

@section('title', 'Batik Paseseh - Kebijakan Privasi')

@section('content')
    <!-- Hero Section -->
    <section
        class="relative bg-gradient-to-br from-slate-900 via-blue-900 to-indigo-900 py-16 md:py-20 lg:py-24 overflow-hidden">
        <!-- Decorative Elements -->
        <div class="absolute inset-0 overflow-hidden">
            <div class="absolute -top-24 -right-24 w-96 h-96 bg-blue-500/10 rounded-full blur-3xl"></div>
            <div class="absolute -bottom-24 -left-24 w-96 h-96 bg-indigo-500/10 rounded-full blur-3xl"></div>
        </div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <!-- Badge -->
            <div
                class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/10 backdrop-blur-sm border border-white/20 mb-6">
                <svg class="w-4 h-4 text-amber-400" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                        d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                        clip-rule="evenodd"></path>
                </svg>
                <span class="text-white text-sm font-medium">Keamanan & Privasi</span>
            </div>

            <!-- Main Title -->
            <h1 class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-bold text-white mb-4 md:mb-6">
                Kebijakan Privasi
            </h1>
            <p class="text-lg md:text-xl text-blue-100 max-w-3xl mx-auto leading-relaxed">
                Komitmen kami dalam melindungi data dan privasi Anda di Kampung Batik Paseseh
            </p>

            <!-- Last Updated -->
            <div class="mt-8 inline-flex items-center gap-2 text-blue-200 text-sm">
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
                class="bg-gradient-to-br from-blue-50 to-indigo-50 rounded-2xl md:rounded-3xl p-6 md:p-8 lg:p-10 mb-8 md:mb-12 border border-blue-100 shadow-lg">
                <div class="flex items-start gap-4">
                    <div
                        class="flex-shrink-0 w-12 h-12 md:w-14 md:h-14 rounded-2xl bg-gradient-to-br from-blue-500 to-indigo-600 flex items-center justify-center shadow-lg">
                        <svg class="w-6 h-6 md:w-7 md:h-7 text-white" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <div class="flex-1">
                        <h2 class="text-xl md:text-2xl font-bold text-slate-900 mb-3">Tentang Kebijakan Ini</h2>
                        <p class="text-slate-700 leading-relaxed text-sm md:text-base">
                            Kebijakan privasi ini menjelaskan bagaimana <strong class="text-blue-700">Kampung Batik
                                Paseseh</strong> mengumpulkan,
                            menggunakan, dan melindungi informasi pribadi pengunjung yang mengakses situs kami. Kami
                            berkomitmen untuk menjaga kepercayaan Anda dengan menerapkan praktik terbaik dalam perlindungan
                            data.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Policy Sections -->
            <div class="space-y-6 md:space-y-8">
                <!-- Section 1 -->
                <div
                    class="bg-white rounded-2xl md:rounded-3xl p-6 md:p-8 shadow-lg border border-slate-100 hover:shadow-xl transition-shadow duration-300">
                    <div class="flex items-start gap-4 mb-4">
                        <div
                            class="flex-shrink-0 w-10 h-10 rounded-xl bg-blue-100 flex items-center justify-center text-blue-700 font-bold text-lg">
                            1
                        </div>
                        <div class="flex-1">
                            <h3 class="text-xl md:text-2xl font-bold text-slate-900 mb-4">Informasi yang Kami Kumpulkan</h3>
                            <p class="text-slate-700 leading-relaxed text-sm md:text-base mb-4">
                                Kami dapat mengumpulkan informasi pribadi seperti nama, alamat email, dan nomor telepon yang
                                Anda berikan
                                melalui formulir kontak, pendaftaran newsletter, atau interaksi melalui WhatsApp.
                            </p>
                            <div class="bg-slate-50 rounded-xl p-4 border border-slate-200">
                                <p class="text-slate-700 text-sm md:text-base">
                                    <span class="font-semibold text-slate-900">Tujuan pengumpulan:</span> Informasi ini
                                    digunakan
                                    untuk menanggapi pertanyaan, memberikan pembaruan, atau komunikasi lainnya yang relevan
                                    dengan layanan kami.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Section 2 -->
                <div
                    class="bg-white rounded-2xl md:rounded-3xl p-6 md:p-8 shadow-lg border border-slate-100 hover:shadow-xl transition-shadow duration-300">
                    <div class="flex items-start gap-4 mb-4">
                        <div
                            class="flex-shrink-0 w-10 h-10 rounded-xl bg-emerald-100 flex items-center justify-center text-emerald-700 font-bold text-lg">
                            2
                        </div>
                        <div class="flex-1">
                            <h3 class="text-xl md:text-2xl font-bold text-slate-900 mb-4">Penggunaan Informasi</h3>
                            <p class="text-slate-700 leading-relaxed text-sm md:text-base mb-4">
                                Informasi yang Anda berikan akan digunakan untuk berbagai keperluan operasional dan
                                komunikasi:
                            </p>
                            <div class="space-y-3">
                                <div class="flex items-start gap-3 bg-emerald-50 rounded-lg p-4 border border-emerald-100">
                                    <svg class="w-5 h-5 text-emerald-600 flex-shrink-0 mt-0.5" fill="currentColor"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="text-slate-700 text-sm md:text-base">Menanggapi pertanyaan atau permintaan
                                        Anda</span>
                                </div>
                                <div class="flex items-start gap-3 bg-emerald-50 rounded-lg p-4 border border-emerald-100">
                                    <svg class="w-5 h-5 text-emerald-600 flex-shrink-0 mt-0.5" fill="currentColor"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="text-slate-700 text-sm md:text-base">Mengirimkan informasi tentang produk,
                                        layanan, atau kegiatan UMKM</span>
                                </div>
                                <div class="flex items-start gap-3 bg-emerald-50 rounded-lg p-4 border border-emerald-100">
                                    <svg class="w-5 h-5 text-emerald-600 flex-shrink-0 mt-0.5" fill="currentColor"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="text-slate-700 text-sm md:text-base">Mengelola pendaftaran newsletter (jika
                                        Anda berlangganan)</span>
                                </div>
                                <div class="flex items-start gap-3 bg-emerald-50 rounded-lg p-4 border border-emerald-100">
                                    <svg class="w-5 h-5 text-emerald-600 flex-shrink-0 mt-0.5" fill="currentColor"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="text-slate-700 text-sm md:text-base">Memberikan notifikasi melalui layanan
                                        seperti OneSignal (apabila Anda menyetujuinya)</span>
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
                            class="flex-shrink-0 w-10 h-10 rounded-xl bg-purple-100 flex items-center justify-center text-purple-700 font-bold text-lg">
                            3
                        </div>
                        <div class="flex-1">
                            <h3 class="text-xl md:text-2xl font-bold text-slate-900 mb-4">Keamanan Data</h3>
                            <div
                                class="bg-gradient-to-br from-purple-50 to-indigo-50 rounded-xl p-5 md:p-6 border border-purple-100">
                                <div class="flex items-start gap-3 mb-3">
                                    <svg class="w-6 h-6 text-purple-600 flex-shrink-0" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z">
                                        </path>
                                    </svg>
                                    <div>
                                        <h4 class="font-semibold text-slate-900 mb-2 text-base md:text-lg">Perlindungan
                                            Maksimal</h4>
                                        <p class="text-slate-700 leading-relaxed text-sm md:text-base">
                                            Kami berkomitmen untuk menjaga keamanan data pribadi Anda. Kami menerapkan
                                            langkah-langkah teknis dan
                                            administratif yang wajar untuk melindungi data dari akses, penggunaan, atau
                                            pengungkapan yang tidak sah.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Section 4 -->
                <div
                    class="bg-white rounded-2xl md:rounded-3xl p-6 md:p-8 shadow-lg border border-slate-100 hover:shadow-xl transition-shadow duration-300">
                    <div class="flex items-start gap-4 mb-4">
                        <div
                            class="flex-shrink-0 w-10 h-10 rounded-xl bg-rose-100 flex items-center justify-center text-rose-700 font-bold text-lg">
                            4
                        </div>
                        <div class="flex-1">
                            <h3 class="text-xl md:text-2xl font-bold text-slate-900 mb-4">Pembagian Informasi kepada Pihak
                                Ketiga</h3>
                            <div class="bg-rose-50 rounded-xl p-5 md:p-6 border border-rose-100">
                                <div class="flex items-start gap-3 mb-3">
                                    <svg class="w-6 h-6 text-rose-600 flex-shrink-0" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z">
                                        </path>
                                    </svg>
                                    <div>
                                        <h4 class="font-semibold text-slate-900 mb-2 text-base md:text-lg">Kebijakan Tidak
                                            Menjual Data</h4>
                                        <p class="text-slate-700 leading-relaxed text-sm md:text-base mb-3">
                                            Kami <strong>tidak menjual, menukar, atau menyewakan</strong> informasi pribadi
                                            pengguna kepada pihak ketiga.
                                        </p>
                                        <p class="text-slate-600 text-sm md:text-base">
                                            Namun, kami dapat membagikan data dengan mitra layanan (seperti layanan email
                                            atau push notification) hanya untuk keperluan operasional situs.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Section 5 -->
                <div
                    class="bg-white rounded-2xl md:rounded-3xl p-6 md:p-8 shadow-lg border border-slate-100 hover:shadow-xl transition-shadow duration-300">
                    <div class="flex items-start gap-4 mb-4">
                        <div
                            class="flex-shrink-0 w-10 h-10 rounded-xl bg-amber-100 flex items-center justify-center text-amber-700 font-bold text-lg">
                            5
                        </div>
                        <div class="flex-1">
                            <h3 class="text-xl md:text-2xl font-bold text-slate-900 mb-4">Cookie dan Teknologi Pelacakan
                            </h3>
                            <p class="text-slate-700 leading-relaxed text-sm md:text-base mb-4">
                                Situs ini dapat menggunakan cookie untuk meningkatkan pengalaman pengguna dan menganalisis
                                lalu lintas pengunjung.
                            </p>
                            <div class="flex items-start gap-3 bg-amber-50 rounded-xl p-4 border border-amber-100">
                                <svg class="w-5 h-5 text-amber-600 flex-shrink-0 mt-0.5" fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <p class="text-slate-700 text-sm md:text-base">
                                    Anda dapat mengatur browser untuk menolak cookie, namun beberapa bagian situs mungkin
                                    tidak berfungsi dengan baik.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Section 6 -->
                <div
                    class="bg-white rounded-2xl md:rounded-3xl p-6 md:p-8 shadow-lg border border-slate-100 hover:shadow-xl transition-shadow duration-300">
                    <div class="flex items-start gap-4 mb-4">
                        <div
                            class="flex-shrink-0 w-10 h-10 rounded-xl bg-teal-100 flex items-center justify-center text-teal-700 font-bold text-lg">
                            6
                        </div>
                        <div class="flex-1">
                            <h3 class="text-xl md:text-2xl font-bold text-slate-900 mb-4">Persetujuan Pengguna</h3>
                            <div
                                class="bg-gradient-to-br from-teal-50 to-emerald-50 rounded-xl p-5 md:p-6 border border-teal-100">
                                <p class="text-slate-700 leading-relaxed text-sm md:text-base">
                                    Dengan menggunakan situs <strong class="text-teal-700">Kampung Batik Paseseh</strong>,
                                    Anda menyetujui pengumpulan dan penggunaan
                                    informasi sesuai dengan kebijakan privasi ini. Persetujuan Anda adalah bagian penting
                                    dari komitmen kami dalam transparansi pengelolaan data.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Section 7 -->
                <div
                    class="bg-white rounded-2xl md:rounded-3xl p-6 md:p-8 shadow-lg border border-slate-100 hover:shadow-xl transition-shadow duration-300">
                    <div class="flex items-start gap-4 mb-4">
                        <div
                            class="flex-shrink-0 w-10 h-10 rounded-xl bg-indigo-100 flex items-center justify-center text-indigo-700 font-bold text-lg">
                            7
                        </div>
                        <div class="flex-1">
                            <h3 class="text-xl md:text-2xl font-bold text-slate-900 mb-4">Perubahan Kebijakan</h3>
                            <div class="flex items-start gap-3 bg-indigo-50 rounded-xl p-4 border border-indigo-100">
                                <svg class="w-5 h-5 text-indigo-600 flex-shrink-0 mt-0.5" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15">
                                    </path>
                                </svg>
                                <p class="text-slate-700 text-sm md:text-base">
                                    Kami dapat memperbarui kebijakan ini sewaktu-waktu untuk mencerminkan perubahan pada
                                    praktik kami. Setiap
                                    pembaruan akan ditampilkan di halaman ini dengan tanggal revisi terbaru.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Section 8 - Contact -->
                <div
                    class="bg-gradient-to-br from-blue-600 via-indigo-700 to-purple-700 rounded-2xl md:rounded-3xl p-6 md:p-8 lg:p-10 shadow-2xl text-white mx-auto">
                    <div class="flex flex-col sm:flex-row items-start gap-5 sm:gap-6 mb-6">
                        <div
                            class="flex-shrink-0 w-12 h-12 md:w-14 md:h-14 rounded-2xl bg-white/20 backdrop-blur-sm flex items-center justify-center border border-white/30">
                            <svg class="w-6 h-6 md:w-7 md:h-7 text-white" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                </path>
                            </svg>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-xl md:text-2xl lg:text-3xl font-bold mb-3">Hubungi Kami</h3>
                            <p class="text-blue-100 leading-relaxed text-sm md:text-base mb-6">
                                Jika Anda memiliki pertanyaan atau permintaan terkait kebijakan privasi ini, jangan ragu
                                untuk menghubungi kami:
                            </p>

                            <div class="space-y-4">
                                <a href="{{ url('/') }}"
                                    class="flex items-center gap-3 bg-white/10 backdrop-blur-sm hover:bg-white/20 rounded-xl p-4 border border-white/20 transition-all duration-300 group">
                                    <svg class="w-5 h-5 text-amber-400 flex-shrink-0" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9">
                                        </path>
                                    </svg>
                                    <div class="flex-1 min-w-0">
                                        <p class="text-blue-100 text-xs md:text-sm font-medium mb-0.5">Website</p>
                                        <p
                                            class="font-semibold text-sm md:text-base group-hover:text-amber-400 transition-colors truncate">
                                            Kampung Batik Paseseh
                                        </p>
                                    </div>
                                    <svg class="w-5 h-5 text-white/60 group-hover:text-white group-hover:translate-x-1 transition-all flex-shrink-0"
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
                    <svg class="w-4 h-4 text-slate-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z">
                        </path>
                    </svg>
                    <span class="text-slate-600 text-sm font-medium">Data Anda aman bersama kami</span>
                </div>
            </div>
        </div>
    </section>
@endsection
