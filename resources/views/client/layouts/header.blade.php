<div class="">
    <header id="header" data-fullwidth="true">
        <div class="header-inner">
            <div class="container">
                <div id="logo">
                    <a href="{{ url('/') }}">
                        <span class="logo-default"><img src="{{ asset('images/passionfood/header/logo2.png') }}"
                                height="90" style="margin-top:-10px;"></span>
                        <span class="logo-responsive"><img src="{{ asset('images/passionfood/header/logo2.png') }}"
                                height="80"></span>
                    </a>
                </div>
                <style>
                    button.btn.btn-slide:hover,
                    .btn:not(.close):not(.mfp-close).btn-slide:hover,
                    a.btn:not([href]):not([tabindex]).btn-slide:hover {
                        color: #fff !important;
                    }
                    a > i.sociali {
                        color:#42623D !important;
                    }
                    a:hover > i.sociali {
                        color: #fff !important;
                    }
                </style>
                <div class="header-extras d-none d-lg-block d-xl-block">
                    <ul class="mt-3">
                        <li style="margin-right:5px; text-align:center;">
                            <a target="_blank" href="#"
                                class="btn btn-slide btn-light social-hover" data-width="120">
                                <i class="sociali fab fa-facebook-f"></i>
                                <span style="text-align:center; font-size:0.7rem;">Facebook</span>
                            </a>
                        </li>
                        <li style="margin-right:5px; ">
                            <a target="_blank" href="#" class="btn btn-slide btn-light"
                                data-width="120">
                                <i class="sociali icon-instagram" aria-hidden="true"></i>
                                <span style="text-align:center; font-size:0.7rem;">Instagram</span>
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="#" class="btn btn-slide btn-light"
                                data-width="120">
                                <i class="sociali fab fa-line" aria-hidden="true"></i>
                                <span style="text-align:center; font-size:0.7rem;">Line</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div id="mainMenu-trigger" style="float: left">
                    <a class="lines-button x"><span class="lines"></span> </a>
                </div>
                <div id="mainMenu" class="menu-one-page menu-rounded">
                    <div class="container">
                        <nav style="margin-right:40px;">
                            <ul>
                                <li>
                                    <a style=" font-size:1.4rem;" href="{{ route('home') }}">หน้าแรก</a>
                                </li>
                                <li>
                                    <a style=" font-size:1.4rem;"
                                        href="{{ route('aboutus') }}">เกี่ยวกับเรา</a>
                                </li>
                                <li>
                                    <a style=" font-size:1.4rem;" href="{{ route('menu') }}">เมนู</a>
                                </li>
                                <li>
                                    <a style=" font-size:1.4rem;" href="{{ route('blogall') }}">Blog</a>
                                </li>
                                <li>
                                    <a style=" font-size:1.4rem;"
                                        href="{{ route('contact') }}">สั่งอาหาร</a>
                                </li>
                                {{-- <li class="dropdown"><a style="font-size: 18px; " href="#">เมนู</a>
                                    <ul class="dropdown-menu">
                                        @foreach ($categories as $item)

                                                <li><a href="{{ route('category',['ProductCategory' => $item->slug]) }}" >{{ $item->title }}</a></li>
                                                {{-- @foreach ($item->product as $item)
                                                    <ul class="dropdown-menu">
                                                        <li><a href="#" style="color:#5B5B5B !important;">{{ $item->title }}</a></li>
                                                    </ul>
                                                @endforeach -

                                        @endforeach
                                        {{-- <li class="dropdown-submenu"> <a href="#" style="color:#5B5B5B !important;">Minerals</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="{{ url('/product') }}" style="color:#5B5B5B !important;">Silica</a></li>
                                                <li><a href="#" style="color:#5B5B5B !important;">Coal</a></li>
                                                <li><a href="#" style="color:#5B5B5B !important;">Iron</a></li>
                                            </ul>
                                        </li>

                                    </ul>
                                </li>
                                 <li>
                                    <a style="font-size: 18px;" href="{{ url('/contact')}}">CONTACT</a>
                                </li> --}}
                            </ul>
                        </nav>
                    </div>

                </div>

            </div>
        </div>
    </header>
</div>
