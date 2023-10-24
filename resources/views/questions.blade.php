
@extends('layouts.app')
@section('content')

@php
$list = session('list');
$backlist = session('backlist');
@endphp

<div class="eula-background">
    <div class="container-fluid main-home-content ">
        <div class="back-icon">
            @if (isset($back_url))
                <a href="{{ $back_url }}"><img src="{{ asset('svg/back.svg') }}" alt="return_back">Back</a>
            @endif
        </div>
            <div class="progress-content">
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: {{$list['data']['question']['number'] *100/135}}%" aria-valuenow="{{$list['data']['question']['number'] *100/135}}" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p class="text-lpink p-2">{{ceil($list['data']['question']['number'] *100/135)}}% complete</p>
                    </div>
                    <div class="col-sm-12 col-md-6 ">
                        <form action="{{route('save_progress')}}" method="post">
                            @csrf
                            Need a break and continue later?
                            <input type="hidden" name="currentUrl" value="{{url()->current()}}">
                            <button type="submit" class="save_progress">Save progress</button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Quesitons section -->
            <div class="content-center questions-section">
                <!-- center text -->
                <div class="center-text">

                    @if ($list['data']['question']['guidance_notes'] !== null && trim($list['data']['question']['guidance_notes']) !== '')
                        <div class="main-heading-gd">
                            <h1 class="pt-2">{{strtoupper($list['data']['heading']['name'])}}</h1>
                            <h4>{{$list['data']['heading']['sub_heading']}}</h4>
                        </div>

                        <div class="guidance-container">
                            <p class="guidance-notes"><b class="fw-bold">Guidance notes: </b>{!! $list['data']['question']['guidance_notes']!!}</p>
                        </div>
                    @else
                        <div class="main-heading">
                            <h1 class="pt-2">{{strtoupper($list['data']['heading']['name'])}}</h1>
                            <h4 class="pt-2">{{$list['data']['heading']['sub_heading']}}</h4>
                        </div>
                    @endif
                </div>

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

                    <!-- text with skipable input -->
                    @elseif ($list['data']['question']['input_type'] == 'swap')

                    @include('swapCheckboxText')

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


            </div>  <!-- Questions section -->
    </div> <!-- container main home content -->
</div> <!-- Eula background -->

@endsection
