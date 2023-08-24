

<div class="container">
    <div class="row">
        <div class="col-sm-12">
                <nav class="navbar navbar-expand fixed-top">
                       <a href="{{ url('/') }}"><img src="{{ asset('Images/thistles_logo.png') }}" class="navbar-logo" alt="thistles"></a>
                       <a class="brand-name" href="{{ url('/') }}">Thistles</a>

                       @unless(in_array(Route::currentRouteName(), ['homeAth1','q1','q2','q3','q4','q5','q6','q7','q8','q9','q10',
                       'q11','q12','q13','q13','q15' ,'compiled']))

                       <!-- Left Side Of Navbar -->
                           <ul class="navbar-nav me-auto">
                               <a href="{{route('home')}}" class="nav-item-link">Home</a>
                           </ul>


                           <!-- Right Side Of Navbar -->
                           <ul class="navbar-nav ms-auto">
                               <!-- Authentication Links -->
                                @guest

                                       <li class="nav-item" id="siginin">
                                           <a class="button-nav-signin" href="/register">Sign Up</a>
                                       </li>

                                       <li class="nav-item">
                                           <a class="button-nav-signup" href="{{ route('signin') }}">Sign In</a>
                                       </li>

                               @endguest
                           </ul>

                        @endunless

                        @if (in_array(Route::currentRouteName(), ['homeAth1','q1','q2','q3','q4','q5','q6','q7','q8','q9','q10',
                        'q11','q12','q13','q13','q15', 'compiled' ]))

                        @auth()

                        <ul class="navbar-nav ms-auto">

                            <li class="nav-item">
                                <h3>Hello,</h3> <h3 class="text-lpink">{{ ucfirst(Auth::user()->name) }}</h3>
                            </li>

                            <li class="nav-item">
                                    <img src="{{ asset(Auth::user()->image)}}" id="image" class="img-fluid avatar-img" alt="avatar">
                            </li>

                        </ul>
                        @endauth

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
                <form method="POST" action="{{ route('updateProfileImage') }}" enctype="multipart/form-data" id="imageform">
                <img src="{{ asset(Auth::user()->image)}}" class="custom-select img-fluid" alt="avatar">
                    @csrf
                    <input type="file" name="image" id="file-input-image">
                    {{-- <button type="submit">Upload</button> --}}

                        <script>
                            const fileInput = document.getElementById('file-input-image');
                            const customButton = document.querySelector('.custom-select');
                            fileInput.style.display= 'none';
                            customButton.addEventListener('click', () => {
                              fileInput.click();
                            });

                            $('input[type="file"]').change(function() {
                                alert("A file has been selected.");
                                $("#imageform").submit();
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
                <img src="{{asset('svg/Group.svg')}}" alt="">
            </div>
            <div class="col-9">
                <h6 class="text-danger">Sign Out</h6>
            </div>
        </div>
    </div>
</div>

<script>
const image = document.getElementById('image');
const cardContainer = document.getElementById('card-container');
const closeBtn = document.getElementById('close-btn');

image.addEventListener('click', () => {
    if (cardContainer.style.display === 'none') {
        cardContainer.style.display = 'flex';
    } else {
        cardContainer.style.display = 'none';
    }
});

closeBtn.addEventListener('click', () => {
    cardContainer.style.display = 'none';
});

</script>
@endauth
