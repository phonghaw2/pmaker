<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/home/main.css') }}">
    @stack('step-font')
    <title>{{ $title }}</title>
    @stack('css-step')
</head>

<body translate="no">
    @yield($content)
    <footer class="pmaker-footer">
        <div class="c-footer_thanks">
            <span class="c-footer_thanks_from -mobile" aria-hidden="true">From the Phong Ha</span>
            <span class="c-footer_thanks_text">
                Thank you<br> for your <span class="u-relative u-inline-block">support<span class="c-footer_thanks_from -desktop">From the Phong Ha</span></span>
            </span>
        </div>
    </footer>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    @stack('js-step')
</body>
</html>
