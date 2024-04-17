@extends('main')
@section('con')
    <!-- ***** Main Banner Area Start ***** -->
    <section class="section main-banner" id="top" data-section="section1" dir="rtl">
        <video autoplay muted loop id="bg-video">
            <source src="assets/images/course-video.mp4" type="video/mp4" />
        </video>

        <div class="video-overlay header-text">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="caption">
                            <h6>اهلا بكم ايها الطلاب</h6>
                            <h2>مرحبا بكم في منصتنا التعليمية</h2>
                            <p>نحن هنا لنمنحكم افضل تجربة تعلم ممكنة في تقنية الملومات والأمن السيبراني خصوصا، استعدوا
                                لأكتشاف عالم المعرفة والابتكار. ستجدون موارد تعليمية شاملة ومثيرة للاهتمام. تعلموا بطرق
                                مبتكرة وممتعة وقوموا بتطوير مهاراتكم بشكل ممتع وتفاعلي.</p>
                            <div class="main-button-red">
                                <div class="scroll-to-section"><a href="#contact">أنضم لنا الأن</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Main Banner Area End ***** -->

    <section class="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="owl-service-item owl-carousel">

                        <div class="item">
                            <div class="icon">
                                <img src="assets/images/service-icon-01.png" alt="">
                            </div>
                            <div class="down-content">
                                <h4>تعليم متميز</h4>
                                <p></p>
                            </div>
                        </div>

                        <div class="item">
                            <div class="icon">
                                <img src="assets/images/service-icon-02.png" alt="">
                            </div>
                            <div class="down-content">
                                <h4>معلمين متميزين بكفاءة</h4>
                                <p></p>
                            </div>
                        </div>

                        <div class="item">
                            <div class="icon">
                                <img src="assets/images/service-icon-03.png" alt="">
                            </div>
                            <div class="down-content">
                                <h4>طلاب شغوفين متميزين</h4>
                                <p></p>
                            </div>
                        </div>

                        <div class="item">
                            <div class="icon">
                                <img src="assets/images/service-icon-02.png" alt="">
                            </div>
                            <div class="down-content">
                                <h4>كورسات تقنية سيبرانية</h4>
                                <p></p>
                            </div>
                        </div>

                        <div class="item">
                            <div class="icon">
                                <img src="assets/images/service-icon-03.png" alt="">
                            </div>
                            <div class="down-content">
                                <h4>معامل ومختبرات حديثة</h4>
                                <p></p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="upcoming-meetings" id="meetings">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>الـأجـتـمـاعـات والـنـدوات الـقـادمـة</h2>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="meeting-item">
                                <div class="thumb">
                                    <div class="price">
                                        <span>$2.00</span>
                                    </div>
                                    <img src="assets/images/cys.jpg" alt="New Lecturer Meeting">
                                </div>
                                <div class="down-content" dir="rtl">
                                    <div class="date">
                                        <h6>Nov <span>10</span></h6>
                                    </div>
                                    <h4>التهديدات السيبرانية وتقنيات الاختراق</h4>
                                    <p>تركز على تحليل التهديدات وتقنيات الهجمات السيبرانية وكيفية التصدي لها.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="meeting-item">
                                <div class="thumb">
                                    <div class="price">
                                        <span>$4.00</span>
                                    </div>
                                    <img src="assets/images/malware.jpg" alt="Online Teaching">
                                </div>
                                <div class="down-content" dir="rtl">
                                    <div class="date">
                                        <h6>Nov <span>24</span></h6>
                                    </div>
                                    <h4>تحليل البرمجيات الضارة والتحقق من الأمان</h4>
                                    <p>يركز على تقنيات اكتشاف وتحليل البرمجيات الضارة وطرق التحقق من أمان التطبيقات
                                        والأنظمة.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="our-courses" id="courses">
        <div class="container">
            <div class="row">

                <div class="col-lg-12" id="cys-courses">
                    <div class="section-heading">
                        <h2>الـكـورسـات والـدورات الـتـعـلـيـمـيـة الـسـيـبـرانـيـة</h2>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="owl-courses-item owl-carousel">
                        @foreach ($courses as $course)
                            @if ($course->course_type === 'Cyber Security')
                                <div class="item">
                                    <a href="{{ route('linux-course') }}">
                                        <img src="{{ $course->course_img }}" alt="Course One">
                                    </a>
                                    <div class="down-content">
                                        <a href="{{ route('linux-course') }}">
                                            <h4>{{ $course->course_name }}</h4>
                                        </a>
                                        <div class="info">
                                            <div class="row">
                                                <div class="col-8">
                                                    <ul>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="col-4">
                                                    <span>${{ $course->course_price }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>


                <div class="col-lg-12 mt-5" id="programming-courses">
                    <div class="section-heading">
                        <h2>الـكـورسـات والـدورات الـتـعـلـيـمـيـة الـبـرمـجـيـة</h2>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="owl-courses-item owl-carousel">
                        @foreach ($courses as $course)
                            @if ($course->course_type === 'Programming')
                                <div class="item">
                                    <a href="{{ route('linux-course') }}">
                                        <img src="{{ $course->course_img }}" alt="Course One">
                                    </a>
                                    <div class="down-content">
                                        <a href="{{ route('python-course') }}">
                                            <h4>{{ $course->course_name }}</h4>
                                        </a>
                                        <div class="info">
                                            <div class="row">
                                                <div class="col-8">
                                                    <ul>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="col-4">
                                                    <span>${{ $course->course_price }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="our-facts">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-12" dir="rtl">
                            <h2>بعض الحقائق عن منصتنا</h2>
                        </div>
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-12">
                                    <div class="count-area-content percentage">
                                        <div class="count-digit">94</div>
                                        <div class="count-title">الطلاب الناجحون</div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="count-area-content">
                                        <div class="count-digit">126</div>
                                        <div class="count-title">المعلميين الحاليين</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-12">
                                    <div class="count-area-content new-students">
                                        <div class="count-digit">2345</div>
                                        <div class="count-title">الطلاب الجدد</div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="count-area-content">
                                        <div class="count-digit">32</div>
                                        <div class="count-title">الانجازات والجوائز</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 align-self-center">
                    <div class="video">
                        <a href="https://www.youtube.com/watch?v=HndV87XpkWg" target="_blank"><img
                                src="assets/images/play-icon.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-us" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 align-self-center">
                    <div class="row">
                        <div class="col-lg-12">
                            <form id="contact" action="contact.php" method="post">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h2>تواصل معنا الان</h2>
                                    </div>
                                    <div class="col-lg-4">
                                        <fieldset>
                                            <input name="name" type="text" id="name"
                                                placeholder="YOURNAME...*" required="">
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-4">
                                        <fieldset>
                                            <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*"
                                                placeholder="YOUR EMAIL..." required="">
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-4">
                                        <fieldset>
                                            <input name="subject" type="text" id="subject"
                                                placeholder="SUBJECT...*" required="">
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-12">
                                        <fieldset>
                                            <textarea name="message" type="text" class="form-control" id="message" placeholder="YOUR MESSAGE..."
                                                required=""></textarea>
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-12" dir="rtl">
                                        <fieldset>
                                            <button type="submit" id="form-submit" class="button">أرسل الرسالة
                                                الأن</button>
                                        </fieldset>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" dir="rtl">
                    <div class="right-info text-center">
                        <ul>
                            <li>
                                <h6>رقم الهاتف</h6>
                                <span>{{ $zerodetails->number_phone }}</span>
                            </li>
                            <li>
                                <h6>عنوان البريد الالكتروني</h6>
                                <span>{{ $zerodetails->email }}</span>
                            </li>
                            <li>
                                <h6>عنوان الشارع</h6>
                                <span>{{ $zerodetails->location }}</span>
                            </li>
                            <li>
                                <h6>عنوان URL</h6>
                                <span>{{ $zerodetails->url }}</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
