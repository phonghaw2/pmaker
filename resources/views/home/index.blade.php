@extends('home.layouts.master')
@section('content')

<section class="relative mb-20 overflow-hidden">
    <div class="absolute h-236 md:h-220 w-full top-0 left-0 bg-brand-section-light rounded-b-3xl lg:rounded-b-6xl"></div>
    @include('home.layouts.header')
    <div class="relative container px-4 mx-auto">
        <div class="relative py-8 sm:pb-4 lg:pb-4 md:pt-12 text-center">
            <div class="load-animation reveal-superfast max-w-3xl mx-auto mb-6">
                <h1 class="text-5xl md:text-6xl mb-4 font-bold font-heading leading-tight">
                    <div class="flex flex-wrap items-center justify-center">Create
                        <br class="sm:hidden">
                        <div class="sm:ml-3 relative inline-block border-2 border-blue-600">
                            <div class="absolute z-20 bg-blue-600 -top-6px -left-6px w-6px h-6px"></div>
                            <div class="absolute z-20 bg-blue-600 -top-6px -right-6px w-6px h-6px"></div>
                            <div class="absolute z-20 bg-blue-600 -bottom-6px -left-6px w-6px h-6px"></div>
                            <div class="absolute z-20 bg-blue-600 -bottom-6px -right-6px w-6px h-6px"></div>
                            <a class="btn-html absolute z-20 right-2 -top-3 hidden md:inline-flex items-center h-5 px-1 font-bold text-white text-xs leading-none bg-brand-blue hover:bg-blue-700 rounded-2sm" href="#">HTML</a>
                            <div class="relative">
                                <div class="auto-slider">
                                    <div class="auto-wrapper">
                                        <div class="slider-container">
                                            <div class="slideshow_wrapper">
                                                <div class="slideshow">
                                                    <div class="slide_four slide">
                                                        <img  src="{{ asset('images/responsive.png') }}" />
                                                    </div>

                                                    <div class="slide_one slide">
                                                        <img src="{{ asset('images/blog.png') }}" />
                                                    </div>

                                                    <div class="slide_two slide">
                                                        <img src="{{ asset('images/portfolio.png') }}" />
                                                    </div>

                                                    <div class="slide_three slide">
                                                        <img  src="{{ asset('images/beautiful.png') }}" />
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <span class="block">templates in minutes</span>
                    </div>
                </h1>
                <p class="max-w-3xl mx-auto text-secondary text-lg md:text-xl leading-relaxed">
                    ProfilesMaker&nbsp;gives you&nbsp;8B fully responsive UI components to get you started.
                    You&nbsp;don't have to be a designer to create attractive&nbsp;templates!
                </p>
            </div>
            <div class="load-animation reveal-fast mb-12">
                <a class="inline-block py-4 px-6 xs:py-4 xs:px-8 mr-4 bg-brand-blue hover:bg-blue-700 xs:text-lg text-white text-center font-semibold leading-none rounded-3xl transition duration-100 PMaker-click"
                    href="{{ route('demo') }}" data-category="landing-homepage" data-action="click-hero" data-label="try-demo">Try Demo</a>
                <a class="inline-block py-4 px-6 xs:py-4 xs:px-8 bg-white hover:bg-blueGray-800 hover:text-white xs:text-lg text-center font-semibold leading-none rounded-3xl shadow-button transition duration-100 PMaker-click"
                    href="{{ route('account.signup') }}" data-section="pricing" data-category="landing-homepage" data-action="click-hero"
                    data-label="sign-up">Sign Up</a>
            </div>
            <p class="text-base text-secondary mb-4">Supported frameworks</p>
            <div class="flex flex-wrap items-center justify-center -mb-4 -mx-4">
                <div class="mb-4 mr-6 flex items-center font-semibold text-base">
                    <div class="w-8 h-8 mr-2 bg-white shadow-circle flex items-center justify-center rounded-full">
                        <img class="h-3" src="/vendor/PMaker/img/logos/tailwind-css.svg?v=1" alt="">
                    </div>
                    Tailwind CSS
                </div>
                <img class="hidden md:block h-2 mb-4 mr-6" src="/vendor/PMaker/img/icons/icon-x.svg" alt="">
                <div class="mb-4 sm:mr-6 flex items-center font-semibold text-base">
                    <div class="w-8 h-8 mr-2 bg-white shadow-circle flex items-center justify-center rounded-full">
                        <img class="h-4" src="/vendor/PMaker/img/logos/bootstrap-logo.svg" alt="">
                    </div>
                    Bootstrap
                </div>
                <img class="hidden md:block h-2 mb-4 mr-6" src="/vendor/PMaker/img/icons/icon-x.svg" alt="">
                <div class="mb-4 mr-6 flex items-center font-semibold text-base">
                    <div class="w-8 h-8 mr-2 bg-white shadow-circle flex items-center justify-center rounded-full">
                        <img class="h-3" src="/vendor/PMaker/img/logos/material-ui.svg?v=1" alt="">
                    </div>
                    Material-UI
                </div>
                <img class="hidden md:block h-2 mb-4 mr-6" src="/vendor/PMaker/img/icons/icon-x.svg" alt="">
                <div class="mb-4 flex items-center font-semibold text-base">
                    <div class="w-8 h-8 mr-2 bg-white shadow-circle flex items-center justify-center rounded-full">
                        <img class="h-4" src="/vendor/PMaker/img/logos/bulma.svg" alt="">
                    </div>
                    Bulma
                </div>
            </div>
        </div>
    </div>
