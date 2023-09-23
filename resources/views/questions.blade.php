
@extends('layouts.app')
@section('content')


<div class="eula-background">

    <div class="container-fluid main-home-content">
        <div class="back-icon">
            <a href="{{$backlist['url'] ?? '/index'}}"><img src="{{asset('svg/back.svg')}}" alt="return_back"> Back</a>
        </div>
            <div class="content-center questions-section ">

                <div class="center-text">
                    <div class="main-heading">
                        <h1 class="pt-2 red-text">{{strtoupper($list['data']['heading']['name'])}}</h1>
                        <h4 class="red-text pt-2">{{$list['data']['heading']['sub_heading']}}</h4>
                    </div>

                    @if ($list['data']['question']['guidance_notes'] !== null && trim($list['data']['question']['guidance_notes']) !== '')
                    <div class="guidance-container">
                        <p class="guidance-notes"><b class="fw-bold">Guidance notes: </b>{{$list['data']['question']['guidance_notes']}}</p>
                    </div>
                    @endif
                </div>  <!-- center text -->


                <div class="questions-container">
                    <!-- text input -->
                    @if ($list['data']['question']['input_type'] == 'text')

                    @include('textInput')

                    <!-- Checkbox input -->
                    @elseif ($list['data']['question']['input_type'] == 'checkbox')

                    @include('checkboxInput')

                    <!-- File input -->
                    @elseif ($list['data']['question']['input_type'] == 'file')

                    @include('statement')

                    <!-- table input -->
                    @elseif ($list['data']['question']['input_type'] == 'table')

                    @include('schedule')

                    @endif

                </div> <!-- questions container -->

                <!-- save progress link -->
                <div class="signin-link pt-3">
                    <form action="{{route('save_progress')}}" method="post">
                        @csrf
                    <p>Need a break and continue later?
                        <input type="hidden" name="currentUrl" value="{{url()->current()}}">
                        <button type="submit" class="save_progress">Save progress</button></p>
                    </form>
                </div> <!-- save progress link -->
            </div>  <!-- Questions section -->

        </div> <!-- container main home content -->

</div> <!-- Eula background -->

@endsection
