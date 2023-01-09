@extends('client.layouts.app')
@section('content')
    {{-- Banner --}}
    <section id="home" style="padding:0;">
        <div id="home" class="carousel d-none d-sm-block" data-items="1" data-animate="5" data-arrows="false"
            data-dots="false">
            <div class="portfolio-item-wrap">
                <div class="portfolio-image">
                    <img alt="image" style="margin-top: -10px; pointer-events: auto;" onContextMenu="return false;"
                        width="100%" src="{{ asset('images/passionfood/banner/banner.jpg') }}">
                    <div class="container-fluid" style="padding:0; position:absolute; margin:-40% 2% 20% 2%;">
                        <div class="row" style="">
                            <div class="col-12">
                                <h1 class="banner" data-animate="fadeInUp">
                                    I’M NOT DIETING<br>
                                    I’M CHANGING</h1>
                                <h1 class="banner2 mt-3" data-animate="fadeInUp">
                                    LIFESTYLE</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="home" class="carousel d-block d-sm-none" data-items="1" data-animate="5" data-arrows="false"
            data-dots="false">
            <div class="portfolio-item-wrap">
                <div class="portfolio-image">
                    <img alt="image" style="margin-top: -10px; pointer-events: auto;" onContextMenu="return false;"
                        width="100%" src="{{ asset('images/passionfood/banner/bannermobile2.png') }}">
                    <div class="container-fluid" style="padding:0; position:absolute; margin:-60% 2% 20% 2%;">
                        <div class="row" style="">
                            <div class="col-12">
                                <h1 style="text-align:center; color:#fff; font-size:2.5rem; font-family:'HussarBold' !important; margin-bottom:0px !important;"
                                    data-animate="fadeInUp">
                                    I’M NOT DIETING<br>
                                    I’M CHANGING</h1>
                                <h1 class="mt-1"
                                    style="text-align:center; color:#fff; font-size:2.0rem; font-family:'Rondal-Regular' !important; margin-bottom:0px !important;"
                                    data-animate="fadeInUp">
                                    LIFESTYLE</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- AboutUs --}}
    <section class="d-none d-lg-block d-xl-block" style="padding:10;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-xs-12" data-animate="fadeInLeft"><img
                        src="{{ asset('images/passionfood/aboutus/food1.jpg') }}" style="display:block; margin:auto;"
                        onContextMenu="return false;" width="90%"></div>
                <div class="col-lg-6 col-xs-12" style="padding:0px;" data-animate="fadeInRight">
                    <h1 class="text-center mt-5" style="font-size:2.4rem; color:#42623D;">เกี่ยวกับเรา</h1>
                    <p class="aboutusfont">อาหารคลีนที่มีคอนเซ็ป “สุขภาพดีเเบบยั่งยืน”<br>
                        เเละ “I’m not dieting but i’m changing life style”<br>
                        ธุรกิจนี้เกิดจากความรักในสุขภาพเเละการทำอาหารเป็นทุนเดิม<br>
                        ซอสเรียนจบเทคนิคการเเพทย์เเละได้ทำงานในสายสุขภาพในโรงพยาบาล<br>
                        ชั้นนำของกรุงเทพ เเละ ได้คลุกคลีวงการอาหารในโรงเเรมระดับ 5 ดาว<br>
                        มามากกว่า 5 ปี จึงได้นำความรู้เเละ passion ในการรักการทำอาหาร<br>
                        มาสร้างเป็นธุรกิจอาหารคลีนเดลิเวอรี่</p>
                    <a class="button-73 mt-4" href="{{ route('aboutus') }}"
                        style="display:block; margin:auto; border-radius:100px; width:45%;"><span
                            style="font-size:1.6rem;">เพิ่มเติม&nbsp;&nbsp;<i class="fa fa-arrow-right"
                                style="font-size:1.6rem;" aria-hidden="true"></i></span></a>
                </div>
            </div>
        </div>
    </section>
    <section class="d-block d-lg-none" style="padding:0;">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h1 class="text-center mt-5" data-animate="fadeInUp"
                        style="font-size:2.4rem; color:#42623D; margin-bottom:0px;">เกี่ยวกับเรา</h1>
                    <p class="aboutusfont" data-animate="fadeInUp">อาหารคลีนที่มีคอนเซ็ป “สุขภาพดีเเบบยั่งยืน”<br>
                        เเละ “I’m not dieting but i’m changing life style”
                        ธุรกิจนี้เกิดจากความรักในสุขภาพเเละการทำอาหารเป็นทุนเดิม
                        ซอสเรียนจบเทคนิคการเเพทย์เเละได้ทำงานในสายสุขภาพในโรงพยาบาล
                        ชั้นนำของกรุงเทพ เเละ ได้คลุกคลีวงการอาหารในโรงเเรมระดับ 5 ดาว
                        มามากกว่า 5 ปี จึงได้นำความรู้เเละ passion ในการรักการทำอาหาร
                        มาสร้างเป็นธุรกิจอาหารคลีนเดลิเวอรี่</p>
                    <a class="button-73 mt-4" data-animate="fadeInUp" href="{{ route('aboutus') }}"
                        style="display:block; margin:auto; border-radius:100px; width:45%;"><span
                            style="font-size:1.2rem;">เพิ่มเติม&nbsp;&nbsp;<i class="fa fa-arrow-right"
                                style="font-size:16px;" aria-hidden="true"></i></span></a>
                </div>
            </div>
        </div>
        <img class="mt-5" src="{{ asset('images/passionfood/aboutus/food1.jpg') }}" style="display:block; margin:auto;"
            onContextMenu="return false;" width="100%">
    </section>

    {{-- ทำไมต้องเลือกทานอาหารคลีน --}}
    <section style="padding:0;">
        <div class="text-center mt-5">
            <span class="whyeatfont" data-animate="fadeInUp">ทำไมต้องเลือกทานอาหารคลีนกับ <span
                    class="whyeatfont2">PASSIONFOOD</span></span>
        </div>
        <img class="mt-5" src="{{ asset('images/passionfood/img/img35.png') }}" data-animate="fadeInLeft"
            onContextMenu="return false;" width="100%">
    </section>

    {{-- avocado --}}
    <img class="bgimg2" src="{{ asset('images/passionfood/img/img18.png') }}" onContextMenu="return false;"
        width="100%">

    {{-- How to order food --}}
    <section style="padding:0;">
        <div class="container" data-animate="fadeInUp">
            <img class="itemimg2" src="{{ asset('images/passionfood/img/img2.png') }}" onContextMenu="return false;"
                width="100%">
        </div>
    </section>

    {{-- Passionfood --}}
    <section style="padding: 0;">
        <img class="itemimg3" src="{{ asset('images/passionfood/img/img10.png') }}" onContextMenu="return false;"
            width="100%">
    </section>

    {{-- bg-image --}}
    <img class="bgimg3" src="{{ asset('images/passionfood/img/img15.png') }}" onContextMenu="return false;"
        width="100%">
    <img class="bgimg4" src="{{ asset('images/passionfood/img/img16.png') }}" onContextMenu="return false;"
        width="85%">
    <img class="bgimg5" src="{{ asset('images/passionfood/img/img17.png') }}" onContextMenu="return false;"
        width="88%">

    {{-- Choose Your Plan --}}
    <section class="chooseyouplan" data-animate="fadeInUp">
        <div class="container">
            <h2 class="mb-5"
                style="color:#42623D; text-align:center !important; font-family:'Reey-Regular' !important;">
                Choose Your Plan</h2>
            <div class="carousel" data-items="4" data-animate="5" data-arrows="false" data-dots="false"
                style="">
                <div class="portfolio-item" style="padding:20px;">
                    <img src="images/passionfood/img/01.png" width="100%" onContextMenu="return false;"
                        style="display:block; margin:auto;">
                    <p class="text-center mt-2" style="font-size: 1.4rem; color:#42623D;">A LA CARTE</p>
                </div>
                <div class="portfolio-item" style="padding:20px;">
                    <img src="images/passionfood/img/02.png" width="100%" onContextMenu="return false;"
                        style="display:block; margin:auto;">
                    <p class="text-center mt-2" style="font-size: 1.4rem; color:#42623D;">Low Carb Diet Program</p>
                </div>
                <div class="portfolio-item" style="padding:20px;">
                    <img src="images/passionfood/img/03.png" width="100%" onContextMenu="return false;"
                        style="display:block; margin:auto;">
                    <p class="text-center mt-2" style="font-size: 1.4rem; color:#42623D;">แพคเกจอาหารส่งต่างจังหวัด</p>
                </div>
                <div class="portfolio-item" style="padding:20px;">
                    <img src="images/passionfood/img/04.png" width="100%" onContextMenu="return false;"
                        style="display:block; margin:auto;">
                    <p class="text-center mt-2" style="font-size: 1.4rem; color:#42623D;">แพคเกจโปรโมชั่นอาหาร</p>
                </div>
            </div>
            <a class="d-none d-lg-block d-xl-block button-73 mt-4" href="#"
                style="display:block; margin:auto; border-radius:100px; width:20%;"><span style="font-size:1.6rem;">Add
                    Line&nbsp;&nbsp;<i class="fa fa-arrow-right" style="font-size:1.6rem;"
                        aria-hidden="true"></i></span></a>
            <a class="d-block d-lg-none button-73 mt-1" href="#"
                style="display:block; margin:auto; border-radius:100px; width:45%;"><span style="font-size:1.2rem;">Add
                    Line&nbsp;&nbsp;<i class="fa fa-arrow-right" style="font-size:16px;"
                        aria-hidden="true"></i></span></a>
        </div>
    </section>

    {{-- Grab --}}
    <section style="padding: 0;">
        <img class="itemimg4" src="{{ asset('images/passionfood/img/img6.png') }}" onContextMenu="return false;"
            width="100%">
    </section>

    {{-- Real food Real People --}}
    <section class="realfood" data-animate="fadeInUp">
        <div class="container">
            <h2 class="mb-5"
                style="color:#42623D; text-align:center !important; font-family:'Reey-Regular' !important;">
                Real food. Real people!</h2>
            <div class="carousel" data-items="3" data-animate="5" data-arrows="false" data-dots="false"
                style="">
                <div class="portfolio-item realfood">
                    <img src="{{ asset('images/passionfood/img/img7.png') }}" onContextMenu="return false;"
                        width="80%">
                    <p class="mt-4 text-center" style="font-size: 1.4rem; font-weight:bold;"><i class="fa fa-instagram"
                            aria-hidden="true"></i>&nbsp;Name Surname</p>
                    <p class="text-center" style="font-size: 1.4rem;">The most happiest time of the day! Preasemt truique
                        hendrerit ex ut laoreet.</p>
                </div>
                <div class="portfolio-item realfood">
                    <img src="{{ asset('images/passionfood/img/img7.png') }}" onContextMenu="return false;"
                        width="80%">
                    <p class="mt-4 text-center" style="font-size: 1.4rem; font-weight:bold;"><i class="fa fa-instagram"
                            aria-hidden="true"></i>&nbsp;Name Surname</p>
                    <p class="text-center" style="font-size: 1.4rem;">The most happiest time of the day! Preasemt truique
                        hendrerit ex ut laoreet.</p>
                </div>
                <div class="portfolio-item realfood">
                    <img src="{{ asset('images/passionfood/img/img7.png') }}" onContextMenu="return false;"
                        width="80%">
                    <p class="mt-4 text-center" style="font-size: 1.4rem; font-weight:bold;"><i class="fa fa-instagram"
                            aria-hidden="true"></i>&nbsp;Name Surname</p>
                    <p class="text-center" style="font-size: 1.4rem;">The most happiest time of the day! Preasemt truique
                        hendrerit ex ut laoreet.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- food clean --}}
    <section style="padding:0;">
        <img class="" src="{{ asset('images/passionfood/img/img8.png') }}" onContextMenu="return false;"
            width="100%">
    </section>

    {{-- BMR Calculator --}}
    <section class="d-none d-lg-block d-xl-block"
        style="padding-top: 0px !important; padding-bottom: 200px; z-index:15; background-color:transparent !important;">
        <div class="container">
            <h2 class="bmr">BMR CALCULATOR</h2>
            <p class="bmrbody">เครื่องคำนวณหาค่า BMR เเละ TDEE
                เครื่องคำนวณช่วยวางแผนการลดน้ำหนัก เพื่อให้เพื่อนๆได้คำนวณค่าพลังงานที่เหมาะสมและเพื่อการวางแผน
                การลดน้ำหนักที่ได้ผล โดยไม่ต้องเสียเวลาคิดเองอีกต่อไปค่ะ</p>
            <div class="card card-body" style="padding: 50px;">
                <form id="form1" class="form-validate">
                    <div class="row">
                        <label style="font-size: 1.4rem;">เพศ</label>
                        <div class="col-sm-3">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1"
                                    value="option1" checked>
                                <label class="form-check-label" for="gridRadios1" style="font-size: 1.4rem;">ชาย</label>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2"
                                    value="option2">
                                <label class="form-check-label" for="gridRadios2" style="font-size: 1.4rem;">หญิง</label>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="form-group col-md-6">
                            <label style="font-size: 1.4rem;">น้ำหนักตัว (kg.)</label>
                            <input type="text" class="form-control" name="username" placeholder="น้ำหนักตัว (kg.)"
                                required>
                        </div>
                        <div class="form-group col-md-6">
                            <label style="font-size: 1.4rem;">ส่วนสูง (cm.)</label>
                            <input type="email" class="form-control" name="email" placeholder="ส่วนสูง (cm.)"
                                required>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="form-group col-md-6">
                            <label style="font-size: 1.4rem;">อายุ (ปี)</label>
                            <input type="email" class="form-control" name="email" placeholder="อายุ (ปี)" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label style="font-size: 1.4rem;">ระดับกิจกรรมในเเต่ละวัน</label>
                            <select class="form-select" name="gender" required>
                                <option value="">เลือกระดับกิจกรรมในเเต่ละวัน</option>
                                <option>ทำงานแบบนั่งอยู่กับที่</option>
                                <option>ออกกำลังกาย หรือเล่นกีฬา แบบเบาๆ 1-3 วันต่อสัปดาห์</option>
                                <option>ออกกำลังกาย หรือเล่นกัฬา ความหนักปานกลาง 3-5 วันต่อสัปดาห์</option>
                                <option>ออกกำลังกาย หรือเล่นกีฬา หนัก 6-7 วันต่อสัปดาห์</option>
                                <option>ออกกำลังกาย หรือเล่นกัฬา หนัก แบบการซ้อมเพื่อการแข่งขัน เป็นประจำทุกวัน</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="form-group col-md-6">
                            <label style="font-size: 1.4rem;">เป้าหมายน้ำหนักที่ต้องการ (kg.)</label>
                            <input type="text" class="form-control" name="username"
                                placeholder="เป้าหมายน้ำหนักที่ต้องการ (kg.)" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label style="font-size: 1.4rem;">จำนวนวัน</label>
                            <input type="email" class="form-control" name="email" placeholder="จำนวนวัน" required>
                        </div>
                    </div>
                    <a class="button-73 mt-4" href="#"
                        style="display:block; margin:auto; border-radius:100px; width:20%;"><span
                            style="font-size:1.6rem;">กดคำนวณ&nbsp;&nbsp;<i class="fa fa-arrow-down"
                                style="font-size:1.4rem;" aria-hidden="true"></i></span></a>

                    <div class="card card-body mt-4" style="background-color: #f5f5f5;">
                        <h3 class="text-center">ปริมาณพลังงานที่ต้องลดต่อวัน (kcal)</h3><br>
                        <h2 class="text-center" style="font-weight: bold; color:slategrey;">0</h2>
                    </div>
                    <div class="card card-body mt-4" style="background-color: #f5f5f5;">
                        <h3 class="text-center">ปริมาณพลังงานที่แนะนำต่อวัน (kcal)</h3><br>
                        <h2 class="text-center" style="font-weight: bold; color:slategrey;">0</h2>
                    </div>
                </form>
            </div>

            {{-- <form>
                <div class="row">
                    <div class="col-1"></div>
                    <div class="col-2">
                        <label class="text-left" style="font-size: 1.4rem;">เลือกเพศ:</label>
                    </div>
                    <div class="col-3">
                        <div class="form-check">
                            <input class="form-check-input" style="background-color:#DBDBDB; border-color:#DBDBDB;"
                                name="exampleRadios" id="exampleRadios1" value="option1" checked="" type="radio">
                            <label class="" style="text-align:left; font-size: 1.4rem;">
                                เพศหญิง
                            </label>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-check">
                            <input class="form-check-input" style="background-color:#DBDBDB; border-color:#DBDBDB;"
                                name="exampleRadios" id="exampleRadios2" value="option2" type="radio">
                            <label class="" style="text-align:left; font-size: 1.4rem;">
                                เพศชาย
                            </label>
                        </div>
                    </div>
                    <div class="col-3"></div>
                </div>
                <div class="row">
                    <div class="col-1"></div>
                    <div class="col-2">
                        <label class="text-left" style="font-size: 1.4rem;"></label>
                    </div>
                    <div class="col-3">
                        <div class="row">
                            <div class="col-6">
                                <label class="" style="text-align:right; font-size: 1.4rem;">&nbsp;ส่วนสูง
                                    (ซม.)&nbsp;</label>
                            </div>
                            <div class="col-6">
                                <input style="width: 100% !important; background-color:#DBDBDB;" type="email"
                                    class="form-control" id="inputEmail4">
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="row">
                            <div class="col-6">
                                <label class="" style="text-align:right; font-size: 1.4rem;">&nbsp;ส่วนสูง
                                    (ซม.)&nbsp;</label>
                            </div>
                            <div class="col-6">
                                <input style="width: 100% !important; background-color:#DBDBDB;" type="email"
                                    class="form-control" id="inputEmail4">
                            </div>
                        </div>
                    </div>
                    <div class="col-3"></div>
                </div>
                <div class="row">
                    <div class="col-1"></div>
                    <div class="col-2">
                        <label class="text-left" style="font-size: 1.4rem;"></label>
                    </div>
                    <div class="col-3">
                        <div class="row">
                            <div class="col-6">
                                <label class="" style="text-align:right; font-size: 1.4rem;">&nbsp;น้ำหนัก
                                    (กก.)&nbsp;</label>
                            </div>
                            <div class="col-6">
                                <input style="width: 100% !important; background-color:#DBDBDB;" type="email"
                                    class="form-control" id="inputEmail4">
                            </div>
                        </div>
                    </div>
                    <div class="col-3"></div>
                    <div class="col-3"></div>
                </div>
            </form> --}}

            {{-- <form class="">
                <div class="row mt-4">
                    <div class="col-1" style="padding: 0;"></div>
                    <div class="col-2" style="padding: 0;">
                        <label class="text-left" style="font-size: 1.2rem;">เลือกเพศ:</label>
                    </div>
                    <div class="col-1" style="padding: 0;">
                        <div class="form-check">
                            <input class="form-check-input" style="background-color:#DBDBDB; border-color:#DBDBDB;"
                                name="exampleRadios" id="exampleRadios1" value="option1" checked="" type="radio">
                            <label class="" style="text-align:left; font-size: 1.2rem;">
                                เพศหญิง
                            </label>
                        </div>
                    </div>
                    <div class="col-1" style="padding: 0;">
                        <div class="form-check">
                            <input class="form-check-input" style="background-color:#DBDBDB; border-color:#DBDBDB;"
                                name="exampleRadios" id="exampleRadios2" value="option2" type="radio">
                            <label class="" style="text-align:left; font-size: 1.2rem;">
                                เพศชาย
                            </label>
                        </div>
                    </div>
                    <div class="col-1" style="padding: 0;">
                        <label class="" style="text-align:right; font-size: 1.2rem;">อายุ (ปี)&nbsp;&nbsp;</label>
                    </div>
                    <div class="col-1" style="padding: 0;">
                        <input style="width: 100% !important; background-color:#DBDBDB;" type="email"
                            class="form-control" id="inputEmail4">
                    </div>
                    <div class="col-1" style="padding: 0;">
                        <label class="" style="text-align:right; font-size: 1.2rem;">&nbsp;ส่วนสูง
                            (ซม.)&nbsp;</label>
                    </div>
                    <div class="col-1" style="padding: 0;">
                        <input style="width: 100% !important; background-color:#DBDBDB;" type="email"
                            class="form-control" id="inputEmail4">
                    </div>
                    <div class="col-1" style="padding: 0;">
                        <label class="" style="text-align:right; font-size: 1.2rem;">&nbsp;น้ำหนัก
                            (กก.)&nbsp;</label>
                    </div>
                    <div class="col-1" style="padding: 0;">
                        <input style="width: 100% !important; background-color:#DBDBDB;" type="email"
                            class="form-control" id="inputEmail4">
                    </div>
                    <div class="col-1" style="padding: 0;"></div>
                    <div class="col-1" style="padding: 0;"></div>
                    <div class="col-2" style="padding: 0;">
                        <label style="text-align:left; font-size: 1.2rem; ">ระดับกิจกรรมในเเต่ละวัน
                            :</label>
                    </div>
                    <div class="col-3"><select class="form-select" id="exampleFormControlSelect1"
                            style="background-color:#DBDBDB;">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                    <div class="col-6"></div>
                    <div class="col-1" style="padding: 0;"></div>
                    <div class="col-3" style="padding: 0;">
                        <label style="text-align:left; font-size: 1.2rem; ">เป้าหมายน้ำหนักที่ต้องการ (kg.)</label>
                    </div>
                    <div class="col-2" style="padding: 0;">
                        <input style="width: 100% !important; background-color:#DBDBDB;" type="email"
                            class="form-control" id="inputEmail4">
                    </div>
                    <div class="col-1" style="padding: 0;">
                        <label style="text-align:center; font-size: 1.2rem; ">จำนวนวัน</label>
                    </div>
                    <div class="col-2" style="padding: 0;">
                        <input style="width: 100% !important; background-color:#DBDBDB;" type="email"
                            class="form-control" id="inputEmail4">
                    </div>
                </div>
                <a class="button-73 mt-4" href="#"
                    style="display:block; margin:auto; border-radius:100px; width:20%;"><span
                        style="font-size:1.6rem;">กดคำนวณ&nbsp;&nbsp;<i class="fa fa-arrow-right"
                            style="font-size:1.6rem;" aria-hidden="true"></i></span></a>
            </form> --}}
        </div>
    </section>
    <section class="d-block d-lg-none"
        style="padding-top: 0px !important; padding-bottom: 80px; z-index:15; background-color:transparent !important;"
        data-animate="fadeInUp">
        <div class="container">
            <h2 class="bmr">BMR CALCULATOR</h2>
            <p class="bmrbody">เครื่องคำนวณหาค่า BMR เเละ TDEE
                เครื่องคำนวณช่วยวางแผนการลดน้ำหนัก เพื่อให้เพื่อนๆได้คำนวณค่าพลังงานที่เหมาะสมและเพื่อการวางแผน
                การลดน้ำหนักที่ได้ผล โดยไม่ต้องเสียเวลาคิดเองอีกต่อไปค่ะ</p>
            <form class="">
                <div class="row">
                    <div class="col-4" style="padding: 0;">
                        <label class="text-left" style="text-align:right; font-size: 1.4rem;">เลือกเพศ :</label>
                    </div>
                    <div class="col-4">
                        <div class="form-check">
                            <input class="form-check-input" style="background-color:#DBDBDB; border-color:#DBDBDB;"
                                name="exampleRadios" id="exampleRadios1" value="option1" checked="" type="radio">
                            <label class="" style="text-align:left; font-size: 1.2rem;">
                                เพศหญิง
                            </label>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-check">
                            <input class="form-check-input" style="background-color:#DBDBDB; border-color:#DBDBDB;"
                                name="exampleRadios" id="exampleRadios2" value="option2" type="radio">
                            <label class="" style="text-align:left; font-size: 1.2rem;">
                                เพศชาย
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4" style="padding: 0;">
                        <label class="" style="text-align:right; font-size: 1.2rem;">อายุ (ปี) :</label>
                    </div>
                    <div class="col-8">
                        <input style="width: 100% !important; background-color:#DBDBDB;" type="email"
                            class="form-control" id="inputEmail4">
                    </div>
                </div>
                <div class="row">
                    <div class="col-4" style="padding: 0;">
                        <label class="" style="text-align:right; font-size: 1.2rem;">ส่วนสูง (ซม.) :</label>
                    </div>
                    <div class="col-8">
                        <input style="width: 100% !important; background-color:#DBDBDB;" type="email"
                            class="form-control" id="inputEmail4">
                    </div>
                </div>
                <div class="row">
                    <div class="col-4" style="padding: 0;">
                        <label class="" style="text-align:right; font-size: 1.2rem;">น้ำหนัก (กก.) :</label>
                    </div>
                    <div class="col-8">
                        <input style="width: 100% !important; background-color:#DBDBDB;" type="email"
                            class="form-control" id="inputEmail4">
                    </div>
                </div>
                <div class="row">
                    <div class="col-4" style="padding: 0;">
                        <label class="" style="text-align:right; font-size: 1.2rem;">ระดับกิจกรรมในเเต่ละวัน
                            :</label>
                    </div>
                    <div class="col-8">
                        <select class="form-select" id="exampleFormControlSelect1" style="background-color:#DBDBDB;">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                </div>
                <a class="button-73 mt-4" href="#"
                    style="display:block; margin:auto; border-radius:100px; width:45%;"><span
                        style="font-size:1.2rem;">กดคำนวณ&nbsp;&nbsp;<i class="fa fa-arrow-right" style="font-size:16px;"
                            aria-hidden="true"></i></span></a>
            </form>
        </div>
    </section>
    <img class="bgimg1" onContextMenu="return false;" src="{{ asset('images/passionfood/img/img9.png') }}"
        width="100%">
@endsection
