<!DOCTYPE html>
<html lang="en">

<head>
    <title>Consultation</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('css/stylesheet.css') }}">
    <link rel="stylesheet" href="{{ asset('css/language.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"
        integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

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
<div class="section--gray">
    <div class="main__head consultant-page">
        <div class="container container--narrow">
            <form>
                <div class="form-group filter-colum">
                    <select class="form-control" name="findCourse" id="findCourse">
                        <option value="">All Topics</option>
                        @foreach($allCourses as $course)
                        <option value="{{ $course->id }}">{{ $course->course_name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group filter-colum">
                    <select class="form-control" name="filterAvailability" id="filterAvailability">
                        <option value="">Availability</option>
                        <option value="sun">Sunday</option>
                        <option value="mon">Monday</option>
                        <option value="tue">Tuesday</option>
                        <option value="wed">Wednesday</option>
                        <option value="thu">Thursday</option>
                        <option value="fri">Friday</option>
                        <option value="sat">Saturday</option>
                    </select>
                </div>
                <div class="form-group filter-colum">
                    <select class="form-control" name="filterPrice" id="filterPrice">
                        <option value="">Price</option>
                        <option value="0-50">$0 - $50</option>
                        <option value="51-100">$50 - $100</option>
                        <option value="101-150">$100 - $150</option>
                        <option value="151-200">$150 - $200</option>
                        <option value="201-500">More than $200</option>
                    </select>
                </div>
                <div class="form-group filter-colum filter-colum--large">
                    <form action="{{ route('searchConsultants') }}" method="GET">
                    <input type="text" placeholder="Search By Name And Keyword" name="search" id="search">
                        <button type="submit"><i class="fa fa-search icon icon--search search-group-class-js"></i></button>
                    </form>
                </div>
            </form>
            <form class="filter-secondary">
                <div class="filter-row">
                    <div class="filter-colum">
                        <select class="form-control filter" name="findCountry" id="findCountry">
                            <option value="">Location</option>
                            @foreach ($location as $consultant)
                                <option value="{{ $consultant->country }}">{{ $consultant->country }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="filter-colum">
                        <select class="form-control filter" name="findGender" id="findGender">
                            <option value="">Gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>
                    <div class="filter-colum">
                        <select class="form-control filter">
                            <option>Level</option>
                            <option>Beginner</option>
                            <option>Intermediate</option>
                            <option>Advanced</option>
                        </select>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="main__body">

        <section class="section--upcoming-class">
            <div class="container container--narrow">
                <div class="listing-cover">
                    @include('find-consultants-details')
                </div>
            </div>
        </section>
    </div>
</div>
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
                    <img src="{{ asset('images/logo.PNG') }}" class="img-fluid">
                </div>
                <p>
                    Copyright © 2021
                    <a href="#">Yo!Coach</a>
                    Developed by
                    <a href="#" class="underline color-primary">SahaSol</a>
                </p>
            </div>
        </div>
    </div>
</footer>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
    integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="{{ asset('Js/bootstrap.min.js') }}"></script>
<script src="{{ asset('Js/language.js') }}"></script>
<script src="{{ asset('student/js/custom.js') }}"></script>
<script src="{{ asset('Js/toastr.js') }}"></script>

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

@if (Session::get('success'))
<script>
    toastr.success("{!! Session::get('success') !!}");
</script>
@elseif (Session::get('error'))
<script>
    toastr.error("{!! Session::get('error') !!}");
</script>
@endif
</body>

</html>
