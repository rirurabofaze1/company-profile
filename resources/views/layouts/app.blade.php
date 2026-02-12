<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>KIA Serviced Apartmen</title>
    @vite('resources/css/app.css')
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}">
<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}">
</head>
<body class="bg-black text-white min-h-screen flex flex-col">

    {{-- NAVBAR --}}
    <nav class="bg-black border-b border-pink-500/20">
    <div class="max-w-6xl mx-auto px-4 py-4 flex justify-between items-center">
        <a href="/" class="text-lg sm:text-xl font-bold text-white">
            KIA <span class="text-pink-500">Serviced Apartmen</span>
        </a>

        <div class="space-x-4 text-sm sm:text-base">
            <a href="/" class="hover:text-pink-400">Home</a>
            <a href="/about" class="hover:text-pink-400">About</a>
            <a href="/rooms" class="hover:text-pink-400">Rooms</a>
            <a href="/contact" class="hover:text-pink-400">Contact</a>
        </div>
    </div>
</nav>


    {{-- CONTENT --}}
    <main class="px-4 sm:px-6 lg:px-8">
    @yield('content')
    </main>


    {{-- FOOTER --}}
    <footer class="border-t border-pink-500/20 mt-10 py-6 text-center text-zinc-400 text-sm">
        © {{ date('Y') }} KIA Serviced Apartmen
    </footer>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

</body>
</html>
