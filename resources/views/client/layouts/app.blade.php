<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- SEO TAG default --}}
    <meta name="keywords" content="">
    <meta name="description" content="">
    {{-- <meta name="keywords" content="@yield('meta_tag_keyword', setting('seo_keyword'))">
    <meta name="description" content="@yield('meta_tag_description', setting('seo_description'))"> --}}

    {{-- Title --}}
    <title>PASSION FOOD | อาหารคลีนเพื่อสุขภาพ
        {{-- @if (empty(setting('title')))
            {{ config('app.name', 'Meeting') }}
        @else
            {{ setting('title') }}
        @endif --}}
    </title>

    <link rel="shortcut icon"
        href="" />
    {{-- <link rel="shortcut icon"
        href="@if (empty(setting('img_favicon'))) {{ asset('images/noimage.jpg') }} @else {{ asset(setting('img_favicon')) }} @endif" /> --}}

    @yield('meta_og', view('client.meta-og-default'))

    <link rel="stylesheet" href="{{ asset('css/my_style.css') }}">
    <script src="https://kit.fontawesome.com/4134f7c670.js" crossorigin="anonymous"></script>

    <!-- Scripts -->
    <link href="{{ asset('/polo/css/plugins.css') }}" rel="stylesheet">
    <link href="{{ asset('/polo/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/client/kc.fab.css') }}" rel="stylesheet">
    <link href="{{ asset('fonts/client/myfont.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css"
        integrity="sha512-wR4oNhLBHf7smjy0K4oqzdWumd+r5/+6QO/vDda76MW5iug4PT7v86FoEkySIJft3XA0Ae6axhIvHrqwm793Nw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css"
        integrity="sha512-6lLUdeQ5uheMFbWm3CP271l14RsX1xtx+J5x2yeIDkkiBpeVTNhTqijME7GgRKKi6hCqovwCoBTlRBEC20M8Mg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{-- font awsome  --}}
    <script src="https://kit.fontawesome.com/d8d8ef309d.js" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Kanit:400,300&subset=thai,latin' rel='stylesheet'
        type='text/css'>

    @stack('css')
    <!-- Styles -->
    <style>
        @font-face {
            font-family: 'DB Ozone X';
            src: url("{{ asset('fonts/client/DB Ozone X Li 3.2.ttf') }}") format('truetype');
            src: url("{{ asset('fonts/client/DB Ozone X Li It v3.2.ttf') }}") format('truetype');
            src: url("{{ asset('fonts/client/DB Ozone X Med It v3.2.ttf') }}") format('truetype');
            src: url("{{ asset('fonts/client/DB Ozone X Med v3.2.ttf') }}") format('truetype');
            src: url("{{ asset('fonts/client/DB Ozone X UlLi It v3.2.ttf') }}") format('truetype');
            src: url("{{ asset('fonts/client/DB Ozone X UlLi v3.2.ttf') }}") format('truetype');
            src: url("{{ asset('fonts/client/DB Ozone X v3.2.ttf') }}") format('truetype');
        }

        @font-face {
            font-family: 'Reey-Regular';
            src: url("{{ asset('fonts/client/Reey-Regular.otf') }}") format('opentype');
        }

        @font-face {
            font-family: 'OldStandardTT';
            src: url("{{ asset('fonts/client/OldStandardTT-Bold.ttf') }}") format('truetype');
            src: url("{{ asset('fonts/client/OldStandardTT-Italic.ttf') }}") format('truetype');
            src: url("{{ asset('fonts/client/OldStandardTT-Regular.ttf') }}") format('truetype');
        }

        @font-face {
            font-family: 'HussarBold';
            src: url("{{ asset('fonts/client/HussarBold.otf') }}") format('opentype');
        }

        @font-face {
            font-family: 'Rondal-Regular';
            src: url("{{ asset('fonts/client/Rondal-Regular.otf') }}") format('opentype');
        }

        @font-face {
            font-family: 'IBMPlexSansThai';
            src: url("{{ asset('fonts/client/IBMPlexSansThai-Regular.ttf') }}") format('truetype');
            src: url("{{ asset('fonts/client/IBMPlexSansThai-Medium.ttf') }}") format('truetype');
        }

        body {
            font-family: 'IBMPlexSansThai' !important;
        }
    </style>
</head>

<body>

    <div class="body-inner">
        @include('client.layouts.header')
        @yield('content')
        @include('client.layouts.footer')
        <!-- Contact Section End -->
        <div class="kc_fab_wrapper"></div>
    </div>

    <!--Plugins-->
    <script src="{{ asset('polo/js/jquery.js') }}"></script>
    <script src="{{ asset('polo/js/plugins.js') }}"></script>


    <!--Template functions-->
    <script src="{{ asset('polo/js/functions.js') }}"></script>
    <script src="{{ asset('js/client/kc.fab.min.js') }}"></script>
    <script src="{{ asset('plugins/client/rateit/jquery.rateit.min.js') }}"></script>
    <script>
        var links = [{
                "bgcolor": "#42623D",
                "icon": "<i class='fas fa-comment-dots'></i>"
            },


                {
                    "url": "#",
                    "bgcolor": "#42623D",
                    "color": "#fffff",
                    "icon": "<i class='fas fa-phone-alt'></i>",
                    "target": "_blank",
                    "title": "Phone"
                },

                {
                    "url": "#",
                    "bgcolor": "#42623D",
                    "color": "#fffff",
                    "icon": "<i class='fa fa-facebook'></i>",
                    "target": "_blank",
                    "title": "Facebook"
                },

                {
                    "url": "#",
                    "bgcolor": "#42623D",
                    "color": "#fffff",
                    "icon": "<i class='icon-instagram'></i>",
                    "target": "_blank",
                    "title": "Instagram"
                },

                {
                    "url": "#",
                    "bgcolor": "#42623D",
                    "color": "#fffff",
                    "icon": "<i class='fab fa-line'></i>",
                    "target": "_blank",
                    "title": "Line"
                },

        ]
        $('.kc_fab_wrapper').kc_fab(links);
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.js"
        integrity="sha512-WNZwVebQjhSxEzwbettGuQgWxbpYdoLf7mH+25A7sfQbbxKeS5SQ9QBf97zOY4nOlwtksgDA/czSTmfj4DUEiQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript">
        $('#centerss').slick({
            centerMode: true,
            centerPadding: '60px',
            slidesToShow: 4,
            dots: true,
            responsive: [{
                    breakpoint: 768,
                    settings: {
                        arrows: false,
                        centerMode: false,
                        centerPadding: '40px',
                        slidesToShow: 3
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        arrows: true,
                        centerMode: true,
                        centerPadding: '40px',
                        slidesToShow: 3
                    }
                }
            ]
        });
        $('.slider-pd-header').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            fade: true,
            asNavFor: '.slider-pd-nav'
        });
        $('.slider-pd-nav').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            asNavFor: '.slider-pd-header',
            dots: true,
            centerMode: false,
            focusOnSelect: true

        });
        $('.autoplay').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            dots: true,
        });
        $('.autoplay3').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            dots: true,
        });
        $('.autoplay1').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            dots: true,
        });
        $('.autoplaymobile').slick({
            slidesToShow: 2,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            dots: true,
        });
    </script>

    {{-- Google Traslate
    <script type="text/javascript">
        function googleTranslateElementInit() {
          new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
        }
        </script>

        <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script> --}}

    {{-- Sweet Alert --}}
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @stack('js')

</body>

</html>
