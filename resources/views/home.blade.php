@extends('layouts.app')

@section('hero')
    {{-- Hero Section --}}
    <section class="relative bg-cover bg-center min-h-[65vh] md:min-h-screen flex items-center"
        style="background-image: url('/images/hero_background.png');">
        <div class="relative container mx-auto px-6 grid grid-cols-1 md:grid-cols-2 items-center gap-8">
            {{-- Kiri: Text + Button --}}
            <div class="text-white space-y-6 text-center md:text-left">
                {{-- <h1  class="text-3xl md:text-4xl font-bold">Keindahan Batik Tanjung Bumi Warisan Budaya Madura</h1> --}}
                <h1 id="typing" data-text="Keindahan Batik Tanjung Bumi Warisan Budaya Madura"
                    class="text-3xl md:text-4xl lg:text-4xl font-bold border-r-4 border-white pr-1 max-w-3xl">
                </h1>
                <p class="text-lg md:text-xl max-w-md mx-auto md:mx-0">
                    Temukan Batik Impianmu di Sini!
                </p>
                <a href="{{ route('shop.index') }}"
                    class="inline-block bg-[#1E41FB] text-white px-6 py-3 rounded-3xl font-semibold hover:bg-[#5A71EC] transition duration-300">
                    Lihat Produk
                </a>
            </div>

            {{-- Kanan: Gambar Orang (Hanya muncul di layar medium ke atas) --}}
            <div class="hidden md:flex justify-center md:justify-end">
                <div class="relative">
                    <div class="w-72 h-72 md:w-96 md:h-96 bg-white rounded-full flex items-center justify-center shadow-lg">
                        <img src="/images/model_batik_hero.png" alt="Orang memakai batik"
                            class="w-64 md:w-95 object-contain rounded-full">
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Section UMKM --}}
    <section class="relative bg-cover py-10 bg-bottom min-h-[140vh]"
        style="background-image: url('/images/bg_batik_1.png');">
        <div class="absolute inset-0 bg-black/10"></div>
        <div class="container mx-auto px-6 text-center text-black">

            {{-- Judul & Deskripsi --}}
            <h2 class="text-3xl md:text-4xl font-bold mb-3">UMKM</h2>
            <h2 class="text-3xl md:text-4xl font-bold mb-3">Kampung Batik Paseseh</h2>
            <p class="text-lg md:text-xl mb-12 max-w-4xl mx-auto">
                Kampung batik paseseh merupakan komunitas yang memiliki 10 UMKM terkenal ditanjung bumi. serta disetiap UMKM
                memiliki banyak produk unggulan yang mereka produksi
            </p>

            {{-- Grid UMKM --}}
            <div class="flex flex-col md:flex-row justify-center items-center gap-6">

                {{-- Kartu Kiri --}}
                <div class="bg-white rounded-lg shadow-lg p-4 w-72">
                    <img src="/images/hero_background.png" alt="UMKM 1" class="rounded-lg w-full h-48 object-cover">
                    <div class="flex justify-center -mt-6">
                        <img src="/images/model_batik_hero.png" alt="Logo UMKM 1"
                            class="w-16 h-16 rounded-full border-2 border-white shadow">
                    </div>
                    <h3 class="mt-4 font-semibold text-gray-800">UMKM Batik Sinar</h3>
                </div>

                {{-- Kartu Tengah (lebih ke bawah) --}}
                <div class="bg-white rounded-lg shadow-lg p-4 w-72 transform translate-y-8">
                    <img src="/images/umkm2.jpg" alt="UMKM 2" class="rounded-lg w-full h-48 object-cover">
                    <div class="flex justify-center -mt-6">
                        <img src="/images/logo2.png" alt="Logo UMKM 2"
                            class="w-16 h-16 rounded-full border-2 border-white shadow">
                    </div>
                    <h3 class="mt-4 font-semibold text-gray-800">UMKM Batik Indah</h3>
                </div>

                {{-- Kartu Kanan --}}
                <div class="bg-white rounded-lg shadow-lg p-4 w-72">
                    <img src="/images/umkm3.jpg" alt="UMKM 3" class="rounded-lg w-full h-48 object-cover">
                    <div class="flex justify-center -mt-6">
                        <img src="/images/logo3.png" alt="Logo UMKM 3"
                            class="w-16 h-16 rounded-full border-2 border-white shadow">
                    </div>
                    <h3 class="mt-4 font-semibold text-gray-800">UMKM Batik Lestari</h3>
                </div>

            </div>
        </div>
    </section>
@endsection

