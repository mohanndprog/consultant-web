<!DOCTYPE html>
<html lang="en">

<head>
    <title>Consultation</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/stylesheet.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('css/language.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <header>
        <div class="logo">
            <a href="/"><img src="{{ asset('images/logo.PNG') }}" class="img-fluid"></a>
        </div>
        <div class="main-nav">
            <nav class="navbar navbar-expand-lg navbar-light">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="group-classes.html">Group Classes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('searchConsultants') }}">Find Consultants</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('apply-to-teach') }}">Apply to teach</a>
                        </li>

                        @include('layouts.auth-check')

                    </ul>
                </div>
            </nav>
        </div>

    </header>
    <section class="banner-section">
        <div class="banner-background">
            <div id="demo" class="carousel slide" data-ride="carousel">
                <ul class="carousel-indicators">
                    <li data-target="#demo" data-slide-to="0" class="active"></li>
                    <li data-target="#demo" data-slide-to="1"></li>
                    <li data-target="#demo" data-slide-to="2"></li>
                    <li data-target="#demo" data-slide-to="3"></li>
                </ul>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="images/banner4.jpg">
                    </div>
                    <div class="carousel-item">
                        <img src="images/banner3.jpg">
                    </div>
                    <div class="carousel-item">
                        <img src="images/banner2.jpg">
                    </div>
                    <div class="carousel-item">
                        <img src="images/banner1.jpg">
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-caption">
            <h1>Master Any Language with Online Tutors</h1>
            <p>Learn any language at any time from anywhere.</p>
            <div class="banner-form">
                <form>
                    <div class="form-group">
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option>Search Consultation topic</option>
                            <option>Health</option>
                            <option>Medical</option>
                            <option>Sports</option>
                            <option>Marriage</option>
                            <option>Family</option>
                            <option>Job</option>
                            <option>Business</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Find a consultant</button>
                </form>
            </div>
            <div class="tags-inline">
                <b>Popular:</b>
                <ul>
                    <li class="tags-inline__item">
                        <a href="#">Health,</a>
                    </li>
                    <li class="tags-inline__item">
                        <a href="#">Medical,</a>
                    </li>
                    <li class="tags-inline__item">
                        <a href="#">Sports,</a>
                    </li>
                    <li class="tags-inline__item">
                        <a href="#">Marriage,</a>
                    </li>
                    <li class="tags-inline__item">
                        <a href="#">Family</a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section class="services-section">
        <div class="container container--narrow">
            <div class="section__head">
                <h2>We make learning easy & simpler</h2>
            </div>
            <div class="section__body">
                <div class="row">
                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                        <div class="service">
                            <div class="service__media feature-section">
                                <img src="images/services-icon-1.png" class="img-fluid">
                            </div>
                            <div class="service__content">
                                <h3>Professional Tutors</h3>
                                <p>Choose from over a myriad of professional & experienced teachers to be fluent in any
                                    language.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                        <div class="service">
                            <div class="service__media feature-section">
                                <img src="images/services-icon-2.png" class="img-fluid">
                            </div>
                            <div class="service__content">
                                <h3>1-on-1 Live sessions</h3>
                                <p>Connect with your teachers via 1-on-1 live chat sessions and build a deeper
                                    understanding of a language.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                        <div class="service">
                            <div class="service__media feature-section">
                                <img src="images/services-icon-3.png" class="img-fluid">
                            </div>
                            <div class="service__content">
                                <h3>Group Classes</h3>
                                <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                        <div class="service">
                            <div class="service__media feature-section">
                                <img src="images/services-icon-4.png" class="img-fluid">
                            </div>
                            <div class="service__content">
                                <h3>Convenience & Flexibility</h3>
                                <p>Schedule lessons as per your availability and learn at your own pace with no
                                    constraints of time and place.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="consultation-topics-section">
        <div class="container container--narrow">
            <div class="section__head">
                <h2>What do you want to learn from our consultants?</h2>
            </div>
            <div class="section__body">
                <div class="topic-wrapper">
                    @foreach ($allCourses as $courses)
                        <div class="topic-box">
                            <a class="#">
                                <div class="topic-media">
                                    <img src="{{ asset('profile/' . $courses->image) }}" class="img-fluid" alt="No Image">
                                </div>
                                <div class="topic-name">
                                    <span>{{ $courses->course_name }}</span>
                                    <div class="lesson-count">
                                        {{ $courses->consultantCount }} Consultants
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
                <div class="more-info align-center">
                    <p>Different Language Note <a href="{{ route('searchConsultants') }}">Browse Them Now</a></p>
                </div>
            </div>
        </div>
    </section>
    <section class="services-section">
        <div class="container container--narrow">
            <div class="section__head">
                <h2>Get to know some of our popular consultants</h2>
            </div>
            <div class="section__body">
                <div class="consultants-wrapper">
                    <div class="row">
                        @foreach ($consultants as $consultant)
                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                                <div class="tile">
                                    <div class="tile__head">
                                        <div class="tile__media ratio ratio--1by1">
                                            <img src="{{ asset('profile/' . $consultant->consultant->image) }}" alt="No Image" class="img-fluid">
                                        </div>
                                    </div>
                                    <div class="tile__body">
                                        <a href="#" class="tile__title">
                                            <h4>{{ $consultant->name }}</h4>
                                        </a>
                                        <div class="info-wrapper">
                                            <div class="info-tag location">
                                                <i class="fa fa-map-marker icon icon--location" aria-hidden="true"></i>
                                                <span class="lacation__name">{{ $consultant->consultant->country }}</span>
                                            </div>
                                            <div class="info-tag ratings">
                                                <i class="fa fa-star icon icon--rating" aria-hidden="true"></i>
                                                <span class="value">4.00</span>
                                                <span class="count">({{ $consultant->studentCount }})</span>
                                            </div>
                                        </div>
                                        <div class="card__row--action ">
                                            <a href="/consultant_profile/{{ $consultant->id }}"" class="btn btn--primary btn--block">View
                                                Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="find-consultant-section">
        <div class="container container--narrow">
            <div class="cta-content">
                <h2>Speak any language fluently with the help of professional tutors</h2>
                <a href="Consultant.html" class="btn btn--secondary btn--large">Browse Consultant</a>
            </div>
        </div>
    </section>
    <section class="section--upcoming-class">
        <div class="container container--narrow">
            <div class="section__head d-flex justify-content-between align-items-center">
                <h2>Upcoming Group Classes</h2>
                <a href="group-classes.html" class="view-all">View All</a>
            </div>
            <div class="section__body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="group-class-card">
                            <div class="card__head">
                                <h2>Group class on daily usage vocabulary</h2>
                            </div>
                            <div class="card__body">
                                <div class="card__row">
                                    <span>Date & time</span>
                                    <p>Oct 18, 2021,11:15 AM-12:15 PM</p>
                                </div>
                                <div class="card__row">
                                    <span>Tutor</span>
                                    <p>Andrew Glick</p>
                                </div>
                                <div class="card__row">
                                    <span>Price</span>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <p class="class-price"> $10.00</p>
                                        <div class="timer">
                                            <div class="timer__media">
                                                <span><i class="fa fa-clock-o"></i></span>
                                            </div>
                                            <div
                                                class="timer__controls countdowntimer timer-js style colorDefinition size_sm">
                                                25:10:00:59</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card__row--action">
                                    <a href="group-classes-detail-page.html"
                                        class="btn btn--bordered color-primary">View Details</a>
                                    <a href="#" class="btn btn--primary">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="group-class-card">
                            <div class="card__head">
                                <h2>Group class on daily usage vocabulary</h2>
                            </div>
                            <div class="card__body">
                                <div class="card__row">
                                    <span>Date & time</span>
                                    <p>Oct 18, 2021,11:15 AM-12:15 PM</p>
                                </div>
                                <div class="card__row">
                                    <span>Tutor</span>
                                    <p>Andrew Glick</p>
                                </div>
                                <div class="card__row">
                                    <span>Price</span>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <p class="class-price"> $10.00</p>
                                        <div class="timer">
                                            <div class="timer__media">
                                                <span><i class="fa fa-clock-o"></i></span>
                                            </div>
                                            <div
                                                class="timer__controls countdowntimer timer-js style colorDefinition size_sm">
                                                25:10:00:59</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card__row--action">
                                    <a href="group-classes-detail-page.html"
                                        class="btn btn--bordered color-primary">View Details</a>
                                    <a href="#" class="btn btn--primary">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="group-class-card">
                            <div class="card__head">
                                <h2>Group class on daily usage vocabulary</h2>
                            </div>
                            <div class="card__body">
                                <div class="card__row">
                                    <span>Date & time</span>
                                    <p>Oct 18, 2021,11:15 AM-12:15 PM</p>
                                </div>
                                <div class="card__row">
                                    <span>Tutor</span>
                                    <p>Andrew Glick</p>
                                </div>
                                <div class="card__row">
                                    <span>Price</span>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <p class="class-price"> $10.00</p>
                                        <div class="timer">
                                            <div class="timer__media">
                                                <span><i class="fa fa-clock-o"></i></span>
                                            </div>
                                            <div
                                                class="timer__controls countdowntimer timer-js style colorDefinition size_sm">
                                                25:10:00:59</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card__row--action">
                                    <a href="group-classes-detail-page.html"
                                        class="btn btn--bordered color-primary">View Details</a>
                                    <a href="#" class="btn btn--primary">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="get-started-section">
        <div class="container container--narrow">
            <div class="section__head">
                <h2>How To Start Learning?</h2>
            </div>
            <div class="section__body">
                <div class="step-wrapper">
                    <div class="step-container__head">
                        <div class="nav flex-row nav-pills" id="v-pills-tab" role="tablist"
                            aria-orientation="horizontal">
                            <a class="nav-link active" id="v-pills-search-tab" data-toggle="pill" href="#v-pills-search"
                                role="tab" aria-controls="v-pills-search" aria-selected="true">Search</a>
                            <a class="nav-link" id="v-pills-book-tab" data-toggle="pill" href="#v-pills-book" role="tab"
                                aria-controls="v-pills-book" aria-selected="false">Book</a>
                            <a class="nav-link" id="v-pills-learn-tab" data-toggle="pill" href="#v-pills-learn"
                                role="tab" aria-controls="v-pills-learn" aria-selected="false">Learn</a>
                        </div>
                    </div>
                    <div class="step-container__body">
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-search" role="tabpanel"
                                aria-labelledby="v-pills-search-tab">
                                <div class="step">
                                    <div class="row">
                                        <div class="col-md-6 col-lg-5 col-xl-6">
                                            <div class="step__inner">
                                                <div class="step__media">
                                                    <img src="images/direction-1.png" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-5 col-xl-6">
                                            <div class="step__content">
                                                <h3>Search</h3>
                                                <p>Go through teachers’ profiles and choose your language tutor</p>
                                                <div class="step__actions">
                                                    <a href="#" class="btn btn--primary">Browse</a>
                                                    <a href="https://www.youtube.com/watch?v=q_Fy8DceWZM"
                                                        class="btn-video">
                                                        <div class="icon-play"></div>
                                                        <span>Watch Video</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-book" role="tabpanel"
                                aria-labelledby="v-pills-book-tab">
                                <div class="step">
                                    <div class="row">
                                        <div class="col-md-6 col-lg-5 col-xl-6">
                                            <div class="step__inner">
                                                <div class="step__media">
                                                    <img src="images/direction-2.png" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-5 col-xl-6">
                                            <div class="step__content">
                                                <h3>Book</h3>
                                                <p>Check the teacher’s availability and schedule a lesson.</p>
                                                <div class="step__actions">
                                                    <a href="#" class="btn btn--primary">Browse</a>
                                                    <a href="https://www.youtube.com/watch?v=q_Fy8DceWZM"
                                                        class="btn-video">
                                                        <div class="icon-play"></div>
                                                        <span>Watch Video</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-learn" role="tabpanel"
                                aria-labelledby="v-pills-learn-tab">
                                <div class="step">
                                    <div class="row">
                                        <div class="col-md-6 col-lg-5 col-xl-6">
                                            <div class="step__inner">
                                                <div class="step__media">
                                                    <img src="images/direction-3.png" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-5 col-xl-6">
                                            <div class="step__content">
                                                <h3>Learn</h3>
                                                <p>Start your personalized language learning with live sessions.</p>
                                                <div class="step__actions">
                                                    <a href="#" class="btn btn--primary">Browse</a>
                                                    <a href="https://www.youtube.com/watch?v=q_Fy8DceWZM"
                                                        class="btn-video">
                                                        <div class="icon-play"></div>
                                                        <span>Watch Video</span>
                                                    </a>
                                                </div>
                                            </div>
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
    <section class="blog-section">
        <div class="container container--narrow">
            <div class="section__head d-flex justify-content-between align-items-center">
                <h2>Latest Blogs</h2>
                <a href="#" class="view-all">View All</a>
            </div>
            <div class="section__body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="blog-card">
                            <div class="blog__head">
                                <div class="blog__media ratio--4by3">
                                    <img src="images/blog-1.png" class="img-fluid">
                                </div>
                            </div>
                            <div class="blog__body">
                                <div class="blog__detail">
                                    <div class="tags-inline__item">
                                        elearning
                                    </div>
                                    <div class="blog__title">
                                        <h3>The Ultimate Guide to Starting Your eLearning Business</h3>
                                    </div>
                                    <div class="blog__date">
                                        <i class="fa fa-calendar icon icon--calendar" aria-hidden="true"></i>
                                        <span>2020-11-28 </span>
                                    </div>
                                    <a href="#" class="btn btn--secondary color-white">View blog</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="blog-card">
                            <div class="blog__head">
                                <div class="blog__media ratio--4by3">
                                    <img src="images/blog-2.png" class="img-fluid">
                                </div>
                            </div>
                            <div class="blog__body">
                                <div class="blog__detail">
                                    <div class="tags-inline__item">
                                        elearning
                                    </div>
                                    <div class="blog__title">
                                        <h3>The Ultimate Guide to Starting Your eLearning Business</h3>
                                    </div>
                                    <div class="blog__date">
                                        <i class="fa fa-calendar icon icon--calendar" aria-hidden="true"></i>
                                        <span>2020-11-28 </span>
                                    </div>
                                    <a href="#" class="btn btn--secondary color-white">View blog</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer">
        <section class="section--footer">
            <div class="container container--narrow">
                <div class="row footer--row">
                    <div class="col-md-6 col-lg-3">
                        <div class="footer-group toggle-group">
                            <div class="footer__group-title toggle-trigger-js">
                                <h5>Support</h5>
                            </div>
                            <div class="footer__group-content toggle-target-js">
                                <div class="bullet-list">
                                    <ul class="footer_contact_details">
                                        <li>
                                            <i class="fa fa-envelope icon icon--email" aria-hidden="true"></i>
                                            <span><a href="mailto:sales@fatbit.com">sales@fatbit.com</a></span>
                                        </li>
                                        <li>
                                            <i class="fa fa-phone icon icon--phone" aria-hidden="true"></i>
                                            <span>Call Us:<a href="tel:+91 95555 96666"> +91 95555 96666</a></span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="footer-group toggle-group">
                            <div class="footer__group-title toggle-trigger-js">
                                <h5>Contact</h5>
                            </div>
                            <div class="footer__group-content toggle-target-js">
                                <div class="bullet-list">
                                    <ul class="footer_contact_details">
                                        <li>
                                            <i class="fa fa-map-marker icon icon--pin" aria-hidden="true"></i>
                                            <span><a href="https://g.page/FATbit?share">A-712, FATbit Technologies,
                                                    Bestech Business Towers, Mohali, Punjab, India</a></span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="footer-group toggle-group">
                            <div class="footer__group-title toggle-trigger-js">
                                <h5>Social</h5>
                            </div>
                            <div class="footer__group-content toggle-target-js">
                                <div class="bullet-list">
                                    <ul class="footer_social-links">
                                        <li>
                                            <a href="#" target="_blank">
                                                <img src="images/facebook-icon.png" class="img-fluid">
                                                <span>Facebook</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank">
                                                <img src="images/twitter-icon.png" class="img-fluid">
                                                <span>Twitter</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank">
                                                <img src="images/insta-icon.png" class="img-fluid">
                                                <span>Instagram</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank">
                                                <img src="images/pintrest-icon.png" class="img-fluid">
                                                <span>Pintrest</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank">
                                                <img src="images/youtube-icon.png" class="img-fluid">
                                                <span>Youtube</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="footer-group toggle-group">
                            <div class="footer__group-title toggle-trigger-js">
                                <h5>Language & Currency</h5>
                            </div>
                            <div class="footer__group-content toggle-target-js">
                                <div class="bullet-list">
                                    @include('language')
                                    <div class="settings-group">
                                        <div class="settings toggle-group">
                                            <form>
                                                <div class="form-group">
                                                    <select class="form-control" id="exampleFormControlSelect3">
                                                        <option>USD</option>
                                                        <option>EUR</option>
                                                        <option>Rs</option>
                                                    </select>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row footer--row">
                    <div class="col-md-6 col-lg-3">
                        <div class="footer-group toggle-group">
                            <div class="footer__group-title toggle-trigger-js">
                                <h5>Support</h5>
                            </div>
                            <div class="footer__group-content toggle-target-js">
                                <div class="bullet-list">
                                    <ul>
                                        <li>
                                            <a href="#" class="bullet-list__action">About</a>
                                        </li>
                                        <li>
                                            <a href="#" class="bullet-list__action">FAQs</a>
                                        </li>
                                        <li>
                                            <a href="#" class="bullet-list__action">Contact Us</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="footer-group toggle-group">
                            <div class="footer__group-title toggle-trigger-js">
                                <h5>Other</h5>
                            </div>
                            <div class="footer__group-content toggle-target-js">
                                <div class="bullet-list">
                                    <ul>
                                        <li>
                                            <a href="#" class="bullet-list__action">Apply to Teach</a>
                                        </li>
                                        <li>
                                            <a href="#" class="bullet-list__action">Terms and Conditions</a>
                                        </li>
                                        <li>
                                            <a href="#" class="bullet-list__action">Privacy And Policy</a>
                                        </li>
                                        <li>
                                            <a href="#" class="bullet-list__action">Blog</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="footer-group toggle-group">
                            <div class="footer__group-title toggle-trigger-js">
                                <h5>Signup To Newsletter</h5>
                            </div>
                            <div class="footer__group-content toggle-target-js">
                                <div class="email-field">
                                    <input type="email" name="email" placeholder="Enter Email">
                                    <i class="fa fa-envelope icon icon--envelope" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row footer--row">
                    <div class="col-md-12">
                        <div class="footer-group toggle-group">
                            <div class="footer__group-title toggle-trigger-js">
                                <h5>Consultation topics</h5>
                            </div>
                            <div class="footer__group-content toggle-target-js">
                                <div class="footer__group-tag">
                                    <div class="tags-inline__item">
                                        <a href="#">Sports</a>
                                    </div>
                                    <div class="tags-inline__item">
                                        <a href="#">Business</a>
                                    </div>
                                    <div class="tags-inline__item">
                                        <a href="#">Medical</a>
                                    </div>
                                    <div class="tags-inline__item">
                                        <a href="#">Health</a>
                                    </div>
                                    <div class="tags-inline__item">
                                        <a href="#">Family</a>
                                    </div>
                                    <div class="tags-inline__item">
                                        <a href="#">Marriage</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="section-copyright">
            <div class="container container--narrow">
                <div class="copyright">
                    <div class="footer__logo">
                        <img src="images/logo.PNG" class="img-fluid">
                    </div>
                    <p>
                        Copyright © 2021 <a href="#">Yo!Coach</a> Developed by <a href="#"
                            class="underline color-primary">SahaSol</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>




    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="Js/bootstrap.min.js"></script>
    <script src="{{ asset('Js/language.js') }}"></script>

    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
    </script>

    <script>
        function showRegistrationDropdown() {
            let x = document.getElementById("showRegistrationDropdown");
            if (x.style.display === "block") {
                x.style.display = "none";
            } else {
                x.style.display = "block";
            }
        }
    </script>

</body>

</html>
