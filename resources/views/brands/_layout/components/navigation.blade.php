<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 "
    id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href="{{ route('brands.home') }}">
            <img src="{{ asset('assets/img/favicon.png') }}" class="navbar-brand-img h-100" alt="main_logo">
            <span class="ms-1 font-weight-bold">ReachMe</span>
        </a>
    </div>

    <hr class="horizontal dark mt-0">

    <div class="collapse navbar-collapse  w-auto h-auto" id="sidenav-collapse-main">
        <ul class="navbar-nav">

            <x-nav-simple-menu-item icon="fas fa-heart" label="Home" :url="route('brands.home')" />
            <x-nav-simple-menu-item icon="fa-solid fa-comment-dots" label="Questions" :url="route('brands.questions.index')" />

            {{-- <x-nav-separator-item label="Test Separator" /> --}}

            {{-- <x-nav-simple-menu-item label="Test menu item" :url="route('web.home')"></x-nav-simple-menu-item>
            <x-nav-nested-menu-item label="Nested item">
                <x-nav-simple-menu-item label="Changelog 1" :url="route('web.home')" :nested="true">
                </x-nav-simple-menu-item>
                <x-nav-simple-menu-item label="Changelog 2" :url="route('web.home')" :nested="true">
                </x-nav-simple-menu-item>
                <x-nav-nested-menu-item label="Nested item 2" :level="2">
                    <x-nav-simple-menu-item label="Changelog 2.1" :url="route('web.home')" :nested="true">
                    </x-nav-simple-menu-item>
                    <x-nav-simple-menu-item label="Changelog 2.2" :url="route('web.home')" :nested="true">
                    </x-nav-simple-menu-item>
                </x-nav-nested-menu-item>
            </x-nav-nested-menu-item> --}}
        </ul>
    </div>
</aside>