@section('content')
    {{-- Section sejarah setelah hero --}}
    <section class="container mx-auto px-6 md:px-12 py-16 md:py-24 grid md:grid-cols-2 gap-12 items-center">
        <!-- Kiri: Foto bertumpuk -->
        <div class="relative w-full max-w-[500px] mx-auto">
            <!-- Background abu-abu -->
            <div class="absolute w-[85%] h-[300px] md:h-[380px] top-5 left-0 bg-gray-100 rounded-xl z-[1]"></div>

            <!-- Foto utama -->
            <div class="relative w-[85%] h-[300px] md:h-[380px] ml-[15%] rounded-xl overflow-hidden shadow-xl z-[2]">
                <img src="/images/bg_batik_3.png" alt="Proses Pembuatan Batik" class="w-full h-full object-cover">
            </div>

            <!-- Foto kecil -->
            <div
                class="absolute w-[120px] h-[120px] md:w-[160px] md:h-[160px] -bottom-8 left-0 rounded-xl overflow-hidden shadow-2xl z-[3] border-4 border-white">
                <img src="/images/bg_batik_2.png" alt="Motif Batik Detail" class="w-full h-full object-cover">
            </div>
        </div>

        <!-- Kanan: Teks -->
        <div class="text-left space-y-6">
            <div>
                <h1 class="font-playfair text-3xl md:text-4xl font-bold text-gray-900 mb-2">Perjalanan</h1>
                <h2 class="font-playfair text-4xl md:text-5xl font-semibold text-[#1E41FB]">Kampung Batik Paseseh</h2>
            </div>

            <div class="space-y-4 text-gray-700 text-[14px] md:text-[16px] leading-relaxed">
                <p>
                    Batik Tanjung Bumi merupakan salah satu kekayaan budaya yang lestari di pesisir utara pulau Madura,
                    tepatnya di Kecamatan Tanjung Bumi, Kabupaten Bangkalan. Menurut kisah turun temurun, batik ini mulai
                    berkembang sejak abad ke-16 hingga ke-17, seiring dengan meningkatnya aktivitas perdagangan di wilayah
                    pesisir Madura.
                </p>

                <p>
                    Tanjung Bumi dikenal sebagai daerah yang banyak dilalui oleh nelayan dan pedagang. Interaksinya dengan
                    para pedagang dari Jawa, Bali, Cina, Arab, dan Eropa menjadikan Tanjung Bumi sebagai titik pertemuan
                    budaya.
                    Dari interaksi inilah lahir beragam motif batik yang kaya akan makna simbolis dan penuh warna.
                </p>

                <p>
                    Pada awalnya, kegiatan membatik dilakukan oleh para perempuan dari keluarga bangsawan atau keluarga
                    pedagang kaya.
                    Batik bukan sekadar pakaian, melainkan penanda status sosial. Motif-motif tertentu hanya boleh digunakan
                    oleh
                    kalangan tertentu, terutama motif dengan detail rumit dan warna berani.
                </p>
            </div>

            {{-- <div class="pt-4">
                <button
                    class="px-8 py-3 bg-amber-600 hover:bg-amber-700 text-white font-medium rounded-lg transition duration-300">
                    Pelajari Sejarah Lengkap
                </button>
            </div> --}}
        </div>
    </section>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 bg-gray-600 py-20 p-6 md:p-12 rounded-2xl">
        <!-- Kiri: Card besar -->
        <div class="bg-white rounded-2xl shadow overflow-hidden flex flex-col justify-between">
            <img src="/images/batik1.jpg" alt="Batik Tulis Tanjung Bumi" class="w-full h-48 md:h-64 object-cover">
            <div class="p-6">
                <h2 class="text-xl font-bold text-slate-800 mb-2">KEUNIKAN BATIK TULIS TANJUNG BUMI</h2>
                <p class="text-slate-600 text-sm md:text-base">
                    Paduan Tradisi, Kisah, dan Ekspresi Seni. <br>
                    Setiap Helai Adalah Mahakarya.
                </p>
            </div>
        </div>

        <!-- Kanan: 4 card kecil -->
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
            <!-- Card 1 -->
            <div class="bg-white rounded-2xl shadow overflow-hidden">
                <img src="/images/batik2.jpg" alt="Batik Tulis" class="w-full h-32 object-cover">
                <div class="p-4">
                    <h3 class="font-semibold text-slate-800 text-sm">Batik Tulis Tanjung Bumi</h3>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="bg-white rounded-2xl shadow overflow-hidden">
                <img src="/images/batik3.jpg" alt="Batik Tulis" class="w-full h-32 object-cover">
                <div class="p-4">
                    <h3 class="font-semibold text-slate-800 text-sm">Keindahan dan Ciri Khas Batik Tulis</h3>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="bg-black rounded-2xl shadow overflow-hidden flex flex-col justify-between">
                <div class="p-6 text-white">
                    <h3 class="text-lg font-semibold">BATIK TULIS TANJUNG BUMI</h3>
                    <p class="text-sm mt-2">Warisan Abadi dari Tanjung Bumi</p>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="bg-white rounded-2xl shadow overflow-hidden">
                <img src="/images/batik4.jpg" alt="Batik Tulis" class="w-full h-32 object-cover">
                <div class="p-4">
                    <h3 class="font-semibold text-slate-800 text-sm">Karya Seni dalam Setiap Goresan</h3>
                </div>
            </div>
        </div>
    </div>

    {{-- Section produk setelah hero --}}
    {{-- <div id="produk" class="container mx-auto px-6 py-12">
        <h2 class="text-3xl font-bold mb-6">Produk Unggulan</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <div class="bg-white p-4 rounded-lg shadow">
                <h3 class="font-semibold">Batik Tulis</h3>
                <p class="text-sm text-slate-500">Deskripsi singkat produk.</p>
            </div>
        </div>
    </div> --}}
@endsection

@vite('resources/js/typing.js')
