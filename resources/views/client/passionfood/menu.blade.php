@extends('client.layouts.app')
@section('content')
    {{-- Page Title --}}
    <style>
        .parallax-container {
            background-size: cover !important;
            background-repeat: no-repeat !important;
            background-position: center center !important;
        }
    </style>
    <section id="page-title" data-bg-parallax="{{ asset('images/passionfood/pagetitle/page2.png') }}">
        <div class="bg-overlay" style="background:rgb(42 42 42) !important;"></div>
        <div class="container" style="margin-top:7%; margin-bottom:5%;">
            <div class="page-title">
                <h1 class="d-none d-sm-block" style="font-size: 5.0rem; font-family:'OldStandardTT' !important;">MENU</h1>
                <h1 class="d-block d-sm-none" style="font-size: 3.0rem; font-family:'OldStandardTT' !important;">MENU</h1>
            </div>
        </div>
    </section>

    <section class="d-none d-sm-block">
        <div class="container" data-animate="fadeInUp">
            <div class="shop">
                <div class="grid-layout grid-4-columns" data-item="grid-item">
                    <div class="grid-item">
                        <div class="product">
                            <div class="post-item border">
                                <div class="post-item-wrap" style=" box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;  border-radius:50px;">
                                    <div class="post-image">
                                        <img class="" src="{{asset('images/passionfood/img/img19.png')}}" style="width:100%; border-radius:50px;">
                                    </div>
                                    <div class="post-item-description text-center">
                                        <h4 class="text-center headermenupc">Passion Food Signature</h4>
                                        <p>The most happiest time of the day!. Morbi
                                            sagittis, sem quis lacinia faucibus, orci ipsum
                                            gravida tortor, vel interdum mi sapien ut justo.</p>
                                        <div class="col text-center mt-2">
                                            {{-- <a class="button-73 " id="btnSend" onclick="sendEmail('pc')" style="border-radius:100px; width:40%;  text-align:center !important; color:#fff !important; background-color:#89C54D; ">Submit</a> --}}
                                            <a class="button-73" style="font-size:1.2rem; border-radius: 100px; padding: 5px 20px 5px 20px; box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;" id="btnSend" href="{{route('menusignature')}}" >เพิ่มเติม</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item">
                        <div class="product">
                            <div class="post-item border">
                                <div class="post-item-wrap" style=" box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;  border-radius:50px;">
                                    <div class="post-image">
                                        <img class="" src="{{asset('images/passionfood/img/img19.png')}}" style="width:100%; border-radius:50px;">
                                    </div>
                                    <div class="post-item-description text-center">
                                        <h4 class="text-center headermenupc">Best Selling</h4>
                                        <p>The most happiest time of the day!. Morbi
                                            sagittis, sem quis lacinia faucibus, orci ipsum
                                            gravida tortor, vel interdum mi sapien ut justo.</p>
                                        <div class="col text-center mt-2">
                                            {{-- <a class="button-73 " id="btnSend" onclick="sendEmail('pc')" style="border-radius:100px; width:40%;  text-align:center !important; color:#fff !important; background-color:#89C54D; ">Submit</a> --}}
                                            <a class="button-73" style="font-size:1.2rem; border-radius: 100px; padding: 5px 20px 5px 20px; box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;" id="btnSend" href="{{route('menusignature')}}" >เพิ่มเติม</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item">
                        <div class="product">
                            <div class="post-item border">
                                <div class="post-item-wrap" style=" box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;  border-radius:50px;">
                                    <div class="post-image">
                                        <img class="" src="{{asset('images/passionfood/img/img19.png')}}" style="width:100%; border-radius:50px;">
                                    </div>
                                    <div class="post-item-description text-center">
                                        <h4 class="text-center headermenupc">Healthy Breakfast</h4>
                                        <p>The most happiest time of the day!. Morbi
                                            sagittis, sem quis lacinia faucibus, orci ipsum
                                            gravida tortor, vel interdum mi sapien ut justo.</p>
                                        <div class="col text-center mt-2">
                                            {{-- <a class="button-73 " id="btnSend" onclick="sendEmail('pc')" style="border-radius:100px; width:40%;  text-align:center !important; color:#fff !important; background-color:#89C54D; ">Submit</a> --}}
                                            <a class="button-73" style="font-size:1.2rem; border-radius: 100px; padding: 5px 20px 5px 20px; box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;" id="btnSend" href="{{route('menusignature')}}" >เพิ่มเติม</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item">
                        <div class="product">
                            <div class="post-item border">
                                <div class="post-item-wrap" style=" box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;  border-radius:50px;">
                                    <div class="post-image">
                                        <img class="" src="{{asset('images/passionfood/img/img19.png')}}" style="width:100%; border-radius:50px;">
                                    </div>
                                    <div class="post-item-description text-center">
                                        <h4 class="text-center headermenupc">Healthy Street Food</h4>
                                        <p>The most happiest time of the day!. Morbi
                                            sagittis, sem quis lacinia faucibus, orci ipsum
                                            gravida tortor, vel interdum mi sapien ut justo.</p>
                                        <div class="col text-center mt-2">
                                            {{-- <a class="button-73 " id="btnSend" onclick="sendEmail('pc')" style="border-radius:100px; width:40%;  text-align:center !important; color:#fff !important; background-color:#89C54D; ">Submit</a> --}}
                                            <a class="button-73" style="font-size:1.2rem; border-radius: 100px; padding: 5px 20px 5px 20px; box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;" id="btnSend" href="{{route('menusignature')}}" >เพิ่มเติม</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="d-block d-sm-none">
        <div class="container" data-animate="fadeInUp">
            <div class="shop">
                <div class="autoplaymobile">
                    <div class="portfolio-item" style="padding:5px;">
                        <div class="post-item border">
                            <div class="post-item-wrap"
                                style="box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;  border-radius:20px;">
                                <div class="post-image">
                                    <img class="" src="{{ asset('images/passionfood/img/img19.png') }}"
                                        style="width:100%; border-radius:20px;">
                                </div>
                                <div class="post-item-description text-center">
                                    <h4 class="text-center headermenu" style="margin-bottom:0px;">Passion Food Signature</h4>
                                    <p class="bodymenu">The most happiest time of the day!. Morbi
                                        sagittis, sem quis lacinia faucibus, orci ipsum
                                        gravida tortor, vel interdum mi sapien ut justo.</p>
                                    <div class="col text-center mt-2">
                                        {{-- <a class="button-73 " id="btnSend" onclick="sendEmail('pc')" style="border-radius:100px; width:40%;  text-align:center !important; color:#fff !important; background-color:#89C54D; ">Submit</a> --}}
                                        <a class="button-73"
                                            style="font-size:1.2rem; border-radius: 100px; padding: 5px 20px 5px 20px; box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;"
                                            id="btnSend" href="{{ route('menudetail') }}">เพิ่มเติม</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-item" style="padding:5px;">
                        <div class="post-item border">
                            <div class="post-item-wrap"
                                style="box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;  border-radius:20px;">
                                <div class="post-image">
                                    <img class="" src="{{ asset('images/passionfood/img/img19.png') }}"
                                        style="width:100%; border-radius:20px;">
                                </div>
                                <div class="post-item-description text-center">
                                    <h4 class="text-center headermenu" style="margin-bottom:0px;">Passion Food Signature</h4>
                                    <p class="bodymenu">The most happiest time of the day!. Morbi
                                        sagittis, sem quis lacinia faucibus, orci ipsum
                                        gravida tortor, vel interdum mi sapien ut justo.</p>
                                    <div class="col text-center mt-2">
                                        {{-- <a class="button-73 " id="btnSend" onclick="sendEmail('pc')" style="border-radius:100px; width:40%;  text-align:center !important; color:#fff !important; background-color:#89C54D; ">Submit</a> --}}
                                        <a class="button-73"
                                            style="font-size:1.2rem; border-radius: 100px; padding: 5px 20px 5px 20px; box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;"
                                            id="btnSend" href="{{ route('menudetail') }}">เพิ่มเติม</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><div class="portfolio-item" style="padding:5px;">
                        <div class="post-item border">
                            <div class="post-item-wrap"
                                style="box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;  border-radius:20px;">
                                <div class="post-image">
                                    <img class="" src="{{ asset('images/passionfood/img/img19.png') }}"
                                        style="width:100%; border-radius:20px;">
                                </div>
                                <div class="post-item-description text-center">
                                    <h4 class="text-center headermenu" style="margin-bottom:0px;">Passion Food Signature</h4>
                                    <p class="bodymenu">The most happiest time of the day!. Morbi
                                        sagittis, sem quis lacinia faucibus, orci ipsum
                                        gravida tortor, vel interdum mi sapien ut justo.</p>
                                    <div class="col text-center mt-2">
                                        {{-- <a class="button-73 " id="btnSend" onclick="sendEmail('pc')" style="border-radius:100px; width:40%;  text-align:center !important; color:#fff !important; background-color:#89C54D; ">Submit</a> --}}
                                        <a class="button-73"
                                            style="font-size:1.2rem; border-radius: 100px; padding: 5px 20px 5px 20px; box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;"
                                            id="btnSend" href="{{ route('menudetail') }}">เพิ่มเติม</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><div class="portfolio-item" style="padding:5px;">
                        <div class="post-item border">
                            <div class="post-item-wrap"
                                style="box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;  border-radius:20px;">
                                <div class="post-image">
                                    <img class="" src="{{ asset('images/passionfood/img/img19.png') }}"
                                        style="width:100%; border-radius:20px;">
                                </div>
                                <div class="post-item-description text-center">
                                    <h4 class="text-center headermenu" style="margin-bottom:0px;">Passion Food Signature</h4>
                                    <p class="bodymenu">The most happiest time of the day!. Morbi
                                        sagittis, sem quis lacinia faucibus, orci ipsum
                                        gravida tortor, vel interdum mi sapien ut justo.</p>
                                    <div class="col text-center mt-2">
                                        {{-- <a class="button-73 " id="btnSend" onclick="sendEmail('pc')" style="border-radius:100px; width:40%;  text-align:center !important; color:#fff !important; background-color:#89C54D; ">Submit</a> --}}
                                        <a class="button-73"
                                            style="font-size:1.2rem; border-radius: 100px; padding: 5px 20px 5px 20px; box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;"
                                            id="btnSend" href="{{ route('menudetail') }}">เพิ่มเติม</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
