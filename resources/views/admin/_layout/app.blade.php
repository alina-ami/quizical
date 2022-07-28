<!DOCTYPE html>
<html lang="{{ App::getLocale() }}">

<head>
    @include('admin._layout.components.meta-header')
    @include('admin._layout.components._style')
</head>

<body class="g-sidenav-show  bg-gray-100">
    @include('admin._layout.components.navigation')

    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        @include('admin._layout.components.header')

        <div class="container-fluid py-4">
            @yield('content')

            @include('admin._layout.components.footer')
        </div>
    </main>

    @include('admin._layout.components._scripts')
</body>
</html>
