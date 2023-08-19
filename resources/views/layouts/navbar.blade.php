<div class="container">
    <div class="row">
        <div class="col-sm-12">
                <nav class="navbar navbar-expand fixed-top">
                       <a href="{{ url('/') }}"><img src="{{ asset('Images/thistles_logo.png') }}" class="navbar-logo" alt="thistles"></a>
                       <a class="brand-name" href="{{ url('/') }}">Thistles</a>

                       @unless(in_array(Route::currentRouteName(), ['homeAth','q1','q2','q3','q4','q5','q6','q7','q8','q9','q10',
                       'q11','q12','q13','q13','q15' ,'compiled']))

                       <!-- Left Side Of Navbar -->
                           <ul class="navbar-nav me-auto">
                               <a href="{{route('home')}}" class="nav-item-link">Home</a>
                           </ul>


                           <!-- Right Side Of Navbar -->
                           <ul class="navbar-nav ms-auto">
                               <!-- Authentication Links -->
                               {{-- @guest
                                   @if (Route::has('login')) --}}
                                       <li class="nav-item" id="siginin">
                                           <a class="button-nav-signin" href="/register">Sign Up</a>
                                       </li>
                                   {{-- @endif

                                   @if (Route::has('register')) --}}
                                       <li class="nav-item">
                                           <a class="button-nav-signup" href="{{ route('signin') }}">Sign In</a>
                                       </li>
                                   {{-- @endif
                               @else

                               @endguest --}}
                           </ul>

                        @endunless

                        @if (in_array(Route::currentRouteName(), ['homeAth','q1','q2','q3','q4','q5','q6','q7','q8','q9','q10',
                        'q11','q12','q13','q13','q15', 'compiled' ]))
                        <ul class="navbar-nav ms-auto">

                            <li class="nav-item">
                                <h3>Hello, <span class="text-lpink">[User]</span></h3>
                            </li>

                            <li class="nav-item">
                                <img src="{{ asset('Images/avatar.png')}}" class="img-fluid avatar-img" alt="avatar">
                            </li>

                        </ul>
                        @endif

               </nav>
        </div>
    </div>
</div>
