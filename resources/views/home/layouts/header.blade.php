<div class="relative container px-4 mx-auto">
    <nav class="relative flex justify-between items-center py-6 z-50">
        <a class="text-3xl font-semibold leading-none shuffle-click" href="{{ route('index') }}" data-category="landing-homepage"
            data-action="click-navigation" data-label="logo">
            <img class="h-8" src="{{ asset('images/PMaker.png') }}" alt="PMaker" width="auto">
        </a>
        <div class="lg:hidden">
            <button
                class="navbar-burger flex items-center py-3 px-4 bg-brand-blue hover:bg-blue-700 text-white rounded-3xl focus:outline-none">
                <svg class="fill-current h-4 w-4" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <title>Mobile menu</title>
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                </svg>
            </button>
        </div>
        <ul
            class="absolute left-1/2 top-1/2 transform -translate-y-1/2 -translate-x-1/2 hidden lg:flex lg:items-center lg:w-auto lg:space-x-12">
            <li>
                <div class="relative dropdown mt-3">
                    <a class="dropdown-toggle inline-flex items-center justify-center w-full pb-3 shuffle-click text-sm text-blueGray-600 hover:text-blueGray-800 cursor-pointer"
                        data-category="landing-homepage" data-action="click-navigation" data-label="products">
                        <span class="products">Products</span>
                        <svg class="dropdown-svg -mr-1 ml-1 h-5 w-5" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>

                    <div
                        class="hidden dropdown-menu origin-top-right absolute left-1/2 transform -translate-x-1/2 w-80 md:w-96 rounded-lg shadow bg-white ring-1 ring-black ring-opacity-5 divide-y divide-gray-100 transition ease-out duration-200">
                        <div class="px-3 py-4">
                            <div
                                class="absolute w-3 h-3 -mt-5 -ml-2 border transform rotate-45 left-1/2 -translate-x-1/2 bg-white">
                            </div>
                            <div class="absolute w-5 h-4 -mt-4 -ml-2 transform left-1/2 -translate-x-1/2 bg-white">
                            </div>
                            <h4 class="text-secondary text-xs uppercase mb-2 pl-2 pt-1">Shuffle's Editors</h4>
                            <ul>
                                <li>
                                    <a class="p-2 flex items-center hover:bg-brand-section-light rounded shuffle-click"
                                        href="/tailwind" data-category="landing-homepage" data-action="click-navigation"
                                        data-label="products-tailwind">
                                        <div
                                            class="flex items-center justify-center w-12 h-12 mr-4 rounded bg-menu-tailwind">
                                            <img class="h-6 w-6" src="/vendor/shuffle/img/logos/tailwind-css.svg?v=1"
                                                alt=""></div>
                                        <div class="inline-block">
                                            <p class="mb-1 text-sm font-semibold leading-menu">Tailwind Editor</p>
                                            <p class="text-xs text-secondary">An online editor for Tailwind CSS</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="p-2 flex items-center hover:bg-brand-section-light rounded shuffle-click"
                                        href="/bootstrap" data-category="landing-homepage"
                                        data-action="click-navigation" data-label="products-bootstrap">
                                        <div
                                            class="flex items-center justify-center w-12 h-12 mr-4 rounded bg-menu-bootstrap">
                                            <img class="h-5" src="/vendor/shuffle/img/logos/bootstrap-logo.svg"
                                                alt=""></div>
                                        <div class="inline-block">
                                            <p class="mb-1 text-sm font-semibold leading-menu">Bootstrap Editor</p>
                                            <p class="text-xs text-secondary">An online editor for Bootstrap</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="p-2 flex items-center hover:bg-brand-section-light rounded shuffle-click"
                                        href="/material-ui" data-category="landing-homepage"
                                        data-action="click-navigation" data-label="products-material-ui">
                                        <div
                                            class="flex items-center justify-center w-12 h-12 mr-4 rounded bg-menu-material-ui">
                                            <img class="h-5 w-auto" src="/vendor/shuffle/img/logos/material-ui.svg?v=1"
                                                alt=""></div>
                                        <div class="inline-block">
                                            <p class="mb-1 text-sm font-semibold leading-menu">Material-UI Editor</p>
                                            <p class="text-xs text-secondary">An online editor for Material-UI</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="p-2 flex items-center hover:bg-brand-section-light rounded shuffle-click"
                                        href="/bulma" data-category="landing-homepage" data-action="click-navigation"
                                        data-label="products-bulma">
                                        <div
                                            class="flex items-center justify-center w-12 h-12 mr-4 rounded bg-menu-bulma">
                                            <img class="h-6 w-auto" src="/vendor/shuffle/img/logos/bulma.svg"
                                                alt=""></div>
                                        <div class="inline-block">
                                            <p class="mb-1 text-sm font-semibold leading-menu">Bulma Editor</p>
                                            <p class="text-xs text-secondary">An online editor for Bulma CSS</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <h4 class="text-secondary text-xs uppercase mb-2 pl-2 pt-4">Supporting tools</h4>
                                </li>
                                <li>
                                    <a class="p-2 flex items-center hover:bg-brand-section-light rounded shuffle-click"
                                        href="/alternatives" data-category="landing-homepage"
                                        data-action="click-navigation" data-label="products-shuffle-layout">
                                        <div
                                            class="flex items-center justify-center w-12 h-12 mr-4 rounded bg-menu-shuffle-layout">
                                            <img class="h-7 w-auto"
                                                src="/vendor/shuffle/img/icons/alternatives_logo.svg" alt="">
                                        </div>
                                        <div class="inline-block">
                                            <p class="mb-1 text-sm font-semibold leading-menu">Alternatives</p>
                                            <p class="text-xs text-secondary">Create multiple layouts at once</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="p-2 flex items-center hover:bg-brand-section-light rounded shuffle-click"
                                        href="/setup" data-category="landing-homepage" data-action="click-navigation"
                                        data-label="products-shuffle-layout">
                                        <div
                                            class="flex items-center justify-center w-12 h-12 mr-4 rounded bg-menu-shuffle-layout">
                                            <img class="h-5 w-auto"
                                                src="/vendor/shuffle/img/icons/shuffle-color.svg?v=1" alt="">
                                        </div>
                                        <div class="inline-block">
                                            <p class="mb-1 text-sm font-semibold leading-menu">Shuffle Layout!</p>
                                            <p class="text-xs text-secondary">One million layouts to start</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="p-2 flex items-center hover:bg-brand-section-light rounded shuffle-click"
                                        href="/tools/pattern-generator" data-category="landing-homepage"
                                        data-action="click-navigation" data-label="products-pattern-generator">
                                        <div
                                            class="flex items-center justify-center w-12 h-12 mr-4 rounded bg-menu-pattern-generator">
                                            <img class="h-5 w-auto" src="/vendor/shuffle/img/icons/pattern.svg"
                                                alt="">
                                        </div>
                                        <div class="inline-block">
                                            <p class="mb-1 text-sm font-semibold leading-menu">SVG Pattern Generator
                                            </p>
                                            <p class="text-xs text-secondary">Generate SVG patterns in one click</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="p-2 flex items-center hover:bg-brand-section-light rounded shuffle-click"
                                        href="/visual-studio-code" data-category="landing-homepage"
                                        data-action="click-navigation" data-label="products-vsc">
                                        <div
                                            class="flex items-center justify-center w-12 h-12 mr-4 rounded bg-menu-material-ui">
                                            <img class="h-6 w-auto"
                                                src="/vendor/shuffle/img/logos/visual-studio-logo.svg?v=1"
                                                alt=""></div>
                                        <div class="inline-block">
                                            <p class="mb-1 text-sm font-semibold leading-menu">Extension for Visual
                                                Studio Code</p>
                                            <p class="text-xs text-secondary">Improve the project in your favorite IDE
                                            </p>
                                        </div>
                                    </a>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="relative dropdown mt-3">
                    <a class="dropdown-toggle inline-flex items-center justify-center w-full pb-3 shuffle-click text-sm text-blueGray-600 hover:text-blueGray-800 cursor-pointer"
                        data-category="landing-homepage" data-action="click-navigation" data-label="ui-libraries">
                        <span class="products">UI libraries</span>
                        <svg class="dropdown-svg -mr-1 ml-1 h-5 w-5" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                    <div
                        class="hidden dropdown-menu origin-top-right absolute left-1/2 transform -translate-x-1/2 w-80 md:w-libraries-popular rounded-lg shadow bg-white ring-1 ring-black ring-opacity-5 divide-y divide-gray-100 transition ease-out duration-200">
                        <div class="px-3 py-4">
                            <div
                                class="absolute w-3 h-3 -mt-5 -ml-2 border transform rotate-45 left-1/2 -translate-x-1/2 bg-white">
                            </div>
                            <div class="absolute w-5 h-4 -mt-4 -ml-2 transform left-1/2 -translate-x-1/2 bg-white">
                            </div>
                            <h4 class="text-secondary text-xs uppercase mb-2 pl-2 pt-1">UI Libraries</h4>
                            <ul class="mb-4">
                                <li>
                                    <a class="p-2 flex items-center hover:bg-brand-section-light rounded shuffle-click"
                                        href="/components" data-category="landing-homepage"
                                        data-action="click-navigation" data-label="browse-libraries">
                                        <div
                                            class="flex items-center justify-center w-12 h-12 mr-4 rounded bg-menu-shuffle-layout">
                                            <img class="h-7 w-auto" src="/vendor/shuffle/img/icons/layer-group.svg"
                                                alt="">
                                        </div>
                                        <div class="inline-block">
                                            <p class="mb-1 text-sm font-semibold leading-menu">UI Components</p>
                                            <p class="text-xs text-secondary">Browse <span
                                                    class="text-brand-blue font-semibold">6,900+</span> UI components
                                                grouped frameworks</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="p-2 flex items-center hover:bg-brand-section-light rounded shuffle-click"
                                        href="/marketplace" data-category="landing-homepage"
                                        data-action="click-navigation" data-label="browse-libraries">
                                        <div
                                            class="flex items-center justify-center w-12 h-12 mr-4 rounded bg-menu-shuffle-layout">
                                            <img class="h-6 w-auto" src="/vendor/shuffle/img/icons/ui-libraries.svg"
                                                alt="">
                                        </div>
                                        <div class="inline-block">
                                            <p class="mb-1 text-sm font-semibold leading-menu">Front-end UI libraries
                                            </p>
                                            <p class="text-xs text-secondary">Browse <span
                                                    class="text-brand-blue font-semibold">40+</span> UI libraries
                                                available in the Shuffle Editor</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="p-2 flex items-center hover:bg-brand-section-light rounded shuffle-click"
                                        href="/templates" data-category="landing-homepage"
                                        data-action="click-navigation" data-label="browse-libraries">
                                        <div
                                            class="flex-shrink-0 flex items-center justify-center w-12 h-12 mr-4 rounded bg-menu-shuffle-layout">
                                            <img class="h-6 w-auto" src="/vendor/shuffle/img/icons/templates.svg"
                                                alt="">
                                        </div>
                                        <div class="inline-block">
                                            <p class="mb-1 text-sm font-semibold leading-menu">Templates for popular
                                                industries</p>
                                            <p class="text-xs text-secondary">We've created <span
                                                    class="text-brand-blue font-semibold">10</span> templates so you
                                                can see what you can build</p>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <div class="mb-1 pl-2">
                                <h4 class="text-secondary text-xs uppercase mb-3">MOST POPULAR LIBRARIES</h4>
                                <div class="flex flex-wrap -mx-1">
                                    <div class="w-1/2 px-1 mb-4">
                                        <a class="flex items-center group" href="/marketplace/flex"
                                            data-category="landing-homepage" data-action="click-navigation"
                                            data-label="most-popular-3">
                                            <img class="h-20 rounded mr-4 border-2 border-transparent group-hover:border-brand-blue"
                                                src="https://static.shuffle.dev/files/top-menu-flex-library.png"
                                                alt="" style="image-rendering: pixelated;">
                                            <div>
                                                <h5
                                                    class="mb-0 text-sm text-body font-semibold leading-tight flex items-center">
                                                    <span class="flex items-center">
                                                        <img class="h-4 mr-1/5"
                                                            src="https://static.shuffle.dev/files/1644504159/flex-sign-green.svg"
                                                            alt="">
                                                        <span class="leading-none">Flex</span>
                                                    </span>
                                                    <img class="h-4 ml-1 hidden group-hover:inline-block"
                                                        src="/vendor/shuffle/img/icons/double-chevron.svg"
                                                        alt="">
                                                </h5>
                                                <span class="text-secondary text-xs">Landing</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="w-1/2 px-1 mb-4">
                                        <a class="flex items-center group" href="/marketplace/zospace"
                                            data-category="landing-homepage" data-action="click-navigation"
                                            data-label="most-popular-2">
                                            <img class="h-20 rounded mr-4 border-2 border-transparent group-hover:border-brand-blue"
                                                src="https://static.shuffle.dev/files/top-menu-zospace-library.png"
                                                alt="" style="image-rendering: pixelated;">
                                            <div>
                                                <h5
                                                    class="mb-0 text-sm text-body font-semibold leading-tight flex items-center">
                                                    <span class="flex items-center">
                                                        <img class="h-4 mr-1/5"
                                                            src="https://static.shuffle.dev/files/1640966862/zospace.svg"
                                                            alt="">
                                                        <span class="leading-none">Zospace</span>
                                                    </span>
                                                    <img class="h-4 ml-1 hidden group-hover:inline-block"
                                                        src="/vendor/shuffle/img/icons/double-chevron.svg"
                                                        alt="">
                                                </h5>
                                                <span class="text-secondary text-xs">Landing</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="w-1/2 px-1">
                                        <a class="flex items-center group" href="/marketplace/artemis"
                                            data-category="landing-homepage" data-action="click-navigation"
                                            data-label="most-popular-4">
                                            <img class="h-20 rounded mr-4 border-2 border-transparent group-hover:border-brand-blue"
                                                src="https://static.shuffle.dev/files/top-menu-artemis-library.png"
                                                alt="" style="image-rendering: pixelated;">
                                            <div>
                                                <h5
                                                    class="mb-0 text-sm text-body font-semibold leading-tight flex items-center">
                                                    <span class="flex items-center">
                                                        <img class="h-4 mr-1/5"
                                                            src="https://static.shuffle.dev/files/1640966943/artemis.svg"
                                                            alt="">
                                                        <span class="leading-none">Artemis</span>
                                                    </span>
                                                    <img class="h-4 ml-1 hidden group-hover:inline-block"
                                                        src="/vendor/shuffle/img/icons/double-chevron.svg"
                                                        alt="">
                                                </h5>
                                                <span class="text-secondary text-xs">Dashboard</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="w-1/2 px-1">
                                        <a class="flex items-center group shuffle-click"
                                            href="/marketplace/tailwind-ecommerce" data-category="landing-homepage"
                                            data-action="click-navigation" data-label="most-popular-1">
                                            <img class="h-20 rounded mr-4 border-2 border-transparent group-hover:border-brand-blue"
                                                src="https://static.shuffle.dev/files/top-menu-yofte-library.png"
                                                alt="" style="image-rendering: pixelated;">
                                            <div>
                                                <h5
                                                    class="mb-0 text-sm text-body font-semibold leading-tight flex items-center">
                                                    <span class="flex items-center">
                                                        <img class="h-4 mr-1/5"
                                                            src="https://static.shuffle.dev/files/1640967081/yofte.svg"
                                                            alt="">
                                                        <span class="leading-none">Yofte</span>
                                                    </span>
                                                    <img class="h-4 ml-1 hidden group-hover:inline-block"
                                                        src="/vendor/shuffle/img/icons/double-chevron.svg"
                                                        alt="">
                                                </h5>
                                                <span class="text-secondary text-xs">E-commerce</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li><a class="text-sm text-blueGray-600 hover:text-blueGray-800 shuffle-click" href="/#how-it-works"
                    data-section="how-it-works" data-category="landing-homepage" data-action="click-navigation"
                    data-label="how-it-works">How it works</a></li>
            <li><a class="text-sm text-blueGray-600 hover:text-blueGray-800 shuffle-click" href="/pricing"
                    data-section="pricing" data-category="landing-homepage" data-action="click-navigation"
                    data-label="pricing">Pricing</a></li>
        </ul>
        <div class="load-animation reveal-fast hidden lg:block">
            <a href="{{ route('account.login') }}"
                class="mr-2 inline-block px-4 py-3 text-xs font-semibold leading-none bg-white hover:bg-blueGray-800 hover:text-white rounded-4xl shadow-button transition duration-100 shuffle-click"
                data-category="landing-homepage" data-action="click-navigation" data-label="sign-in">Sign In</a>
            <a href="{{ route('demo') }}"
                class="inline-block px-4 py-3 text-xs font-semibold leading-none bg-brand-indigo-light hover:bg-indigo-300 text-brand-indigo-dark rounded-4xl transition duration-100 shuffle-click"
                data-category="landing-homepage" data-action="click-navigation" data-label="try-demo">Try Demo</a>
        </div>
    </nav>
</div>

