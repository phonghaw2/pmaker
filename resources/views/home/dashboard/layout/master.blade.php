<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home/dashboard/main.css') }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @stack('dashboard-font')
    <title>{{ $title }}</title>
    @stack('css-dashboard')
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-1PWF1GF69W"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-1PWF1GF69W');
    </script>
</head>
<body  class="leading-normal bg-slate-50 dark:bg-black" style="overflow: auto;">
    @include('home.dashboard.layout.header')
    <div class="container mx-auto mt-5">
        <div class="z-40 col-span-12 md:pt-2 md:col-span-9 lg:col-span-10 xl:col-span-7">
            @include('home.dashboard.layout.headbar')
            <div class="grid grid-flow-col grid-cols-10 gap-5 pb-20 lg:gap-6 xl:gap-8">
                @include('home.dashboard.layout.navbar-blog')
                @yield($content)
            </div>
            <div class="p-func-right">
                <a class="f-next">
                    <div id="cssda-badge">
                        <span class="bagde-text font-bold">update</span>
                    </div>
                </a>
            </div>
        </div>
    </div>

    @include('home.dashboard.layout.chat-area')
    @include('home.layouts.footer')

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/dashboard/main.js') }}"></script>
    @stack('js-dashboard')
</body>
</html>
