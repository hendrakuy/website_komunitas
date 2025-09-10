@extends('layouts.app')

@section('content')
    <!-- Container -->
    <div class="max-w-7xl mx-auto px-4 py-8">

        <!-- Product Section -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 p-4 rounded-2xl">

            <!-- Product Image -->
            <div class="flex items-center justify-center">
                <img src="/images/model_1.png" alt="Batik Madura Motif Burung Hong"
                    class="w-full h-[400px] md:h-[600px] rounded-xl object-cover object-top items-center shadow-md bg-gray-100">
            </div>

            <!-- Product Info -->
            <div class="flex flex-col justify-between">
                <div>
                    <!-- Nama & Harga -->
                    <h1 class="text-2xl font-bold text-gray-900">
                        Batik Madura Motif Burung Hong
                    </h1>
                    <p class="text-xl font-semibold text-black mt-4">
                        <i class="fas fa-tag mr-2 text-red-600"></i>Rp. 175.000
                    </p>

                    <!-- Deskripsi -->
                    <h2 class="text-lg font-semibold mt-6 mb-2">Deskripsi</h2>
                    <div class="mt-2 border-t pt-2 text-sm text-gray-600"></div>
                    <p class="text-gray-600 leading-relaxed">
                        Batik Madura identik dengan batik tulis khas lokalitas daerah Madura. Motif Burung Hong
                        merupakan simbol kemewahan, keanggunan, dan keberuntungan. Cocok dipakai untuk acara formal
                        maupun casual. Diproduksi dengan bahan katun premium yang lembut dan nyaman.
                    </p>

                    <!-- Ukuran -->
                    <div class="mt-6">
                        <h3 class="text-lg font-semibold mb-2">Ukuran</h3>
                        <div class="flex flex-wrap gap-2">
                            <button class="px-4 py-2 border rounded-lg hover:bg-gray-100">M</button>
                            <button class="px-4 py-2 border rounded-lg hover:bg-gray-100">L</button>
                            <button class="px-4 py-2 border rounded-lg hover:bg-gray-100">XL</button>
                            <button class="px-4 py-2 border rounded-lg hover:bg-gray-100">XXL</button>
                        </div>
                    </div>

                    <!-- Buttons -->
                    <div class="flex flex-col sm:flex-row gap-4 mt-6">
                        <a href="#"
                            class="flex-1 text-center bg-orange-500 text-white font-medium py-3 rounded-xl shadow hover:bg-orange-600 transition">
                            <i class="fas fa-shopping-cart mr-2"></i>Beli via Shopee
                        </a>
                        <a href="#"
                            class="flex-1 text-center bg-green-500 text-white font-medium py-3 rounded-xl shadow hover:bg-green-600 transition">
                            <i class="fab fa-whatsapp mr-2"></i>Beli via WhatsApp
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Informasi Tambahan -->
        <h3 class="text-lg font-semibold mt-8 mb-2">Informasi Tambahan</h3>
        <div class="mt-2 border-t pt-4 text-sm text-gray-600">
            <ul class="space-y-1">
                <li><strong>Nama Produk:</strong> Batik Madura Motif Burung Hong</li>
                <li><strong>Bahan:</strong> Katun Premium</li>
                <li><strong>Tema Motif:</strong> Burung Hong (kemewahan, keanggunan, keberuntungan)</li>
                <li><strong>Tersedia:</strong> M, L, XL, XXL</li>
                <li><strong>Teknik:</strong> Tulis Cap (grade premium)</li>
                <li><strong>Kualitas:</strong> Jahitan rapi & bahan adem</li>
                <li><strong>Cocok untuk:</strong> Acara formal, kantor, pesta hingga sehari-hari</li>
            </ul>
        </div>

        <!-- Testimoni Section -->
        <div class="mt-16 text-center bg-gray-100 p-8 rounded-2xl">

            <!-- Judul -->
            <h2 class="text-2xl md:text-3xl font-bold text-gray-900">
                Apa <span class="text-blue-600">Kata Mereka</span>
            </h2>
            <p class="text-lg text-gray-600 mt-2">
                Dipercaya oleh <span class="text-blue-600 font-semibold">Ratusan Pelanggan</span>
            </p>
            <p class="inline-block mt-4 text-white bg-blue-600 px-6 py-3 rounded-xl font-semibold shadow transition">
                Mari lihat komentar mereka
            </p>

            <!-- Testimoni Cards -->
            <div class="relative overflow-hidden mt-8 mb-4">
                <div id="testimonial-wrapper" class="flex transition-transform duration-500">

                    <!-- Testimoni 1 -->
                    <div class="bg-white shadow-md rounded-xl p-6 flex-shrink-0 w-full md:w-1/3 mx-2">
                        <p class="mb-4 text-gray-600">
                            “Belajar membatik di sini sangat menyenangkan! Saya jadi tahu proses batik tulis secara
                            langsung.”
                        </p>
                        <div class="flex items-center gap-3">
                            <div class="bg-gray-300 w-10 h-10 rounded-full"></div>
                            <div>
                                <p class="font-semibold">Dewi</p>
                                <p class="text-sm text-yellow-500">★★★★★</p>
                            </div>
                        </div>
                    </div>

                    <!-- Testimoni 2 -->
                    <div class="bg-white shadow-md rounded-xl p-6 flex-shrink-0 w-full md:w-1/3 mx-2">
                        <p class="mb-4 text-gray-600">
                            “Instruktur ramah dan sabar, cocok untuk pemula. Sangat direkomendasikan.”
                        </p>
                        <div class="flex items-center gap-3">
                            <div class="bg-gray-300 w-10 h-10 rounded-full"></div>
                            <div>
                                <p class="font-semibold">Andi</p>
                                <p class="text-sm text-yellow-500">★★★★★</p>
                            </div>
                        </div>
                    </div>

                    <!-- Testimoni 3 -->
                    <div class="bg-white shadow-md rounded-xl p-6 flex-shrink-0 w-full md:w-1/3 mx-2">
                        <p class="mb-4 text-gray-600">
                            “Pengalaman yang tidak terlupakan, saya bisa membuat batik karya sendiri.”
                        </p>
                        <div class="flex items-center gap-3">
                            <div class="bg-gray-300 w-10 h-10 rounded-full"></div>
                            <div>
                                <p class="font-semibold">Sinta</p>
                                <p class="text-sm text-yellow-500">★★★★★</p>
                            </div>
                        </div>
                    </div>

                    <!-- Testimoni 4 -->
                    <div class="bg-white shadow-md rounded-xl p-6 flex-shrink-0 w-full md:w-1/3 mx-2">
                        <p class="mb-4 text-gray-600">
                            “Pengalaman yang tidak terlupakan, saya bisa membuat batik karya sendiri.”
                        </p>
                        <div class="flex items-center gap-3">
                            <div class="bg-gray-300 w-10 h-10 rounded-full"></div>
                            <div>
                                <p class="font-semibold">Sinta</p>
                                <p class="text-sm text-yellow-500">★★★★★</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Tombol Next / Prev -->
                <button id="prev"
                    class="absolute left-0 top-1/2 -translate-y-1/2 bg-indigo-600 text-white px-3 py-2 rounded-lg">
                    ‹
                </button>
                <button id="next"
                    class="absolute right-0 top-1/2 -translate-y-1/2 bg-indigo-600 text-white px-3 py-2 rounded-lg">
                    ›
                </button>
            </div>

            <!-- Call to Action -->
            <p class="mt-10 text-gray-700 font-medium">
                “Buktinya nyata pelanggan kami puas. Yuk, miliki batik asli Tanjung
                Bumi dengan kualitas premium. Stok terbatas, jangan sampai ketinggalan!”
            </p>
            <a href="#"
                class="mt-6 inline-block bg-blue-600 hover:bg-blue-700 text-white font-semibold px-8 py-3 rounded-xl shadow transition">
                Pesan Sekarang
            </a>
        </div>
    </div>
@endsection

@vite('resources/js/testimoni.js')
