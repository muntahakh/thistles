@extends('layouts.app')

@section('signup-content')
<div class="container">


           
            {{-- Email template --}}
            <div class="logo-fixed">
                <img src="{{ asset('Images/thistles_logo.png') }}" class="img-fluid pt-3" alt="">
            </div>
            <div class="container text-center p-3">
                <h1 class="pt-2 fw-bold">Reset</h1>
                <p>We sent a confirmation email for:</p>
                <a href="/">abc@gmail.com</a>
            </div>
            <div class="email-container">

                <p>Dear [User],</p> 
                <p>We have received a request to reset your password for your Thistles account.</p> 
                <p>We have received a request to reset your password for your Thistles account.</p> 
                <p>To proceed with the password reset, please click the button below,</p>

                <div class="pt-2">
                    <a href="{{route('new.password')}}">
                        <button type="submit" class="btn-pink">Reset Password</button>
                    </a>
                    <a href="/" class="forgot-password content-center">Need Support?</a>   
                </div>
            </div>
</div>
@endsection


        
    
