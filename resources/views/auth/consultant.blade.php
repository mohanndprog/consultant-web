<!DOCTYPE html>
<html lang="en">

<head>
    <title>Consultation</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('css/stylesheet.css') }}">
    <link rel="stylesheet" href="{{ asset('css/language.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body class="registration-page">

    <section class="login-page-section">
        <div class="container container--narrow">
            <!-- MultiStep Form -->
            <div class="row justify-content-center">
                <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10 col-xxl-10">
                    <div class="row">
                        <div class="col-md-12 mx-0">
                            <form id="msform" class="registration-form" method="POST" action="/register/consultant"
                                enctype="multipart/form-data">

                                @csrf
                                <!-- progressbar -->

                                @if (Session::get('success'))
                                <div class="alert alert-success">
                                    {{ Session::get('success') }}
                                </div>
                                @endif

                                @if (Session::get('fail'))
                                <div class="alert alert-danger">
                                    {{ Session::get('fail') }}
                                </div>
                                @endif
                                <!-- progressbar -->
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 col-xxl-4 form-progress-bar">
                                        <div class="progressbar-section">
                                            <div class="website-logo">
                                                <a href="index.html">
                                                    <img src="{{ asset('images/logo.PNG') }}" class="img-fluid" />
                                                </a>
                                            </div>
                                            <ul id="progressbar" class="form-progressbar">
                                                <li class="active"><span>1</span>Personal Info</li>
                                                <li><span>2</span>Profile Media</li>
                                                <li><span>3</span>Subjects for consultation</li>
                                                <li><span>4</span>Resume</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8 col-xxl-8 form-fields">
                                        <div class="form-name">
                                            <h2>Consultant Registration</h2>
                                        </div>
                                        <fieldset>
                                            <div class="form-card row justify-content-center no-gutters">
                                                <div class="col-md-12 col-lg-10 col-xl-8">
                                                    <div class="block-content">
                                                        <div class="block-content__head">
                                                            <div class="info__content">
                                                                <h5>Personal Information</h5>
                                                                <p>Contrary to popular belief, Lorem Ipsum is not
                                                                    simply
                                                                    random text.Ipsum to popular belief, Lorem Ipsum
                                                                    is
                                                                    simply dummy text of the printing</p>
                                                            </div>
                                                        </div>
                                                        <div class="block-content__body">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="field-set">
                                                                        <div class="caption-wraper">
                                                                            <label class="field_label">
                                                                                Full Name
                                                                                <span class="spn_must_field">*</span>
                                                                            </label>
                                                                        </div>
                                                                        <div class="field-wraper">
                                                                            <div class="field_cover">
                                                                                <input type="text" name="name"
                                                                                    value="{{ old('name') }}"
                                                                                    class="@error('name') is-invalid @enderror"
                                                                                    required>
                                                                                <span
                                                                                    class="invalid-feedback">@error('name')
                                                                                    {{ $message }} @enderror</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="field-set">
                                                                        <div class="caption-wraper">
                                                                            <label class="field_label">
                                                                                Email
                                                                                <span class="spn_must_field">*</span>
                                                                            </label>
                                                                        </div>
                                                                        <div class="field-wraper">
                                                                            <div class="field_cover">
                                                                                <input type="email" name="email"
                                                                                    value="{{ old('email') }}"
                                                                                    class="@error('email') is-invalid @enderror"
                                                                                    required>
                                                                                <span
                                                                                    class="invalid-feedback">@error('email')
                                                                                    {{ $message }} @enderror</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="field-set">
                                                                        <div class="caption-wraper">
                                                                            <label class="field_label">
                                                                                Phone
                                                                                <span class="spn_must_field">*</span>
                                                                            </label>
                                                                        </div>
                                                                        <div class="field-wraper">
                                                                            <div class="field_cover">
                                                                                <input type="tel" name="phone"
                                                                                    value="{{ old('phone') }}"
                                                                                    class="@error('phone') is-invalid @enderror">
                                                                                <span
                                                                                    class="invalid-feedback">@error('phone')
                                                                                    {{ $message }} @enderror</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6">
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
                                                                                    class="@error('password') is-invalid @enderror"
                                                                                    required>
                                                                                <span
                                                                                    class="invalid-feedback">@error('password')
                                                                                    {{ $message }} @enderror</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="field-set">
                                                                        <div class="caption-wraper">
                                                                            <label class="field_label">
                                                                                Confirm Password
                                                                                <span class="spn_must_field">*</span>
                                                                            </label>
                                                                        </div>
                                                                        <div class="field-wraper">
                                                                            <div class="field_cover">
                                                                                <input type="password"
                                                                                    name="password_confirmation"
                                                                                    required>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="field-set">
                                                                        <div class="caption-wraper">
                                                                            <label class="field_label">
                                                                                Country
                                                                                <span class="spn_must_field">*</span>
                                                                            </label>
                                                                        </div>
                                                                        <div class="field-wraper">
                                                                            <div class="field_cover">
                                                                                <input type="text" name="country"
                                                                                    class="@error('country') is-invalid @enderror"
                                                                                    value="{{ old('country') }}"
                                                                                    required>
                                                                                <span
                                                                                    class="invalid-feedback">@error('country')
                                                                                    {{ $message }} @enderror</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="field-set">
                                                                        <div class="caption-wraper">
                                                                            <label class="field_label">
                                                                                Gender
                                                                                <span class="spn_must_field">*</span>
                                                                            </label>
                                                                        </div>
                                                                        <div class="field-wraper">
                                                                            <div class="field_cover">
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input"
                                                                                        type="radio" name="gender"
                                                                                        id="male" value="male" checked>
                                                                                    <label class="form-check-label"
                                                                                        for="male">
                                                                                        Male
                                                                                    </label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input"
                                                                                        type="radio" name="gender"
                                                                                        id="female" value="female">
                                                                                    <label class="form-check-label"
                                                                                        for="female">
                                                                                        Female
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <span class="invalid-feedback">@error('gender')
                                                                            {{ $message }} @enderror</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <input type="button" name="next" class="next action-button" value="Next" />
                                        </fieldset>
                                        <fieldset>
                                            <div class="form-card row justify-content-center no-gutters">
                                                <div class="col-md-12 col-lg-10 col-xl-8">
                                                    <div class="block-content">
                                                        <div class="block-content__head">
                                                            <div class="info__content">
                                                                <h5>Add Profile Photo, Video and Biography</h5>
                                                                <p>Contrary to popular belief, Lorem Ipsum is not
                                                                    simply
                                                                    random text.Ipsum to popular belief, Lorem Ipsum
                                                                    is
                                                                    simply dummy text of the printing</p>
                                                            </div>
                                                        </div>
                                                        <div class="block-content__body">
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                    <div class="profile-picture"></div>
                                                                </div>
                                                                <div class="col-md-9">
                                                                    <div class="field-set">
                                                                        <div class="caption-wraper">
                                                                            <label class="field_label" for="image">
                                                                                Profile Picture
                                                                                <span class="spn_must_field">*</span>
                                                                            </label>
                                                                        </div>
                                                                        <div class="field-wraper">
                                                                            <div class="field_cover">
                                                                                <input type="file" name="image"
                                                                                    id="image"
                                                                                    class="@error('image') is-invalid @enderror">
                                                                                <span
                                                                                    class="invalid-feedback">@error('image')
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
                                                                                Bio
                                                                            </label>
                                                                        </div>
                                                                        <div class="field-wraper">
                                                                            <div class="field_cover">
                                                                                <textarea name="bio"
                                                                                    class="form-control @error('bio') is-invalid @enderror"
                                                                                    rows="4"></textarea>
                                                                                <span
                                                                                    class="invalid-feedback">@error('bio')
                                                                                    {{ $message }} @enderror</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <input type="button" name="previous" class="previous action-button-previous"
                                                value="Back" />
                                            <input type="button" name="next" class="next action-button" value="Next" />
                                        </fieldset>
                                        <fieldset>
                                            <div class="form-card row justify-content-center no-gutters">
                                                <div class="col-md-12 col-lg-10 col-xl-8">
                                                    <div class="block-content">
                                                        <div class="block-content__head">
                                                            <div class="info__content">
                                                                <h5>Select subject of your consultation</h5>
                                                                <p>Contrary to popular belief, Lorem Ipsum is not simply
                                                                    random text.Ipsum to popular belief,
                                                                    Lorem Ipsum is simply dummy text of the printing</p>
                                                            </div>
                                                        </div>
                                                        <div class="block-content__body">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="colum-layout">
                                                                        <div class="colum-layout__cell">
                                                                            <div class="colum-layout__head">
                                                                                <span>Subjects of Consultation</span>
                                                                            </div>
                                                                            <div class="colum-layout__body">
                                                                                @foreach ($courses as $list)
                                                                                <div class="selection">
                                                                                    <div class="subject-div">
                                                                                        <h5>{{ $list->course_name }}
                                                                                        </h5>
                                                                                    </div>
                                                                                    <input type="checkbox"
                                                                                        name="course_name[]"
                                                                                        id="course_name"
                                                                                        value="{{ $list->id }}"
                                                                                        class="@error('course_name') is-invalid @enderror">
                                                                                    <span
                                                                                        class="invalid-feedback">@error('course_name')
                                                                                        {{ $message }} @enderror</span>
                                                                                </div>
                                                                                @endforeach
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <input type="button" name="previous" class="previous action-button-previous"
                                                value="Back" />
                                            <input type="button" name="make_payment" class="next action-button"
                                                value="Next" />
                                        </fieldset>
                                        <fieldset>
                                            <div class="form-card row justify-content-center no-gutters">
                                                <div class="col-md-12 col-lg-10 col-xl-8">
                                                    <div class="block-content">
                                                        <div class="block-content__head">
                                                            <div class="info__content">
                                                                <h5>Add your Resume</h5>
                                                                <p>Contrary to popular belief, Lorem Ipsum is not
                                                                    simply
                                                                    random text.Ipsum to popular belief, Lorem Ipsum
                                                                    is
                                                                    simply dummy text of the printing</p>
                                                            </div>
                                                        </div>
                                                        <div class="block-content__body">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="field-set">
                                                                        <div class="caption-wraper">
                                                                            <label class="field_label">
                                                                                Institution
                                                                                <span class="spn_must_field">*</span>
                                                                            </label>
                                                                        </div>
                                                                        <div class="field-wraper">
                                                                            <div class="field_cover">
                                                                                <input type="text" name="institution"
                                                                                    class="@error('institution') is-invalid @enderror"
                                                                                    required>
                                                                                <span
                                                                                    class="invalid-feedback">@error('institution')
                                                                                    {{ $message }} @enderror</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="field-set">
                                                                        <div class="caption-wraper">
                                                                            <label class="field_label">
                                                                                Start Year
                                                                                <span class="spn_must_field">*</span>
                                                                            </label>
                                                                        </div>
                                                                        <div class="field-wraper">
                                                                            <div class="field_cover">
                                                                                <input type="text" name="start_year"
                                                                                    class="@error('start_year') is-invalid @enderror"
                                                                                    required>
                                                                                <span
                                                                                    class="invalid-feedback">@error('start_year')
                                                                                    {{ $message }} @enderror</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="field-set">
                                                                        <div class="caption-wraper">
                                                                            <label class="field_label">
                                                                                End Year
                                                                                <span class="spn_must_field">*</span>
                                                                            </label>
                                                                        </div>
                                                                        <div class="field-wraper">
                                                                            <div class="field_cover">
                                                                                <input type="text" name="end_year"
                                                                                    class="@error('end_year') is-invalid @enderror"
                                                                                    required>
                                                                                <span
                                                                                    class="invalid-feedback">@error('end_year')
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
                                                                                Degree
                                                                                <span class="spn_must_field">*</span>
                                                                            </label>
                                                                        </div>
                                                                        <div class="field-wraper">
                                                                            <div class="field_cover">
                                                                                <input type="text" name="degree"
                                                                                    class="@error('degree') is-invalid @enderror"
                                                                                    required>
                                                                                <span
                                                                                    class="invalid-feedback">@error('degree')
                                                                                    {{ $message }} @enderror</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="submit" name="next" class="next action-button">
                                                Register
                                            </button>
                                        </fieldset>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>





    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="Js/bootstrap.min.js"></script>


    <!-- bootstrap bandel -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="./js/main.js"></script>
    <script src="{{ asset('Js/language.js') }}"></script>

    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
    </script>

    <script>
        $(document).ready(function() {

            var current_fs, next_fs, previous_fs; //fieldsets
            var opacity;

            $(".next").click(function() {

                current_fs = $(this).parent();
                next_fs = $(this).parent().next();

                //Add Class Active
                $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

                //show the next fieldset
                next_fs.show();
                //hide the current fieldset with style
                current_fs.animate({
                    opacity: 0
                }, {
                    step: function(now) {
                        // for making fielset appear animation
                        opacity = 1 - now;

                        current_fs.css({
                            'display': 'none'
                            , 'position': 'relative'
                        });
                        next_fs.css({
                            'opacity': opacity
                        });
                    }
                    , duration: 600
                });
            });

            $(".previous").click(function() {

                current_fs = $(this).parent();
                previous_fs = $(this).parent().prev();

                //Remove class active
                $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

                //show the previous fieldset
                previous_fs.show();

                //hide the current fieldset with style
                current_fs.animate({
                    opacity: 0
                }, {
                    step: function(now) {
                        // for making fielset appear animation
                        opacity = 1 - now;

                        current_fs.css({
                            'display': 'none'
                            , 'position': 'relative'
                        });
                        previous_fs.css({
                            'opacity': opacity
                        });
                    }
                    , duration: 600
                });
            });

        });

    </script>

    <script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('text-area');

    </script>
</body>

</html>
