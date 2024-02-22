
<div class="container">
    <div class="row">
        <div class="col-sm-12">
                <nav class="navbar navbar-expand fixed-top">
                       <a href="{{ url('/') }}"><img src="{{ asset('Images/thistles_logo.png') }}" class="navbar-logo" alt="thistles"></a>
                       <a class="brand-name" href="{{ url('/') }}">Thistles</a>

                       @unless(in_array(Route::currentRouteName(), ['homeAth1','questions' , 'index', 'documents', 'get.questions'
                       , 'questions.submit', 'intro.page', 'questions_loop', 'questions.submit', 'get.schedule', 'add.schedule',
                        'add.support', 'get.support', 'delete.schedule', 'show.schedule', 'waiting']))

                       <!-- Left Side Of Navbar -->
                           <ul class="navbar-nav me-auto">
                               <a href="{{route('home')}}" class="nav-item-link">Home</a>
                           </ul>

                           @guest
                           <!-- Right Side Of Navbar -->
                           <ul class="navbar-nav ms-auto">

                                       <li class="nav-item" id="siginin">
                                           <a class="button-nav-signin" href="/register">Sign Up</a>
                                       </li>

                                       <li class="nav-item">
                                           <a class="button-nav-signup" href="{{ route('signin') }}">Sign In</a>
                                       </li>
                           </ul>
                           @endguest
                        @endunless

                        @if (in_array(Route::currentRouteName(), ['homeAth1','questions', 'documents', 'get.questions' , 'questions.submit',
                         'intro.page', 'index', 'questions_loop', 'questions.submit', 'get.schedule', 'add.schedule',
                        'add.support', 'get.support', 'delete.schedule', 'show.schedule','home', 'waiting']))

                        @auth()

                        {{-- authentication --}}
                        <ul class="navbar-nav ms-auto">

                            <li class="nav-item">
                                 <h3>Hello,</h3> <h3 class="text-lpink">{{ ucfirst(explode(' ', Auth::user()->name)[0]) }}</h3>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('logout')}}" class="text-decoration-none text-dark fw-bold signout">Sign Out</a>
                                <a href="{{route('logout')}}" class="signout-icon"><img src="fi-rr-sign-out.svg" alt=""></a>
                            </li>
                        </ul>
                        @endauth
                        {{-- @endif --}}
                        @endif

               </nav>
        </div>
    </div>
</div>

