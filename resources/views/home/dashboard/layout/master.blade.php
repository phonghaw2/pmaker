<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home/dashboard/main.css') }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
</head>
<body  class="leading-normal bg-slate-50 dark:bg-black" style="overflow: auto;">
    @include('home.dashboard.layout.header')
    <div class="container mx-auto mt-5">
        <div class="z-40 col-span-12 md:pt-2 md:col-span-9 lg:col-span-10 xl:col-span-7">
            @include('home.dashboard.layout.headbar')
            @yield('content')
        </div>
    </div>

    @include('home.layouts.footer')
</body>
</html>
