<div class="row m-0">
    <div class="col-sm-12 bg-red100 p-3">
        <img src="{{ asset('assets/files/logo-pmi.png') }}" alt="PMI Logo" style="height: 56px;">
    </div>
</div>
<nav class="navbar navbar-expand-lg navbar-light bg-red95 devider-bottom">
    <a class="navbar-brand text-light" href="{{ route('donor.about') }}">Tentang Donor</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto">
            <li class="nav-item active">
                <a class="nav-link text-light" href="{{ route('dashboard') }}">
                    <img src="{{ asset('assets/files/home_fill.png') }}" alt="home">
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light" href="{{ route('contact') }}">
                    <img src="{{ asset('assets/files/chat.png') }}" alt="contact">
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light" href="{{ route('schedule') }}">
                    <img src="{{ asset('assets/files/calendar.png') }}" alt="scheedule">
                </a>
            </li>
        </ul>
        <div class="form-inline my-2 my-lg-0">
            <div class="nav-item dropdown">
                @if(auth()->check())
                    <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        <img src="{{ asset('assets/files/user-circle.png') }}" alt="profile">
                        {{ auth()->user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-right " aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('me') }}">Profile</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ route('logout') }}">Logout</a>
                    </div>
                @else
                    <a class="nav-link text-light" href="{{ route('login') }}">
                        <img src="{{ asset('assets/files/user-circle.png') }}" alt="profile">
                        Login
                    </a>
                @endif
            </div>
        </div>
    </div>
</nav>
