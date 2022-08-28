<!DOCTYPE html>
<html lang="en">
<head>
    <title>Consultation</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/stylesheet.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('css/language.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
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
                        <a class="nav-link" href="{{ route('group-classes') }}">Group Classes</a>
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

    <section class="group-class-detail-page">
        <div class="container container--fixed">
            <div class="breadcrumb-list">
                <ul>
                    <li>
                        <a href="#">Home</a>
                    </li>
                    <li>
                        <a href="group-classes.html">Group Classes</a>
                    </li>
                    <li>{{ $class->title }}</li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-7 col-lg-8 col-xl-7">
                    <div class="group-primary">
                        <div class="group-primary__head">
                            <h3>{{ $class->title }}</h3>
                            <span class="date">{{ date('F j, Y', strtotime($class->start_date)) }}</span>
                        </div>
                        <div class="group-primary__body">
                            <div class="group-listing">
                                <ul>
                                    <li>
                                        <i class='fas fa-book-open icon'></i>
                                        <p><b>Topic</b> - {{ $class->subject }}</p>
                                    </li>
                                    <li>
                                        <i class="fa fa-clock-o icon" aria-hidden="true"></i>
                                        {{-- get time only --}}
                                        <p><b>Time </b> - {{ date('h:i A', strtotime($class->start_date)) }} - {{ date('h:i A', strtotime($class->end_date)) }}</p>
                                    </li>
                                    <li>
                                        <i class='fas fa-chair icon'></i>
                                        <p><b>Total Seats </b> - {{ $class->total_seats }}</p>
                                    </li>
                                    <li>
                                        <i class="fa fa-tag icon" aria-hidden="true"></i>
                                        <p><b>Price </b> -  ${{ $class->price }}</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="group-actions">
                                <a href="#" class="btn btn--primary btn--large color-white" data-toggle="modal" data-target="#bookingModel">Book Now</a>
                            </div>
                            <div class="modal fade bookingModel" id="bookingModel" >
                                <div class="modal-dialog bookingModel-dialog" role="document">
                                    <div class="modal-content bookingModel-content">
                                        <div class="modal-header bookingModel-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Book Your Group Class</h5>
                                            <button type="button" class="close bookingModel-close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body bookingModel-body">
                                            <div class="row">
                                                <form class="booking-content-form col-xl-4 col-lg-4 col-md-4 col-sm-12 ">
                                                    <div class="booking-content-form-div">
                                                        <h3>Payment Method</h3>
                                                        <div class="form-check booking-slot">
                                                            <input class="form-check-input" type="radio" name="payment-method" id="wallet" checked>
                                                            <label class="form-check-label" for="wallet">
                                                                Wallet Credit
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="payment-method" id="paypal" >
                                                            <label class="form-check-label" for="paypal">
                                                                Paypal
                                                            </label>
                                                        </div>
                                                    </div>
                                                </form>
                                                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
                                                    <div class="booking-content-form-div order-summery-section">
                                                        <h3>Order Summery</h3>
                                                        <div class="order-summery">
                                                            <div class="order-summery-div">
                                                                <h6>Class Name</h6>
                                                                <span>Group Class on daily usage vocabulary</span>
                                                            </div>
                                                            <div class="order-summery-div">
                                                                <h6>Time</h6>
                                                                <span>11:15 AM - 12:15 PM</span>
                                                            </div>
                                                            <div class="order-summery-div">
                                                                <h6>Payment Method:</h6>
                                                                <span>Wallet Credit</span>
                                                            </div>
                                                            <div class="order-summery-div">
                                                                <h6>Price</h6>
                                                                <span>$30.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="modal-footer bookingModel-footer">
                                            <button type="button" class="btn btn--primary ">Conform</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="course-details">
                        <h3>Course Details</h3>
                        <p>{{ $class->description }}</p>
                    </div>
                </div>
                <div class="col-md-5 col-lg-4 offset-xl-1">
                    <div class="group-secondary">
                        <div class="box">
                            <div class="box__body">
                                <h3>About The Host</h3>
                                <div class="box-profile">
                                    <div class="tile">
                                        <div class="tile__head">
                                            <div class="tile__media ratio ratio--1by1">
                                                <img src="images/consultant-1.jpg" class="img-fluid">
                                            </div>
                                        </div>
                                        <div class="tile__body">
                                            <a href="#" class="tile__title"><h4>{{ $class->consultant->name }}</h4></a>
                                            <div class="info-wrapper">
                                                <div class="info-tag location">
                                                    <i class="fa fa-map-marker icon icon--location" aria-hidden="true"></i>
                                                    <span class="lacation__name">{{ $class->consultant->consultant->country }}</span>
                                                </div>
                                                <div class="info-tag ratings">
                                                    <i class="fa fa-star icon icon--rating" aria-hidden="true"></i>
                                                    <span class="value">3.74</span>
                                                    <span class="count">(1)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box-actions">
                                <a href="#" class="btn color-primary">
                                    <i class="fa fa-envelope icon icon--email_1"></i>
                                    Contact
                                </a>
                                <a href="#" class="btn color-primary">
                                    <i class="fa fa-user icon icon--email_1"></i>
                                    Profile
                                </a>
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
                                            <span><a href="https://g.page/FATbit?share">A-712, FATbit Technologies, Bestech Business Towers, Mohali, Punjab, India</a></span>
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
                        Copyright © 2021 <a href="#">Yo!Coach</a> Developed by <a href="#" class="underline color-primary">SahaSol</a>
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
