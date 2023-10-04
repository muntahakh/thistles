

<div class="container">
    <div class="row">
        <div class="col-sm-12">
                <nav class="navbar navbar-expand fixed-top">
                       <a href="{{ url('/') }}"><img src="{{ asset('Images/thistles_logo.png') }}" class="navbar-logo" alt="thistles"></a>
                       <a class="brand-name" href="{{ url('/') }}">Thistles</a>

                       @unless(in_array(Route::currentRouteName(), ['homeAth1','questions' ,'compiled', 'index', 'documents', 'get.questions'
                       , 'questions.submit', 'intro.page', 'questions_loop', 'questions.submit', 'get.schedule', 'add.schedule',
                        'add.support', 'get.support', 'delete.schedule', 'show.schedule']))

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
                        'add.support', 'get.support', 'delete.schedule', 'show.schedule','home']))

                        @auth()

                        {{-- authentication --}}
                        <ul class="navbar-nav ms-auto">

                            <li class="nav-item">
                                 <h3>Hello,</h3> <h3 class="text-lpink">{{ ucfirst(explode(' ', Auth::user()->name)[0]) }}</h3>
                            </li>

                            <li class="nav-item">
                            @if (Auth::user()->authentication_type == 'form')
                                <img src="{{ Auth::user()->image != null ? asset('Images/' . Auth::user()->image) : asset('Images/user-profile.jpg') }}" id="imageIcon" class="img-fluid avatar-img" alt="avatar">
                            @else
                                <img src="{{Auth::user()->url_image  ?? asset('Images/user-profile.jpg')}}" id="imageIcon" class="img-fluid avatar-img" alt="avatar">
                            @endif
                            </li>

                        </ul>
                        @endauth
                        {{-- @endif --}}
                        @endif

               </nav>
        </div>
    </div>
</div>

@auth


<div class="profile-card-container" id="card-container">
    <div class="profile-card">
        <div class="row">
            <div class="col-3">
                <form method="POST" action="{{ route('updateProfileImage', ['id' => Auth::user()->id]) }}" enctype="multipart/form-data" id="imageform">

                @if (Auth::user()->authentication_type == 'form')
                    <img src="{{ asset('Images/' . Auth::user()->image)}}" class="custom-select-avatar img-fluid" alt="avatar">
                @else
                    <img src="{{Auth::user()->url_image}}" class="custom-select-avatar img-fluid" alt="avatar">
                @endif
                    @csrf

                    <input type="file" name="image" id="file-input-image">


                        <script>
                            const iconInput = document.getElementById('file-input-image');
                            const customButton = document.querySelector('.custom-select-avatar');
                            iconInput.style.display= 'none';
                            customButton.addEventListener('click', () => {
                                iconInput.click();
                            });

                            iconInput.addEventListener('change', () => {
                                alert("A file has been selected.");
                                document.getElementById('imageform').submit();
                            });
                        </script>
                </form>
            </div>
            <div class="col-9">
                <h5>{{ ucfirst(Auth::user()->name) }}</h5>
                <span>{{ Auth::user()->email }}</span>
            </div>
        </div>
        <hr>
        <div class="row p-2">
            <div class="col-3">
                <img src="{{asset('svg/fi-rr-money.svg')}}" alt="">
            </div>
            <div class="col-9">
                <h6>Donate to Us</h6>
            </div>
        </div>
        <div class="row p-2">
            <div class="col-3">
                <a href="{{route('logout')}}"><img class="cursor-pointer" src="{{asset('svg/Group.svg')}}" alt=""></a>
            </div>
            <div class="col-9">
                <a href="{{route('logout')}}" class="text-danger text-decoration-none cursor-pointer">Sign Out</a>
            </div>
        </div>
    </div>
</div>

<script>
const image = document.getElementById('imageIcon');
const cardContainer = document.getElementById('card-container');
const closeBtn = document.getElementById('close-btn');

image.addEventListener('click', () => {
    if (cardContainer.style.display === 'none') {
        cardContainer.style.display = 'block';
    } else {
        cardContainer.style.display = 'none';
    }
});
document.addEventListener('click', (event) => {
    if (!cardContainer.contains(event.target) && event.target !== image) {
        cardContainer.style.display = 'none';
    }
});


</script>
@endauth
