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
        <main class="flex-grow px-5 md:px-28">
            @yield('content')
        </main>
        <footer class="">
            <div class="container py-10 text-center text-gray-500 text-xs md:text-sm">
                <p>&copy; {{ date('Y') }} {{ config('app.name') }} All rights reserved.</p>
                <p>Developed by Adi Aulia Rahman</p>
            </div>
        </footer>
    </div>
</body>

</html>
