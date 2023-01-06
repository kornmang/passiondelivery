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
                <h1 class="d-none d-sm-block"
                    style="font-size: 5.0rem; font-weight:bold; font-family:'DB Ozone X' !important;">
                    ซูชิโรลไข่ขาวน้ำพริกกะปิปลาทูชะอม</h1>
                <h1 class="d-block d-sm-none"
                    style="font-size: 3.0rem; font-weight:bold; font-family:'DB Ozone X' !important;">
                    ซูชิโรลไข่ขาวน้ำพริกกะปิปลาทูชะอม</h1>
            </div>
        </div>
    </section>

    <section style="z-index:99; background-color:transparent;">
        <div class="container">
            <img src="{{ asset('images/passionfood/img/img22.png') }}" width="100%">
            <h1 class="detailheader">ซูชิโรลไข่ขาวน้ำพริกกะปิปลาทูชะอม</h1>
            <h1 class="detailheader2">White
                egg
                roll stuffed shrimp paste rice</h1>
            <div class="shapeheader">
                <p class="shapeheaderfont">ข้อมูลโภชนาการ</p>
            </div>
            <div class="row">
                <div class="col-6" style="padding: 0px;">
                    <div class="shapebody" style="float: right;">
                        <p class="shapebodyfont">Kcal : 341.3</p>
                    </div>
                </div>
                <div class="col-6" style="padding: 0px;">
                    <div class="shapebody" style="float: left;">
                        <p class="shapebodyfont">Fat : 13.3</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6" style="padding: 0px;">
                    <div class="shapebody" style="float: right;">
                        <p class="shapebodyfont">Carb : 29.5</p>
                    </div>
                </div>
                <div class="col-6" style="padding: 0px;">
                    <div class="shapebody" style="float: left;">
                        <p class="shapebodyfont">Protien : 24.1</p>
                    </div>
                </div>
            </div>
            <div class="row mt-3 d-none d-sm-block">
                <div class="col-12" style="display:inline-block; text-align:center;">
                    <img src="{{ asset('images/passionfood/img/img23.png') }}" style="width:20%; padding:30px;">
                    <img src="{{ asset('images/passionfood/img/img24.png') }}" style="width:20%; padding:30px;">
                    <img src="{{ asset('images/passionfood/img/img25.png') }}" style="width:20%; padding:30px;">
                </div>
            </div>
            <div class="row mt-1 d-block d-sm-none">
                <div class="col-12" style="display:inline-block; text-align:center;">
                    <img src="{{ asset('images/passionfood/img/img23.png') }}" style="width:30%; padding:10px;">
                    <img src="{{ asset('images/passionfood/img/img24.png') }}" style="width:30%; padding:10px;">
                    <img src="{{ asset('images/passionfood/img/img25.png') }}" style="width:30%; padding:10px;">
                </div>
            </div>
            <div class="shapeprice" style="display:block; margin:auto;">
                <p class="shapepricefont">ราคา 189 บาท</p>
            </div>
            <a class="button-73 mt-5 d-none d-sm-block" href="#"
                style="display:block; margin:auto; border-radius:100px; width:25%;"><span style="font-size:2.5rem;">Add
                    Line&nbsp;&nbsp;<i class="fa fa-arrow-right" style="font-size:16px;" aria-hidden="true"></i></span></a>
            <a class="button-73 mt-2 d-block d-sm-none" href="#"
                style="display:block; margin:auto; border-radius:100px; width:80%;"><span style="font-size:2.5rem;">Add
                    Line&nbsp;&nbsp;<i class="fa fa-arrow-right" style="font-size:16px;" aria-hidden="true"></i></span></a>
            <h1 class="text-left" style="color:#42623D; margin-bottom:0px;">ข้อมูลอาหารคลีน</h1>
            <p class="shapetextfont">Our Passion Food Information</p>
            <div class="row">
                <div class="col-1">
                    <div class="shapetext" style="float: right;"></div>
                </div>
                <div class="col-11" style="padding: 0px;">
                    <p class="shapetextfont">อาหารคลีนจากเเพชชั่นฟู้ดอยู่ภาย ในเเนวคิดที่ว่า
                        "ทำยังไงถึงจะกินอาหารคลีนได้นานจนติดเป็นนิสัย ทำยังไงถึงจะกินคลีนได้ไม่เบื่อ" อาหารเน้น รสชาติ
                        เเบบไทยๆที่ยังคงรสชาติที่อร่อยเอาไว้โดยยังคงคอนเซ็ปอาหารคลีน เพราะอาหารคลีนของเรานั้นดึง
                        รสชาติมาจากวัตถุดิบที่สดใหม่ไม่ผ่านพ่อค้าคนกลาง เเละ
                        ยังลดการปรุงเเต่งจากเครื่องที่ไม่จำเป็นทั้งหลายที่ เป็นสาเหตุให้เราตัวบวม
                    </p>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-1">
                    <div class="shapetext" style="float: right;"></div>
                </div>
                <div class="col-11" style="padding: 0px;">
                    <p class="shapetextfont">จะดีมั้ยหากเราสามารถลดเเคลลอรี่จากมื้ออาหารไปได้ 120-240 Kcal
                        ลดไขมันส่วนเกินจากมื้ออาหารที่ถูกปรุง เเต่งโดยไม่จำเป็น ทุกเมนูผัดของ PASSIONFOOD
                        ไม่ใช้น้ำมันในการผัดเเต่เราใช้น้ำซุปผักที่เคี่ยวใหม่ทุกวัน
                        ดังนั้นมั่นใจได้เลยว่านอกจากอาหารคลีนที่อร่อยเเล้วยังทำให้เราสามารถลดไขมันไปได้เยอะเลยทีเดียว
                    </p>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-1">
                    <div class="shapetext" style="float: right;"></div>
                </div>
                <div class="col-11" style="padding: 0px;">
                    <p class="shapetextfont"> ซอสผัดอาหารเราสั่งทำจากโรงงานที่ได้มาตรฐานเเละไม่มีส่วนผสมของผงชูรส
                        ซึ่งสูตรในการผลิตซอสผัดของ เรานั้นเป็นสูตรเดียวกันกับซอสที่ผลิตส่งออกทางกลุ่มประเทศยุโรป
                        ความพิเศษคือซอสมีส่วนผสมของยีสต์สกัด (Yeast Extract) มีสารส่วนประกอบหลักคือโปรตีนและมีวิตามิน
                        แร่ธาตุหลายชนิดที่มีประโยชน์และมีกลิ่นหอม คล้ายเนื้อสัตว์
                        ดังนั้นความอร่อยของอาหารไม่ได้เกิดจากผงชูรสเเต่เกิดจากซอสสูตรพิเศษที่เราใช้เวลานาน มากกว่า 2
                        ปีในการผลิตเเละนำมาใช้กับ PASSIONFOOD ทุกสาขา
                    </p>
                </div>
            </div>
            <h1 class="text-left mt-5" style="color:#42623D; margin-bottom:0px;">วิธีการเก็บอาหาร</h1>
            <p class="shapetextfont">To maintain freshness & deliciousness please keep refrigerated after purchase.</p>
            <div class="row">
                <div class="col-1">
                    <div class="shapetext" style="float: right;"></div>
                </div>
                <div class="col-11" style="padding: 0px;">
                    <p class="shapetextfont">หากยังไม่ทานในทันที ให้รออาหารเย็นลง เเล้วนำเก็บในตู้เย็น เพื่อรสชาติดีที่สุด เเละ ผักเคียงยังสดใหม่ ควร รับประทานภาย ใน 2 วัน<br>
                        Please consume within 2 days of purchase.
                    </p>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-1">
                    <div class="shapetext" style="float: right;"></div>
                </div>
                <div class="col-11" style="padding: 0px;">
                    <p class="shapetextfont">กรณีต้องการเก็บอาหารเพื่อทานหลายวัน เเนะนำให้เอาผักสดเเยกไว้ในช่องเเช่เย็น เเละ นำกล่องอาหารเข้าเเช่
                        ฟรีซเซอร์ วิธีนี้จะสามารถเก็บอาหารได้นานถึง 2 อาทิตย์<br>
                        In case you want to keep food for long, take out the side veggies separate in refrigerator and separate the food container in freezer.
                    </p>
                </div>
            </div>
            <h1 class="text-left" style="color:#42623D; margin-bottom:0px;">วิธีการอุ่นอาหาร</h1>
            <p class="shapetextfont">How to reheat Passion Food</p>
            <div class="row">
                <div class="col-1">
                    <div class="shapetext" style="float: right;"></div>
                </div>
                <div class="col-11" style="padding: 0px;">
                    <p class="shapetextfont">อย่าลืมเอาผักเคียงออก จากนั้นเอาอาหารใส่ในไมโครเวฟ กล่องอาหารสามารถนำเข้าฟรีซเซอร์เเละไมโครเวฟ ได้ ปรับความร้อนที่ 800 วัตต์ นาน 2-3 นาที หากอาหารเเช่เเข็งให้ปรับเป็น Defrost ก่อน หรือ ความร้อนที่
                        800 วัตต์ นาน 5 นาที<br>
                        Remove the side veggies before place the food container in microwave. Reheat at 800 Watt for 2-3 minutes long or 5 minutes long if food is from freezer.
                    </p>
                </div>
            </div>

            <h1 class="text-center mt-5" style="color:#42623D; margin-bottom:0px;">NO MSG I NO SUGAR I NO PRESERVATIVES I
                NO
                MSG</h1>
        </div>
    </section>

    {{-- Mint --}}
    <img class="bgimg01" src="{{ asset('images/passionfood/img/img26.png') }}" onContextMenu="return false;"
        width="100%">

    {{-- Lamp --}}
    <img class="bgimg02" src="{{ asset('images/passionfood/img/img27.png') }}" onContextMenu="return false;"
        width="100%">
@endsection
