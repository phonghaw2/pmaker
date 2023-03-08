<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/home/main.css') }}">
    <title>Pmaker - Step 1</title>
</head>

<body translate="no">
    <div class="pick-container">
        <div class="project-dv">
            <h1 class="h4 margin-bottom-16">Step 1: Choose type</h1>
        </div>
        <div class="flex pmaker-pick">
            <div class="project-yr-wrap light" id="blog-pick">
                <div class="project-yr-copy">
                    {{-- <h1 class="h4 margin-bottom-16 btn-5">For Blogger</h1> --}}
                    <button class="custom-btn btn-5"><span><a href=""><h1 class="h4 margin-bottom-16">For Blogger</h1></a></button></span>
                    <p class="paragraph max-width-610">Get a full suite of intuitive design features and powerful marketing tools to create a unique blog that leaves a lasting impression. Create with content in mind.</p>
                </div>
                <img src="{{ asset('images/FREAK-MAG-1.jpg') }}" sizes="(max-width: 479px) 96vw, (max-width: 767px) 94vw, (max-width: 991px) 95vw, 100vw" alt="portfolio image"  class="yr-portfolio-img" style="opacity: 1;">
            </div>
            <div class="project-yr-wrap light-grey" id="portfolio-pick">
                <div class="project-yr-copy">
                    <button class="custom-btn btn-11">
                        <a href=""><h1 class="h4 margin-bottom-16">Portfolio</h1></a>
                        <div class="dot"></div>
                    </button>
                    <p class="paragraph max-width-610">Create a portfolio as unique and creative as yourself. Easily create a professional portfolio to showcase your skills and qualifications without the hassle of building a website or learning advanced graphic design.</p>
                </div>
                <img src="{{ asset('images/freak-mag-2.jpg') }}" sizes="(max-width: 479px) 97vw, (max-width: 767px) 94vw, (max-width: 991px) 95vw, 100vw" alt="portfolio image" class="yr-portfolio-img" style="opacity: 1;">
            </div>
        </div>
    </div>
    <footer class="pmaker-footer">
        <div class="c-footer_thanks">
            <span class="c-footer_thanks_from -mobile" aria-hidden="true">From the Phong Ha</span>

            <span class="c-footer_thanks_text">
                Thank you<br> for your <span class="u-relative u-inline-block">support<span class="c-footer_thanks_from -desktop">From the Phong Ha</span></span>
            </span>

            <figure class="c-footer_thanks_visual">
                <div class="c-character has-thumbnail is-inview" data-module-character="m15" data-character-file="mad-coffee" data-scroll="" data-scroll-call="inview, Character" data-scroll-repeat=""><img src="/assets/data/lottie/mad-coffee.png"></div>
            </figure>
        </div>
    </footer>
    <div class="phong-intro">
        <div class="cursor" style="translate: none; rotate: none; scale: none; transform: translate(841px, 437px);"></div>
        <div class="shapes">
            <div class="shape shape-1"
                style="translate: none; rotate: none; scale: none; transform: translate(841px, 437px);"></div>
            <div class="shape shape-2"
                style="translate: none; rotate: none; scale: none; transform: translate(841px, 437px);"></div>
            <div class="shape shape-3"
                style="translate: none; rotate: none; scale: none; transform: translate(841px, 437px);"></div>
        </div>
        <div class="content">
            <h1>Hello there!</h1>
        </div>

        <script src="{{ asset('js/gsap.min.js') }}"></script>
        <script id="rendered-js">
            document.body.addEventListener("mousemove", evt => {
                const mouseX = evt.clientX;
                const mouseY = evt.clientY;

                gsap.set(".cursor", {
                    x: mouseX,
                    y: mouseY
                });


                gsap.to(".shape", {
                    x: mouseX,
                    y: mouseY,
                    stagger: -0.1
                });

            });
            //# sourceURL=pen.js
        </script>
    </div>
    <div class="slider">
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script>
            $(document).ready(function () {
                $('.phong-intro').click(function (e) {
                    const tl = gsap.timeline({ defaults: { ease: "power1.out" } });

                    tl.to(".slider", { y: "-100%", duration: 1.2, delay: 0.5 });
                    tl.to(".phong-intro", { y: "-100%", duration: 1 }, "-=1");
                });

                $('#portfolio-pick').click(function (e) {
                    window.location.href = "/main/step-1";
                });

                $('#blog-pick').click(function (e) {
                    window.location.href = "/main/step-1";
                });
            });
        </script>
    </div>

</body>

</html>
