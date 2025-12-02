@extends('layouts.app')

@section('title', 'Batik Paseseh - Cara Pemesanan')

@section('content')
    <!-- Hero Section -->
    <section class="relative bg-gradient-to-br from-blue-900 via-indigo-900 to-purple-900 py-16 md:py-20 lg:py-24 overflow-hidden">
        <!-- Decorative Elements -->
        <div class="absolute inset-0 overflow-hidden">
            <div class="absolute -top-24 -right-24 w-96 h-96 bg-blue-500/10 rounded-full blur-3xl"></div>
            <div class="absolute -bottom-24 -left-24 w-96 h-96 bg-purple-500/10 rounded-full blur-3xl"></div>
            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-indigo-500/5 rounded-full blur-3xl"></div>
        </div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <!-- Badge -->
            <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/10 backdrop-blur-sm border border-white/20 mb-6">
                <svg class="w-4 h-4 text-amber-400" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path>
                    <path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd"></path>
                </svg>
                <span class="text-white text-sm font-medium">Panduan Lengkap</span>
            </div>

            <!-- Main Title -->
            <h1 class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-bold text-white mb-4 md:mb-6">
                Cara Pemesanan
            </h1>
            <p class="text-lg md:text-xl text-blue-100 max-w-3xl mx-auto leading-relaxed">
                Ikuti langkah mudah untuk memesan batik pilihan Anda dari Kampung Batik Paseseh
            </p>

            <!-- Quick Stats -->
            <div class="mt-12 grid grid-cols-1 sm:grid-cols-3 gap-4 sm:gap-6 max-w-3xl mx-auto">
                <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-4 border border-white/20">
                    <div class="text-3xl font-bold text-amber-400 mb-1">5</div>
                    <div class="text-blue-100 text-sm">Langkah Mudah</div>
                </div>
                <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-4 border border-white/20">
                    <div class="text-3xl font-bold text-amber-400 mb-1">24/7</div>
                    <div class="text-blue-100 text-sm">Akses Website</div>
                </div>
                <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-4 border border-white/20">
                    <div class="text-3xl font-bold text-amber-400 mb-1">100%</div>
                    <div class="text-blue-100 text-sm">Mudah & Aman</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <section class="py-12 md:py-16 lg:py-20 bg-gradient-to-b from-white via-slate-50 to-white">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <!-- Introduction -->
            <div class="text-center mb-12 md:mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mb-4">
                    Proses Pemesanan yang Mudah
                </h2>
                <p class="text-slate-600 text-base md:text-lg max-w-2xl mx-auto leading-relaxed">
                    Kami menyediakan sistem pemesanan yang sederhana dan langsung terhubung dengan penjual melalui WhatsApp
                </p>
            </div>

            <!-- Steps -->
            <div class="space-y-6 md:space-y-8 mb-16">
                
                <!-- Step 1 -->
                <div class="group relative">
                    <div class="absolute -left-4 top-0 bottom-0 w-1 bg-gradient-to-b from-blue-500 to-blue-300 rounded-full hidden lg:block"></div>
                    <div class="bg-white rounded-2xl md:rounded-3xl p-6 md:p-8 shadow-lg border-2 border-blue-100 hover:border-blue-300 hover:shadow-2xl transition-all duration-300">
                        <div class="flex flex-col sm:flex-row items-start gap-5 md:gap-6">
                            <div class="flex-shrink-0 w-16 h-16 md:w-20 md:h-20 rounded-2xl bg-gradient-to-br from-blue-500 to-indigo-600 flex items-center justify-center shadow-xl group-hover:scale-110 transition-transform duration-300">
                                <span class="text-white text-2xl md:text-3xl font-bold">1</span>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl md:text-2xl font-bold text-slate-900 mb-3">Kunjungi Menu Belanja</h3>
                                <p class="text-slate-700 leading-relaxed text-sm md:text-base mb-4">
                                    Buka website <strong class="text-blue-700">Kampung Batik Paseseh</strong> dan klik menu <strong>"Belanja"</strong> pada navigasi utama. Di halaman ini, Anda akan melihat koleksi lengkap motif batik yang tersedia.
                                </p>
                                <div class="flex flex-wrap gap-2">
                                    <span class="inline-flex items-center gap-1.5 px-3 py-1.5 bg-blue-50 text-blue-700 rounded-lg text-xs md:text-sm font-medium">
                                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path>
                                        </svg>
                                        Beranda → Belanja
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Step 2 -->
                <div class="group relative">
                    <div class="absolute -left-4 top-0 bottom-0 w-1 bg-gradient-to-b from-emerald-500 to-emerald-300 rounded-full hidden lg:block"></div>
                    <div class="bg-white rounded-2xl md:rounded-3xl p-6 md:p-8 shadow-lg border-2 border-emerald-100 hover:border-emerald-300 hover:shadow-2xl transition-all duration-300">
                        <div class="flex flex-col sm:flex-row items-start gap-5 md:gap-6">
                            <div class="flex-shrink-0 w-16 h-16 md:w-20 md:h-20 rounded-2xl bg-gradient-to-br from-emerald-500 to-teal-600 flex items-center justify-center shadow-xl group-hover:scale-110 transition-transform duration-300">
                                <span class="text-white text-2xl md:text-3xl font-bold">2</span>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl md:text-2xl font-bold text-slate-900 mb-3">Filter & Cari Batik Pilihan</h3>
                                <p class="text-slate-700 leading-relaxed text-sm md:text-base mb-4">
                                    Gunakan fitur filter untuk mempermudah pencarian batik sesuai kebutuhan Anda:
                                </p>
                                <div class="grid sm:grid-cols-2 gap-3 md:gap-4 mb-4">
                                    <div class="bg-emerald-50 rounded-xl p-4 border border-emerald-100">
                                        <div class="flex items-center gap-2 mb-2">
                                            <svg class="w-5 h-5 text-emerald-600" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M8.433 7.418c.155-.103.346-.196.567-.267v1.698a2.305 2.305 0 01-.567-.267C8.07 8.34 8 8.114 8 8c0-.114.07-.34.433-.582zM11 12.849v-1.698c.22.071.412.164.567.267.364.243.433.468.433.582 0 .114-.07.34-.433.582a2.305 2.305 0 01-.567.267z"></path>
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a1 1 0 10-2 0v.092a4.535 4.535 0 00-1.676.662C6.602 6.234 6 7.009 6 8c0 .99.602 1.765 1.324 2.246.48.32 1.054.545 1.676.662v1.941c-.391-.127-.68-.317-.843-.504a1 1 0 10-1.51 1.31c.562.649 1.413 1.076 2.353 1.253V15a1 1 0 102 0v-.092a4.535 4.535 0 001.676-.662C13.398 13.766 14 12.991 14 12c0-.99-.602-1.765-1.324-2.246A4.535 4.535 0 0011 9.092V7.151c.391.127.68.317.843.504a1 1 0 101.511-1.31c-.563-.649-1.413-1.076-2.354-1.253V5z" clip-rule="evenodd"></path>
                                            </svg>
                                            <span class="font-semibold text-slate-900 text-sm md:text-base">Filter Harga</span>
                                        </div>
                                        <p class="text-slate-600 text-xs md:text-sm">Urutkan dari harga terendah ke tertinggi atau sebaliknya</p>
                                    </div>
                                    <div class="bg-emerald-50 rounded-xl p-4 border border-emerald-100">
                                        <div class="flex items-center gap-2 mb-2">
                                            <svg class="w-5 h-5 text-emerald-600" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M3 3a1 1 0 000 2v8a2 2 0 002 2h2.586l-1.293 1.293a1 1 0 101.414 1.414L10 15.414l2.293 2.293a1 1 0 001.414-1.414L12.414 15H15a2 2 0 002-2V5a1 1 0 100-2H3zm11.707 4.707a1 1 0 00-1.414-1.414L10 9.586 8.707 8.293a1 1 0 00-1.414 0l-2 2a1 1 0 101.414 1.414L8 10.414l1.293 1.293a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                            </svg>
                                            <span class="font-semibold text-slate-900 text-sm md:text-base">Filter Kategori</span>
                                        </div>
                                        <p class="text-slate-600 text-xs md:text-sm">Pilih kategori <strong>Premium</strong> atau <strong>Standar</strong></p>
                                    </div>
                                </div>
                                <div class="bg-gradient-to-r from-emerald-50 to-teal-50 rounded-xl p-4 border border-emerald-200">
                                    <div class="flex items-start gap-2">
                                        <svg class="w-5 h-5 text-emerald-600 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
                                        </svg>
                                        <p class="text-slate-700 text-xs md:text-sm leading-relaxed">
                                            <strong>Tips:</strong> Kombinasikan filter untuk hasil pencarian yang lebih spesifik
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Step 3 -->
                <div class="group relative">
                    <div class="absolute -left-4 top-0 bottom-0 w-1 bg-gradient-to-b from-purple-500 to-purple-300 rounded-full hidden lg:block"></div>
                    <div class="bg-white rounded-2xl md:rounded-3xl p-6 md:p-8 shadow-lg border-2 border-purple-100 hover:border-purple-300 hover:shadow-2xl transition-all duration-300">
                        <div class="flex flex-col sm:flex-row items-start gap-5 md:gap-6">
                            <div class="flex-shrink-0 w-16 h-16 md:w-20 md:h-20 rounded-2xl bg-gradient-to-br from-purple-500 to-indigo-600 flex items-center justify-center shadow-xl group-hover:scale-110 transition-transform duration-300">
                                <span class="text-white text-2xl md:text-3xl font-bold">3</span>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl md:text-2xl font-bold text-slate-900 mb-3">Lihat Detail Produk</h3>
                                <p class="text-slate-700 leading-relaxed text-sm md:text-base mb-4">
                                    Klik pada motif batik yang Anda minati untuk melihat informasi lengkap produk:
                                </p>
                                <div class="space-y-3">
                                    <div class="flex items-start gap-3 bg-purple-50 rounded-lg p-3 md:p-4 border border-purple-100">
                                        <svg class="w-5 h-5 text-purple-600 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd"></path>
                                        </svg>
                                        <span class="text-slate-700 text-sm md:text-base">Foto produk berkualitas tinggi</span>
                                    </div>
                                    <div class="flex items-start gap-3 bg-purple-50 rounded-lg p-3 md:p-4 border border-purple-100">
                                        <svg class="w-5 h-5 text-purple-600 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
                                        </svg>
                                        <span class="text-slate-700 text-sm md:text-base">Deskripsi lengkap motif batik</span>
                                    </div>
                                    <div class="flex items-start gap-3 bg-purple-50 rounded-lg p-3 md:p-4 border border-purple-100">
                                        <svg class="w-5 h-5 text-purple-600 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M8.433 7.418c.155-.103.346-.196.567-.267v1.698a2.305 2.305 0 01-.567-.267C8.07 8.34 8 8.114 8 8c0-.114.07-.34.433-.582zM11 12.849v-1.698c.22.071.412.164.567.267.364.243.433.468.433.582 0 .114-.07.34-.433.582a2.305 2.305 0 01-.567.267z"></path>
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a1 1 0 10-2 0v.092a4.535 4.535 0 00-1.676.662C6.602 6.234 6 7.009 6 8c0 .99.602 1.765 1.324 2.246.48.32 1.054.545 1.676.662v1.941c-.391-.127-.68-.317-.843-.504a1 1 0 10-1.51 1.31c.562.649 1.413 1.076 2.353 1.253V15a1 1 0 102 0v-.092a4.535 4.535 0 001.676-.662C13.398 13.766 14 12.991 14 12c0-.99-.602-1.765-1.324-2.246A4.535 4.535 0 0011 9.092V7.151c.391.127.68.317.843.504a1 1 0 101.511-1.31c-.563-.649-1.413-1.076-2.354-1.253V5z" clip-rule="evenodd"></path>
                                        </svg>
                                        <span class="text-slate-700 text-sm md:text-base">Harga dan kategori produk</span>
                                    </div>
                                    <div class="flex items-start gap-3 bg-purple-50 rounded-lg p-3 md:p-4 border border-purple-100">
                                        <svg class="w-5 h-5 text-purple-600 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                                        </svg>
                                        <span class="text-slate-700 text-sm md:text-base">Informasi lainnya</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Step 4 -->
                <div class="group relative">
                    <div class="absolute -left-4 top-0 bottom-0 w-1 bg-gradient-to-b from-amber-500 to-amber-300 rounded-full hidden lg:block"></div>
                    <div class="bg-white rounded-2xl md:rounded-3xl p-6 md:p-8 shadow-lg border-2 border-amber-100 hover:border-amber-300 hover:shadow-2xl transition-all duration-300">
                        <div class="flex flex-col sm:flex-row items-start gap-5 md:gap-6">
                            <div class="flex-shrink-0 w-16 h-16 md:w-20 md:h-20 rounded-2xl bg-gradient-to-br from-amber-500 to-orange-600 flex items-center justify-center shadow-xl group-hover:scale-110 transition-transform duration-300">
                                <span class="text-white text-2xl md:text-3xl font-bold">4</span>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl md:text-2xl font-bold text-slate-900 mb-3">Klik Tombol "Beli via WhatsApp"</h3>
                                <p class="text-slate-700 leading-relaxed text-sm md:text-base mb-4">
                                    Setelah memastikan produk sesuai keinginan, klik tombol hijau <strong class="text-green-600">"Beli via WhatsApp"</strong> yang tersedia di halaman detail produk.
                                </p>
                                <div class="bg-gradient-to-br from-amber-50 to-orange-50 rounded-xl p-4 md:p-5 border border-amber-200 mb-4">
                                    <div class="flex items-start gap-3">
                                        <div class="flex-shrink-0 w-10 h-10 rounded-lg bg-green-500 flex items-center justify-center">
                                            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                                            </svg>
                                        </div>
                                        <div class="flex-1">
                                            <h4 class="font-semibold text-slate-900 mb-2 text-base">Otomatis Terhubung ke WhatsApp</h4>
                                            <p class="text-slate-700 text-sm md:text-base leading-relaxed">
                                                Sistem kami akan otomatis membuka aplikasi WhatsApp Anda dengan pesan template yang sudah berisi informasi produk yang ingin dibeli.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex items-start gap-2 bg-amber-50 rounded-lg p-3 border border-amber-200">
                                    <svg class="w-5 h-5 text-amber-600 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                                    </svg>
                                    <p class="text-amber-800 text-xs md:text-sm">
                                        <strong>Catatan:</strong> Pastikan WhatsApp sudah terinstall di perangkat Anda
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Step 5 -->
                <div class="group relative">
                    <div class="absolute -left-4 top-0 bottom-0 w-1 bg-gradient-to-b from-rose-500 to-rose-300 rounded-full hidden lg:block"></div>
                    <div class="bg-white rounded-2xl md:rounded-3xl p-6 md:p-8 shadow-lg border-2 border-rose-100 hover:border-rose-300 hover:shadow-2xl transition-all duration-300">
                        <div class="flex flex-col sm:flex-row items-start gap-5 md:gap-6">
                            <div class="flex-shrink-0 w-16 h-16 md:w-20 md:h-20 rounded-2xl bg-gradient-to-br from-rose-500 to-pink-600 flex items-center justify-center shadow-xl group-hover:scale-110 transition-transform duration-300">
                                <span class="text-white text-2xl md:text-3xl font-bold">5</span>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl md:text-2xl font-bold text-slate-900 mb-3">Negosiasi & Finalisasi Pembelian</h3>
                                <p class="text-slate-700 leading-relaxed text-sm md:text-base mb-4">
                                    Setelah terhubung dengan penjual melalui WhatsApp, Anda dapat melakukan diskusi lebih lanjut mengenai:
                                </p>
                                <div class="grid sm:grid-cols-2 gap-3 md:gap-4 mb-4">
                                    <div class="bg-rose-50 rounded-xl p-4 border border-rose-100">
                                        <div class="flex items-center gap-2 mb-2">
                                            <svg class="w-5 h-5 text-rose-600" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M2 6a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM14.553 7.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z"></path>
                                            </svg>
                                            <span class="font-semibold text-slate-900 text-sm md:text-base">Detail Produk</span>
                                        </div>
                                        <p class="text-slate-600 text-xs md:text-sm">Tanyakan stok, ukuran, warna, atau detail lainnya</p>
                                    </div>
                                    <div class="bg-rose-50 rounded-xl p-4 border border-rose-100">
                                        <div class="flex items-center gap-2 mb-2">
                                            <svg class="w-5 h-5 text-rose-600" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M8.433 7.418c.155-.103.346-.196.567-.267v1.698a2.305 2.305 0 01-.567-.267C8.07 8.34 8 8.114 8 8c0-.114.07-.34.433-.582zM11 12.849v-1.698c.22.071.412.164.567.267.364.243.433.468.433.582 0 .114-.07.34-.433.582a2.305 2.305 0 01-.567.267z"></path>
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a1 1 0 10-2 0v.092a4.535 4.535 0 00-1.676.662C6.602 6.234 6 7.009 6 8c0 .99.602 1.765 1.324 2.246.48.32 1.054.545 1.676.662v1.941c-.391-.127-.68-.317-.843-.504a1 1 0 10-1.51 1.31c.562.649 1.413 1.076 2.353 1.253V15a1 1 0 102 0v-.092a4.535 4.535 0 001.676-.662C13.398 13.766 14 12.991 14 12c0-.99-.602-1.765-1.324-2.246A4.535 4.535 0 0011 9.092V7.151c.391.127.68.317.843.504a1 1 0 101.511-1.31c-.563-.649-1.413-1.076-2.354-1.253V5z" clip-rule="evenodd"></path>
                                            </svg>
                                            <span class="font-semibold text-slate-900 text-sm md:text-base">Harga & Pembayaran</span>
                                        </div>
                                        <p class="text-slate-600 text-xs md:text-sm">Konfirmasi harga dan metode pembayaran yang tersedia</p>
                                    </div>
                                    <div class="bg-rose-50 rounded-xl p-4 border border-rose-100">
                                        <div class="flex items-center gap-2 mb-2">
                                            <svg class="w-5 h-5 text-rose-600" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M8 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM15 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z"></path>
                                                <path d="M3 4a1 1 0 00-1 1v10a1 1 0 001 1h1.05a2.5 2.5 0 014.9 0H10a1 1 0 001-1V5a1 1 0 00-1-1H3zM14 7a1 1 0 00-1 1v6.05A2.5 2.5 0 0115.95 16H17a1 1 0 001-1v-5a1 1 0 00-.293-.707l-2-2A1 1 0 0015 7h-1z"></path>
                                            </svg>
                                            <span class="font-semibold text-slate-900 text-sm md:text-base">Pengiriman</span>
                                        </div>
                                        <p class="text-slate-600 text-xs md:text-sm">Diskusikan metode dan biaya pengiriman</p>
                                    </div>
                                    <div class="bg-rose-50 rounded-xl p-4 border border-rose-100">
                                        <div class="flex items-center gap-2 mb-2">
                                            <svg class="w-5 h-5 text-rose-600" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"></path>
                                            </svg>
                                            <span class="font-semibold text-slate-900 text-sm md:text-base">Waktu Proses</span>
                                        </div>
                                        <p class="text-slate-600 text-xs md:text-sm">Estimasi waktu pembuatan dan pengiriman</p>
                                    </div>
                                </div>
                                <div class="bg-gradient-to-br from-rose-50 to-pink-50 rounded-xl p-5 border border-rose-200">
                                    <div class="flex items-start gap-3">
                                        <svg class="w-6 h-6 text-rose-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <div>
                                            <h4 class="font-semibold text-slate-900 mb-2 text-base">Deal & Proses Pembelian</h4>
                                            <p class="text-slate-700 text-sm md:text-base leading-relaxed mb-2">
                                                Setelah semua detail disepakati, penjual akan memandu Anda untuk menyelesaikan transaksi. Mulai dari pembayaran, konfirmasi pesanan, hingga pengiriman produk akan dikoordinasikan langsung oleh UMKM penjual.
                                            </p>
                                            <p class="text-slate-600 text-xs md:text-sm">
                                                Anda akan mendapatkan informasi tracking dan update pengiriman melalui WhatsApp.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Important Notes -->
            <div class="bg-gradient-to-br from-blue-600 via-indigo-700 to-purple-700 rounded-2xl md:rounded-3xl p-6 md:p-8 lg:p-10 shadow-2xl text-white mb-12">
                <div class="flex items-start gap-4 mb-6">
                    <div class="flex-shrink-0 w-12 h-12 md:w-14 md:h-14 rounded-2xl bg-white/20 backdrop-blur-sm flex items-center justify-center border border-white/30">
                        <svg class="w-6 h-6 md:w-7 md:h-7 text-amber-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <div class="flex-1">
                        <h3 class="text-xl md:text-2xl font-bold mb-4">Catatan Penting</h3>
                        <div class="space-y-3">
                            <div class="flex items-start gap-3 bg-white/10 backdrop-blur-sm rounded-xl p-4 border border-white/20">
                                <svg class="w-5 h-5 text-amber-400 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <p class="text-blue-50 text-sm md:text-base">Selalu komunikasikan dengan penjual untuk memastikan detail pesanan Anda</p>
                            </div>
                            <div class="flex items-start gap-3 bg-white/10 backdrop-blur-sm rounded-xl p-4 border border-white/20">
                                <svg class="w-5 h-5 text-amber-400 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <p class="text-blue-50 text-sm md:text-base">Pastikan nomor WhatsApp Anda aktif untuk mempermudah komunikasi</p>
                            </div>
                            <div class="flex items-start gap-3 bg-white/10 backdrop-blur-sm rounded-xl p-4 border border-white/20">
                                <svg class="w-5 h-5 text-amber-400 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <p class="text-blue-50 text-sm md:text-base">Simpan bukti transaksi dan chat dengan penjual untuk keperluan dokumentasi</p>
                            </div>
                            <div class="flex items-start gap-3 bg-white/10 backdrop-blur-sm rounded-xl p-4 border border-white/20">
                                <svg class="w-5 h-5 text-amber-400 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <p class="text-blue-50 text-sm md:text-base">Jika ada kendala, Anda dapat menghubungi admin Kampung Batik Paseseh untuk bantuan</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- FAQ Section -->
            <div class="mb-12">
                <h2 class="text-2xl md:text-3xl font-bold text-slate-900 mb-6 md:mb-8 text-center">
                    Pertanyaan Umum
                </h2>
                <div class="space-y-4">
                    <div class="bg-white rounded-xl p-5 md:p-6 shadow-md border border-slate-200 hover:shadow-lg transition-shadow">
                        <h4 class="font-bold text-slate-900 mb-2 text-base md:text-lg flex items-start gap-2">
                            <svg class="w-5 h-5 text-blue-600 flex-shrink-0 mt-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path>
                            </svg>
                            <span>Apakah saya harus mendaftar akun untuk berbelanja?</span>
                        </h4>
                        <p class="text-slate-600 text-sm md:text-base ml-7">
                            Tidak perlu. Anda dapat langsung melihat katalog dan menghubungi penjual melalui WhatsApp tanpa perlu membuat akun.
                        </p>
                    </div>

                    <div class="bg-white rounded-xl p-5 md:p-6 shadow-md border border-slate-200 hover:shadow-lg transition-shadow">
                        <h4 class="font-bold text-slate-900 mb-2 text-base md:text-lg flex items-start gap-2">
                            <svg class="w-5 h-5 text-blue-600 flex-shrink-0 mt-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path>
                            </svg>
                            <span>Apakah harga yang tertera sudah final?</span>
                        </h4>
                        <p class="text-slate-600 text-sm md:text-base ml-7">
                            Harga yang tertera adalah harga dasar produk. Biaya pengiriman dan detail lainnya akan dikonfirmasi langsung dengan penjual melalui WhatsApp.
                        </p>
                    </div>

                    <div class="bg-white rounded-xl p-5 md:p-6 shadow-md border border-slate-200 hover:shadow-lg transition-shadow">
                        <h4 class="font-bold text-slate-900 mb-2 text-base md:text-lg flex items-start gap-2">
                            <svg class="w-5 h-5 text-blue-600 flex-shrink-0 mt-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path>
                            </svg>
                            <span>Metode pembayaran apa saja yang tersedia?</span>
                        </h4>
                        <p class="text-slate-600 text-sm md:text-base ml-7">
                            Metode pembayaran akan diinformasikan oleh masing-masing penjual. Umumnya tersedia transfer bank, e-wallet, dan COD (sesuai kebijakan penjual).
                        </p>
                    </div>

                    <div class="bg-white rounded-xl p-5 md:p-6 shadow-md border border-slate-200 hover:shadow-lg transition-shadow">
                        <h4 class="font-bold text-slate-900 mb-2 text-base md:text-lg flex items-start gap-2">
                            <svg class="w-5 h-5 text-blue-600 flex-shrink-0 mt-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path>
                            </svg>
                            <span>Berapa lama proses pengiriman?</span>
                        </h4>
                        <p class="text-slate-600 text-sm md:text-base ml-7">
                            Waktu pengiriman tergantung pada lokasi Anda dan jasa pengiriman yang dipilih. Detail estimasi akan diberikan oleh penjual saat konfirmasi pesanan.
                        </p>
                    </div>
                </div>
            </div>

            <!-- CTA Section -->
            <div class="bg-gradient-to-br from-blue-600 to-indigo-700 rounded-2xl md:rounded-3xl p-8 md:p-12 text-center shadow-2xl">
                <div class="max-w-2xl mx-auto">
                    <div class="w-16 h-16 md:w-20 md:h-20 bg-white/20 backdrop-blur-sm rounded-2xl flex items-center justify-center mx-auto mb-6 border border-white/30">
                        <svg class="w-8 h-8 md:w-10 md:h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                        </svg>
                    </div>
                    <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold text-white mb-4">
                        Siap Berbelanja Batik?
                    </h2>
                    <p class="text-blue-100 text-base md:text-lg mb-8 leading-relaxed">
                        Jelajahi koleksi batik berkualitas dari UMKM lokal Kampung Batik Paseseh dan temukan motif favorit Anda
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="{{ route('shop.index') }}" class="inline-flex items-center justify-center gap-2 px-8 py-4 bg-white text-blue-700 rounded-xl font-semibold text-base hover:bg-blue-50 transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-0.5">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                            </svg>
                            <span>Mulai Belanja Sekarang</span>
                        </a>
                        <a href="{{ route('contact') }}" class="inline-flex items-center justify-center gap-2 px-8 py-4 bg-white/10 backdrop-blur-sm text-white rounded-xl font-semibold text-base hover:bg-white/20 border-2 border-white/30 transition-all duration-300">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"></path>
                            </svg>
                            <span>Hubungi Kami</span>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection