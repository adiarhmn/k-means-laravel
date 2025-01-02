<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>
        {{ config('app.name') }} - @yield('title', 'Welcome')
    </title>

    <!-- Fonts Source Code Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:wght@400;500;600;700&display=swap">

    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="font-source-code-pro antialiased">
    <div class="min-h-screen flex flex-col bg-gray-100">

        {{-- Header Section --}}
        <header class="md:px-28 py-10">
            <div class="flex justify-between">
                <h1 class="font-bold text-gray-500 text-2xl">K-Means</h1>
                <div class="flex gap-6">
                    <a href="{{ route('k-means') }}">K-Means</a>
                    <div class="relative">
                        <button onclick="toggleDropdown()" class="focus:outline-none">
                            Data Master
                        </button>
                        <div id="dropdown" class="hidden absolute mt-2 w-48 bg-white rounded-md shadow-lg z-10">
                            <a href=""
                                class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Data Master 1</a>
                            <a href=""
                                class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Data Master 2</a>
                        </div>
                    </div>
                    <a href="">About</a>
                </div>
            </div>
        </header>

        {{-- Main Section --}}
        <main class="flex-grow px-5 md:px-28">
            @yield('content')
        </main>

        {{-- Footer Section --}}
        <footer class="">
            <div class="container py-10 text-center text-gray-500 text-xs md:text-sm">
                <p>&copy; {{ date('Y') }} {{ config('app.name') }} All rights reserved.</p>
                <p>Developed by Adi Aulia Rahman</p>
            </div>
        </footer>
    </div>

    <script>
        function toggleDropdown() {
            var dropdown = document.getElementById('dropdown');
            dropdown.classList.toggle('hidden');
        }
    </script>
</body>

</html>
