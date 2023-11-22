<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Share Insight Nepal</title>
    <link rel="icon" href="{{asset('images/shareInsight.JPG')}}" type="image/jpg" sizes="32x32">


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
    </style>
</head>
<body>
    <section id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <div class="topHeader row me-auto">
                    <div class="logo d-flex me-auto">
                         <a href="{{ url('/') }}"><img src="{{asset('images/shareInsight1.JPG')}}" class=" ms-4 me-3" alt="Company Banner" width="150px"></a>
                            <a href="{{ url('/') }}"><img src="{{asset('images/shareInsight2.png')}}" class="me-auto mt-3" alt="Company Banner" width="250px" height="30px"></a>
                    </div>
                </div>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav d-flex flex-row gap-2 me-auto ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}"><button class="btn btn-primary">{{ __('Login') }}</button></a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}"><button class="btn btn-primary">{{ __('Register') }}</button></a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <p class="border border-4"></p>
        <main class="py-4">
            @yield('content')
        </main>
    </section>
</body>
</html>
