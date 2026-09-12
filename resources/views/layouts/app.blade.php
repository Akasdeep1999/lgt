<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-slate-50">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', "Let's Go Travel") }} &bull; Admin Portal</title>

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

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        /* Clean light-theme custom scrollbar */
        ::-webkit-scrollbar {
            width: 7px;
            height: 7px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f5f9;
        }

        ::-webkit-scrollbar-thumb {
            background: #cbd5e1;
            border-radius: 9999px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #059669;
        }
    </style>
</head>

<body class="h-full bg-slate-50 text-slate-800 antialiased selection:bg-emerald-500 selection:text-white">
    <div class="min-h-screen flex">

        <!-- Sidebar -->
        @include('layouts.sidebar')

        <!-- Main Wrapper -->
        <div class="flex-1 flex flex-col min-w-0 overflow-hidden bg-slate-50/60">

            <!-- Navigation -->
            @include('layouts.navigation')

            <!-- Main Body Slot -->
            <main class="flex-1 overflow-y-auto px-4 sm:px-8 py-8">
                <div class="max-w-7xl mx-auto space-y-8">
                    {{ $slot }}
                </div>
            </main>

        </div>
    </div>
</body>

</html>
