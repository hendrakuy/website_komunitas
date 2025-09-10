@extends('layouts.app')

@section('hero')
<!-- Hero Section -->
<header class="relative bg-gray-900">
    <img src="/images/Bg_Edukasi.png" alt="Batik" class="w-full h-[600px] object-cover opacity-70">
    <div class="absolute inset-0 flex flex-col justify-center items-center text-center text-white px-4">
        <h1 class="text-3xl md:text-5xl font-bold mb-4">Paket Edukasi Membatik</h1>
        <p class="text-lg md:text-xl mb-6">Nikmati pengalaman membatik langsung dari pengrajin Tanjung Bumi.</p>
        <a href="#paket" class="bg-indigo-600 hover:bg-indigo-700 px-6 py-3 rounded-lg font-semibold">Lihat Paket</a>
    </div>
</header>

<!-- Deskripsi -->
<section class="py-12 px-6 max-w-5xl mx-auto">
    <h2 class="text-2xl font-bold mb-4">Deskripsi Program</h2>
    <p class="text-gray-600 leading-relaxed border-l-4 border-blue-500 pl-4">
        Program Edukasi Membatik Tanjung Bumi dirancang untuk memperkenalkan tradisi dan meningkatkan rasa cinta batik kepada generasi muda.
        Peserta akan belajar sejarah batik, teknik membatik, hingga membuat karya batik sendiri dengan bimbingan pengrajin profesional.
    </p>
</section>
@endsection

@section('content')
<!-- Jenis Paket -->
<section id="paket" class="px-6 max-w-6xl mx-auto py-12">
    <h2 class="text-2xl md:text-3xl font-bold mb-8 text-center">Jenis Paket</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-8">
        <!-- Paket Dasar -->
        <div class="bg-white rounded-tr-[100px] rounded-bl-[100px] shadow-lg overflow-hidden text-center flex flex-col">
            <img src="/images/Paket1.png" alt="Paket Dasar" class="w-full h-48 md:h-56 object-cover">
            <div class="p-6 flex flex-col flex-1 justify-between">
                <div>
                    <h3 class="font-semibold text-lg md:text-xl mb-4">Paket Dasar</h3>
                    <p class="mb-6 text-sm md:text-base">Pengenalan sejarah batik Madura, alat & bahan, latihan membuat pola sederhana.</p>
                    <button class="bg-indigo-600 text-white px-4 py-2 rounded-lg w-40 md:w-auto">Detail</button>
                </div>
            </div>
        </div>

        <!-- Paket Menengah -->
        <div class="bg-white rounded-tr-[100px] rounded-bl-[100px] shadow-lg overflow-hidden text-center flex flex-col">
            <img src="/images/Paket2.png" alt="Paket Menengah" class="w-full h-48 md:h-56 object-cover">
            <div class="p-6 flex flex-col flex-1 justify-between">
                <div>
                    <h3 class="font-semibold text-lg md:text-xl mb-4">Paket Menengah</h3>
                    <p class="mb-6 text-sm md:text-base">Teknik mencanting, pewarnaan dasar, membuat motif sederhana khas Madura.</p>
                    <button class="bg-indigo-600 text-white px-4 py-2 rounded-lg w-40 md:w-auto">Detail</button>
                </div>
            </div>
        </div>

        <!-- Paket Lanjutan -->
        <div class="bg-white rounded-tr-[100px] rounded-bl-[100px] shadow-lg overflow-hidden text-center flex flex-col">
            <img src="/images/Paket3.png" alt="Paket Lanjutan" class="w-full h-48 md:h-56 object-cover">
            <div class="p-6 flex flex-col flex-1 justify-between">
                <div>
                    <h3 class="font-semibold text-lg md:text-xl mb-4">Paket Lanjutan</h3>
                    <p class="mb-6 text-sm md:text-base">Eksplorasi motif khas Tanjung Bumi, teknik pewarnaan kompleks, inovasi desain modern.</p>
                    <button class="bg-indigo-600 text-white px-4 py-2 rounded-lg w-40 md:w-auto">Detail</button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Fasilitas -->
