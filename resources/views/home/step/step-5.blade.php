<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/home/step5.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home/main.css') }}">
    <title>Pmaker - Step 5</title>
</head>

<body translate="no">
    <div class="pick-container">
        <div class="project-dv">
            <h1 class="h4 margin-bottom-16" style="color: #7bf2f6;">Step 5: Your almost done!</h1>
        </div>
        <div class="flex pmaker-info p-mask">
            <div class="p-col left">
                <div class="text eyebrow red">Your layout</div>
                <div class="fo-desc__wrap">
                    <div class="fo-desc">
                        <h4 class="h-h4 var form">Website layout shows the importance of each content. <br> Choose a highlight  <br> for yourself.</h4>
                    </div>
                </div>
            </div>
            <div class="p-col right">
                <form action="" class="form-info">
                    <div class="card">
                        <div class="front card-item">
                            <div class="form-layout">
                                @foreach ($layouts as $name => $attr)
                                <div class="layout-card">
                                    <div class="card-callout">
                                        <div class="card-callin">
                                            <div class="card-cell">
                                                <div class="number">{{ $attr[0] }}</div>
                                            </div>
                                            <div class="card-cell large-shrink">
                                                <span class="nbm">{{ $name }}</span>
                                            </div>
                                            <div class="layout-image">
                                                <img src="{{ asset('images/layout/' . $attr[1]) }}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <form action="{{ route('step.save') }}">
        <input type="hidden" >
    </form>
    <div class="f-back" role="button" tabindex="0" aria-controls="w-slider-mask-0" aria-label="next slide">
        <img src="{{ asset('images/sign-back.png') }}" alt="">
    </div>

    <div class="p-func-right">
        <a class="f-next">
            <div id="cssda-badge">
                <span class="bagde-svg">
                    <svg height="32px" width="32px" version="1.1" id="Layer_1" viewBox="0 0 501.974 501.974" xml:space="preserve">
                        <g><g><g>
                            <path style="fill:#9dd2e4;" d="M151.642,491.974c-10.828,0-21.656-4.131-29.918-12.393c-16.523-16.523-16.523-43.313,0-59.836
                                l168.771-168.772L121.724,82.203c-16.523-16.523-16.523-43.313,0-59.836s43.313-16.523,59.836,0l198.689,198.689
                                c16.523,16.523,16.523,43.313,0,59.836L181.56,479.582C173.298,487.843,162.471,491.974,151.642,491.974z"/>
                            <path d="M151.642,501.974c-13.973,0-27.108-5.441-36.989-15.321c-9.88-9.88-15.321-23.017-15.321-36.989
                                s5.441-27.109,15.321-36.989l161.701-161.701l-161.701-161.7c-9.88-9.88-15.321-23.017-15.321-36.989s5.441-27.109,15.321-36.989
                                c20.397-20.396,53.583-20.394,73.979,0l198.689,198.689c9.88,9.88,15.321,23.017,15.321,36.989
                                c0,13.972-5.441,27.109-15.321,36.99l-198.69,198.689C178.75,496.533,165.614,501.974,151.642,501.974z M151.642,19.989
                                c-8.274,0-16.548,3.149-22.847,9.449c-6.103,6.103-9.464,14.216-9.464,22.847s3.361,16.744,9.464,22.847l168.771,168.771
                                c1.875,1.875,2.929,4.419,2.929,7.071s-1.054,5.196-2.929,7.071L128.795,426.817c-6.103,6.103-9.464,14.216-9.464,22.847
                                s3.361,16.744,9.464,22.847c6.103,6.103,14.217,9.464,22.847,9.464s16.744-3.361,22.847-9.464l198.689-198.689
                                c6.103-6.103,9.464-14.216,9.464-22.847c0-8.63-3.361-16.744-9.464-22.847l-198.69-198.69
                                C168.19,23.139,159.916,19.989,151.642,19.989z"/>
                        </g></g>
                            <g>
                                <path d="M284.75,185.702c-2.56,0-5.118-0.976-7.071-2.929L145.986,51.082c-3.905-3.905-3.905-10.237,0-14.143
                                    c3.906-3.904,10.236-3.905,14.143,0L291.821,168.63c3.905,3.905,3.905,10.237,0,14.143
                                    C289.868,184.726,287.31,185.702,284.75,185.702z"/>
                            </g>
                            <g>
                                <path d="M330.234,231.186c-2.56,0-5.118-0.976-7.071-2.929l-16.131-16.131c-3.905-3.905-3.905-10.237,0-14.143
                                    c3.906-3.905,10.236-3.905,14.143,0l16.131,16.131c3.905,3.905,3.905,10.237,0,14.143
                                    C335.352,230.21,332.793,231.186,330.234,231.186z"/>
                            </g>
                        </g>
                    </svg>
                </span>
                <span class="bagde-text">NEXT</span>
            </div>
        </a>
    </div>

    <footer class="pmaker-footer">
        <div class="c-footer_thanks">
            <span class="c-footer_thanks_from -mobile" aria-hidden="true">From the Phong Ha</span>

            <span class="c-footer_thanks_text">
                Thank you<br> for your <span class="u-relative u-inline-block">support<span class="c-footer_thanks_from -desktop">From the Phong Ha</span></span>
            </span>
        </div>
    </footer>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/step4.js') }}"></script>
    <script>

    </script>
</body>
</html>
