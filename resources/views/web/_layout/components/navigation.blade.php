<nav class="navbar navbar-expand-lg position-absolute top-0 z-index-3 w-100 shadow-none my-3 mt-4">
    <div class="container blur blur-rounded py-3 px-5">
        <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3" href="{{ route('web.home') }}">
            <img src="{{ asset('assets/img/favicon.png') }}" class="" height="30" alt="main_logo">
            ReachMe
        </a>
        <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse"
            data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon mt-2">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
            </span>
        </button>
        <div class="collapse navbar-collapse w-100 pt-3 pb-2 py-lg-0" id="navigation">
            <ul class="navbar-nav navbar-nav-hover mx-auto">
                <li class="nav-item mx-2">
                    <a href="{{ route('web.home') }}" class="nav-link ps-2 cursor-pointer align-items-center">
                        Home
                    </a>
                </li>
                <li class="nav-item mx-2">
                    <a href="{{ route('web.home') }}" class="nav-link ps-2 cursor-pointer align-items-center">
                        Prizes
                    </a>
                </li>
                <li class="nav-item mx-2">
                    <a href="{{ route('web.home') }}" class="nav-link ps-2 cursor-pointer align-items-center">
                        About
                    </a>
                </li>
                <li class="nav-item mx-2">
                    <a href="{{ route('web.home') }}" class="nav-link ps-2 cursor-pointer align-items-center">
                        Contact
                    </a>
                </li>
                @auth
                    <li class="nav-item mx-2">
                        <a href="{{ route('web.questions.index') }}"
                            class="btn btn-sm bg-gradient-primary btn-round mb-0 me-1">
                            Start winning
                        </a>
                    </li>
                @endauth
            </ul>
            @guest
                <ul class="navbar-nav d-lg-block d-none">
                    <li class="nav-item d-inline">
                        <a href="{{ route('web.auth.login') }}" class="btn btn-sm btn-round mb-0 me-1">Register</a>
                    </li>
                    <li class="nav-item d-inline">
                        <a href="{{ route('web.auth.login') }}"
                            class="btn btn-sm bg-gradient-primary btn-round mb-0 me-1">Login</a>
                    </li>
                </ul>
            @endguest

            @auth
            <ul class="navbar-nav d-lg-block d-none">
                <li class="nav-item d-inline">
                    Hello,
                    <a href="{{ route('web.profile.index') }}" class="mb-0 me-1 mr-3">
                        {{ auth()->user()->name }}</a>
                </li>
                <li class="nav-item d-inline">
                    <a href="{{ route('web.auth.logout') }}">
                        <i class="fa-solid fa-arrow-right-from-bracket me-sm-1"></i>
                    </a>
                </li>
            </ul>
            @endauth
        </div>
    </div>
</nav>
