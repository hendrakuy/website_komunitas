<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Website Batik') }}</title>
    <script src="//unpkg.com/alpinejs" defer></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&display=swap" rel="stylesheet">
</head>

<body class="antialiased bg-slate-50 text-slate-800 min-h-screen flex flex-col">
    @include('partials.nav')

    {{-- Hero section di luar container --}}
    @yield('hero')

    <!-- Main content grows to push footer ke bawah -->
    <main class="container mx-auto px-4 py-8 flex-grow">
        @yield('content')
    </main>

    @include('partials.footer')
</body>

</html>
