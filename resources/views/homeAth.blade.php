@extends('layouts.app')

@section('content')
<div class="eula-background">

    <div class="container-fluid main-home-content">
        <div class="row">
            {{-- backgroud image --}}
            <div class="col-md-12 col-lg-12 col-sm-12 content-center">
                <div class="center-text">
                    <img src="{{ asset('Images/disabled student-rafiki 1.png') }}"  class="img-fluid home-img" alt="">
                    <h1 class="pt-2">Let’s Get Started</h1>
                    <div class="pt-4">
                            <a href="{{route('save_progress_start')}}">
                                <button type="submit" class="btn-pink">START</button></a>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>

@endsection
