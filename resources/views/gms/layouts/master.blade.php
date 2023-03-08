<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @stack('css-gms')
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap1.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/base.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <title>Profile Maker</title>
</head>
<body style="overflow: hidden;">
    <div class="fbody">
        @include('gms.layouts.header')
        <div id="container">
            @yield('content')
        </div>
        @include('gms.layouts.footer')
    </div>
    <div class="nbody">
        <div class="styles__Mobile-sc-mwkm4u-1 dNaNIk" style="">
            <p class="styles__Text-sc-mwkm4u-3 fNxOYi">The Profile Maker is still being adapted to work on smaller devices!</p>
            <img src="{{ asset('images/bricks-laying.gif') }}" class="styles__Img-sc-mwkm4u-4 fhUzdi">
        </div>
    </div>
    <div class="cursor"></div>
    <script>
        const cursor = document.querySelector('.cursor');
        document.addEventListener('mousemove', (e) => {
            cursor.style.left =  e.pageX + 'px';
            cursor.style.top =  e.pageY + 'px';

        })
    </script>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    @stack('js-gms')
</body>
</html>
