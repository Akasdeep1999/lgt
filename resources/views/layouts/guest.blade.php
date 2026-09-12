<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-slate-50">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', "Let's Go Travel") }} &bull; Sign In</title>

    <!-- Favicons -->
    <link rel="icon" href="{{ asset('favicon/favicon.ico') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon/favicon-32x32.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon/apple-touch-icon.png') }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=plus-jakarta-sans:400,500,600,700,800&display=swap"
        rel="stylesheet" />

    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

    <!-- Alpine.js (for password toggle) -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }
    </style>
</head>

<body class="h-full bg-slate-50 text-slate-800 antialiased selection:bg-emerald-500 selection:text-white">
    <div class="min-h-screen grid grid-cols-1 lg:grid-cols-2">

        <!-- Left Side: Travel Background Banner (Hidden on Mobile) -->
        <div class="hidden lg:flex relative bg-slate-900 overflow-hidden items-end p-12 lg:p-16">
            <!-- Background Image & Overlay -->
            <div class="absolute inset-0 z-0">
                <img src="https://images.unsplash.com/photo-1469854523086-cc02fe5d8800?q=80&w=2021&auto=format&fit=crop"
                    alt="Travel Cover" class="w-full h-full object-cover opacity-80 scale-105" />
                <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-950/40 to-transparent"></div>
            </div>

            <!-- Brand Overlay Content -->
            <div class="relative z-10 space-y-6 max-w-lg">
                <div class="flex items-center gap-3">

                    <span class="text-xl font-extrabold text-white tracking-tight">Let's Go Travel</span>
                </div>

                <h1 class="text-4xl lg:text-5xl font-extrabold text-white tracking-tight leading-tight">
                    Discover.<br>Manage.<br><span class="text-emerald-400">Repeat.</span>
                </h1>

                <p class="text-slate-300 text-sm leading-relaxed">
                    Access your travel operations portal to manage destinations, process group packages, and review
                    visitor inquiries in real time.
                </p>

                <div class="pt-4 flex items-center gap-4 text-xs font-semibold text-slate-300">
                    <span class="flex items-center gap-1.5">
                        <i class="fa-solid fa-circle-check text-emerald-400"></i> Active Bookings
                    </span>
                    <span class="flex items-center gap-1.5">
                        <i class="fa-solid fa-circle-check text-emerald-400"></i> Global Destinations
                    </span>
                </div>
            </div>
        </div>

        <!-- Right Side: Login Form (100% Height Flex Container) -->
        <div class="flex flex-col justify-between p-6 sm:p-12 lg:p-16 bg-slate-50 min-h-screen overflow-y-auto">

            <!-- Top Header / Mobile Logo -->
            <div class="flex items-center justify-between">
                <a href="/" class="flex items-center gap-2.5 lg:hidden">
                    <div class="w-[120px] flex items-center justify-center">
                        <x-application-logo class="w-full h-full fill-current text-white" />
                    </div>
                </a>

                <span class="hidden sm:inline-block ms-auto ">
                    <div class="w-[180px] rounded-xl text-white flex items-center justify-center">
                        <x-application-logo class="w-6 h-6 fill-current text-white" />
                    </div>
                </span>
            </div>

            <!-- Main Slot Form Container -->
            <div class="w-full max-w-md mx-auto my-auto py-8">
                {{ $slot }}
            </div>

            <!-- Footer -->
            <div class="text-center sm:text-left">
                <p class="text-xs text-slate-400">
                    &copy; {{ date('Y') }} {{ config('app.name', "Let's Go Travel") }}. All rights reserved.
                </p>
            </div>
        </div>

    </div>
</body>

</html>
