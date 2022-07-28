<!DOCTYPE html>
<html lang="{{ App::getLocale() }}">

<head>
    @include('brands._layout.components.meta-header')
    @include('brands._layout.components._style')
</head>

<body class="g-sidenav-show  bg-gray-100">
    @include('brands._layout.components.navigation')

    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        @include('brands._layout.components.header')

        <div class="container-fluid py-4">
            @yield('content')

            @include('brands._layout.components.footer')
        </div>
    </main>

    @include('brands._layout.components._scripts')
</body>
</html>
