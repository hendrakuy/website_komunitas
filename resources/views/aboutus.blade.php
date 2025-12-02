@extends('layouts.app')

@section('title', 'Batik Paseseh - Tentang Kami')

@section('hero')
    <!-- Hero Section -->
    <section
        class="relative bg-cover bg-center min-h-[30rem] flex flex-col items-center justify-center text-white text-center rounded-b-[2rem] overflow-hidden"
        style="background-image: url('/images/Bg_HalamantentangKami.png');">

        <!-- Overlay gelap -->
        <div class="absolute inset-0 bg-black/20"></div>

        <!-- Konten -->
        <div class="relative z-10 max-w-3xl px-4 sm:px-6">
            <h1 class="text-2xl sm:text-4xl font-bold mb-4">Tentang Kami</h1>
            <p class="bg-black/60 p-3 sm:p-4 rounded-lg leading-relaxed text-sm sm:text-base">
                Komunitas Batik Paseseh adalah kelompok pengrajin batik yang berasal dari Tanjung Bumi, Bangkalan, Madura.
                Komunitas ini berfokus pada pelestarian sekaligus pengembangan batik tulis khas Madura
                yang dikenal dengan warna berani dan motif unik.
            </p>
        </div>
    </section>

    <!-- Gallery Small (nempel ke Hero) -->
    <section class="max-w-6xl mx-auto px-4 -mt-16 relative z-20">
        <div class="grid grid-cols-2 sm:grid-cols-4 gap-4">
            <div class="bg-white p-2 rounded-lg shadow-lg">
                <img src="/images/Edukasi_1.jpg" alt="Batik" class="rounded-md w-full h-full">
            </div>
            <div class="bg-white p-2 rounded-lg shadow-lg">
                <img src="/images/Edukasi_2.jpg" alt="Batik" class="rounded-md w-full">
            </div>
            <div class="bg-white p-2 rounded-lg shadow-lg">
                <img src="/images/Edukasi_3.jpg" alt="Batik" class="rounded-md w-full">
            </div>
            <div class="bg-white p-2 rounded-lg shadow-lg">
                <img src="/images/Edukasi_4.jpg" alt="Batik" class="rounded-md w-full">
            </div>
        </div>
    </section>
@endsection

