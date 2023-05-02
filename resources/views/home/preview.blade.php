<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/preview.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/icon.png') }}">
    <title>Preview | title</title>
</head>
<body>
    <div class="p-preview-container">
        <div class="preview-header">
            <div class="p-h-div">
                <h3 class="p-h-title">
                    <svg class="p-h-svg" viewBox="0 0 384 512"><path d="M365.3 125.3 258.8 18.8C246.7 6.742 230.5 0 213.5 0H64C28.65 0 0 28.66 0 64l.006 384c0 35.34 28.65 64 64 64H320c35.35 0 64-28.66 64-64V170.5c0-17-6.7-33.2-18.7-45.2zM224 34.08c4.477 1.562 8.666 3.844 12.12 7.297l106.5 106.5c3.48 3.423 5.78 7.623 7.28 12.123H240c-8.8 0-16-7.2-16-16V34.08zM352 448c0 17.64-14.36 32-32 32H64c-17.64 0-32-14.36-32-32V64c0-17.64 14.36-32 32-32h128v112c0 26.5 21.5 48 48 48h112v256zM80 304c0 52.94 43.06 96 96 96 20.7 0 39.76-6.734 55.46-17.92l61.23 61.23C295.8 446.4 299.9 448 304 448s8.188-1.562 11.31-4.688c6.25-6.25 6.25-16.38 0-22.62l-61.23-61.23C265.3 343.8 272 324.7 272 304c0-52.94-43.06-96-96-96s-96 43.1-96 96zm160 0c0 35.28-28.72 64-64 64s-64-28.72-64-64 28.72-64 64-64 64 28.7 64 64z"></path></svg>
                    <span>Preview Draft</span>
                </h3>
                <div class="p-h-subbtn">
                    <a href="" target="_blank" variant="transparent-outline" class="a-btn">
                        <span>Open in new tab</span>
                        <svg class="a-btn-svg" viewBox="0 0 24 24"><path fill="none" d="M0 0h24v24H0V0z"></path><path d="M9 5v2h6.59L4 18.59 5.41 20 17 8.41V15h2V5H9z"></path></svg>
                    </a>
                </div>
            </div>
        </div>
        <div class="preview-type">
            <div class="p-t-div">
                <ul class="p-t-list">
                    <li class="p-t-li">
                        <div class="p-t-li-item">
                            <input type="radio" id="web-desktop" name="list-radio" class="p-t-li-input" value="web-desktop">
                            <label for="web-desktop" class="p-t-li-label">
                                <span class="p-t-li-span">
                                    <svg class="p-t-li-svg" viewBox="0 0 512 512"><path d="M256 0c141.4 0 256 114.6 256 256S397.4 512 256 512 0 397.4 0 256 114.6 0 256 0zm0 480c16.7 0 40.4-14.4 61.9-57.3 9.9-19.8 18.2-44.6 23.2-70.7H170c5.9 26.1 14.2 50.9 24.1 70.7 21.5 42.9 45.2 57.3 61.9 57.3zm-91.7-160h183.4c2.8-20.2 4.3-41.7 4.3-64 0-22.3-1.5-43.8-4.3-64H164.3c-2.8 20.2-4.3 41.7-4.3 64 0 22.3 1.5 43.8 4.3 64zm176.8-160c-5-27-13.3-50.9-23.2-70.71C296.4 46.37 272.7 32 256 32c-16.7 0-40.4 14.37-61.9 57.29C184.2 109.1 175.9 133 170 160h171.1zm38 32c3.5 20.5 4.9 41.9 4.9 64s-1.4 43.5-4.9 64h91.6c6.1-20.3 9.3-41.8 9.3-64 0-22.2-3.2-43.7-9.3-64h-91.6zM327.5 43.66c21 28.33 37.6 68.74 47.2 116.34h83.7c-25.8-54.5-73.1-96.88-130.9-116.34zm-143 0C126.7 63.12 79.44 105.5 53.56 160h83.74c9.6-47.6 26.2-88.01 47.2-116.34zM32 256c0 22.2 3.24 43.7 9.28 64H132c-2.6-20.5-4-41.9-4-64s1.4-43.5 4-64H41.28C35.24 212.3 32 233.8 32 256zm426.4 96h-83.7c-9.6 47.6-26.2 88-47.2 116.3 57.8-19.4 105.1-61.8 130.9-116.3zm-321.1 0H53.56c25.88 54.5 73.14 96.9 130.94 116.3-21-28.3-37.6-68.7-47.2-116.3z"></path></svg>
                                </span>
                                <span>Web Desktop</span>
                            </label>
                        </div>
                    </li>
                    <li class="p-t-li">
                        <div class="p-t-li-item">
                            <input type="radio" id="web-mobile" name="list-radio" class="p-t-li-input" value="web-mobile">
                            <label for="web-desktop" class="p-t-li-label">
                                <span class="p-t-li-span">
                                    <svg class="p-t-li-svg" viewBox="0 0 512 512"><path d="M256 0c141.4 0 256 114.6 256 256S397.4 512 256 512 0 397.4 0 256 114.6 0 256 0zm0 480c16.7 0 40.4-14.4 61.9-57.3 9.9-19.8 18.2-44.6 23.2-70.7H170c5.9 26.1 14.2 50.9 24.1 70.7 21.5 42.9 45.2 57.3 61.9 57.3zm-91.7-160h183.4c2.8-20.2 4.3-41.7 4.3-64 0-22.3-1.5-43.8-4.3-64H164.3c-2.8 20.2-4.3 41.7-4.3 64 0 22.3 1.5 43.8 4.3 64zm176.8-160c-5-27-13.3-50.9-23.2-70.71C296.4 46.37 272.7 32 256 32c-16.7 0-40.4 14.37-61.9 57.29C184.2 109.1 175.9 133 170 160h171.1zm38 32c3.5 20.5 4.9 41.9 4.9 64s-1.4 43.5-4.9 64h91.6c6.1-20.3 9.3-41.8 9.3-64 0-22.2-3.2-43.7-9.3-64h-91.6zM327.5 43.66c21 28.33 37.6 68.74 47.2 116.34h83.7c-25.8-54.5-73.1-96.88-130.9-116.34zm-143 0C126.7 63.12 79.44 105.5 53.56 160h83.74c9.6-47.6 26.2-88.01 47.2-116.34zM32 256c0 22.2 3.24 43.7 9.28 64H132c-2.6-20.5-4-41.9-4-64s1.4-43.5 4-64H41.28C35.24 212.3 32 233.8 32 256zm426.4 96h-83.7c-9.6 47.6-26.2 88-47.2 116.3 57.8-19.4 105.1-61.8 130.9-116.3zm-321.1 0H53.56c25.88 54.5 73.14 96.9 130.94 116.3-21-28.3-37.6-68.7-47.2-116.3z"></path></svg>
                                </span>
                                <span>Web Mobile</span>
                            </label>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="preview-content">
            <div class="p-c-div">
                {{-- <div id="phone">
                    <div class="p-c-mobile">
                        <iframe src="" frameborder="0"></iframe>
                    </div>
                </div> --}}
                <div class="p-c-section">
                    <svg width="1008" height="635" viewBox="0 0 1008 635" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M99 28C99 13.0883 111.088 1 126 1H886C900.912 1 913 13.0883 913 28V550C913 551.657 911.657 553 910 553H102C100.343 553 99 551.657 99 550V28Z" fill="#1A202C" stroke="#4A5568" stroke-width="2"></path>
                        <path d="M103 27C103 14.8497 112.85 5 125 5H887C899.15 5 909 14.8497 909 27V533H103V27Z" fill="black"></path>
                        <defs>
                            <filter id="filter0_f_4_49" x="8" y="537" width="993" height="98" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood><feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"></feBlend><feGaussianBlur stdDeviation="22" result="effect1_foregroundBlur_4_49"></feGaussianBlur>
                            </filter>
                            <linearGradient id="paint0_linear_4_49" x1="-1.94452e-10" y1="559" x2="1008" y2="559" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#0D1012"></stop>
                                <stop offset="0.0295345" stop-color="#CAD4DB"></stop>
                                <stop offset="0.0625" stop-color="#242729"></stop>
                                <stop offset="0.133609" stop-color="#A3ACB1"></stop>
                                <stop offset="0.865967" stop-color="#A3ACB1"></stop>
                                <stop offset="0.941937" stop-color="#242729"></stop>
                                <stop offset="0.971275" stop-color="#CAD4DB"></stop>
                                <stop offset="0.996436" stop-color="#0D1012"></stop>
                            </linearGradient>
                            <linearGradient id="paint1_linear_4_49" x1="504" y1="568" x2="504" y2="580" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#7A7F83"></stop><stop offset="1" stop-color="#0B0B0E"></stop>
                            </linearGradient>
                            <linearGradient id="paint2_linear_4_49" x1="437.5" y1="558.5" x2="574.5" y2="558.5" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#3C3C3C"></stop><stop offset="0.317518" stop-color="#3C3C3C" stop-opacity="0"></stop>
                                <stop offset="0.660584" stop-color="#3C3C3C" stop-opacity="0"></stop><stop offset="1" stop-color="#444444"></stop>
                            </linearGradient>
                        </defs>
                    </svg>
                    <div class="p-c-desktop">
                        <iframe title="preview" src="http://readme.test/" tabindex="-1" class="css-iyw3ow"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
