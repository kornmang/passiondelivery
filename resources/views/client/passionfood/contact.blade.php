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
    <section id="page-title" data-bg-parallax="{{ asset('images/passionfood/pagetitle/page4.png') }}">
        <div class="bg-overlay" style="background:rgb(42 42 42) !important;"></div>
        <div class="container" style="margin-top:7%; margin-bottom:5%;">
            <div class="page-title">
                <h1 class="d-none d-sm-block" style="font-size: 5.0rem; font-family:'OldStandardTT' !important;">CONTACT</h1>
                <h1 class="d-block d-sm-none" style="font-size: 3.0rem; font-family:'OldStandardTT' !important;">CONTACT</h1>
            </div>
        </div>
    </section>

    {{-- Food Delivery --}}
    <section class="d-none d-sm-block" style="padding-top: 50px; padding-bottom: 50px;">
        <div class="container" data-animate="fadeInUp">
            <div class="row">
                <div class="col-12">
                    <div class="tabs" style="border-bottom:0px !important;">
                        <ul class="nav nav-tabs" id="myTab2" role="tablist" style="border-bottom:0px !important;">
                            <li>
                                <h1 class="aboutusheadfont" style="">Food Delivery</h1>
                            </li>
                            <li class="widthcontact"></li>
                            <li class="nav-item">
                                <a class="nav-link active fontstyle contact" id="home-tab" data-bs-toggle="tab" href="#home2" role="tab"
                                    aria-controls="home" aria-selected="true">สาขาสุขุมวิท 71</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fontstyle contact" id="profile-tab" data-bs-toggle="tab" href="#profile2" role="tab"
                                    aria-controls="profile" style="font-size:24px; font-weight:bold;"
                                    aria-selected="false">สาขาวิภาวดี 36</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fontstyle contact" id="contact-tab" data-bs-toggle="tab" href="#contact2" role="tab"
                                    aria-controls="contact" style="font-size:24px; font-weight:bold;"
                                    aria-selected="false">สาขาวนิลามูน</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent2">
                            <div class="tab-pane fade show active" id="home2" role="tabpanel"
                                aria-labelledby="home-tab">
                                <div class="row">
                                    <div class="col-3">
                                        <img src="{{ asset('images/passionfood/img/img30.png') }}" width="90%"
                                            style="display: block; margin:auto;">
                                        <a class="button-74 mt-4" href="#" style=""><span
                                                class="btnfont">สั่งอาหาร</span></a>
                                    </div>
                                    <div class="col-3">
                                        <img src="{{ asset('images/passionfood/img/img31.png') }}" width="90%"
                                            style="display: block; margin:auto;">
                                        <a class="button-74 mt-4" href="#" style=""><span
                                                 class="btnfont">สั่งอาหาร</span></a>
                                    </div>
                                    <div class="col-3">
                                        <img src="{{ asset('images/passionfood/img/img32.png') }}" width="90%"
                                            style="display: block; margin:auto;">
                                        <a class="button-74 mt-4" href="#" style=""><span
                                                 class="btnfont">สั่งอาหาร</span></a>
                                    </div>
                                    <div class="col-3">
                                        <img src="{{ asset('images/passionfood/img/img33.png') }}" width="90%"
                                            style="display: block; margin:auto;">
                                        <a class="button-74 mt-4" href="#" style=""><span
                                                 class="btnfont">สั่งอาหาร</span></a>
                                    </div>
                                </div>
                                {{-- Map --}}
                                    <img class="mt-5" src="{{ asset('images/passionfood/map/map1.jpg') }}"
                                        style="width:90%; display:block; margin:auto;">
                            </div>
                            <div class="tab-pane fade" id="profile2" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="row">
                                    <div class="col-3">
                                        <img src="{{ asset('images/passionfood/img/img30.png') }}" width="90%"
                                            style="display: block; margin:auto;">
                                        <a class="button-74 mt-4" href="#" style=""><span
                                                 class="btnfont">สั่งอาหาร</span></a>
                                    </div>
                                    <div class="col-3">
                                        <img src="{{ asset('images/passionfood/img/img31.png') }}" width="90%"
                                            style="display: block; margin:auto;">
                                        <a class="button-74 mt-4" href="#" style=""><span
                                                 class="btnfont">สั่งอาหาร</span></a>
                                    </div>
                                    <div class="col-3">
                                        <img src="{{ asset('images/passionfood/img/img32.png') }}" width="90%"
                                            style="display: block; margin:auto;">
                                        <a class="button-74 mt-4" href="#" style=""><span
                                                 class="btnfont">สั่งอาหาร</span></a>
                                    </div>
                                    <div class="col-3">
                                        <img src="{{ asset('images/passionfood/img/img33.png') }}" width="90%"
                                            style="display: block; margin:auto;">
                                        <a class="button-74 mt-4" href="#" style=""><span
                                                 class="btnfont">สั่งอาหาร</span></a>
                                    </div>
                                    {{-- Map --}}
                                        <img class="mt-5" src="{{ asset('images/passionfood/map/map2.jpg') }}"
                                            style="width:90%; display:block; margin:auto;">
                                </div>
                            </div>
                            <div class="tab-pane fade" id="contact2" role="tabpanel" aria-labelledby="contact-tab">
                                <div class="row">
                                    <div class="col-3">
                                        <img src="{{ asset('images/passionfood/img/img30.png') }}" width="90%"
                                            style="display: block; margin:auto;">
                                        <a class="button-74 mt-4" href="#" style=""><span
                                                 class="btnfont">สั่งอาหาร</span></a>
                                    </div>
                                    <div class="col-3">
                                        <img src="{{ asset('images/passionfood/img/img31.png') }}" width="90%"
                                            style="display: block; margin:auto;">
                                        <a class="button-74 mt-4" href="#" style=""><span
                                                 class="btnfont">สั่งอาหาร</span></a>
                                    </div>
                                    <div class="col-3">
                                        <img src="{{ asset('images/passionfood/img/img32.png') }}" width="90%"
                                            style="display: block; margin:auto;">
                                        <a class="button-74 mt-4" href="#" style=""><span
                                                 class="btnfont">สั่งอาหาร</span></a>
                                    </div>
                                    <div class="col-3">
                                        <img src="{{ asset('images/passionfood/img/img33.png') }}" width="90%"
                                            style="display: block; margin:auto;">
                                        <a class="button-74 mt-4" href="#" style=""><span
                                                 class="btnfont">สั่งอาหาร</span></a>
                                    </div>
                                    {{-- Map --}}
                                        <img class="mt-5" src="{{ asset('images/passionfood/map/map3.jpg') }}"
                                            style="width:90%; display:block; margin:auto;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="d-block d-sm-none" style="padding-top: 50px; padding-bottom: 50px;">
        <div class="container" data-animate="fadeInUp">
            <h1 class="aboutusheadfont" style="text-align:center;">Food Delivery</h1>
            <div class="row">
                <div class="col-12" style="padding: 0px;">
                    <div class="tabs" style="border-bottom:0px !important;">
                        <ul class="nav nav-tabs" id="myTab2" role="tablist" style="border-bottom:0px !important;">
                            <li class="nav-item">
                                <a class="nav-link active contact" id="home-tab" data-bs-toggle="tab" href="#map1"
                                    role="tab" aria-controls="home" style="font-size: 1.0rem; font-weight:bold; padding:14px 12px !important;"
                                    aria-selected="true">สาขาสุขุมวิท 71</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link contact" id="profile-tab" data-bs-toggle="tab" href="#map2"
                                    role="tab" aria-controls="profile" style="font-size: 1.0rem; font-weight:bold; padding:14px 12px !important;"
                                    aria-selected="false">สาขาวิภาวดี 36</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link contact" id="contact-tab" data-bs-toggle="tab" href="#map3"
                                    role="tab" aria-controls="contact" style="font-size: 1.0rem; font-weight:bold; padding:14px 12px !important;"
                                    aria-selected="false">สาขาวนิลามูน</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent2">
                            <div class="tab-pane fade show active" id="map1" role="tabpanel"
                                aria-labelledby="home-tab">
                                <div class="row">
                                    <div class="col-6">
                                        <img src="{{ asset('images/passionfood/img/img30.png') }}" width="90%"
                                            style="display: block; margin:auto;">
                                        <a class="button-74 mt-4" href="#" style=""><span
                                                style="font-size:1.2rem;">สั่งอาหาร</span></a>
                                    </div>
                                    <div class="col-6">
                                        <img src="{{ asset('images/passionfood/img/img31.png') }}" width="90%"
                                            style="display: block; margin:auto;">
                                        <a class="button-74 mt-4" href="#" style=""><span
                                                style="font-size:1.2rem;">สั่งอาหาร</span></a>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-6">
                                        <img src="{{ asset('images/passionfood/img/img32.png') }}" width="90%"
                                            style="display: block; margin:auto;">
                                        <a class="button-74 mt-4" href="#" style=""><span
                                                style="font-size:1.2rem;">สั่งอาหาร</span></a>
                                    </div>
                                    <div class="col-6">
                                        <img src="{{ asset('images/passionfood/img/img33.png') }}" width="90%"
                                            style="display: block; margin:auto;">
                                        <a class="button-74 mt-4" href="#" style=""><span
                                                style="font-size:1.2rem;">สั่งอาหาร</span></a>
                                    </div>
                                </div>
                                {{-- Map --}}

                                    <img class="mt-5" src="{{ asset('images/passionfood/map/map1.jpg') }}"
                                        style="width:100%; display:block; margin:auto;">

                            </div>
                            <div class="tab-pane fade" id="map2" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="row">
                                    <div class="col-6">
                                        <img src="{{ asset('images/passionfood/img/img30.png') }}" width="90%"
                                            style="display: block; margin:auto;">
                                        <a class="button-74 mt-4" href="#" style=""><span
                                                style="font-size:1.2rem;">สั่งอาหาร</span></a>
                                    </div>
                                    <div class="col-6">
                                        <img src="{{ asset('images/passionfood/img/img31.png') }}" width="90%"
                                            style="display: block; margin:auto;">
                                        <a class="button-74 mt-4" href="#" style=""><span
                                                style="font-size:1.2rem;">สั่งอาหาร</span></a>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-6">
                                        <img src="{{ asset('images/passionfood/img/img32.png') }}" width="90%"
                                            style="display: block; margin:auto;">
                                        <a class="button-74 mt-4" href="#" style=""><span
                                                style="font-size:1.2rem;">สั่งอาหาร</span></a>
                                    </div>
                                    <div class="col-6">
                                        <img src="{{ asset('images/passionfood/img/img33.png') }}" width="90%"
                                            style="display: block; margin:auto;">
                                        <a class="button-74 mt-4" href="#" style=""><span
                                                style="font-size:1.2rem;">สั่งอาหาร</span></a>
                                    </div>
                                </div>
                                {{-- Map --}}

                                    <img class="mt-5" src="{{ asset('images/passionfood/map/map2.jpg') }}"
                                        style="width:100%; display:block; margin:auto;">

                            </div>
                            <div class="tab-pane fade" id="map3" role="tabpanel" aria-labelledby="contact-tab">
                                <div class="row">
                                    <div class="col-6">
                                        <img src="{{ asset('images/passionfood/img/img30.png') }}" width="90%"
                                            style="display: block; margin:auto;">
                                        <a class="button-74 mt-4" href="#" style=""><span
                                                style="font-size:1.2rem;">สั่งอาหาร</span></a>
                                    </div>
                                    <div class="col-6">
                                        <img src="{{ asset('images/passionfood/img/img31.png') }}" width="90%"
                                            style="display: block; margin:auto;">
                                        <a class="button-74 mt-4" href="#" style=""><span
                                                style="font-size:1.2rem;">สั่งอาหาร</span></a>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-6">
                                        <img src="{{ asset('images/passionfood/img/img32.png') }}" width="90%"
                                            style="display: block; margin:auto;">
                                        <a class="button-74 mt-4" href="#" style=""><span
                                                style="font-size:1.2rem;">สั่งอาหาร</span></a>
                                    </div>
                                    <div class="col-6">
                                        <img src="{{ asset('images/passionfood/img/img33.png') }}" width="90%"
                                            style="display: block; margin:auto;">
                                        <a class="button-74 mt-4" href="#" style=""><span
                                                style="font-size:1.2rem;">สั่งอาหาร</span></a>
                                    </div>
                                </div>
                                {{-- Map --}}

                                    <img class="mt-5" src="{{ asset('images/passionfood/map/map1.jpg') }}"
                                        style="width:100%; display:block; margin:auto;">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- <div class="container d-block d-sm-none">
            <h1 class="aboutusheadfont text-center" style=" ">Food Delivery</h1>
            <div class="row">
                <div class="col-6">
                    <img src="{{ asset('images/passionfood/img/img30.png') }}" width="90%"
                        style="display: block; margin:auto;">
                    <a class="button-74 mt-4" href="#" style=""><span
                            style="font-size:26px;">สั่งอาหาร</span></a>
                </div>
                <div class="col-6">
                    <img src="{{ asset('images/passionfood/img/img31.png') }}" width="90%"
                        style="display: block; margin:auto;">
                    <a class="button-74 mt-4" href="#" style=""><span
                            style="font-size:26px;">สั่งอาหาร</span></a>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-6">
                    <img src="{{ asset('images/passionfood/img/img32.png') }}" width="90%"
                        style="display: block; margin:auto;">
                    <a class="button-74 mt-4" href="#" style=""><span
                            style="font-size:26px;">สั่งอาหาร</span></a>
                </div>
                <div class="col-6">
                    <img src="{{ asset('images/passionfood/img/img33.png') }}" width="90%"
                        style="display: block; margin:auto;">
                    <a class="button-74 mt-4" href="#" style=""><span
                            style="font-size:26px;">สั่งอาหาร</span></a>
                </div>
            </div>
        </div> --}}
@endsection