</section>

<section class="hidden lg:block pb-20">
    <div class="container px-4 mx-auto">
        <div class="max-w-5xl-phong mx-auto">
            <h3 class="text-3xl font-bold">Templates made in PMaker</h3>
            <p class="mb-8 text-lg text-secondary">
                Easily create blogging, and portfolio templates.
            </p>
            <div class="flex flex-wrap -mx-4 mb-12">
                <div class="w-full lg:w-1/2 px-4 mb-8 lg:mb-0">
                    <a href="" class="group max-w-sm mx-auto" target="_blank" rel="noopener">
                        <img class="block" src="{{ asset('images/introduce-blog.png') }}" alt="">
                        <div class="py-4 px-4 bg-white rounded-b-2xl shadow-improvements text-center">
                            <span class="relative font-semibold leading-tighter group-hover:text-brand-blue">
                                Blog&nbsp;&nbsp;&nbsp;
                                <sup class="absolute right-0 -mr-1 hidden group-hover:block">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                                </sup>
                            </span>
                        </div>
                    </a>
                </div>
                <div class="w-full lg:w-1/2 px-4 mb-8 lg:mb-0">
                    <a href="" class="group max-w-sm mx-auto" target="_blank" rel="noopener">
                        <img class="block" src="{{ asset('images/introduce-portfolio.png') }}" alt="">
                        <div class="py-4 px-4 bg-white rounded-b-2xl shadow-improvements text-center">
                            <span class="relative font-semibold leading-tighter group-hover:text-brand-blue">
                                Portfolio&nbsp;&nbsp;&nbsp;
                                <sup class="absolute right-0 -mr-1 hidden group-hover:block"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg></sup>
                            </span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="flex flex-wrap items-center -mx-4">
                <div class="w-full lg:w-1/2 text-center px-4">
                    <div class="flex items-center justify-center mb-5">
                        <svg class="text-brand-yellow mx-1" width="20" height="20" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6.4636 7.94155C6.54393 7.88563 6.59749 7.77377 6.57071 7.66192L6.14226 5.11727L7.90962 3.32762C7.98996 3.24373 8.01674 3.13188 7.98996 3.04799C7.96318 2.93614 7.88284 2.88021 7.77573 2.85225L5.33891 2.48873L4.241 0.167779C4.18745 0.0838897 4.10711 0 4 0C3.89289 0 3.81255 0.0559265 3.759 0.167779L2.66109 2.48873L0.224268 2.85225C0.117155 2.85225 0.03682 2.93614 0.0100418 3.04799C-0.0167364 3.15984 0.0100421 3.2717 0.0903768 3.32762L1.85774 5.11727L1.42929 7.66192C1.40251 7.77377 1.45607 7.88563 1.5364 7.94155C1.61674 7.99748 1.72385 8.02544 1.83096 7.96951L4.02678 6.7671L6.22259 7.96951C6.24937 7.99748 6.30293 7.99748 6.35648 7.99748C6.35648 7.99748 6.41004 7.99748 6.4636 7.94155Z" fill="currentColor"></path>
                        </svg>
                        <svg class="text-brand-yellow mx-1" width="20" height="20" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6.4636 7.94155C6.54393 7.88563 6.59749 7.77377 6.57071 7.66192L6.14226 5.11727L7.90962 3.32762C7.98996 3.24373 8.01674 3.13188 7.98996 3.04799C7.96318 2.93614 7.88284 2.88021 7.77573 2.85225L5.33891 2.48873L4.241 0.167779C4.18745 0.0838897 4.10711 0 4 0C3.89289 0 3.81255 0.0559265 3.759 0.167779L2.66109 2.48873L0.224268 2.85225C0.117155 2.85225 0.03682 2.93614 0.0100418 3.04799C-0.0167364 3.15984 0.0100421 3.2717 0.0903768 3.32762L1.85774 5.11727L1.42929 7.66192C1.40251 7.77377 1.45607 7.88563 1.5364 7.94155C1.61674 7.99748 1.72385 8.02544 1.83096 7.96951L4.02678 6.7671L6.22259 7.96951C6.24937 7.99748 6.30293 7.99748 6.35648 7.99748C6.35648 7.99748 6.41004 7.99748 6.4636 7.94155Z" fill="currentColor"></path>
                        </svg>
                        <svg class="text-brand-yellow mx-1" width="20" height="20" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6.4636 7.94155C6.54393 7.88563 6.59749 7.77377 6.57071 7.66192L6.14226 5.11727L7.90962 3.32762C7.98996 3.24373 8.01674 3.13188 7.98996 3.04799C7.96318 2.93614 7.88284 2.88021 7.77573 2.85225L5.33891 2.48873L4.241 0.167779C4.18745 0.0838897 4.10711 0 4 0C3.89289 0 3.81255 0.0559265 3.759 0.167779L2.66109 2.48873L0.224268 2.85225C0.117155 2.85225 0.03682 2.93614 0.0100418 3.04799C-0.0167364 3.15984 0.0100421 3.2717 0.0903768 3.32762L1.85774 5.11727L1.42929 7.66192C1.40251 7.77377 1.45607 7.88563 1.5364 7.94155C1.61674 7.99748 1.72385 8.02544 1.83096 7.96951L4.02678 6.7671L6.22259 7.96951C6.24937 7.99748 6.30293 7.99748 6.35648 7.99748C6.35648 7.99748 6.41004 7.99748 6.4636 7.94155Z" fill="currentColor"></path>
                        </svg>
                        <svg class="text-brand-yellow mx-1" width="20" height="20" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6.4636 7.94155C6.54393 7.88563 6.59749 7.77377 6.57071 7.66192L6.14226 5.11727L7.90962 3.32762C7.98996 3.24373 8.01674 3.13188 7.98996 3.04799C7.96318 2.93614 7.88284 2.88021 7.77573 2.85225L5.33891 2.48873L4.241 0.167779C4.18745 0.0838897 4.10711 0 4 0C3.89289 0 3.81255 0.0559265 3.759 0.167779L2.66109 2.48873L0.224268 2.85225C0.117155 2.85225 0.03682 2.93614 0.0100418 3.04799C-0.0167364 3.15984 0.0100421 3.2717 0.0903768 3.32762L1.85774 5.11727L1.42929 7.66192C1.40251 7.77377 1.45607 7.88563 1.5364 7.94155C1.61674 7.99748 1.72385 8.02544 1.83096 7.96951L4.02678 6.7671L6.22259 7.96951C6.24937 7.99748 6.30293 7.99748 6.35648 7.99748C6.35648 7.99748 6.41004 7.99748 6.4636 7.94155Z" fill="currentColor"></path>
                        </svg>
                        <svg class="text-brand-yellow mx-1" width="20" height="20" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6.4636 7.94155C6.54393 7.88563 6.59749 7.77377 6.57071 7.66192L6.14226 5.11727L7.90962 3.32762C7.98996 3.24373 8.01674 3.13188 7.98996 3.04799C7.96318 2.93614 7.88284 2.88021 7.77573 2.85225L5.33891 2.48873L4.241 0.167779C4.18745 0.0838897 4.10711 0 4 0C3.89289 0 3.81255 0.0559265 3.759 0.167779L2.66109 2.48873L0.224268 2.85225C0.117155 2.85225 0.03682 2.93614 0.0100418 3.04799C-0.0167364 3.15984 0.0100421 3.2717 0.0903768 3.32762L1.85774 5.11727L1.42929 7.66192C1.40251 7.77377 1.45607 7.88563 1.5364 7.94155C1.61674 7.99748 1.72385 8.02544 1.83096 7.96951L4.02678 6.7671L6.22259 7.96951C6.24937 7.99748 6.30293 7.99748 6.35648 7.99748C6.35648 7.99748 6.41004 7.99748 6.4636 7.94155Z" fill="currentColor"></path>
                        </svg>
                        <pre><(￣︶￣)></pre>
                    </div>
                    <p>"I've been using PMaker for a few months now, and I couldn't be happier with its capabilities! It has made designing and building responsive websites much easier and more efficient."</p>
                </div>
                <div class="w-full lg:w-1/2 px-4 flex items-center justify-end">
                    <a href="" target="_blank" rel="nofollow noopener">
                        <img src="{{ asset('images/introduce-logo.png') }}" alt="Pet Project - Global Design IT | phonghaw2" style="width: 202px; height: 44px;" width="202" height="44" class="mx-auto mr-4">
                    </a>
                    <a href="" target="_blank" rel="nofollow noopener">
                        <img src="{{ asset('images/introduce-myself.png') }}" alt="Pet Project - Global Design IT | phonghaw2" style="width: 202px; height: 44px;" width="202" height="44" class="mx-auto">
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-20 bg-brand-section-light" id="roadmap">
    <div class="container px-4 mx-auto">
        <div class="load-animation reveal max-w-xl mx-auto mb-20">
            <h2 class="text-5xl md:text-6xl text-center mb-4 font-bold font-heading leading-tight">PMaker Product Roadmap</h2>
        </div>
        <div class="relative max-w-8xl h-full mx-auto">
            <div class="absolute left-0 md:left-1/2 ml-4 md:ml-0 border-opacity-20 border-blueGray-300 h-full border"></div>

            <div class="load-animation reveal mb-8 flex justify-between items-center w-full">
                <div class="hidden md:block order-1 w-5/12"></div>
                <div class="z-20 order-1">
                    <div class="flex items-center justify-center bg-brand-green text-white w-8 h-8 rounded-full">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                    </div>
                </div>
                <div class="order-1 bg-white rounded-xl shadow-box w-full md:w-5/12 p-6 md:px-8 md:py-6 ml-8 md:ml-0">
                    <span class="text-blue-600 text-base font-bold">December 2022</span>
                    <p class="mt-2 mb-4 text-sm leading-loose tracking-wide text-secondary">
                        <strong class="font-bold">Lên ý tưởng!</strong><br>
                        <strong class="font-bold">Mong muốn</strong> làm một trang thiệt xịn xò, vẽ ra đống thứ nhưng nhận ra là làm không nổi.
                        <strong class="font-bold">Mệt mỏi</strong> vì phải làm nhiều việc một lúc!
                    </p>
                    <a href="" rel="noopener">
                        <img src="{{ asset('images/roadmap-1.png') }}" class="rounded-lg shadow" alt="">
                    </a>
                </div>
            </div>

            <div class="load-animation reveal mb-8 flex justify-between items-center w-full md:flex-row-reverse">
                <div class="hidden md:block order-1 w-5/12"></div>
                <div class="z-20 order-1">
                    <div class="flex items-center justify-center bg-brand-green text-white w-8 h-8 rounded-full">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                    </div>
                </div>
                <div class="order-1 bg-white rounded-xl shadow-box w-full md:w-5/12 p-6 md:px-8 md:py-6 ml-8 md:ml-0">
                    <span class="text-blue-600 text-base font-bold">January 2023</span>
                    <p class="mt-2 mb-4 text-sm leading-loose tracking-wide text-secondary">
                        Chuẩn bị phần hiện thị: Homepage, back-side, ...<br>
                        Không biết từng này template có đủ không? Tính linh hoạt có cao không.
                    </p>
                    <a href="" rel="noopener">
                        <img src="{{ asset('images/roadmap-2.png') }}" class="rounded-lg shadow" alt="">
                    </a>
                </div>
            </div>

            <div class="load-animation reveal mb-8 flex justify-between items-center w-full">
                <div class="hidden md:block order-1 w-5/12"></div>
                <div class="z-20 order-1">
                    <div class="flex items-center bg-blueGray-200 w-8 h-8 rounded-full"></div>
                </div>
                <div class="order-1 bg-white rounded-xl shadow-box w-full md:w-5/12 p-6 md:px-8 md:py-6 ml-8 md:ml-0">
                    <span class="text-blue-600 text-base font-bold">Q1 2023</span>
                    <p class="mt-2 mb-3 text-sm leading-loose tracking-wide text-secondary">
                        <strong class="font-bold">Export to WordPress</strong> - The most popular CMS got a special treatment from us. We'll make it easy to integrate our libraries with WordPress, so you can use them to build great websites quickly and effortlessly.
                    </p>
                    <p class="mb-3 text-sm leading-loose tracking-wide text-secondary">
                        <strong class="font-bold">MUI 5.0 and stunning statistics</strong> - We hear your requests. That's why we're already working on upgrading the editor to MUI 5.0. At the same time, we'll give you a new library - Artemis Dashboard.
                    </p>
                    <p class="mb-4 text-sm leading-loose tracking-wide text-secondary"><strong class="font-bold">Support for Vue, Angular, and Chakra UI</strong> is&nbsp;coming to PMaker too!</p>
                    <a href="" rel="noopener">
                        <img src="https://PMaker.dev/vendor/PMaker/img/marketplace/pencil/next-wordpress.png" class="rounded-lg shadow" alt="">
                    </a>
                </div>
            </div>
        </div>

        <div class="load-animation reveal text-center mt-24">
            <h3 class="mb-8 text-3xl font-heading font-bold text-secondary">
                Get started with <span class="inline-block px-2 pt-1 relative text-secondary bg-blueGray-200" style="border-radius: 91% 9% 90% 10% / 29% 82% 18% 71%">PMaker</span> today
            </h3>
            <svg class="text-blueGray-300 w-8 h-8 mx-auto" style="opacity: 50%;" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 17l-4 4m0 0l-4-4m4 4V3"></path></svg>
        </div>
    </div>
</section>

@push('js-home')
<script>
    $(document).ready(function(){
  		$('.modal').modal();
    });
</script>
@endpush
@endsection
