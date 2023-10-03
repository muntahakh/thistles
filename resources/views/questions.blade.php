
@extends('layouts.app')
@section('content')

@php
$list = session('list');
$backlist = session('backlist');
@endphp

{{-- @dd($list , $backlist) --}}
<div class="eula-background">

    <div class="container-fluid main-home-content">
        <div class="back-icon">
            <a href="{{$backlist['url'] ?? '/index'}}"><img src="{{asset('svg/back.svg')}}" alt="return_back"> Back</a>
        </div>
            <div class="content-center questions-section ">
                <div class="center-text">

                    @if ($list['data']['question']['guidance_notes'] !== null && trim($list['data']['question']['guidance_notes']) !== '')
                        <div class="main-heading-gd">
                            <h1 class="pt-2 red-text">{{strtoupper($list['data']['heading']['name'])}}</h1>
                            <h4 class="red-text pt-2">{{$list['data']['heading']['sub_heading']}}</h4>
                        </div>

                        <div class="guidance-container">
                            <p class="guidance-notes"><b class="fw-bold">Guidance notes: </b>{!! $list['data']['question']['guidance_notes']!!}</p>
                        </div>
                    @else
                        <div class="main-heading">
                            <h1 class="pt-2 red-text">{{strtoupper($list['data']['heading']['name'])}}</h1>
                            <h4 class="red-text pt-2">{{$list['data']['heading']['sub_heading']}}</h4>
                        </div>
                    @endif
                </div>  <!-- center text -->


                <div class="questions-container">
                    <!-- text input -->
                    @if ($list['data']['question']['input_type'] == 'text')

                    @include('textInput')

                    <!-- text with cost input -->
                    @elseif ($list['data']['question']['input_type'] == 'cost')

                    @include('textWIthCost')

                    <!-- text with cost input -->
                    @elseif ($list['data']['question']['input_type'] == 'radio')

                    @include('replacementCheck')

                    <!-- text with skipable input -->
                    @elseif ($list['data']['question']['input_type'] == 'skipable')

                    @include('skipableInput')

                    <!-- Checkbox input -->
                    @elseif ($list['data']['question']['input_type'] == 'checkbox')

                    @include('checkboxInput')

                    <!-- File input -->
                    @elseif ($list['data']['question']['input_type'] == 'file')

                    @include('statement')

                    <!-- table input -->
                    @elseif ($list['data']['question']['input_type'] == 'table')

                        @if ($show_schedule)
                        @include('schedule')
                        @else
                        @yield('support')

                        @endif
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
