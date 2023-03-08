@extends('gms.layouts.master')
@section('content')
    <div class="c-menu" data-component="menu" style="--nav-items:5;">
        <div class="o-container" data-ref="menu.wrapper">
            <div class="o-grid">
                <nav class="o-col-12 c-menu__col u-flow u-flow-l">
                    <ul class="c-menu__nav">
                        <li class="c-menu__nav-item " data-ref="menu.item" data-stagger=""
                            style="--index:0; --reverse-index:6;">
                            <a class="c-menu__nav-link" href="{{ route('gms.users.index') }}" data-component="theme-hover" data-theme-id="coal"
                                data-pointer="">
                                <span class="c-menu__nav-label" data-counter="01">User</span>
                                <span class="c-menu__nav-abstract">Creiamo bellezza<br>
                                    per vocazione</span>
                                <span class="c-menu__nav-image lazyloaded"
                                    data-bgset="/site/assets/files/1041/about-2.640x0.jpg 640w 360h, /site/assets/files/1041/about-2.1024x0.jpg 1024w 575h, /site/assets/files/1041/about-2.1920x0.jpg 1920w 1079h"
                                    style="background-image: url(&quot;https://www.cieffemilano.it/site/assets/files/1041/about-2.1920x0.jpg&quot;);">
                                    <picture style="display: none;">
                                        <source
                                            data-srcset="/site/assets/files/1041/about-2.640x0.jpg 640w 360h, /site/assets/files/1041/about-2.1024x0.jpg 1024w 575h, /site/assets/files/1041/about-2.1920x0.jpg 1920w 1079h"
                                            sizes="152px"
                                            srcset="/site/assets/files/1041/about-2.640x0.jpg 640w 360h, /site/assets/files/1041/about-2.1024x0.jpg 1024w 575h, /site/assets/files/1041/about-2.1920x0.jpg 1920w 1079h">
                                        <img alt="" class="lazyautosizes lazyloaded ls-is-cached" data-sizes="auto"
                                            data-parent-fit="cover" sizes="152px">
                                    </picture>
                                </span>
                            </a>
                        </li>
                        <li class="c-menu__nav-item " data-ref="menu.item" data-stagger=""
                            style="--index:1; --reverse-index:5;">
                            <a class="c-menu__nav-link" href="{{ route('gms.template.index') }}" data-component="theme-hover" data-theme-id="brown"
                                data-pointer="">
                                <span class="c-menu__nav-label" data-counter="02">Template</span>
                                <span class="c-menu__nav-abstract">Custome template<br>
                                    Create new one or edit</span>
                                <span class="c-menu__nav-image lazyloaded"
                                    style="background-image: url(&quot;https://www.cieffemilano.it/site/assets/files/1042/culture-2.1024x0.jpg&quot;);">
                                    <picture style="display: none;">
                                        <source sizes="152px" >
                                        <img alt="" class="lazyautosizes lazyloaded ls-is-cached" data-sizes="auto"
                                            data-parent-fit="cover" sizes="152px">
                                    </picture>
                                </span>
                            </a>
                        </li>
                        <li class="c-menu__nav-item " data-ref="menu.item" data-stagger=""
                            style="--index:2; --reverse-index:4;">
                            <a class="c-menu__nav-link" href="{{ route('gms.todo.index') }}" data-component="theme-hover"
                                data-theme-id="elephant" data-pointer="">
                                <span class="c-menu__nav-label" data-counter="03">To do</span>
                                <span class="c-menu__nav-abstract">Forniamo un servizio<br>
                                    completo e personalizzato<br>
                                    a partire dal cartamodello</span>
                                <span class="c-menu__nav-image lazyloaded"
                                    style="background-image: url(&quot;https://www.cieffemilano.it/site/assets/files/1044/prototyping-2.640x0.jpg&quot;);">
                                    <picture style="display: none;">
                                        <source sizes="152px">
                                        <img alt="" class="lazyautosizes lazyloaded ls-is-cached" data-sizes="auto"
                                            data-parent-fit="cover" sizes="152px">
                                    </picture>
                                </span>
                            </a>
                        </li>
                        <li class="c-menu__nav-item " data-ref="menu.item" data-stagger=""
                            style="--index:3; --reverse-index:3;">
                            <a class="c-menu__nav-link" href="/produzione/" data-component="theme-hover"
                                data-theme-id="dove" data-pointer="">
                                <span class="c-menu__nav-label" data-counter="04">Produzione</span>
                                <span class="c-menu__nav-abstract">Trasformiamo una visione creativa<br>
                                    in capi esclusivi</span>
                                <span class="c-menu__nav-image lazyloaded"
                                    style="background-image: url(&quot;https://www.cieffemilano.it/site/assets/files/1043/production-2.640x0.jpg&quot;);">
                                    <picture style="display: none;">
                                        <source
                                            data-srcset="/site/assets/files/1043/production-2.640x0.jpg 640w 360h, /site/assets/files/1043/production-2.1024x0.jpg 1024w 575h, /site/assets/files/1043/production-2.1920x0.jpg 1920w 1079h"
                                            sizes="152px"
                                            srcset="/site/assets/files/1043/production-2.640x0.jpg 640w 360h, /site/assets/files/1043/production-2.1024x0.jpg 1024w 575h, /site/assets/files/1043/production-2.1920x0.jpg 1920w 1079h">
                                        <img alt="" class="lazyautosizes lazyloaded ls-is-cached" data-sizes="auto"
                                            data-parent-fit="cover" sizes="152px">
                                    </picture>
                                </span>
                            </a>
                        </li>
                        <li class="c-menu__nav-item " data-ref="menu.item" data-stagger=""
                            style="--index:4; --reverse-index:2;">
                            <a class="c-menu__nav-link" href="/sostenibilita/" data-component="theme-hover"
                                data-theme-id="green" data-pointer="">
                                <span class="c-menu__nav-label" data-counter="05">Sostenibilità</span>
                                <span class="c-menu__nav-abstract">Etica ed estetica<br>
                                    sono per noi inseparabili</span>
                                <span class="c-menu__nav-image lazyloaded"
                                    style="background-image: url(&quot;https://www.cieffemilano.it/site/assets/files/1045/sustainability-2.640x0.jpg&quot;);">
                                    <picture style="display: none;">
                                        <source
                                            data-srcset="/site/assets/files/1045/sustainability-2.640x0.jpg 640w 360h, /site/assets/files/1045/sustainability-2.1024x0.jpg 1024w 575h, /site/assets/files/1045/sustainability-2.1920x0.jpg 1920w 1079h"
                                            sizes="152px"
                                            srcset="/site/assets/files/1045/sustainability-2.640x0.jpg 640w 360h, /site/assets/files/1045/sustainability-2.1024x0.jpg 1024w 575h, /site/assets/files/1045/sustainability-2.1920x0.jpg 1920w 1079h">
                                        <img alt="" class="lazyautosizes lazyloaded ls-is-cached"
                                            data-sizes="auto" data-parent-fit="cover" sizes="152px">
                                    </picture>
                                </span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
@endsection
