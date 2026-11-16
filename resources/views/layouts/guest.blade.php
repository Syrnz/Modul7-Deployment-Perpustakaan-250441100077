<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Perpustakaan - Ribuan Kata') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="relative flex min-h-screen items-center justify-center overflow-hidden bg-gray-100 px-4 py-10">

        <!-- Background Image -->
        <img src="{{ asset('images/perpus.jpeg') }}" alt="Perpustakaan Ribuan Kata"
            class="absolute inset-0 h-full w-full object-cover">

        <!-- Overlay -->
        <div class="absolute inset-0 bg-black/50"></div>

        <!-- Content -->
        <div class="relative z-10 w-full max-w-md">
            <div class="mb-6 text-center">
                <a href="/" class="inline-block">
                    <h1 class="text-2xl font-bold tracking-wide text-white sm:text-3xl">
                        PERPUSTAKAAN
                    </h1>
                    <p class="mt-1 text-sm font-semibold tracking-widest text-white/90">
                        RIBUAN KATA
                    </p>
                </a>
            </div>

            <div class="overflow-hidden rounded-xl bg-white px-6 py-8 shadow-2xl sm:px-8">
                {{ $slot }}
            </div>

            <p class="mt-6 text-center text-sm text-white/90">
                &copy; {{ date('Y') }} Perpustakaan Ribuan Kata
            </p>
        </div>
    </div>
</body>

</html>
