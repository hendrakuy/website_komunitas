<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<!-- Footer -->
<footer class="bg-gradient-to-br from-blue-900 to-purple-800 text-white relative overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-5">
        <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width=\"60\" height=\"60\" viewBox=\"0 0 60 60\" xmlns=\"http://www.w3.org/2000/svg\"%3E%3Cg fill=\"none\" fill-rule=\"evenodd\"%3E%3Cg fill=\"%23ffffff\" fill-opacity=\"0.1\"%3E%3Cpath d=\"M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
    </div>
    
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 lg:gap-12">
        
        <!-- Brand Section -->
        <div class="lg:col-span-1">
            <div class="flex flex-col space-y-6">
                <!-- Logo -->
                <div class="flex items-center space-x-3">
                    <div class="w-10 h-10 bg-gradient-to-r from-amber-400 to-orange-500 rounded-lg flex items-center justify-center shadow-lg">
                        <i class="fas fa-palette text-white text-lg"></i>
                    </div>
                    <h2 class="text-2xl font-bold bg-gradient-to-r from-white to-gray-200 bg-clip-text text-transparent">
                        Batik Paseseh
                    </h2>
                </div>
                
                <p class="text-blue-100 leading-relaxed text-base md:text-lg">
                    Melestarikan keindahan Batik Tanjung Bumi, warisan budaya tak ternilai yang menjadi kebanggaan Madura dan Indonesia.
                </p>
                
                <!-- Social Media -->
                <div class="flex space-x-3">
                    {{-- <a href="#" class="group bg-blue-700 hover:bg-blue-600 w-12 h-12 rounded-xl flex items-center justify-center transition-all duration-300 transform hover:-translate-y-1 hover:shadow-lg">
                        <i class="fab fa-facebook-f text-white group-hover:text-blue-100"></i>
                    </a> --}}
                    <a href="https://www.instagram.com/kembangpote_batikpaseseh" target="_blank" class="group bg-pink-600 hover:bg-pink-500 w-12 h-12 rounded-xl flex items-center justify-center transition-all duration-300 transform hover:-translate-y-1 hover:shadow-lg">
                        <i class="fab fa-instagram text-white group-hover:text-pink-100"></i>
                    </a>
                    {{-- <a href="#" class="group bg-blue-400 hover:bg-blue-300 w-12 h-12 rounded-xl flex items-center justify-center transition-all duration-300 transform hover:-translate-y-1 hover:shadow-lg">
                        <i class="fab fa-twitter text-white group-hover:text-blue-50"></i>
                    </a> --}}
                    <a href="#" class="group bg-red-600 hover:bg-red-500 w-12 h-12 rounded-xl flex items-center justify-center transition-all duration-300 transform hover:-translate-y-1 hover:shadow-lg">
                        <i class="fab fa-youtube text-white group-hover:text-red-100"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Quick Links -->
        <div class="lg:col-span-1">
            <h3 class="text-xl font-bold mb-6 flex items-center">
                <span class="w-3 h-3 bg-amber-400 rounded-full mr-3"></span>
                Navigasi Cepat
            </h3>
            <ul class="space-y-4">
                <li>
                    <a href="#" class="group flex items-center text-blue-100 hover:text-white transition-all duration-300 transform hover:translate-x-2">
                        <i class="fas fa-heart text-amber-400 mr-3 text-sm group-hover:scale-110 transition-transform"></i>
                        <span class="font-medium">Wishlist Favorit</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="group flex items-center text-blue-100 hover:text-white transition-all duration-300 transform hover:translate-x-2">
                        <i class="fas fa-compass text-amber-400 mr-3 text-sm group-hover:scale-110 transition-transform"></i>
                        <span class="font-medium">Eksplor Koleksi</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="group flex items-center text-blue-100 hover:text-white transition-all duration-300 transform hover:translate-x-2">
                        <i class="fas fa-shopping-bag text-amber-400 mr-3 text-sm group-hover:scale-110 transition-transform"></i>
                        <span class="font-medium">Pemesanan</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="group flex items-center text-blue-100 hover:text-white transition-all duration-300 transform hover:translate-x-2">
                        <i class="fas fa-shipping-fast text-amber-400 mr-3 text-sm group-hover:scale-110 transition-transform"></i>
                        <span class="font-medium">Tracking Pesanan</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- Information -->
        <div class="lg:col-span-1">
            <h3 class="text-xl font-bold mb-6 flex items-center">
                <span class="w-3 h-3 bg-amber-400 rounded-full mr-3"></span>
                Informasi
            </h3>
            <ul class="space-y-4">
                <li>
                    <a href="{{ route('aboutus') }}" class="group flex items-center text-blue-100 hover:text-white transition-all duration-300 transform hover:translate-x-2">
                        <i class="fas fa-info-circle text-amber-400 mr-3 text-sm group-hover:scale-110 transition-transform"></i>
                        <span class="font-medium">Tentang Kami</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="group flex items-center text-blue-100 hover:text-white transition-all duration-300 transform hover:translate-x-2">
                        <i class="fas fa-envelope text-amber-400 mr-3 text-sm group-hover:scale-110 transition-transform"></i>
                        <span class="font-medium">Kontak Kami</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('event.index') }}" class="group flex items-center text-blue-100 hover:text-white transition-all duration-300 transform hover:translate-x-2">
                        <i class="fas fa-newspaper text-amber-400 mr-3 text-sm group-hover:scale-110 transition-transform"></i>
                        <span class="font-medium">Event & Promo</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('penghargaan') }}" class="group flex items-center text-blue-100 hover:text-white transition-all duration-300 transform hover:translate-x-2">
                        <i class="fas fa-trophy text-amber-400 mr-3 text-sm group-hover:scale-110 transition-transform"></i>
                        <span class="font-medium">Penghargaan</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- Contact Info -->
        <div class="lg:col-span-1">
            <h3 class="text-xl font-bold mb-6 flex items-center">
                <span class="w-3 h-3 bg-amber-400 rounded-full mr-3"></span>
                Kontak Kami
            </h3>
            <ul class="space-y-5">
                <li class="flex items-start group">
                    <div class="bg-blue-700 group-hover:bg-amber-500 w-10 h-10 rounded-lg flex items-center justify-center mt-1 transition-all duration-300 group-hover:scale-110">
                        <i class="fas fa-map-marker-alt text-white text-sm"></i>
                    </div>
                    <div class="ml-4">
                        <p class="font-semibold text-white">Alamat Galery</p>
                        <p class="text-blue-100 text-sm mt-1 leading-relaxed">
                            Desa Paseseh, Kec. Tanjung Bumi<br>Kabupaten Bangkalan, Jawa Timur
                        </p>
                    </div>
                </li>
                
                <li class="flex items-center group">
                    <div class="bg-blue-700 group-hover:bg-amber-500 w-10 h-10 rounded-lg flex items-center justify-center transition-all duration-300 group-hover:scale-110">
                        <i class="fas fa-envelope text-white text-sm"></i>
                    </div>
                    <div class="ml-4">
                        <p class="font-semibold text-white">Email</p>
                        <a href="mailto:batikpasseeh@gmail.com" class="text-blue-100 hover:text-white text-sm transition-colors">
                            batikpasseeh@gmail.com
                        </a>
                    </div>
                </li>
                
                <li class="flex items-center group">
                    <div class="bg-blue-700 group-hover:bg-amber-500 w-10 h-10 rounded-lg flex items-center justify-center transition-all duration-300 group-hover:scale-110">
                        <i class="fas fa-phone-alt text-white text-sm"></i>
                    </div>
                    <div class="ml-4">
                        <p class="font-semibold text-white">Telepon/WhatsApp</p>
                        <a href="https://wa.me/628674423482" class="text-blue-100 hover:text-white text-sm transition-colors">
                            +62 867-4423-482
                        </a>
                    </div>
                </li>
            </ul>
            
            <!-- Newsletter Subscription -->
            <div class="mt-8 p-4 bg-blue-800 bg-opacity-50 rounded-xl border border-blue-700">
                <h4 class="font-semibold text-white mb-3 flex items-center">
                    <i class="fas fa-paper-plane text-amber-400 mr-2"></i>
                    Newsletter
                </h4>
                <p class="text-blue-100 text-sm mb-3">
                    Dapatkan update koleksi terbaru dan promo spesial
                </p>
                <div class="flex space-x-1">
                    <input type="email" placeholder="Email Anda" 
                        class="flex-1 px-3 py-2 bg-white bg-opacity-10 border border-blue-600 rounded-lg text-white placeholder-blue-200 text-sm focus:outline-none focus:border-amber-400">
                    <button class="bg-amber-500 hover:bg-amber-400 text-white px-4 py-2 rounded-lg transition-colors font-medium">
                        <i class="fas fa-paper-plane"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Bottom Bar -->
    <div class="relative border-t border-blue-700">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
            <div class="flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0">
                <!-- Copyright -->
                <div class="text-center md:text-left">
                    <p class="text-blue-200 text-sm">
                        © 2025 <span class="text-white font-semibold">Seni Tanjung Bumi</span> | 
                        Designed with <i class="fas fa-heart text-amber-400 mx-1"></i> by 
                        <span class="text-white font-semibold">Universitas Trunojoyo Madura</span>
                    </p>
                </div>
                
                <!-- Additional Links -->
                <div class="flex items-center space-x-6 text-sm">
                    <a href="{{ route('privacy') }}" class="text-blue-200 hover:text-white transition-colors">
                        Kebijakan Privasi
                    </a>
                    <a href="{{ route('term') }}" class="text-blue-200 hover:text-white transition-colors">
                        Syarat & Ketentuan
                    </a>
                    {{-- <a href="#" class="text-blue-200 hover:text-white transition-colors">
                        Sitemap
                    </a> --}}
                </div>
            </div>
        </div>
    </div>
    
    <!-- Decorative Elements -->
    <div class="absolute bottom-0 left-0 w-full h-1 bg-gradient-to-r from-amber-400 via-orange-500 to-red-500"></div>
</footer>