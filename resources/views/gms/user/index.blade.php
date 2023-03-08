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
                        <a class="et-hero-tab" href="#tab-flexbox">import</a>
                        <a class="et-hero-tab" href="#tab-react">export</a>
                        <a class="et-hero-tab">export</a>
                        <a class="et-hero-tab"></a>
                    </div>
                </div>
                <div class="p-child-container mt-n5">
                    @include('gms.user.add')
                </div>
            </div>
        </main>
    </div>
@endsection
