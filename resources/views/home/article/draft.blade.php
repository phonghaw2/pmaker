<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/icon.png') }}">
    {{-- <link rel="stylesheet" href="{{ asset('css/home/article/base.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('css/home/article/draft.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('css/home/article/responsive.css') }}"> --}}
    <title>Draft Maker</title>
    <style>
        [data-radix-scroll-area-viewport] {
            scrollbar-width:none;
            -ms-overflow-style:none;
            -webkit-overflow-scrolling:touch;
        }
        [data-radix-scroll-area-viewport]::-webkit-scrollbar {
            display:none
        }
    </style>
     <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.css">
</head>
<body>
    <div class="draft-container">
        <div class="draft-nav">
            <div class="draft-back">
                <div class="css-0">
                    <a href="/" variant="transparent" class="draft-back-a">
                        <svg class="draft-back-svg" fill="none" viewBox="0 0 8 12">
                            <path d="m6.667 1-5 5 5 5" stroke="stroke-current" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </a>
                </div>
                <div class="css-12n6jp">
                    <button type="button" variant="transparent" title="Phonghaw2 Blog" id="radix-:rf:" aria-haspopup="menu" aria-expanded="false" data-state="closed" class="css-tmyzm6">
                        <div class="css-firlg">
                            <div class="css-ol8gnj">
                                <img alt="Phonghaw2 Blog" src="https://cdn.hashnode.com/res/hashnode/image/upload/v1660713301728/6uuIj2Dzq.png?w=200&amp;h=200&amp;fit=crop&amp;crop=entropy&amp;auto=compress,format&amp;format=webp" decoding="async" data-nimg="fill" loading="lazy" style="position: absolute; height: 100%; width: 100%; inset: 0px; object-fit: contain; object-position: center center; color: transparent;">
                            </div>
                        </div>
                        <div class="blog-name">
                            <span class="css-hdknak">Phonghaw2 Blog</span>
                        </div>
                    </button>
                </div>
                <div class="css-1jkmg58">
                    <button type="button" variant="transparent" class="css-8v6mwr">
                        <svg class="css-1vsxizs" viewBox="0 0 320 512"><path d="M193.94 256L296.5 153.44l21.15-21.15c3.12-3.12 3.12-8.19 0-11.31l-22.63-22.63c-3.12-3.12-8.19-3.12-11.31 0L160 222.06 36.29 98.34c-3.12-3.12-8.19-3.12-11.31 0L2.34 120.97c-3.12 3.12-3.12 8.19 0 11.31L126.06 256 2.34 379.71c-3.12 3.12-3.12 8.19 0 11.31l22.63 22.63c3.12 3.12 8.19 3.12 11.31 0L160 289.94 262.56 392.5l21.15 21.15c3.12 3.12 8.19 3.12 11.31 0l22.63-22.63c3.12-3.12 3.12-8.19 0-11.31L193.94 256z"></path></svg>
                    </button>
                </div>
            </div>
            <div class="css-1ceugt2">
                <input placeholder="Search drafts…" type="text" class="css-1k1ju2g">
                <span class="css-1p542kp">
                    <svg class="css-vhbk82" fill="none" viewBox="0 0 16 16"><path d="m14.75 14.75-3.893-3.893M12.5 6.875a5.625 5.625 0 1 1-11.25 0 5.625 5.625 0 0 1 11.25 0Z" stroke="stroke-current" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                </span>
            </div>
            <div dir="ltr" class="css-1doig9l" style="position: relative; --radix-scroll-area-corner-width:0px; --radix-scroll-area-corner-height:0px;">
                <div data-radix-scroll-area-viewport="" class="css-13udsys" style="overflow: hidden scroll;">
                    <div style="min-width: 100%; display: table;">
                        <div data-state="open" class="css-195ybi5">
                            <button type="button" class="group css-17d6yjs" aria-controls="radix-:r17:" aria-expanded="true" data-state="open">
                                <span>My Drafts (1)</span>
                            </button>
                            <div data-state="open" id="radix-:r17:" style="--radix-collapsible-content-height:30px; --radix-collapsible-content-width:238.188px;">
                                <div class="group css-1ktcgv9">
                                    <button type="button" variant="transparent-square" class="css-kvans7">
                                        <div class="css-g70b67">
                                            <svg class="css-8yyt9q" fill="none" viewBox="0 0 18 18"><path d="M10.5 1.875V4.2c0 .63 0 .945.123 1.186.107.211.28.384.491.491C11.354 6 11.67 6 12.3 6h2.325M6.75 9h4.5m-4.5 3h3M15 6.244V12.9c0 1.26 0 1.89-.245 2.371-.216.424-.56.768-.984.984-.48.245-1.11.245-2.371.245H6.6c-1.26 0-1.89 0-2.371-.245a2.25 2.25 0 0 1-.984-.983C3 14.79 3 14.16 3 12.9V5.1c0-1.26 0-1.89.245-2.371a2.25 2.25 0 0 1 .984-.984C4.709 1.5 5.339 1.5 6.6 1.5h3.656c.367 0 .55 0 .723.041.153.037.3.098.433.18.152.093.281.223.54.482l2.345 2.344c.26.26.39.39.482.54.082.135.143.281.18.434.041.173.041.356.041.723Z" stroke="stroke-current" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                        </div>
                                        <div class="css-yung9h">Untitled</div>
                                    </button>
                                    <div class="css-2hfyww">
                                        <div class="css-14fgbak">
                                            <button type="button" id="radix-:r38:" aria-haspopup="menu" aria-expanded="false" data-state="closed">
                                                <button type="button" variant="transparent-square" class="css-1xqpp34">
                                                    <svg class="css-vhbk82" fill="none" viewBox="0 0 4 16"><path d="M2 8.834a.833.833 0 1 0 0-1.667.833.833 0 0 0 0 1.667ZM2 14.667A.833.833 0 1 0 2 13a.833.833 0 0 0 0 1.667ZM2 3a.833.833 0 1 0 0-1.666A.833.833 0 0 0 2 3Z" stroke="stroke-outline" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                                </button>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="draft-main">
            <div class="draft-header">
                <div class="draft-header-c">
                    <button type="button" id="drafts-options-button" aria-label="Toggle more options" variant="transparent" aria-haspopup="dialog" aria-expanded="false" aria-controls="radix-:R1hqkall36:" data-state="closed" class="css-n4l9fj"><svg class="css-hvybmk" fill="none" viewBox="0 0 20 20"><path d="m5 7.5 5 5 5-5" stroke="stroke-current" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg></button>
                    <div class="header-menu">
                        <div class="css-4gob12">
                            <label for="dark-mode-switch" class="css-s5xdrg">
                                <span class="css-11wm9m8">
                                    <svg class="css-5ykto3" fill="none" viewBox="0 0 24 24"><path d="M3 11.449C3 16.724 7.169 21 12.312 21c3.959 0 7.34-2.534 8.688-6.107a8.074 8.074 0 0 1-3.515.8c-4.571 0-8.277-3.8-8.277-8.489 0-1.961.648-3.767 1.737-5.204C6.45 2.678 3 6.65 3 11.449Z" stroke="stroke-current" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </span>
                                <span class="css-1qug1jq">Dark mode</span>
                            </label>
                            <button type="button" role="switch" aria-checked="false" data-state="unchecked" value="on" id="dark-mode-switch" class="SwitchRoot">
                                <span data-state="unchecked" class="SwitchThumb"></span>
                            </button>
                        </div>
                    </div>
                </div>
                <button type="button" variant="transparent-outline" class="css-1lfvfax">
                    <svg class="css-1c0f27" viewBox="0 0 384 512"><path d="M365.3 125.3 258.8 18.8C246.7 6.742 230.5 0 213.5 0H64C28.65 0 0 28.66 0 64l.006 384c0 35.34 28.65 64 64 64H320c35.35 0 64-28.66 64-64V170.5c0-17-6.7-33.2-18.7-45.2zM224 34.08c4.477 1.562 8.666 3.844 12.12 7.297l106.5 106.5c3.48 3.423 5.78 7.623 7.28 12.123H240c-8.8 0-16-7.2-16-16V34.08zM352 448c0 17.64-14.36 32-32 32H64c-17.64 0-32-14.36-32-32V64c0-17.64 14.36-32 32-32h128v112c0 26.5 21.5 48 48 48h112v256zM80 304c0 52.94 43.06 96 96 96 20.7 0 39.76-6.734 55.46-17.92l61.23 61.23C295.8 446.4 299.9 448 304 448s8.188-1.562 11.31-4.688c6.25-6.25 6.25-16.38 0-22.62l-61.23-61.23C265.3 343.8 272 324.7 272 304c0-52.94-43.06-96-96-96s-96 43.1-96 96zm160 0c0 35.28-28.72 64-64 64s-64-28.72-64-64 28.72-64 64-64 64 28.7 64 64z"></path></svg>
                    <span class="css-1pupgg1">Preview</span>
                </button>
                <button type="button" variant="primary" class="css-z17ftt"><span>Publish</span></button>
            </div>
            <div class="draft-content">
                <div class="dasdwqea">
                    <div class="css-hsxbts">
                        <button type="button" variant="transparent" aria-haspopup="dialog" aria-expanded="false" aria-controls="radix-:r2g:" data-state="closed" class="css-1asqrf2">
                            <svg class="css-9xgk1k" fill="none" viewBox="0 0 24 24"><path d="M17.8828 11.0741L13.8013 16.0424L10.1085 12.0823L5.699 16.504M14.1999 8.08994C14.1999 8.31085 14.0208 8.48994 13.7999 8.48994C13.579 8.48994 13.3999 8.31085 13.3999 8.08994M14.1999 8.08994C14.1999 7.86902 14.0208 7.68994 13.7999 7.68994C13.579 7.68994 13.3999 7.86902 13.3999 8.08994M14.1999 8.08994H13.3999M6 21H18C19.6569 21 21 19.6569 21 18V6C21 4.34315 19.6569 3 18 3H6C4.34315 3 3 4.34315 3 6V18C3 19.6569 4.34315 21 6 21Z" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                            <span>Add Cover</span>
                        </button>
                        <button type="button" variant="transparent" class="css-134l51w">
                                <svg class="css-9xgk1k" fill="none" viewBox="0 0 18 18"><path d="M11.25 11.953h-9m1.2-2.906h11.1c.42 0 .63 0 .79-.082a.75.75 0 0 0 .328-.328c.082-.16.082-.37.082-.79v-.6c0-.42 0-.63-.082-.79a.75.75 0 0 0-.327-.328c-.16-.082-.371-.082-.791-.082H3.45c-.42 0-.63 0-.79.082a.75.75 0 0 0-.328.327c-.082.16-.082.37-.082.79v.6c0 .42 0 .63.082.791a.75.75 0 0 0 .328.328c.16.082.37.082.79.082Z" stroke="stroke-current" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                        <span>Add Subtitle</span>
                        </button>
                    </div>
                    <div class="css-bjn8wh">
                        <textarea maxlength="150" placeholder="Article Title…" id="title-input" class="css-ecmr4t" style="height: 50px !important;"></textarea>
                        <div class="css-gnohp">
                            <div contenteditable="true" translate="no" tabindex="0" class="ProseMirror prose conentedit" spellcheck="false" id="body-content">
                                <p>Write something!</p>
                            </div>
                        <div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/draft.js') }}"></script>
    <script>

        $("#title-input").keypress(function(e) {

            // Get the code of pressed key
            const keyCode = e.which || e.keyCode;

            // 13 represents the Enter key
            if (keyCode === 13 || e.shiftKey) {
                // Don't generate a new line
                e.preventDefault();
                console.log('Enter key pressed');
                $('#body-content').focus();
                $('#body-content').setSelectionRange(0, 0);

            }
        });
        $('#drafts-options-button').click(function (e) {
            e.preventDefault();
            $('.header-menu').toggleClass('open');
        });

        // const dom  = document.getElementsByClassName('conentedit')[0];
        const dom  = document.getElementById('body-content');
        phongQuery(dom).addToolbar();

    </script>
</body>
</html>
