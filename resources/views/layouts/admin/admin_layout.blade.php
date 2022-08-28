<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>
        @yield('title')
    </title>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/fonts/fontAwesome/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/dashborad-style.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/responsive-dashborad-style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/language.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"
        integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="{{ asset('consultant/css/dashborad-style.css') }}">
    <link rel="stylesheet" href="{{ asset('student/css/dashborad-style.css') }}">
</head>

<body>
    <!-- Header -->
    <header class="inner-header">
    </header>
    <!-- Side Menu -->
    <main class="main-wrapper">
        <aside class="side-wrapper-s">
            <div class="side-menu-header-s">
                <div class="side-menu-logo-s">
                    <img src="{{ asset('admin/images/logo.png') }}" alt="">
                </div>
                <button class="side-menu-toggle-s">
                    <img src="{{ asset('admin/images/menu.svg') }}" alt="">
                </button>
            </div>
            <ul class="side-menu-s">
                <li class="{{ request()->is('admin/dashboard') ? 'active' : '' }}">
                    <a href="{{ route('admin.dashboard') }}">
                        <i class="fas fa-fw fa-home-alt"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="{{ request()->is('admin/total_consultants') ? 'active' : '' }}">
                    <a href="{{ route('admin.totaConsultants') }}">
                        <i class="fas fa-fw fa-user"></i>
                        <span>Consultants</span>
                    </a>
                </li>
                <li class="{{ request()->is('admin/total_students') ? 'active' : '' }}">
                    <a href="{{ route('admin.totalStudents') }}">
                        <i class="fas fa-fw fa-book-reader"></i>
                        <span>Students</span>
                    </a>
                </li>
                <li class="{{ request()->is('admin/orders') ? 'active' : '' }}">
                    <a href="{{ route('admin.orders') }}">
                        <i class="fas fa-fw fa-suitcase"></i>
                        <span>Orders</span>
                    </a>
                </li>
                <li class="{{ request()->is('admin/add_subjects') ? 'active' : '' }}">
                    <a href="{{ route('admin.addSubjects') }}">
                        <i class="fas fa-fw fa-school"></i>
                        <span>Add
                            Subjects</span>
                    </a>
                </li>
                <li class="{{ request()->is('admin/classes') ? 'active' : '' }}">
                    <a href="{{ route('admin.classes') }}">
                        <i class='fas fa-fw fa-chalkboard-teacher'></i>
                        <span>Group
                            Classes</span>
                    </a>
                </li>
                <li class="{{ request()->is('admin/wallet') ? 'active' : '' }}">
                    <a href="{{ route('admin.wallet') }}">
                        <i class="fas fa-fw fa-wallet"></i>
                        <span>Wallet</span>
                    </a>
                </li>
            </ul>
        </aside>

        <div class="content-wrapper">
            <div class="custom-container">
                <div class="header inner-header-menu">
                    <div class="right-content">
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownUser"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="{{ asset('admin/images/Image.png') }}" alt="">
                                {{ Auth::user()->name }}
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownUser">
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
                        </div>
                    </div>
                </div>
            </div>

            <!-- Content -->
            @yield('content')

        </div>
    </main>

    <script src="{{ asset('admin/js/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('admin/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('admin/js/main.js') }}"></script>
    <script src="{{ asset('admin/js/custom.js') }}"></script>
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

</body>

</html>
