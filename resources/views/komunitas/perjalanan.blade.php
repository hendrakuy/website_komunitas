@extends('layouts.app')

@section('hero')
    <section class="relative overflow-hidden">
        <!-- Hero Background -->
        <div class="relative w-full h-64 sm:h-80 md:h-96 lg:h-[28rem] xl:h-[32rem] bg-cover bg-center"
            style="background-image: url('{{ asset('images/bg_komunitas.png') }}');">

            <!-- Overlay hitam transparan -->
            <div class="absolute inset-0 bg-black bg-opacity-20"></div>

            <!-- Konten Teks -->
            <div class="relative z-10 h-full flex items-center justify-center text-center text-white px-4">
                <div>
                    <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold mb-2 md:mb-4 tracking-wide">
                        Perjalanan Dunia Komunitas
                    </h1>
                    <h2 class="text-xl sm:text-2xl md:text-3xl lg:text-4xl font-semibold mb-4 md:mb-6">
                        Kampung Batik Paseseh
                    </h2>
                    <div class="w-16 sm:w-20 md:w-24 h-1 bg-yellow-400 mx-auto"></div>
                </div>
            </div>
        </div>

        <!-- Decorative batik pattern overlay -->
        <div
            class="absolute top-4 sm:top-6 md:top-8 left-4 sm:left-6 md:left-8 w-12 sm:w-16 md:w-20 h-12 sm:h-16 md:h-20 border-2 border-yellow-400 rounded-full opacity-30">
        </div>
        <div
            class="absolute bottom-4 sm:bottom-6 md:bottom-8 right-4 sm:right-6 md:right-8 w-12 sm:w-16 md:w-16 h-12 sm:h-16 md:h-16 border-2 border-yellow-400 rounded-full opacity-20">
        </div>
    </section>


    <!-- Timeline Section - Full Width Background -->
    <section class="w-full min-h-[600px] bg-cover bg-center py-12"
        style="background-image: url('{{ asset('images/bg_perjalanan.png') }}');">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h3 class="text-3xl font-bold text-gray-800 mb-4">Perjalanan</h3>
                <h4 class="text-2xl font-semibold text-gray-800 mb-8">Kampung Batik Paseseh</h4>

                <!-- Timeline Navigation -->
                <div class="flex justify-center space-x-4 mb-8">
                    <button class="timeline-btn px-6 py-2 rounded-full bg-white shadow-md hover:shadow-lg transition"
                        data-year="2022">2022</button>
                    <button class="timeline-btn px-6 py-2 rounded-full bg-white shadow-md hover:shadow-lg transition"
                        data-year="2023">2023</button>
                    <button class="timeline-btn active px-6 py-2 rounded-full bg-blue-600 text-white shadow-lg"
                        data-year="2024">2024</button>
                </div>
            </div>

            <!-- Timeline Content -->
            <div class="max-w-6xl mx-auto">
                <!-- 2024 Content (Active) -->
                <div id="content-2024" class="timeline-content">
                    <div class="grid md:grid-cols-2 gap-8 items-center">
                        <!-- Left Content -->
                        <div class="space-y-6">
                            <div class="bg-white rounded-lg p-6 shadow-lg">
                                <h5 class="text-xl font-bold text-gray-800 mb-4">2024 - KTP Berhasil membuat produk baru
                                </h5>
                                <ul class="space-y-3 text-gray-700">
                                    <li class="flex items-start">
                                        <i class="fas fa-check-circle text-green-500 mt-1 mr-3"></i>
                                        <span>Mengajar teknologi batik yang berbasis inovasi untuk mencetak generasi</span>
                                    </li>
                                    <li class="flex items-start">
                                        <i class="fas fa-check-circle text-green-500 mt-1 mr-3"></i>
                                        <span>Mengajak komunitas</span>
                                    </li>
                                    <li class="flex items-start">
                                        <i class="fas fa-check-circle text-green-500 mt-1 mr-3"></i>
                                        <span>Membuat produk batik dengan mengutamakan model dan gaya yang fresh</span>
                                    </li>
                                    <li class="flex items-start">
                                        <i class="fas fa-check-circle text-green-500 mt-1 mr-3"></i>
                                        <span>Pelatihan serta memberikan wawasan yang lebih tentang dunia batik</span>
                                    </li>
                                    <li class="flex items-start">
                                        <i class="fas fa-check-circle text-green-500 mt-1 mr-3"></i>
                                        <span>workshop modeus jawa timur</span>
                                    </li>
                                </ul>
                            </div>

                            <!-- Additional Info Cards -->
                            <div class="grid grid-cols-2 gap-4">
                                <div class="bg-gradient-to-br from-blue-500 to-blue-600 text-white p-4 rounded-lg">
                                    <i class="fas fa-users text-2xl mb-2"></i>
                                    <h6 class="font-semibold">Anggota Aktif</h6>
                                    <p class="text-2xl font-bold">150+</p>
                                </div>
                                <div class="bg-gradient-to-br from-green-500 to-green-600 text-white p-4 rounded-lg">
                                    <i class="fas fa-award text-2xl mb-2"></i>
                                    <h6 class="font-semibold">Produk Dibuat</h6>
                                    <p class="text-2xl font-bold">500+</p>
                                </div>
                            </div>
                        </div>

                        <!-- Right Image -->
                        <div class="relative">
                            <div class="bg-white rounded-lg p-4 shadow-lg">
                                <img src="/images/perjalanan.png" alt="Workshop Batik 2024"
                                    class="w-full h-80 object-cover rounded-lg">
                                <div
                                    class="absolute -top-4 -right-4 bg-yellow-400 text-black px-4 py-2 rounded-full font-bold shadow-lg">
                                    BATIK 2024
                                </div>
                            </div>
                            <!-- Decorative elements -->
                            {{-- <div
                                class="absolute -bottom-6 -left-6 w-24 h-24 bg-gradient-to-br from-orange-400 to-red-500 rounded-full opacity-20">
                            </div>
                            <div
                                class="absolute -top-8 -left-4 w-16 h-16 bg-gradient-to-br from-blue-400 to-purple-500 rounded-full opacity-30">
                            </div> --}}
                        </div>
                    </div>
                </div>

                <!-- 2023 Content (Hidden) -->
                <div id="content-2023" class="timeline-content hidden">
                    <div class="text-center py-12">
                        <i class="fas fa-calendar-alt text-6xl text-gray-400 mb-4"></i>
                        <h5 class="text-2xl font-bold text-gray-700 mb-2">Tahun 2023</h5>
                        <p class="text-gray-600">Konten untuk tahun 2023 akan segera ditambahkan</p>
                    </div>
                </div>

                <!-- 2022 Content (Hidden) -->
                <div id="content-2022" class="timeline-content hidden">
                    <div class="text-center py-12">
                        <i class="fas fa-calendar-alt text-6xl text-gray-400 mb-4"></i>
                        <h5 class="text-2xl font-bold text-gray-700 mb-2">Tahun 2022</h5>
                        <p class="text-gray-600">Konten untuk tahun 2022 akan segera ditambahkan</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('content')
@endsection

<script>
    // Timeline functionality
    const timelineButtons = document.querySelectorAll('.timeline-btn');
    const timelineContents = document.querySelectorAll('.timeline-content');

    timelineButtons.forEach(button => {
        button.addEventListener('click', () => {
            const year = button.dataset.year;

            // Remove active class from all buttons
            timelineButtons.forEach(btn => {
                btn.classList.remove('active', 'bg-blue-600', 'text-white');
                btn.classList.add('bg-white');
            });

            // Add active class to clicked button
            button.classList.add('active', 'bg-blue-600', 'text-white');
            button.classList.remove('bg-white');

            // Hide all timeline contents
            timelineContents.forEach(content => {
                content.classList.add('hidden');
            });

            // Show selected timeline content
            const selectedContent = document.getElementById(`content-${year}`);
            if (selectedContent) {
                selectedContent.classList.remove('hidden');
            }
        });
    });
</script>
