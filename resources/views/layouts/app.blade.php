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

@yield('drop_zone')

</head>
<body>
    <div id="app">
        @yield('background')

        @unless(in_array(Route::currentRouteName(), ['signin', 'register', 'signup', 'reset', 'password.email',
        'resendpass.email', 'resend.email', 'pass.reset', 'email', 'login', 'password.email.get', 'confirm']))
            @include('layouts.navbar')
        @endunless

            @yield('signup-content')
        <main class="py-4">
            @yield('content')

        </main>



    </div>
    <script>
        // Set a timeout to hide the success message after 5 seconds (adjust the time as needed)
        setTimeout(function() {
            var successMessage = document.getElementById('alert-message');
            if (successMessage) {
                successMessage.style.opacity = '0'; // Fade out
                setTimeout(function() {
                    successMessage.style.display = 'none';
                }, 500); // Wait for the transition to complete before hiding
            }
        }, 3000); // 5000 milliseconds = 5 seconds
    </script>


</body>
</html>
