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
    <section id="page-title" data-bg-parallax="{{ asset('images/passionfood/pagetitle/page3.png') }}">
        <div class="bg-overlay" style="background:rgb(42 42 42) !important;"></div>
        <div class="container" style="margin-top:7%; margin-bottom:5%;">
            <div class="page-title">
                <h1 class="d-none d-sm-block" style="font-size: 5.0rem; font-family:'OldStandardTT' !important;">BLOG</h1>
                <h1 class="d-block d-sm-none" style="font-size: 3.0rem; font-family:'OldStandardTT' !important;">BLOG</h1>
            </div>
        </div>
    </section>

    {{-- Text Editor --}}
    <section style="padding-top: 50px; padding-bottom: 50px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-xs-12">
                    <img class="d-none d-sm-block" data-animate="fadeInUp" src="{{ asset('images/passionfood/img/img28.png') }}" width="85%"
                        style="display: block; margin:auto;">

                </div>
                <div class="col-lg-6 col-xs-12">
                    <h1 class="blogheadfont text-center" data-animate="fadeInUp" style=" ">Blog</h1>
                    <img class="d-block d-sm-none mb-4" src="{{ asset('images/passionfood/img/img19.png') }}" width="90%"
                        style="display: block; margin:auto;">
                    <p class="blogfont" data-animate="fadeInUp" style="">อาหารคลีนที่มีคอนเซ็ป “สุขภาพดีเเบบยั่งยืน” เเละ “I’m not dieting but
                        i’m changing life style” ธุรกิจนี้เกิดจากความรักในสุขภาพเเละการทำ
                        อาหารเป็นทุนเดิม ซอสเรียนจบเทคนิคการเเพทย์เเละได้ทำงานในสายสุขภาพ
                        ในโรงพยาบาลชั้นนำของกรุงเทพ เเละ ได้คลุกคลีวงการอาหารในโรงเเรมระดับ
                        5 ดาวมามากกว่า 5 ปี จึงได้นำความรู้เเละ passion ในการรักการทำอาหาร
                        มาสร้างเป็นธุรกิจอาหารคลีนเดลิเวอรี่<br>
                        อาหารคลีนที่มีคอนเซ็ป “สุขภาพดีเเบบยั่งยืน” เเละ “I’m not dieting but
                        i’m changing life style” ธุรกิจนี้เกิดจากความรักในสุขภาพเเละการทำ
                        อาหารเป็นทุนเดิม ซอสเรียนจบเทคนิคการเเพทย์เเละได้ทำงานในสายสุขภาพ</p>
                </div>
            </div>
            <p class="blogfont" data-animate="fadeInUp" style="">ปกติเเล้วเป็นคนที่ไม่ชอบทานอกไก่เลยเพราะรสชาติไม่อร่อย
                เเละอีกอย่างไม่มีทางที่เราจะสามารถทานอกไก่ไปได้ตลอดชีวิต มันค่อน
                ข้างยากมากมากเเละทำได้อาจจะ 1-2 ปีอาจจะหลุด เลยเป็นที่มาของคอนเซ็ปอาหารคลีนสุขภาพดีเเบบยั่งยืน
                ทานได้เรื่อยๆไม่มีหลุด
                เพราะเมนูหลากหลาย มีการนำเมนูที่อ้วนมากมากมาทำเป็นอาหารคลีน เช่น ขาหมูนางเเบบ ข้าวคลุกกะปิ ข้าวไม่มันไก่
                เป็นต้น</p>
            <p class="blogfont" data-animate="fadeInUp" style="">อาหารของ Passion food ไม่มีการใช้ผงชูรสเพราะโดยส่วนตัวเป็นคนเเพ้ชูรสอยู่เเล้ว
                เครื่องปรุงใช้ low sodium น้ำตาลใช้
                น้ำตาลมะพร้าวเเท้จากสมุทรสาครเเหล่งน้ำตาลชั้นดี
                น้ำมันเราใช้น้ำมันรำข้าวเพราะมีโอเมก้าเเละวิตามินที่มีประโยชน์จากรำข้าว
                วัตถุดิบอื่นๆเราใช้เกรด A ทั้งหมด คุณภาพดี เน้นใช้สมุนไพรไทยล้วน
                ทำให้อาหารเรารสชาติออกมาดีเหมือนกับว่าไม่ได้ทานอาหารคลีน
                อาหารของเรามีค่อนข้างหลากหลายทั้งไทย จีน ฝรั่ง เเละ สลัดไฮโดรโพนิกจากสวนที่เพชรบูรณ์ ทีเด็ดของเราคือ
                การใช้ข้าวกล้องหอมมะลิ
                จากสุรินทร์เเละข้าวเจ้าไรซ์เบอร์รี่ในสัดส่วนที่เหมาะสมทำให้ข้าวไม่เเข็งเเต่นุ่ม เคี้ยวง่าย อิ่มนานด้วยค่ะ
            </p>
            <div class="autoplay3 d-none d-sm-block" data-animate="fadeInUp">
                {{-- Item1 --}}
                <div class="portfolio-item" style="padding:20px;">
                    <div class="post-item-wrap" style="border-radius:10px;">
                        <div class="post-image">
                            <img class="" src="{{ asset('images/passionfood/img/img29.png') }}"
                                style="width:100%; border-radius:10px;">
                        </div>
                        <div class="post-item-description text-center">
                            <h4 class="text-center" style="color:#42623D; margin-bottom:0px;">
                                The most happiest time of the day!. Morbi
                                sagittis, sem quis lacinia faucibus, orci ipsum
                                gravida tortor, vel interdum mi sapien ut justo.</h4>
                        </div>
                    </div>
                </div>
                {{-- Item1 --}}
                {{-- Item2 --}}
                <div class="portfolio-item" style="padding:20px;">
                    <div class="post-item-wrap" style="border-radius:10px;">
                        <div class="post-image">
                            <img class="" src="{{ asset('images/passionfood/img/img29.png') }}"
                                style="width:100%; border-radius:10px;">
                        </div>
                        <div class="post-item-description text-center">
                            <h4 class="text-center" style="color:#42623D; margin-bottom:0px;">
                                The most happiest time of the day!. Morbi
                                sagittis, sem quis lacinia faucibus, orci ipsum
                                gravida tortor, vel interdum mi sapien ut justo.</h4>
                        </div>
                    </div>
                </div>
                {{-- Item2 --}}
                {{-- Item3 --}}
                <div class="portfolio-item" style="padding:20px;">
                    <div class="post-item-wrap" style="border-radius:10px;">
                        <div class="post-image">
                            <img class="" src="{{ asset('images/passionfood/img/img29.png') }}"
                                style="width:100%; border-radius:10px;">
                        </div>
                        <div class="post-item-description text-center">
                            <h4 class="text-center" style="color:#42623D; margin-bottom:0px;">
                                The most happiest time of the day!. Morbi
                                sagittis, sem quis lacinia faucibus, orci ipsum
                                gravida tortor, vel interdum mi sapien ut justo.</h4>
                        </div>
                    </div>
                </div>
                {{-- Item3 --}}
                {{-- Item4 --}}
                <div class="portfolio-item" style="padding:20px;">
                    <div class="post-item-wrap" style="border-radius:10px;">
                        <div class="post-image">
                            <img class="" src="{{ asset('images/passionfood/img/img29.png') }}"
                                style="width:100%; border-radius:10px;">
                        </div>
                        <div class="post-item-description text-center">
                            <h4 class="text-center" style="color:#42623D; margin-bottom:0px;">
                                The most happiest time of the day!. Morbi
                                sagittis, sem quis lacinia faucibus, orci ipsum
                                gravida tortor, vel interdum mi sapien ut justo.</h4>
                        </div>
                    </div>
                </div>
                {{-- Item4 --}}
            </div>

            <div class="autoplay1 d-block d-sm-none">
                {{-- Item1 --}}
                <div class="portfolio-item" style="padding:20px;">
                    <div class="post-item-wrap" style="border-radius:10px;">
                        <div class="post-image">
                            <img class="" src="{{ asset('images/passionfood/img/img29.png') }}"
                                style="width:100%; border-radius:10px;">
                        </div>
                        <div class="post-item-description text-center">
                            <h4 class="text-center" style="color:#42623D; margin-bottom:0px; ">
                                The most happiest time of the day!. Morbi
                                sagittis, sem quis lacinia faucibus, orci ipsum
                                gravida tortor, vel interdum mi sapien ut justo.</h4>
                        </div>
                    </div>
                </div>
                {{-- Item1 --}}
                {{-- Item2 --}}
                <div class="portfolio-item" style="padding:20px;">
                    <div class="post-item-wrap" style="border-radius:10px;">
                        <div class="post-image">
                            <img class="" src="{{ asset('images/passionfood/img/img29.png') }}"
                                style="width:100%; border-radius:10px;">
                        </div>
                        <div class="post-item-description text-center">
                            <h4 class="text-center" style="color:#42623D; margin-bottom:0px;">
                                The most happiest time of the day!. Morbi
                                sagittis, sem quis lacinia faucibus, orci ipsum
                                gravida tortor, vel interdum mi sapien ut justo.</h4>
                        </div>
                    </div>
                </div>
                {{-- Item2 --}}
                {{-- Item3 --}}
                <div class="portfolio-item" style="padding:20px;">
                    <div class="post-item-wrap" style="border-radius:10px;">
                        <div class="post-image">
                            <img class="" src="{{ asset('images/passionfood/img/img29.png') }}"
                                style="width:100%; border-radius:10px;">
                        </div>
                        <div class="post-item-description text-center">
                            <h4 class="text-center" style="color:#42623D; margin-bottom:0px;">
                                The most happiest time of the day!. Morbi
                                sagittis, sem quis lacinia faucibus, orci ipsum
                                gravida tortor, vel interdum mi sapien ut justo.</h4>
                        </div>
                    </div>
                </div>
                {{-- Item3 --}}
                {{-- Item4 --}}
                <div class="portfolio-item" style="padding:20px;">
                    <div class="post-item-wrap" style="border-radius:10px;">
                        <div class="post-image">
                            <img class="" src="{{ asset('images/passionfood/img/img29.png') }}"
                                style="width:100%; border-radius:10px;">
                        </div>
                        <div class="post-item-description text-center">
                            <h4 class="text-center" style="color:#42623D; margin-bottom:0px; ">
                                The most happiest time of the day!. Morbi
                                sagittis, sem quis lacinia faucibus, orci ipsum
                                gravida tortor, vel interdum mi sapien ut justo.</h4>
                        </div>
                    </div>
                </div>
                {{-- Item4 --}}
            </div>
        </div>
    </section>
@endsection
