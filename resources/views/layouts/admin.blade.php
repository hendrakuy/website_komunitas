<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title', 'Dashboard UMKM Batik')</title>
    <link href="{{ asset('admin-template/css/styles.css') }}" rel="stylesheet">
</head>

<body x-data="{ page: 'ecommerce', loaded: true, darkMode: false }" :class="{ 'dark bg-gray-900': darkMode }">

    <div class="flex h-screen overflow-hidden">

        <!-- Sidebar -->
        @include('admin.partials.sidebar')

        <!-- Content -->
        <div class="relative flex flex-col flex-1 overflow-x-hidden overflow-y-auto">

            <!-- Header -->
            @include('admin.partials.header')

            <!-- Main Content -->
            <main>
                <div class="p-4 mx-auto max-w-7xl md:p-6">
                    @yield('content')
                </div>
            </main>

        </div>
    </div>

    <script src="{{ asset('admin-template/js/scripts.js') }}"></script>
</body>

</html>
