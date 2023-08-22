<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Thistles') }}</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>



</head>
<body>
    <div id="app">
        @yield('background')

        @unless(in_array(Route::currentRouteName(), ['signin', 'register', 'signup', 'reset', 'resetSent',
        'resetpass.email', 'resend.email', 'new.password', 'email']))
            @include('layouts.navbar')
        @endunless

            @yield('signup-content')
        <main class="py-4">
            @yield('content')

        </main>



    </div>

</body>
</html>
