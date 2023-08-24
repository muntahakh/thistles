@extends('layouts.app')

@section('signup-content')
<div class="container-fluid">
    <div class="row">
        {{-- Form Container --}}
        <div class="col-md-5 col-sm-12 form">
            {{-- Back to home icon --}}
            <div class="backTohome">
                <a href="/">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path d="M10.5999 12.71C10.5061 12.617 10.4317 12.5064 10.381 12.3846C10.3302 12.2627 10.3041 12.132 10.3041 12C10.3041 11.868 10.3302 11.7373 10.381 11.6154C10.4317 11.4936 10.5061 11.383 10.5999 11.29L15.1899 6.71C15.2836 6.61704 15.358 6.50644 15.4088 6.38458C15.4595 6.26272 15.4857 6.13201 15.4857 6C15.4857 5.86799 15.4595 5.73728 15.4088 5.61542C15.358 5.49356 15.2836 5.38296 15.1899 5.29C15.0025 5.10375 14.749 4.99921 14.4849 4.99921C14.2207 4.99921 13.9672 5.10375 13.7799 5.29L9.18986 9.88C8.62806 10.4425 8.3125 11.205 8.3125 12C8.3125 12.795 8.62806 13.5575 9.18986 14.12L13.7799 18.71C13.9661 18.8947 14.2175 18.9989 14.4799 19C14.6115 19.0008 14.7419 18.9755 14.8638 18.9258C14.9856 18.876 15.0964 18.8027 15.1899 18.71C15.2836 18.617 15.358 18.5064 15.4088 18.3846C15.4595 18.2627 15.4857 18.132 15.4857 18C15.4857 17.868 15.4595 17.7373 15.4088 17.6154C15.358 17.4936 15.2836 17.383 15.1899 17.29L10.5999 12.71Z" fill="#141414"/>
                </svg></a>
            </div>
            {{-- Sign Up form --}}
            <div class="content-center">
                <div class="center-text">
                    <img src="{{ asset('Images/thistles_logo.png') }}" class="img-fluid pt-3" alt="">
                    <h1 class="pt-2">Sign Up</h1>
                    <p>Welcome to Thistles!</p>
                </div>
                <div class="form-container col-lg-8">
                    <form action="{{route('signup')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="name" class="form-fields" name="name" placeholder="Enter name">
                        </div>

                        <div class="form-group">
                            <label for="Email">Email Address</label>
                            <input type="email" class="form-fields" name="email" placeholder="Enter email">
                        </div>

                        <div class="form-group">
                            <label for="Password">Password</label>
                            <div class="password-input">
                                <input type="password" id="passwordField" name="password" class="form-fields" placeholder="Enter Password">
                                <img id="togglePassword" src="{{ asset('svg/fi-rr-eye-crossed.svg')}}" alt="Toggle Password">
                            </div>
                        </div>
                        <script>

                        const passwordField = document.getElementById('passwordField');
                        const togglePassword = document.getElementById('togglePassword');

                        togglePassword.addEventListener('click', function () {
                            if (passwordField.type === 'password') {
                                passwordField.type = 'text';
                                togglePassword.src = "{{ asset('svg/fi-rr-eye.svg')}}";
                            } else {
                                passwordField.type = 'password';
                                togglePassword.src = "{{ asset('svg/fi-rr-eye-crossed.svg')}}";
                            }
                        });
                        </script>


                        <div class="form-group form-checkbox">
                            <input type="checkbox" id="acceptEULA" name="accept_agreement" class="form-check">
                            <label for="acceptEULA" class="pt-1">I accept the <span class="fw-bold text-lpink">EULA</span> compiled by Thistles</label>
                            @error('accept_agreement')
                                <span class="text-red-500">*{{ $message }}</span>
                            @enderror
                        </div>
                        <button type="submit" class="btn-pink">Sign Up</button>

                    </form>
                    <div class="sp-Line">
                        <div class="line"></div>
                        <span class="p-2 line-text">Or Sign Up Using</span>
                        <div class="line"></div>
                    </div>
                    <div class="buttons-container">
                        <a href="/" class="btn-img"> <img src="{{asset('svg/Apple-icon.png')}}" alt=""> Apple</a>
                        <a href="/" class="btn-img"> <img src="{{asset('svg/Google-icon.png')}}" alt=""> Google</a>
                    </div>
                    <div class="signin-link pt-3">
                        <p>Do you have an account? <a href="{{ route('signin')}}" >Sign In</a></p>
                    </div>
                </div>
            </div>
        </div>

        {{-- backgroud image --}}
        <div class="col-md-7 signup-img content-center">
            {{-- Back to home link --}}
            <div class="top-right">
                <a href="/">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M10.5999 12.71C10.5061 12.617 10.4317 12.5064 10.381 12.3846C10.3302 12.2627 10.3041 12.132 10.3041 12C10.3041 11.868 10.3302 11.7373 10.381 11.6154C10.4317 11.4936 10.5061 11.383 10.5999 11.29L15.1899 6.71C15.2836 6.61704 15.358 6.50644 15.4088 6.38458C15.4595 6.26272 15.4857 6.13201 15.4857 6C15.4857 5.86799 15.4595 5.73728 15.4088 5.61542C15.358 5.49356 15.2836 5.38296 15.1899 5.29C15.0025 5.10375 14.749 4.99921 14.4849 4.99921C14.2207 4.99921 13.9672 5.10375 13.7799 5.29L9.18986 9.88C8.62806 10.4425 8.3125 11.205 8.3125 12C8.3125 12.795 8.62806 13.5575 9.18986 14.12L13.7799 18.71C13.9661 18.8947 14.2175 18.9989 14.4799 19C14.6115 19.0008 14.7419 18.9755 14.8638 18.9258C14.9856 18.876 15.0964 18.8027 15.1899 18.71C15.2836 18.617 15.358 18.5064 15.4088 18.3846C15.4595 18.2627 15.4857 18.132 15.4857 18C15.4857 17.868 15.4595 17.7373 15.4088 17.6154C15.358 17.4936 15.2836 17.383 15.1899 17.29L10.5999 12.71Z" fill="#141414"/>
                </svg>
                Back to Homepage</a>
            </div>
            <div class="center-text">
                <img src="{{ asset('Images/disabled musician-bro 1.png') }}"  class="img-fluid" alt="">
                <h1 class="pt-2">Let’s Get Started</h1>
            </div>
        </div>
    </div>
</div>
@endsection



