<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=yes"/>
    <title>@yield('title', 'Мебель для гостиниц')</title>
    <meta name="description" content="@yield('description', '')">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="theme-color" content="#eee">
    @stack('og')
    <link href="{{ asset('css/app.min.css') }}" rel="stylesheet">
    <link href="{{ asset('favicon.ico') }}" rel="shortcut icon" type="image/x-icon" />
    <link rel="canonical" href="@yield('canonical', request()->url())"/>
</head>
<body>
    <header class="header" id="sticky">
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <div class="header__logo">
                        <a href="{{ route('page.show') }}"><img src="{{ asset('img/logo.jpg') }}" alt="Гостевой дом Счастье вам" title="Гостевой дом Счастье вам"></a>
                    </div>
                </div>
                <div class="col-10">
                    <div class="middle__block">
                        <div class="header__contacts">
                            <div class="header__contacts-items">
                                <div>
                                    <svg class="icon">
                                        <use xlink:href="{{ asset('img/symbols.svg#phone') }}"></use>
                                    </svg>
                                    <a href="tel:+79781771802">+7 978 177-18-02</a>
                                </div>
                                <div>
                                    <a href="https://wa.me/79781771802" target="_blank" rel="noopener noreferrer">
                                        <svg class="icon__whatsapp">
                                            <use xlink:href="{{ asset('img/symbols.svg#whatsapp') }}"></use>
                                        </svg>
                                    </a>
                                    <a href="viber://add?number=79781771802" target="_blank" rel="noopener noreferrer">
                                        <svg class="icon__viber">
                                            <use xlink:href="{{ asset('img/symbols.svg#viber') }}"></use>
                                        </svg>
                                    </a>
                                </div>
                                <div>
                                    <svg class="icon">
                                        <use xlink:href="{{ asset('img/symbols.svg#email') }}"></use>
                                    </svg>
                                    <a href="mailto:schastie.vam@mail.ru">schastie.vam@mail.ru</a>
                                </div>
                                <div>
                                    <svg class="icon icon__address">
                                        <use xlink:href="{{ asset('img/symbols.svg#address') }}"></use>
                                    </svg>
                                    Крым, Прибрежное, ул. Солнечная, 2
                                </div>
                            </div>
                            <div class="header__contacts-socials">
{{--                                @include('layouts.partials.socials')--}}
                            </div>
                        </div>
                        <div class="header__menu" itemscope="" itemtype="http://schema.org/SiteNavigationElement">
                            @includeWhen($menu->get('menu_header'), 'layouts.menus.header', ['menu' => $menu])
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    @yield('content')

    <footer itemtype="http://schema.org/WPFooter" itemscope="">
        <div class="container">
            <div class="row">
                <div class="col-5">
                    <div class="title">Наши контакты</div>
                    <div class="footer__contacts">
                        <div>
                            <svg class="icon">
                                <use xlink:href="{{ asset('img/symbols.svg#phone') }}"></use>
                            </svg>
                            <a href="tel:+79781771802">+7 978 177-18-02</a>
                        </div>
                        <div>
                            <svg class="icon">
                                <use xlink:href="{{ asset('img/symbols.svg#email') }}"></use>
                            </svg>
                            <a href="mailto:schastie.vam@mail.ru">schastie.vam@mail.ru</a>
                        </div>
                        <div>
                            <svg class="icon icon__address">
                                <use xlink:href="{{ asset('img/symbols.svg#address') }}"></use>
                            </svg>
                            Крым, Прибрежное, ул. Солнечная, 2
                        </div>
                    </div>
                </div>
                <div class="col-5">
                    <div class="title">Полезные материалы</div>
                    <div class="footer__menu">
                        @includeWhen($menu->get('menu_footer'), 'layouts.menus.footer', ['menu' => $menu])
                    </div>
                </div>
                <div class="col-2">
{{--                    <div class="title right">Мы в соцсетях</div>--}}
{{--                    <div class="footer__socials">--}}
{{--                        @include('layouts.partials.socials')--}}
{{--                    </div>--}}
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="separator"></div>
                </div>
            </div>
            <div class="row flex-center">
                <div class="col-6">
                    <div class="copyright">© {{ date('Y') }} Гостевой дом "Счастье вам"</div>
                </div>
                <div class="col-6">
                    <div class="develop">
                        <div class="develop__link">
                            <a href="https://krasber.ru" target="_blank">
                                Создание, продвижение и <br/>техподдержка сайтов
                            </a>
                        </div>
                        <div class="develop__logo">
                            <a href="https://krasber.ru" target="_blank">
                                <img src="{{ asset('img/krasber.svg') }}" alt="Веб-студия Красбер">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <div class="mobile__menu">
        @includeWhen($menu->get('menu_header'), 'layouts.menus.footer_mobile', ['menu' => $menu])
        <div class="socials">
            @include('layouts.partials.socials')
        </div>
        <div class="close-menu-btn"></div>
        <div class="menu-overlay-mob"></div>
    </div>

    <div class="loader__bg"></div><div class="notify"></div>
    <script src="{{ asset('js/jquery.3.3.1.min.js') }}"></script>
    <script src="{{ asset('js/app.min.js') }}" async></script>
</body>
</html>
