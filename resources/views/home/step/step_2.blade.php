<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/home/step2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home/main.css') }}">
    <title>Pmaker - Step 2</title>
</head>

<body translate="no">
    <div class="pick-container">
        <div class="project-dv">
            <h1 class="h4 margin-bottom-16">Step 2: Your Information</h1>
        </div>
        <div class="flex pmaker-info p-mask">
            <div class="p-col left">
                <div class="text eyebrow red">Your Request</div>
                <div class="fo-desc__wrap">
                    <div class="fo-desc">
                        <h4 class="h-h4 var form">Start a conversation<br>about a new business<br>or media inquiries.</h4>
                        <svg style="position: absolute; z-index: -1; top: -150px; right: 0; opacity: 0.6; width: 800px;" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev/svgjs" viewBox="0 0 800 800"><defs><linearGradient x1="50%" y1="0%" x2="50%" y2="100%" id="vvvortex-grad"><stop stop-color="hsl(1.4, 100%, 67%)" stop-opacity="1" offset="0%"></stop><stop stop-color="hsl(167, 52%, 78%)" stop-opacity="1" offset="100%"></stop></linearGradient></defs><g stroke="url(#vvvortex-grad)" fill="none" stroke-linecap="round"><circle r="363" cx="400" cy="400" stroke-width="11" stroke-dasharray="13 27" stroke-dashoffset="25" transform="rotate(123, 400, 400)" opacity="0.05"></circle><circle r="346.5" cx="400" cy="400" stroke-width="11" stroke-dasharray="20 48" stroke-dashoffset="25" transform="rotate(335, 400, 400)" opacity="0.10"></circle><circle r="330" cx="400" cy="400" stroke-width="10" stroke-dasharray="41 36" stroke-dashoffset="25" transform="rotate(269, 400, 400)" opacity="0.14"></circle><circle r="313.5" cx="400" cy="400" stroke-width="10" stroke-dasharray="46 21" stroke-dashoffset="25" transform="rotate(255, 400, 400)" opacity="0.19"></circle><circle r="297" cx="400" cy="400" stroke-width="10" stroke-dasharray="33 39" stroke-dashoffset="25" transform="rotate(185, 400, 400)" opacity="0.23"></circle><circle r="280.5" cx="400" cy="400" stroke-width="10" stroke-dasharray="48 48" stroke-dashoffset="25" transform="rotate(101, 400, 400)" opacity="0.28"></circle><circle r="264" cx="400" cy="400" stroke-width="9" stroke-dasharray="13 32" stroke-dashoffset="25" transform="rotate(359, 400, 400)" opacity="0.32"></circle><circle r="247.5" cx="400" cy="400" stroke-width="9" stroke-dasharray="19 30" stroke-dashoffset="25" transform="rotate(234, 400, 400)" opacity="0.37"></circle><circle r="231" cx="400" cy="400" stroke-width="9" stroke-dasharray="48 37" stroke-dashoffset="25" transform="rotate(46, 400, 400)" opacity="0.41"></circle><circle r="214.5" cx="400" cy="400" stroke-width="8" stroke-dasharray="23 37" stroke-dashoffset="25" transform="rotate(16, 400, 400)" opacity="0.46"></circle><circle r="198" cx="400" cy="400" stroke-width="8" stroke-dasharray="14 32" stroke-dashoffset="25" transform="rotate(74, 400, 400)" opacity="0.50"></circle><circle r="181.5" cx="400" cy="400" stroke-width="8" stroke-dasharray="16 17" stroke-dashoffset="25" transform="rotate(117, 400, 400)" opacity="0.55"></circle><circle r="165" cx="400" cy="400" stroke-width="8" stroke-dasharray="14 18" stroke-dashoffset="25" transform="rotate(104, 400, 400)" opacity="0.59"></circle><circle r="148.5" cx="400" cy="400" stroke-width="7" stroke-dasharray="19 45" stroke-dashoffset="25" transform="rotate(70, 400, 400)" opacity="0.64"></circle><circle r="132" cx="400" cy="400" stroke-width="7" stroke-dasharray="24 43" stroke-dashoffset="25" transform="rotate(193, 400, 400)" opacity="0.68"></circle><circle r="115.5" cx="400" cy="400" stroke-width="7" stroke-dasharray="51 45" stroke-dashoffset="25" transform="rotate(290, 400, 400)" opacity="0.73"></circle><circle r="99" cx="400" cy="400" stroke-width="6" stroke-dasharray="18 33" stroke-dashoffset="25" transform="rotate(210, 400, 400)" opacity="0.77"></circle><circle r="82.5" cx="400" cy="400" stroke-width="6" stroke-dasharray="54 28" stroke-dashoffset="25" transform="rotate(282, 400, 400)" opacity="0.82"></circle><circle r="66" cx="400" cy="400" stroke-width="6" stroke-dasharray="21 54" stroke-dashoffset="25" transform="rotate(190, 400, 400)" opacity="0.86"></circle><circle r="49.5" cx="400" cy="400" stroke-width="6" stroke-dasharray="49 17" stroke-dashoffset="25" transform="rotate(71, 400, 400)" opacity="0.91"></circle><circle r="33" cx="400" cy="400" stroke-width="5" stroke-dasharray="39 41" stroke-dashoffset="25" transform="rotate(210, 400, 400)" opacity="0.95"></circle><circle r="16.5" cx="400" cy="400" stroke-width="5" stroke-dasharray="45 54" stroke-dashoffset="25" transform="rotate(253, 400, 400)" opacity="1.00"></circle></g></svg>
                    </div>
                </div>
            </div>
            <div class="p-col right">
                <form method="post" action="{{ route('step.step_3') }}" id="step-save" class="form-info">
                    @csrf
                    @method('POST')
                    <div class="card">
                        <div class="front card-item">
                            <div class="form-col">
                                <label class="label" for="name">What's your name? <span title="required">*</span></label>
                                <input class="field" type="text" name="p_name" id="name" value="{{ old('p_name') }}" required placeholder="My name is Jeff" maxlength="100">
                                @error('p_name')
                                    <span class="text-red-400 text-sm">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-col">
                                <label class="label" for="about">About Your <span title="required">*</span></label>
                                <textarea class="field" name="p_about" id="about" placeholder="Hello dude! ..." value="{{ old('p_about') }}" ></textarea>
                            </div>
                        </div>
                        <div class="back card-item">
                            <div class="form-col">
                                <label class="label" for="working">WHAT'S YOUR COMPANY & FUNCTION?<span title="required">*</span></label>
                                <input class="field" type="text" name="p_company_func" id="working" value="" required placeholder="Company Name, Job Title" value="{{ old('p_company_func') }}" >
                            </div>
                            <div class="form-col">
                                <label class="label" for="address">Address<span title="required">*</span></label>
                                <input class="field" type="text" name="p_address" id="address" value="" required placeholder="501 Poplar Court Lafayette, IN 47905" value="{{ old('p_address') }}">
                            </div>
                            <div class="form-col">
                                <label class="label" for="phone">WHAT'S YOUR PHONE NUMBER?<span title="required">*</span></label>
                                <input class="field" type="tel" name="p_phone" id="phone" value="" required placeholder="+31 6 12 34 56 78" value="{{ old('p_phone') }}">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
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

    <div class="p-func-left">
        <a class="f-prev">
            <div id="cssda-badge">
                <span class="bagde-svg">
                    <svg height="32px" width="32px" version="1.1" id="Layer_1" viewBox="0 0 501.974 501.974" xml:space="preserve">
                        <g><g><g>
                            <path style="fill:#dc5081;" d="M151.642,491.974c-10.828,0-21.656-4.131-29.918-12.393c-16.523-16.523-16.523-43.313,0-59.836
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
                <span class="bagde-text">PREV</span>
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
    <script src="{{ asset('js/step2.js') }}"></script>
</body>
</html>
