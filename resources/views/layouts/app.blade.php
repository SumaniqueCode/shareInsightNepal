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
        .form-control{
            border: 1px solid black;
        }
        .card{
            border: 1px solid black; 
        }
        .card-header{
            border: 1px solid black; 
        }
        .card-body{
            border: 1px solid black; 
        }
        body{
            background: white;
        }
        .btn-primary{
            border: 1px solid white;
            background: linear-gradient(180deg, rgb(3, 50, 139) 5%, rgb(3, 65, 179) 54%, rgb(3, 110, 211) 100%); 
        }
        .btn-danger{
            background: linear-gradient(180deg, rgb(139, 5, 5) 5%, rgb(210, 5, 5) 54%, rgb(211, 5, 5) 100%); 
            border: 1px solid white;
        }
    </style>
</head>
<body class="container mx-auto px-4">
    <section id="app">
        <nav class="bg-white shadow-sm border-b">
            <div class="container mx-auto flex items-center justify-between py-2 px-4">
                <div class="flex items-center space-x-4">
                    <a href="{{ url('/') }}">
                        <img src="{{ asset('images/shareInsight1.JPG') }}" alt="Logo" class="w-[150px] ms-4 me-3">
                    </a>
                    <a href="{{ url('/') }}">
                        <img src="{{ asset('images/shareInsight2.png') }}" alt="Banner" class="mt-3" style="width:250px; height:30px;">
                    </a>
                </div>
                <div class="flex space-x-3">
                    @if (Route::has('login'))
                        <a href="{{ route('login') }}" class="btn-primary">{{ __('Login') }}</a>
                    @endif
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="btn-primary">{{ __('Register') }}</a>
                    @endif
                </div>
            </div>
        </nav>

        <p class="border-4 my-2"></p>

        <main class="py-4">
            @yield('content')
        </main>
    </section>
</body>
</html>
