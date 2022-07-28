<!DOCTYPE html>
<html lang="{{ App::getLocale() }}">

<head>
    @include('brands._layout.components.meta-header')
    @include('brands._layout.components._style')
</head>

<body class="g-sidenav-show  bg-gray-100">

    <main class="main-content  mt-0">
        <section>
            @yield('content')
        </section>
    </main>

    @include('brands._layout.components._scripts')
</body>

</html>
