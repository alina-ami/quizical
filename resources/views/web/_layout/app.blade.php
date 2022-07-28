<!DOCTYPE html>
<html lang="{{ App::getLocale() }}">

<head>
    @include('web._layout.components.meta-header')
    @include('web._layout.components._style')
</head>

<body class="g-sidenav-show  bg-gray-100">
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">

        <div class="container-fluid py-4">
            @yield('content')

            @include('web._layout.components.footer')
        </div>
    </main>

    @include('web._layout.components._scripts')
</body>
</html>
