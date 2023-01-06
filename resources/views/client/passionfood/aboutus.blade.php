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
    <section id="page-title" data-bg-parallax="{{ asset('images/passionfood/pagetitle/page1.png') }}">
        <div class="bg-overlay" style="background:rgb(42 42 42) !important;"></div>
        <div class="container" style="margin-top:7%; margin-bottom:5%;">
            <div class="page-title" data-animate="fadeInUp">
                <h1 class="d-none d-sm-block" style="font-size: 5.0rem; font-family:'OldStandardTT' !important;">ABOUT US</h1>
                <h1 class="d-block d-sm-none" style="font-size: 3.0rem; font-family:'OldStandardTT' !important;">ABOUT US
                </h1>
            </div>
        </div>
    </section>

    {{-- Text Editor --}}
    <section style="padding-top: 50px; padding-bottom: 50px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-xs-12" data-animate="fadeInUp">
                    <div class="d-none d-lg-block d-xl-block">
                        <img src="{{ asset('images/passionfood/img/img19.png') }}" width="80%"
                            style="display: block; margin:auto;">
                    </div>
                </div>
                <div class="col-lg-6 col-xs-12" data-animate="fadeInUp">
                    <h1 class="aboutusheadfont text-center" style=" ">เกี่ยวกับเรา</h1>
                    <div class="d-block d-lg-none">
                        <img src="{{ asset('images/passionfood/img/img19.png') }}" width="90%"
                            style="display: block; margin:auto;">
                    </div>
                    <p class="aboutusfont">อาหารคลีนที่มีคอนเซ็ป
                        “สุขภาพดีเเบบยั่งยืน” เเละ “I’m
                        not dieting but
                        i’m changing life style” ธุรกิจนี้เกิดจากความรักในสุขภาพเเละการทำ
                        อาหารเป็นทุนเดิม ซอสเรียนจบเทคนิคการเเพทย์เเละได้ทำงานในสายสุขภาพ
                        ในโรงพยาบาลชั้นนำของกรุงเทพ เเละ ได้คลุกคลีวงการอาหารในโรงเเรมระดับ
                        5 ดาวมามากกว่า 5 ปี จึงได้นำความรู้เเละ passion ในการรักการทำอาหาร
                        มาสร้างเป็นธุรกิจอาหารคลีนเดลิเวอรี่</p>
                </div>
            </div>
            <p class="aboutusfont" data-animate="fadeInUp">
                ปกติเเล้วเป็นคนที่ไม่ชอบทานอกไก่เลยเพราะรสชาติไม่อร่อย
                เเละอีกอย่างไม่มีทางที่เราจะสามารถทานอกไก่ไปได้ตลอดชีวิต มันค่อน
                ข้างยากมากมากเเละทำได้อาจจะ 1-2 ปีอาจจะหลุด เลยเป็นที่มาของคอนเซ็ปอาหารคลีนสุขภาพดีเเบบยั่งยืน
                ทานได้เรื่อยๆไม่มีหลุด
                เพราะเมนูหลากหลาย มีการนำเมนูที่อ้วนมากมากมาทำเป็นอาหารคลีน เช่น ขาหมูนางเเบบ ข้าวคลุกกะปิ ข้าวไม่มันไก่
                เป็นต้น</p>
            <p class="aboutusfont" data-animate="fadeInUp">อาหารของ Passion
                food
                ไม่มีการใช้ผงชูรสเพราะโดยส่วนตัวเป็นคนเเพ้ชูรสอยู่เเล้ว เครื่องปรุงใช้ low sodium น้ำตาลใช้
                น้ำตาลมะพร้าวเเท้จากสมุทรสาครเเหล่งน้ำตาลชั้นดี
                น้ำมันเราใช้น้ำมันรำข้าวเพราะมีโอเมก้าเเละวิตามินที่มีประโยชน์จากรำข้าว
                วัตถุดิบอื่นๆเราใช้เกรด A ทั้งหมด คุณภาพดี เน้นใช้สมุนไพรไทยล้วน
                ทำให้อาหารเรารสชาติออกมาดีเหมือนกับว่าไม่ได้ทานอาหารคลีน
                อาหารของเรามีค่อนข้างหลากหลายทั้งไทย จีน ฝรั่ง เเละ สลัดไฮโดรโพนิกจากสวนที่เพชรบูรณ์ ทีเด็ดของเราคือ
                การใช้ข้าวกล้องหอมมะลิ
                จากสุรินทร์เเละข้าวเจ้าไรซ์เบอร์รี่ในสัดส่วนที่เหมาะสมทำให้ข้าวไม่เเข็งเเต่นุ่ม เคี้ยวง่าย อิ่มนานด้วยค่ะ
            </p>
            <img data-animate="fadeInUp" src="{{ asset('images/passionfood/img/img20.png') }}" width="100%">
        </div>
    </section>
@endsection
