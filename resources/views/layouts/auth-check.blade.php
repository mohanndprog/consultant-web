@if (!(Auth::check()))
<a href="{{ route('login') }}" class="login-btn">LogIn</a>
<div class="dropdown">
    <button class="Signup-btn" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true"
        aria-expanded="false">
        Sign Up
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
        <a href="/register/student" class="dropdown-item register-btn">Sign up as Learner</a>
        <a href="/register/consultant" class="dropdown-item register-btn">Sign up as consultant</a>
    </div>
</div>

@else

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

@endif
