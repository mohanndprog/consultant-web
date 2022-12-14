<!DOCTYPE html>
<html lang="en">
<head>
    <title>Apply To Teach</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/stylesheet.css') }}">
    <link rel="stylesheet" href="{{ asset('css/language.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<header>
    <div class="logo">
        <img src="images/logo.PNG" class="img-fluid">
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
</header>
    <section class="banner-section">
        <div class="banner-background inner-banner">
            <img src="images/banner1.jpg">
        </div>
        <div class="banner-caption">
            <h1>Apply To Teach</h1>
            <p>Teach what you are passionate about.</p>
            <div class="banner-form">
                <form>
                    <a href="/register/consultant"><button type="button" class="btn btn-primary btn-lg">Register Now with Email</button></a>
                </form>
            </div>
            <div class="row justify-content-center">
                <p class="apply-policy">
                    By signing up with Yo!Coach, you agree to
                    <a href="#" class="color-primary">Terms & Conditions</a> and
                    <a href="#" class="color-primary">Privacy Policy</a>
                </p>
            </div>
        </div>
    </section>
    <section class="services-section">
        <div class="container container--narrow">
            <div class="section__head">
                <h2>Benefits to become a tutor on Yo!Coach?</h2>
            </div>
            <div class="section__body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="service">
                            <div class="service__media feature-section">
                                <img src="images/services-icon-1.png" class="img-fluid">
                            </div>
                            <div class="service__content">
                                <h3>Professional Tutors</h3>
                                <p>Choose from over a myriad of professional & experienced teachers to be fluent in any language.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="service">
                            <div class="service__media feature-section">
                                <img src="images/services-icon-2.png" class="img-fluid">
                            </div>
                            <div class="service__content">
                                <h3>1-on-1 Live sessions</h3>
                                <p>Connect with your teachers via 1-on-1 live chat sessions and build a deeper understanding of a language.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
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
                    <div class="col-md-6">
                        <div class="service">
                            <div class="service__media feature-section">
                                <img src="images/services-icon-4.png" class="img-fluid">
                            </div>
                            <div class="service__content">
                                <h3>Convenience & Flexibility</h3>
                                <p>Schedule lessons as per your availability and learn at your own pace with no constraints of time and place.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
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
                    <div class="col-md-6">
                        <div class="service">
                            <div class="service__media feature-section">
                                <img src="images/services-icon-4.png" class="img-fluid">
                            </div>
                            <div class="service__content">
                                <h3>Convenience & Flexibility</h3>
                                <p>Schedule lessons as per your availability and learn at your own pace with no constraints of time and place.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="teach-over-countries-section">
        <div class="container container--narrow">
            <div class="row justify-content-between">
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="section__head align-left margin-bottom-5">
                        <h2>Teach students from over 180 countries</h2>
                    </div>
                    <ul class="list-group list-group--line margin-bottom-5">
                        <li class="list-group--item">
                            Steady stream of new students
                        </li>
                        <li class="list-group--item">
                            Smart calendar
                        </li>
                        <li class="list-group--item">
                            Interactive classroom
                        </li>
                        <li class="list-group--item">
                            Convenient payment methods
                        </li>
                        <li class="list-group--item">
                            Training webinars
                        </li>
                        <li class="list-group--item">
                            Supportive tutor community
                        </li>
                    </ul>
                    <button class="btn btn--secondary">Apply to Teach</button>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="media_group">
                        <div class="media_group--item">
                            <div class="ratio ratio--4by3">
                                <img src="images/image-1.png" class="img-fluid">
                            </div>
                        </div>
                        <div class="media_group--item media_group--item-small">
                            <div class="ratio ratio--4by3">
                                <img src="images/image-2.png" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="way-to-become-consultant">
        <div class="container container--narrow">
            <div class="section__head ">
                <h2>How to become a tutor on Yo!Coach?</h2>
            </div>
            <div class="section__body">
                <div class="service--wrapper">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="service service--vertical">
                                <div class="service__media">
                                    <img src="images/register.png" class="img-fluid">
                                </div>
                                <div class="service__content">
                                    <h3><span>01.</span> Register on Yo!Coach</h3>
                                    <p>Excepteur sint proident, occaecat cupidatat non proident, culpa qui officia velit, sed quia non deseruntadipisci proident,</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="service service--vertical">
                                <div class="service__media">
                                    <img src="images/cv.png" class="img-fluid">
                                </div>
                                <div class="service__content">
                                    <h3><span>02.</span> Complete Profile</h3>
                                    <p>Excepteur sint proident, occaecat cupidatat non proident, culpa qui officia velit, sed quia non deseruntadipisci proident,.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="service service--vertical">
                                <div class="service__media">
                                    <img src="images/online-learning.png" class="img-fluid">
                                </div>
                                <div class="service__content">
                                    <h3><span>03.</span> Start Teaching</h3>
                                    <p>Excepteur sint proident, occaecat cupidatat non proident, culpa qui officia velit, sed quia non deseruntadipisci proident,</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="find-consultant-section">
        <div class="container container--narrow">
            <div class="cta-content inner-page">
                <h2>Do you want to become a teacher on Yo!Coach?</h2>
                <p>Connect with thousands of learners around the world and teach from your living room</p>
                <a href="#" class="btn btn--secondary btn--large">Apply Now</a>
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
                                    <div class="settings-group">
                                        @include('language')
                                    </div>
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
                        Copyright ?? 2021 <a href="#">Yo!Coach</a> Developed by <a href="#" class="underline color-primary">SahaSol</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>




    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{ asset('Js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('Js/language.js') }}"></script>
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
