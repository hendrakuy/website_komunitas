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
    <section class="max-w-6xl mx-auto py-12 px-4 grid grid-cols-1 md:grid-cols-2 gap-8">

        <!-- Info -->
        <div class="border border-blue-500 rounded-md p-6 space-y-4">
            <p class="flex items-center gap-3 text-gray-700">
                <span class="text-xl">📍</span> Desa Paseseh, Kecamatan Tanjung Bumi, Kabupaten Bangkalan
            </p>
            <p class="flex items-center gap-3 text-gray-700">
                <span class="text-xl">📞</span> +6287846696379
            </p>
            <p class="flex items-center gap-3 text-gray-700">
                <span class="text-xl">✉️</span> batikpaseseh@gmail.com
            </p>
            <p class="flex items-center gap-3 text-gray-700">
                <span class="text-xl">⏰</span> Senin – Sabtu : 08.00 – 17.00 WIB <br> Minggu & Hari Libur : Tutup
            </p>

            <!-- Social Media -->
            <div class="flex gap-6 text-2xl mt-4">
                {{-- <a href="#" class="text-gray-600 hover:text-blue-600"><i class="fab fa-facebook"></i></a> --}}
                <a href="#" class="text-gray-600 hover:text-pink-500"><i class="fab fa-instagram"></i></a>
                <a href="#" class="text-gray-600 hover:text-red-600"><i class="fab fa-youtube"></i></a>
                {{-- <a href="#" class="text-gray-600 hover:text-black"><i class="fab fa-twitter"></i></a> --}}
                {{-- <a href="#" class="text-gray-600 hover:text-black"><i class="fab fa-tiktok"></i></a> --}}
            </div>
        </div>

        <!-- Form -->
        <div class="border border-blue-500 rounded-md p-6 bg-blue-100 shadow-lg">
            <h3 class="text-lg sm:text-xl font-semibold mb-6 text-center text-blue-800">Hubungi Kami</h3>

            <form action="{{ route('contact.store') }}" method="POST" class="space-y-4">
                @csrf

                <div>
                    <label for="nama" class="block text-sm font-medium text-gray-700 mb-1">Nama *</label>
                    <input id="nama" name="name" type="text" placeholder="Nama"
                        class="w-full px-4 py-2 rounded-md text-sm border focus:outline-none bg-white @error('name') border-red-500 @enderror"
                        value="{{ old('name') }}">
                    @error('name')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email *</label>
                    <input id="email" name="email" type="email" placeholder="Email"
                        class="w-full px-4 py-2 rounded-md text-sm border focus:outline-none bg-white @error('email') border-red-500 @enderror"
                        value="{{ old('email') }}">
                    @error('email')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="telepon" class="block text-sm font-medium text-gray-700 mb-1">No. Telephone *</label>
                    <input id="telepon" name="phone" type="text" placeholder="08..."
                        class="w-full px-4 py-2 rounded-md text-sm border focus:outline-none bg-white @error('phone') border-red-500 @enderror"
                        value="{{ old('phone') }}">
                    @error('phone')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="subjek" class="block text-sm font-medium text-gray-700 mb-1">Subjek</label>
                    <select id="subjek" name="subject"
                        class="w-full px-4 py-2 rounded-md text-sm border focus:outline-none bg-white">
                        <option value="">Pilih Subjek</option>
                        <option value="Pemesanan">Pemesanan</option>
                        <option value="Kemitraan">Kemitraan</option>
                        <option value="Informasi">Informasi</option>
                    </select>
                </div>

                <div>
                    <label for="pesan" class="block text-sm font-medium text-gray-700 mb-1">Pesan *</label>
                    <textarea id="pesan" name="message" rows="4" placeholder="Tulis Pesan"
                        class="w-full px-4 py-2 rounded-md text-sm border focus:outline-none bg-white @error('message') border-red-500 @enderror">{{ old('message') }}</textarea>
                    @error('message')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Honeypot untuk anti-bot -->
                <input type="text" name="website" style="display:none">

                <button type="submit"
                    class="w-full bg-blue-600 text-white py-2 rounded-md hover:bg-blue-700 text-sm">Kirim</button>
            </form>

            @if (session('success'))
                <div class="mt-4 p-3 bg-green-100 text-green-700 rounded text-sm">
                    {{ session('success') }}
                </div>
            @endif
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
    {{-- <div class="max-w-6xl mx-auto px-4 mt-6">
        <a href="https://wa.me/6281357636803" target="_blank"
            class="bg-green-500 text-white px-6 py-3 rounded-md flex justify-center items-center gap-2 hover:bg-green-600">
            <i class="fab fa-whatsapp text-2xl"></i>
            <span class="text-lg">Hubungi via WhatsApp</span>
        </a>
    </div> --}}

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
