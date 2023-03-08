<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home/base.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home/responsive.css') }}">
    @stack('css-gms')
    <title>Profile Maker</title>
</head>
<body>
    <div class="homepage">
        <div class="hidden md:block text-white text-center bg-cover bg-no-repeat" style="background-image: url('{{ asset('images/banner.png') }}')">
            <div class="container px-4 mx-auto">
                <div class="flex items-center justify-center py-3">
                    <div class="flex items-center justify-center w-8 h-8 rounded mr-2" style="background: linear-gradient(0deg, #0F053D, #0F053D), linear-gradient(180deg, #000000 0%, #000000 100%);box-shadow: inset -0.680605px -0.680605px 0.680605px rgba(0, 0, 0, 0.05), inset 1.14286px 0.680605px 0.285714px #1D105B;">
                        <img class="w-4 h-4" src="/vendor/shuffle/img/icons/alternatives_logo.svg" alt="">
                    </div>
                    <span class="text-sm font-bold">
                        <a href="/alternatives">
                            This is my pet project
                            <span class="ml-1 mr-2 font-medium text-alternatives-button-text">— Hope it works!</span>
                            <span class="underline hover:no-underline">Github→</span>
                        </a>
                    </span>
                </div>
            </div>
        </div>

        @yield('content')

        @include('home.layouts.footer')
    </div>
    @yield('intro')
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    @stack('jshome')
</body>
</html>
