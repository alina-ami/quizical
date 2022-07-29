<!DOCTYPE html>
<html lang="{{ App::getLocale() }}">

<head>
    @include('web._layout.components.meta-header')
    @include('web._layout.components._style')
</head>

<body class="bg-gray-100">
    @include('web._layout.components.navigation')

    <main class="main-content mt-5">
        @yield('content')
    </main>

    @include('web._layout.components._scripts')
</body>

</html>
