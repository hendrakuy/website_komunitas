<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- <title>{{ config('app.name', 'Website Batik') }}</title> --}}
    <!-- Favicon -->
    {{-- <link rel="icon" type="image/png" href="{{ asset('images/KOMUNITAS (5).png') }}"> --}}
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon.png') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.ico') }}">
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">
    <title>@yield('title', config('app.name', 'Website Batik'))</title>
    <script src="//unpkg.com/alpinejs" defer></script>
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/scrollup.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <!-- Tambahkan di dalam <head> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
        integrity="sha512-vzN1OqgW1Qp0lYF0vHMyvhU7LhrdPpM+u5aMxMGE+z0l3Dflr1pYbgz4m+3m3l6kt1DfiD+1rWlbYvAevHn1kA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body class="sans antialiased bg-slate-50 text-slate-800 min-h-screen flex flex-col">
    @include('partials.nav')

    {{-- Hero section di luar container --}}
    @yield('hero')

    <!-- Main content grows to push footer ke bawah -->
    <main class="container mx-auto px-4 py-8 flex-grow">
        @yield('content')
    </main>

    @yield('scripts')

    @include('partials.footer')

    <!-- 🔹 Scroll Up Button -->
    <button id="scrollUpBtn"
        class="hidden fixed bottom-5 right-5 z-50 bg-blue-600 text-white p-3 rounded-full shadow-lg hover:bg-blue-700 transition">
        <i class="fa-solid fa-arrow-up"></i>
    </button>
</body>

</html>
