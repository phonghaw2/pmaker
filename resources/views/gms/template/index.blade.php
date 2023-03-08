@extends('gms.layouts.master')
@push('css-gms')
    <link rel="stylesheet" href="{{ asset('css/user.css') }}">
@endpush
@section('content')
    <div data-scroll-container="" id="main">
        <main data-barba="container" data-barba-namespace="chapter" class="c-main" data-theme="coal">
            <div class="p-container">
                <div class="bar">
                    <div class="et-hero-tabs-container">
                        <a class="et-hero-tab" href="#tab-show">all</a>
                        <a class="et-hero-tab" href="#tab-flexbox">autolink</a>
                        <a class="et-hero-tab" href="{{ route('gms.template.social') }}">social media</a>
                        <a class="et-hero-tab">tags</a>
                        <a class="et-hero-tab"></a>
                    </div>
                </div>
                <div class="p-child-container mt-n5">
                    @include('gms.template.' . $nav)
                </div>
            </div>
        </main>
    </div>
@endsection
@push('js-gms')
<script>
    $(document).ready(function(){
        $(".select-filter").change(function(){
            $("#form-filter").submit();
        });
    });
</script>
@endpush
