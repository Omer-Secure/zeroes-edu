@extends('main')
@section('con')
    <section class="heading-page header-text" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h6>كــافــة الــتــفــاصــيــل</h6>
                    <h2>{{ $course->course_name }}</h2>
                </div>
            </div>
        </div>
    </section>

    <section class="meetings-page" id="meetings">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="meeting-single-item">
                                <div class="thumb">
                                    <div class="price">
                                        <span>${{ $course->course_price }}</span>
                                    </div>
                                    <a href="#"><img src="{{ $course->course_img }}" alt=""></a>
                                </div>
                                <div class="down-content" dir="rtl">
                                    <h4>{{ $course->course_name }}</h4>
                                    <p>{{ $course->course_type }}</p>
                                    <p class="description">{{ $course->course_details }}</p>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="hours">
                                                <h5>عـدد الـسـاعـات</h5>
                                                <p>{{ $course->course_time }}</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="location">
                                                <h5>الـمـوقـع</h5>
                                                <p>Yemen - Hadramout,
                                                    <br>Mukalla, Ambikhah
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="book now">
                                                <h5>احـجـز الـأن</h5>
                                                <p>778-418-369 967+<br>701-378-330 967+</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="share">
                                                <h5>أنـضـم لـنـا</h5>
                                                <ul dir="ltr">
                                                    <li><a
                                                            href="https://www.instagram.com/cyber_zeroes?utm_source=...">instagram</a>,
                                                    </li>
                                                    <li><a href="https://t.me/CyberSec-Yembot">Telegram</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="main-button-red">
                                <a href="{{ route('home') }}#cys-courses">الـرجـو الى جـمـيـع الـكـورسـات</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