@section('content')
    <!-- About Text -->
    <section class="max-w-6xl mx-auto py-10 px-4 grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
        <!-- Foto Asimetris -->
        <div class="grid grid-cols-2 gap-4">
            <!-- Gambar kiri (lebih besar, bulat penuh) -->
            <div class="flex items-end justify-center">
                <img src="/images/About5.png" class="rounded-full shadow-lg w-full" alt="Batik">
            </div>

            <!-- Gambar kanan (lebih kecil, bulat penuh) -->
            <div class="flex items-start justify-center mt-30">
                <img src="/images/About6.png" class="rounded-full shadow-lg w-3/4" alt="Batik">
            </div>
        </div>
        <!-- Teks -->
        <div>
            <h2 class="text-xl sm:text-2xl font-bold text-blue-600 mb-4">
                Komunitas Kampung Batik Paseseh
            </h2>

            <p class="text-gray-700 leading-relaxed text-sm sm:text-base mb-3">
                Tanjung Bumi terletak di bagian utara Bangkalan, sekitar 45 km dari pusat
                Kota Bangkalan atau kurang lebih 1,5–2 jam perjalanan dari Surabaya
                melalui Jembatan Suramadu. Di kawasan ini terdapat banyak desa pengrajin,
                salah satunya Desa Paseseh, yang menjadi pusat kegiatan membatik secara turun-temurun.
            </p>

            <p class="text-gray-700 leading-relaxed text-sm sm:text-base border-l-4 border-blue-600 pl-4">
                Tanjung Bumi terkenal dengan batik tulisnya yang memiliki corak berani dan penuh filosofi.
                Motif dan warna yang khas menjadi ciri utama batik Madura yang telah diwariskan
                dari generasi ke generasi, menjadikannya bagian penting dari identitas budaya lokal.
            </p>
        </div>
    </section>
    <!-- Region Section -->
    <section class="bg-cover bg-center py-15 rounded-tl-[100px] rounded-br-[100px]"
        style="background-image: url('/images/Bg_Aboutus2.png');">

        <div class="max-w-6xl mx-auto px-4">
            <h2 class="text-xl sm:text-2xl md:text-3xl font-bold text-blue-600 text-center mb-6 sm:mb-8">
                <span class="bg-white px-4 py-2 sm:px-5 sm:py-2 md:px-6 md:py-3 rounded-lg shadow inline-block max-w-full">
                    Informasi mengenai UMKM Komunitas
                </span>
            </h2>

            <!-- Tombol Region -->
            <div class="flex flex-wrap justify-center gap-4 mb-8">
                <button onclick="showRegion(1)"
                    class="region-btn w-40 py-3 bg-blue-600 text-white rounded-full text-lg">UMKM 1 - 2</button>
                <button onclick="showRegion(2)"
                    class="region-btn w-40 py-3 bg-white text-blue-600 rounded-full text-lg">UMKM 3 - 4</button>
                <button onclick="showRegion(3)"
                    class="region-btn w-40 py-3 bg-white text-blue-600 rounded-full text-lg">UMKM 5 - 6</button>
                <button onclick="showRegion(4)"
                    class="region-btn w-40 py-3 bg-white text-blue-600 rounded-full text-lg">UMKM 7 - 8</button>
                <button onclick="showRegion(5)"
                    class="region-btn w-40 py-3 bg-white text-blue-600 rounded-full text-lg">UMKM 9 - 10</button>
            </div>

            <!-- Konten Region -->
            <div id="region-contents">

                <!-- Region 1 -->
                <div id="region-1" class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="bg-white p-4 rounded-xl shadow-md">
                        <img src="/images/Haldus_Batik Jasmine.jpg"
                            class="w-full h-72 sm:h-80 md:h-96 object-cover rounded-lg mb-3 transition-transform duration-300 hover:scale-105"
                            alt="Batik Jasmine">
                        <h3 class="font-semibold text-lg text-center">Batik Jasmine</h3>
                    </div>
                    <div class="bg-white p-4 rounded-xl shadow-md">
                        <img src="/images/Haldus_Naraya Batik.jpg"
                            class="w-full h-72 sm:h-80 md:h-96 object-cover rounded-lg mb-3 transition-transform duration-300 hover:scale-105"
                            alt="Naraya Batik">
                        <h3 class="font-semibold text-lg text-center">Naraya Batik</h3>
                    </div>
                </div>

                <!-- Region 2 -->
                <div id="region-2" class="hidden grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="bg-white p-4 rounded-xl shadow-md">
                        <img src="/images/Haldus_Halima Batik.jpg"
                            class="w-full h-72 sm:h-80 md:h-96 object-cover rounded-lg mb-3 transition-transform duration-300 hover:scale-105"
                            alt="Halima Batik">
                        <h3 class="font-semibold text-lg text-center">Halima Batik</h3>
                    </div>
                    <div class="bg-white p-4 rounded-xl shadow-md">
                        <img src="/images/Haldus_Anisawa Batik.jpg"
                            class="w-full h-72 sm:h-80 md:h-96 object-cover rounded-lg mb-3 transition-transform duration-300 hover:scale-105"
                            alt="Anisawa Batik">
                        <h3 class="font-semibold text-lg text-center">Anisawa Batik</h3>
                    </div>
                </div>

                <!-- Region 3 -->
                <div id="region-3" class="hidden grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="bg-white p-4 rounded-xl shadow-md">
                        <img src="/images/Haldus_Mahruha Batik.jpg"
                            class="w-full h-72 sm:h-80 md:h-96 object-cover rounded-lg mb-3 transition-transform duration-300 hover:scale-105"
                            alt="Mahruha Batik">
                        <h3 class="font-semibold text-lg text-center">Mahruha Batik</h3>
                    </div>
                    <div class="bg-white p-4 rounded-xl shadow-md">
                        <img src="/images/Haldus_Veroy Batik.jpg"
                            class="w-full h-72 sm:h-80 md:h-96 object-cover rounded-lg mb-3 transition-transform duration-300 hover:scale-105"
                            alt="Veroy Batik">
                        <h3 class="font-semibold text-lg text-center">Veroy Batik</h3>
                    </div>
                </div>

                <!-- Region 4 -->
                <div id="region-4" class="hidden grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="bg-white p-4 rounded-xl shadow-md">
                        <img src="/images/Haldus_Kiki Batik.jpg"
                            class="w-full h-72 sm:h-80 md:h-96 object-cover rounded-lg mb-3 transition-transform duration-300 hover:scale-105"
                            alt="Kiki Batik">
                        <h3 class="font-semibold text-lg text-center">Kiki Batik</h3>
                    </div>
                    <div class="bg-white p-4 rounded-xl shadow-md">
                        <img src="/images/Haldus_Maya Batik.jpg"
                            class="w-full h-72 sm:h-80 md:h-96 object-cover rounded-lg mb-3 transition-transform duration-300 hover:scale-105"
                            alt="Maya Batik">
                        <h3 class="font-semibold text-lg text-center">Maya Batik</h3>
                    </div>
                </div>

                <!-- Region 5 -->
                <div id="region-5" class="hidden grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="bg-white p-4 rounded-xl shadow-md">
                        <img src="/images/Haldus_Nurul Batik.jpg"
                            class="w-full h-72 sm:h-80 md:h-96 object-cover rounded-lg mb-3 transition-transform duration-300 hover:scale-105"
                            alt="Nurul Batik">
                        <h3 class="font-semibold text-lg text-center">Nurul Batik</h3>
                    </div>
                    <div class="bg-white p-4 rounded-xl shadow-md">
                        <img src="/images/Haldus_Diyah Batik.jpg"
                            class="w-full h-72 sm:h-80 md:h-96 object-cover rounded-lg mb-3 transition-transform duration-300 hover:scale-105"
                            alt="Diyah Batik">
                        <h3 class="font-semibold text-lg text-center">Diyah Batik</h3>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <script>
        function showRegion(num) {
            // Sembunyikan semua region
            document.querySelectorAll('#region-contents > div').forEach(el => el.classList.add('hidden'));

            // Tampilkan region yang dipilih
            document.getElementById('region-' + num).classList.remove('hidden');

            // Reset style tombol
            document.querySelectorAll('.region-btn').forEach(btn => {
                btn.classList.remove('bg-blue-600', 'text-white');
                btn.classList.add('bg-white', 'text-blue-600');
            });

            // Style tombol aktif
            document.querySelectorAll('.region-btn')[num - 1].classList.add('bg-blue-600', 'text-white');
            document.querySelectorAll('.region-btn')[num - 1].classList.remove('bg-white', 'text-blue-600');
        }
    </script>
    <!-- Contact -->
    <section class="max-w-7xl mx-auto py-8 sm:py-12 lg:py-16 px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 lg:gap-10">
        
        <!-- Info Card -->
        <div class="order-2 lg:order-1">
            <div class="bg-gradient-to-br from-blue-50 to-indigo-50 border-2 border-blue-200 rounded-2xl p-6 sm:p-8 shadow-xl hover:shadow-2xl transition-shadow duration-300 h-full">
                <h3 class="text-2xl sm:text-3xl font-bold text-blue-900 mb-6 sm:mb-8">
                    Informasi Kontak
                </h3>
                
                <div class="space-y-5 sm:space-y-6">
                    <!-- Alamat -->
                    <div class="flex items-start gap-4 group hover:translate-x-2 transition-transform duration-300">
                        <div class="flex-shrink-0 w-12 h-12 bg-blue-500 rounded-xl flex items-center justify-center text-white text-xl shadow-md group-hover:scale-110 transition-transform">
                            📍
                        </div>
                        <div class="flex-1 min-w-0">
                            <p class="text-xs sm:text-sm font-semibold text-blue-900 mb-1">Alamat</p>
                            <p class="text-sm sm:text-base text-gray-700 leading-relaxed break-words">
                                Desa Paseseh, Kecamatan Tanjung Bumi, Kabupaten Bangkalan
                            </p>
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="flex items-start gap-4 group hover:translate-x-2 transition-transform duration-300">
                        <div class="flex-shrink-0 w-12 h-12 bg-purple-500 rounded-xl flex items-center justify-center text-white text-xl shadow-md group-hover:scale-110 transition-transform">
                            ✉️
                        </div>
                        <div class="flex-1 min-w-0">
                            <p class="text-xs sm:text-sm font-semibold text-blue-900 mb-1">Email</p>
                            <a href="mailto:komunitaskembangpote@gmail.com" class="text-sm sm:text-base text-gray-700 hover:text-purple-600 font-medium break-all">
                                komunitaskembangpote@gmail.com
                            </a>
                        </div>
                    </div>

                    <!-- Jam Operasional -->
                    <div class="flex items-start gap-4 group hover:translate-x-2 transition-transform duration-300">
                        <div class="flex-shrink-0 w-12 h-12 bg-orange-500 rounded-xl flex items-center justify-center text-white text-xl shadow-md group-hover:scale-110 transition-transform">
                            ⏰
                        </div>
                        <div class="flex-1 min-w-0">
                            <p class="text-xs sm:text-sm font-semibold text-blue-900 mb-1">Jam Operasional</p>
                            <p class="text-sm sm:text-base text-gray-700 leading-relaxed">
                                <span class="font-semibold text-green-700">Senin – Sabtu</span><br>
                                08.00 – 17.00 WIB<br>
                                <span class="font-semibold text-red-600">Minggu & Hari Libur: Tutup</span>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Social Media -->
                <div class="mt-8 sm:mt-10 pt-6 sm:pt-8 border-t-2 border-blue-200">
                    <p class="text-sm font-semibold text-blue-900 mb-4">Ikuti Kami</p>
                    <div class="flex gap-4">
                        <a href="https://www.instagram.com/kembangpote_batikpaseseh" target="_blank" class="w-12 h-12 bg-gradient-to-br from-pink-500 to-purple-600 rounded-xl flex items-center justify-center text-white text-xl hover:scale-110 hover:rotate-6 transition-all duration-300 shadow-lg">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="https://youtube.com/@kknttanjungbumi?si=GzvhzuFfrCQCklFq" target="_blank" class="w-12 h-12 bg-gradient-to-br from-red-500 to-red-700 rounded-xl flex items-center justify-center text-white text-xl hover:scale-110 hover:rotate-6 transition-all duration-300 shadow-lg">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Form Card -->
        <div class="order-1 lg:order-2" id="form-card">
            <div class="bg-white border-2 border-blue-200 rounded-2xl p-6 sm:p-8 shadow-xl hover:shadow-2xl transition-shadow duration-300">
                <div class="text-center mb-6 sm:mb-8">
                    <h3 class="text-2xl sm:text-3xl font-bold text-blue-900 mb-2">Hubungi Kami</h3>
                    <p class="text-sm sm:text-base text-gray-600">Kami siap membantu Anda</p>
                </div>

                <form action="{{ route('contact.store') }}" method="POST" class="space-y-4 sm:space-y-5" id="contactForm">
                    @csrf

                    <!-- Nama -->
                    <div class="relative">
                        <label for="nama" class="block text-sm font-semibold text-gray-700 mb-2">
                            Nama <span class="text-red-500">*</span>
                        </label>
                        <input id="nama" name="name" type="text" placeholder="Masukkan nama lengkap" required
                            class="w-full px-4 py-3 rounded-xl text-sm border-2 border-gray-200 focus:border-blue-500 focus:ring-4 focus:ring-blue-100 transition-all duration-300 bg-gray-50 focus:bg-white @error('name') border-red-500 @enderror"
                            value="{{ old('name') }}">
                        @error('name')
                            <p class="text-red-500 text-xs mt-2 flex items-center gap-1">
                                <span>⚠️</span> {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <!-- Email -->
                    <div class="relative">
                        <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">
                            Email <span class="text-red-500">*</span>
                        </label>
                        <input id="email" name="email" type="email" placeholder="nama@email.com" required
                            class="w-full px-4 py-3 rounded-xl text-sm border-2 border-gray-200 focus:border-blue-500 focus:ring-4 focus:ring-blue-100 transition-all duration-300 bg-gray-50 focus:bg-white @error('email') border-red-500 @enderror"
                            value="{{ old('email') }}">
                        @error('email')
                            <p class="text-red-500 text-xs mt-2 flex items-center gap-1">
                                <span>⚠️</span> {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <!-- Telepon -->
                    <div class="relative">
                        <label for="telepon" class="block text-sm font-semibold text-gray-700 mb-2">
                            No. Telepon <span class="text-red-500">*</span>
                        </label>
                        <input id="telepon" name="phone" type="tel" placeholder="08xxxxxxxxxx" required
                            pattern="[0-9]{10,13}"
                            class="w-full px-4 py-3 rounded-xl text-sm border-2 border-gray-200 focus:border-blue-500 focus:ring-4 focus:ring-blue-100 transition-all duration-300 bg-gray-50 focus:bg-white @error('phone') border-red-500 @enderror"
                            value="{{ old('phone') }}">
                        @error('phone')
                            <p class="text-red-500 text-xs mt-2 flex items-center gap-1">
                                <span>⚠️</span> {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <!-- Subjek -->
                    <div class="relative">
                        <label for="subjek" class="block text-sm font-semibold text-gray-700 mb-2">Subjek</label>
                        <select id="subjek" name="subject"
                            class="w-full px-4 py-3 rounded-xl text-sm border-2 border-gray-200 focus:border-blue-500 focus:ring-4 focus:ring-blue-100 transition-all duration-300 bg-gray-50 focus:bg-white cursor-pointer">
                            <option value="" disabled selected>-- Pilih Subjek --</option>
                            <option value="Pemesanan" {{ old('subject') == 'Pemesanan' ? 'selected' : '' }}>Pemesanan</option>
                            <option value="Kemitraan" {{ old('subject') == 'Kemitraan' ? 'selected' : '' }}>Kemitraan</option>
                            <option value="Informasi" {{ old('subject') == 'Informasi' ? 'selected' : '' }}>Informasi</option>
                        </select>
                    </div>

                    <!-- Pesan -->
                    <div class="relative">
                        <label for="pesan" class="block text-sm font-semibold text-gray-700 mb-2">
                            Pesan <span class="text-red-500">*</span>
                        </label>
                        <textarea id="pesan" name="message" rows="4" placeholder="Tulis pesan Anda di sini..." required
                            class="w-full px-4 py-3 rounded-xl text-sm border-2 border-gray-200 focus:border-blue-500 focus:ring-4 focus:ring-blue-100 transition-all duration-300 bg-gray-50 focus:bg-white resize-none @error('message') border-red-500 @enderror">{{ old('message') }}</textarea>
                        @error('message')
                            <p class="text-red-500 text-xs mt-2 flex items-center gap-1">
                                <span>⚠️</span> {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <!-- Honeypot -->
                    <input type="text" name="website" class="hidden" tabindex="-1" autocomplete="off">

                    <!-- Submit Button -->
                    <button type="submit" id="submitBtn"
                        class="w-full bg-gradient-to-r from-blue-600 to-indigo-600 text-white py-3.5 rounded-xl hover:from-blue-700 hover:to-indigo-700 font-semibold text-sm sm:text-base shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 transition-all duration-300 flex items-center justify-center gap-2">
                        <span id="btnText">Kirim Pesan</span>
                        <svg id="btnIcon" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg>
                        <svg id="loadingIcon" class="hidden w-5 h-5 animate-spin" fill="none" viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                        </svg>
                    </button>
                </form>

                <!-- Success Message -->
                @if (session('success'))
                    <div class="mt-6 p-4 bg-gradient-to-r from-green-50 to-emerald-50 border-2 border-green-300 text-green-800 rounded-xl text-sm flex items-start gap-3 shadow-md animate-fade-in">
                        <span class="text-xl">✅</span>
                        <span class="flex-1">{{ session('success') }}</span>
                    </div>
                @endif
            </div>
        </div>

    </div>
</section>

    <!-- Map -->
    <h2 class="text-xl sm:text-2xl md:text-3xl font-bold text-white text-center mb-6 sm:mb-8">
        <span class="bg-blue-600 px-4 py-2 sm:px-5 sm:py-2 md:px-6 md:py-3 rounded-lg shadow inline-block max-w-full">
            Lokasi Komunitas
        </span>
    </h2>
    <div class="max-w-6xl mx-auto px-4 mt-6">
        <iframe class="w-full h-52 rounded-md border border-blue-500"
            src="https://maps.google.com/maps?q=Tanjung%20Bumi&t=&z=15&ie=UTF8&iwloc=&output=embed"></iframe>
    </div>

    <!-- WhatsApp Button -->
    <div class="max-w-6xl mx-auto px-4 mt-6">
        <hr class="border-t border-gray-300">
        <a href="https://wa.me/{{ config('contact.whatsapp') }}?text={{ urlencode('Halo admin, saya ingin tahu lebih lanjut tentang Komunitas Kembang Pote.') }}"
            target="_blank"
            class="bg-green-500 text-white px-6 py-3 rounded-md flex justify-center items-center gap-2 hover:bg-green-600">
            <i class="fab fa-whatsapp text-2xl"></i>
            <span class="text-lg">Hubungi via WhatsApp</span>
        </a>
    </div>


    <!-- Bottom Text -->
    <div class="text-center mt-8 px-4 max-w-3xl mx-auto">
        <p class="text-base font-semibold text-blue-600">
            Kunjungi galeri kami langsung di Tanjung Bumi <br>
            untuk merasakan keindahan batik secara nyata.
        </p>
    </div>

    <!-- Font Awesome (untuk ikon sosmed) -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

@endsection
