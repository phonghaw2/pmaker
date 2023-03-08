@extends('home.layouts.master')
@section('content')

<section class="relative mb-20 overflow-hidden">
    <div class="absolute h-236 md:h-220 w-full top-0 left-0 bg-brand-section-light rounded-b-3xl lg:rounded-b-6xl"></div>
    @include('home.layouts.header')
    <div class="relative container px-4 mx-auto">
        <div class="max-w-5xl-phong mx-auto">
            <div class="flex flex-wrap -mx-4 mb-12">
                <div class="w-full lg:w-1/2 px-4 mb-8 lg:mb-0">
                    <div class="demo-card card-one">
                        <h2>For <em>Blogger</em></h2>
                        <p>We are the market–leading technical interview platform to identify and hire developers with the right skills.</p>
                        <p><button class="custom-btn btn-11">
                            <a href="">Try it</a>
                            <div class="dot"></div>
                        </button></p>
                        <div class="create_account-bottom">Don't have an account?<br>
                        <a href="/contact-sales/">Contact sales</a> or <a href="/get-started/hire/">Get free trial</a>.</div>
                    </div>
                </div>
                <div class="w-full lg:w-1/2 px-4 mb-8 lg:mb-0">
                    <div class="demo-card">
                        <h2>For <em style="color: #097BBF;;">Developer</em></h2>
                        <p>We are the market–leading technical interview platform to identify and hire developers with the right skills.</p>
                        <p><button class="custom-btn btn-5"><span><a href="">Try it</a></span></button></p>
                        <div class="create_account-bottom">Don't have an account?<br>
                        <a href="/contact-sales/">Contact sales</a> or <a href="/get-started/hire/">Get free trial</a>.</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex items-center justify-center"></div>
    </div>
</section>


@endsection
