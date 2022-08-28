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
                            <a class="nav-link" href="apply-to-teach.html">Apply to teach</a>
                        </li>
                        <div class="dropdown">
                            <button class="Signup-btn" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Sign Up
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                <a href="/register/student" class="dropdown-item register-btn">Sign up as Learner</a>
                                <a href="/register/consultant" class="dropdown-item register-btn">Sign up as consultant</a>
                            </div>
                        </div>
                    </ul>
                </div>
            </nav>
        </div>

        @if(Auth::check())

            <div class="content-wrapper">
                <ul class="custom-container">
                    <button href="#" class="Signup-btn" onclick="showRegistrationDropdown()"><img
                            src="{{ asset('admin/images/Image.png') }}" alt="">
                        {{ Auth::user()->name }}
                    </button>
                    <div id="showRegistrationDropdown" class="signup-dropdown-div">
                        <li class="nav-item dropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    </div>
                </ul>
            </div>

        @else



        @endif

    </header>
    <section class="login-page-section">
        <div class="container container--narrow">
            <!-- MultiStep Form -->
            <div class="row justify-content-center">
                <div class="col-10 col-sm-10 col-md-8 col-lg-8 col-xl-8 col-xxl-8">
                    <div class="row">
                        <div class="col-md-12 mx-0">
                            <!-- progressbar -->
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 form-fields">
                                    <div class="form-name login-page">
                                        <h2>Login</h2>
                                    </div>
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="form-card row justify-content-center no-gutters">
                                            <div class="col-md-12 col-lg-10 col-xl-8">
                                                <div class="block-content">
                                                    <div class="block-content__body">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="field-set">
                                                                    <div class="caption-wraper">
                                                                        <label class="field_label">
                                                                            Email
                                                                            <span class="spn_must_field">*</span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="field-wraper">
                                                                        <div class="field_cover">
                                                                            <input type="email" name="email" required
                                                                                class="@error('email') is-invalid @enderror">
                                                                            <span class="invalid-feedback">
                                                                                @error('email')
                                                                                {{ $message }} @enderror</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="field-set">
                                                                    <div class="caption-wraper">
                                                                        <label class="field_label">
                                                                            Password
                                                                            <span class="spn_must_field">*</span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="field-wraper">
                                                                        <div class="field_cover">
                                                                            <input type="password" name="password"
                                                                                required class="@error('password')
                                                                                is-invalid @enderror">
                                                                            <span class="invalid-feedback">
                                                                                @error('password')
                                                                                {{ $message }} @enderror</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <button type="submit" class="action-button float-left btn">
                                                            Login
                                                        </button>
                                                        <br>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
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
                                                <img src="{{ asset('images/facebook-icon.png') }}" class="img-fluid">
                                                <span>Facebook</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank">
                                                <img src="{{ asset('images/twitter-icon.png') }}" class="img-fluid">
                                                <span>Twitter</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank">
                                                <img src="{{ asset('images/insta-icon.png') }}" class="img-fluid">
                                                <span>Instagram</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank">
                                                <img src="{{ asset('images/pintrest-icon.png') }}" class="img-fluid">
                                                <span>Pintrest</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank">
                                                <img src="{{ asset('images/youtube-icon.png') }}" class="img-fluid">
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
                        Copyright © 2021 <a href="#">Yo!Coach</a> Developed by <a href="#"
                            class="underline color-primary">SahaSol</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{ asset('Js/bootstrap.min.js') }}"></script>


    <!-- bootstrap bandel -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="{{ asset('./js/main.js') }}"></script>
    <script src="{{ asset('Js/language.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src='{{ asset('Js/toastr.js') }}'></script>

    @if (Session::get('success'))
    <script>
        toastr.success("{!! Session::get('success') !!}");
    </script>
    @elseif (Session::get('error'))
    <script>
        toastr.error("{!! Session::get('error') !!}");
    </script>
    @endif

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