<section class="py-12 px-6 max-w-5xl mx-auto">
    <div class="flex flex-col md:flex-row md:justify-between md:items-start gap-10">
        <!-- Fasilitas -->
        <div class="md:w-1/2">
            <h2 class="text-2xl font-bold mb-6">Fasilitas yang Didapat</h2>
            <ul class="space-y-3">
                <li class="flex items-center"><span class="text-green-500 mr-2">✔</span> Alat membatik lengkap</li>
                <li class="flex items-center"><span class="text-green-500 mr-2">✔</span> Bahan kain batik</li>
                <li class="flex items-center"><span class="text-green-500 mr-2">✔</span> Pengajar profesional</li>
                <li class="flex items-center"><span class="text-green-500 mr-2">✔</span> Sertifikat peserta</li>
            </ul>
        </div>

        <!-- Profil Pengajar -->
        <div class="md:w-1/2">
            <h2 class="text-2xl font-bold mb-8 text-center md:text-left">Profil Pengajar</h2>
            <div class="flex flex-col md:flex-row gap-6 md:gap-10 justify-center md:justify-start">
                <!-- Pengajar 1 -->
                <div class="text-center p-6 rounded-lg hover:bg-indigo-600 hover:text-white transition-colors w-full md:w-1/3">
                    <img src="/images/Pengajar1.png" class="w-24 h-24 rounded-full mb-3 object-cover mx-auto" alt="Pengajar 1">
                    <p class="font-semibold">Siti Aminah</p>
                    <p class="mt-2">(Pengrajin Batik Senior – 25 tahun pengalaman)</p>
                </div>
                <!-- Pengajar 2 -->
                <div class="text-center p-6 rounded-lg hover:bg-indigo-600 hover:text-white transition-colors w-full md:w-1/3">
                    <img src="/images/Pengajar2.png" class="w-24 h-24 rounded-full mb-3 object-cover mx-auto" alt="Pengajar 2">
                    <p class="font-semibold">Hj Abdullah Rahman</p>
                    <p class="mt-2">(Instruktur Batik – 18 tahun pengalaman)</p>
                </div>
                <!-- Pengajar 3 -->
                <div class="text-center p-6 rounded-lg hover:bg-indigo-600 hover:text-white transition-colors w-full md:w-1/3">
                    <img src="/images/Pengajar3.png" class="w-24 h-24 rounded-full mb-3 object-cover mx-auto" alt="Pengajar 3">
                    <p class="font-semibold">Nurul Hayati</p>
                    <p class="mt-2">(Desainer Batik – 12 tahun pengalaman)</p>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Testimoni -->
<section class="bg-gray-100 py-12 px-6">
    <h2 class="text-2xl font-bold text-center mb-6">Testimoni Peserta</h2>
    <div class="relative overflow-hidden">
        <div id="testimonial-wrapper" class="flex transition-transform duration-500">
            <!-- Testimoni 1 -->
            <div class="bg-white shadow-md rounded-xl p-6 flex-shrink-0 w-full md:w-1/3 mx-2">
                <p class="mb-4 text-gray-600">“Belajar membatik di sini sangat menyenangkan! Saya jadi tahu proses batik tulis secara langsung.”</p>
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
                <p class="mb-4 text-gray-600">“Instruktur ramah dan sabar, cocok untuk pemula. Sangat direkomendasikan.”</p>
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
                <p class="mb-4 text-gray-600">“Pengalaman yang tidak terlupakan, saya bisa membuat batik karya sendiri.”</p>
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
                <p class="mb-4 text-gray-600">“Pengalaman yang tidak terlupakan, saya bisa membuat batik karya sendiri.”</p>
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
        <button id="prev" class="absolute left-0 top-1/2 -translate-y-1/2 bg-indigo-600 text-white px-3 py-2 rounded-lg">‹</button>
        <button id="next" class="absolute right-0 top-1/2 -translate-y-1/2 bg-indigo-600 text-white px-3 py-2 rounded-lg">›</button>
    </div>
</section>

<script>
const wrapper = document.getElementById('testimonial-wrapper');
const next = document.getElementById('next');
const prev = document.getElementById('prev');
const total = wrapper.children.length;
let index = 0;

function showSlide(i){
    if(i >= total) index = 0;
    else if(i < 0) index = total - 1;
    else index = i;
    wrapper.style.transform = `translateX(-${index * (100/3)}%)`; // 3 per slide
}

next.addEventListener('click', ()=> showSlide(index + 1));
prev.addEventListener('click', ()=> showSlide(index - 1));

// Optional: auto slide every 5s
setInterval(()=> showSlide(index + 1), 5000);
</script>

    <p class="text-center text-gray-500 mt-8 italic">“Jangan lewatkan kesempatan langka untuk belajar langsung dari pengrajin batik Tanjung Bumi.”</p>
</section>
@endsection