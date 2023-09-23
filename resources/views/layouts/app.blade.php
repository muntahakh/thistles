<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Thistles') }}</title>

    <link rel="icon" type="image/x-icon" href="{{asset("Images/thistles_logo.ico")}}">

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

        // Function to check if a cookie with a given name exists
function checkCookie(cookieName) {
    var cookies = document.cookie.split(';');
    for (var i = 0; i < cookies.length; i++) {
        var cookie = cookies[i].trim();
        if (cookie.indexOf(cookieName + '=') === 0) {
            return true;
        }
    }
    return false;
}

// Function to set a cookie
function setCookie(cookieName, value, days) {
    var date = new Date();
    date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
    var expires = "expires=" + date.toUTCString();
    document.cookie = cookieName + "=" + value + ";" + expires + ";path=/";
}

// Function to display the modal if it hasn't been shown before
function displayModalOnce() {
    var modal = document.getElementById("open-modal");

    // Check if a cookie named "modalShown" exists
    if (!checkCookie("modalShown")) {
        // If the cookie doesn't exist, show the modal
        modal.style.display = "block";

        // Set a cookie to track that the modal has been shown
        setCookie("modalShown", "true", 30); // "30" is the number of days the cookie will last
    }
}

// Call the displayModalOnce function when the page loads
window.onload = displayModalOnce;

    </script>


</body>
</html>
