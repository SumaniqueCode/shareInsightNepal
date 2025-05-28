<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Share Insight Nepal</title>
    <link rel="icon" href="{{ asset('images/shareInsight.JPG') }}" type="image/jpg" sizes="32x32">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <style>
        body {
            background: white;
        }
    </style>
</head>
<body class="max-w-7xl mx-auto px-4">
    <section id="app">
        <nav class="bg-white shadow">
            <div class="flex flex-col sm:flex-row justify-between items-center py-2">
                <div class="flex flex-col sm:flex-row items-center">
                    <a href="{{ url('/') }}">
                        <img src="{{ asset('images/shareInsight1.JPG') }}" class="ms-4 me-3" alt="Company Banner" width="150px">
                    </a>
                    <a href="{{ url('/') }}">
                        <img src="{{ asset('images/shareInsight2.png') }}" class="mt-3 sm:mt-0 sm:ml-4" alt="Company Banner" width="250px" height="30px">
                    </a>
                </div>

                <div class="mt-4 sm:mt-0 flex gap-4">
                    @if (Route::has('login'))
                        <a href="{{ route('login') }}" class="bg-gradient-to-b from-blue-900 via-blue-700 to-blue-500 text-white font-semibold px-4 py-2 rounded border border-white">
                            {{ __('Login') }}
                        </a>
                    @endif
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="bg-gradient-to-b from-blue-900 via-blue-700 to-blue-500 text-white font-semibold px-4 py-2 rounded border border-white">
                            {{ __('Register') }}
                        </a>
                    @endif
                </div>
            </div>
        </nav>

        <div class="border-4 my-2"></div>

        <main class="py-6">
            @yield('content')
        </main>
    </section>
</body>
</html>
