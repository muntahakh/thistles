@extends('layouts.app')

@section('content')
{{-- @dd($backgroundInfo) --}}
<div class="eula-background">

    <div class="container-fluid main-home-content">
        <div class="back-icon">
            <a href="{{route('index')}}"><img src="{{asset('svg/back.svg')}}" alt="return_back"> Back</a>
        </div>
        <div class="pt-5">

            <div class="content-center">
                <div class="center-text">
                    <h1 class="pt-5">1. Background information</h1>
                    <p class="text-green">0% Complete</p>
                </div>
                <div class="questions-container">
                    <form action="{{route('backgroundinfo')}}" method="post">
                        @csrf

                        <div class="form-group">
                            <label for="name">Your child’s full name</label>
                            <input type="name" class="form-fields" name="child_name" placeholder="Enter Name" value="{{ $backgroundInfo ? $backgroundInfo->child_name : '' }}"  required>
                        </div>

                        <div class="form-group">
                            <label for="name">Your child’s NDIS participant number</label>
                            <input type="name" class="form-fields" name="participant_num" placeholder="Enter Number" value="{{ $backgroundInfo ? $backgroundInfo->participant_num : '' }}" required>
                        </div>

                        <div class="form-group" required>
                        <label for="name">Your child’s gender</label>
                        <select class="form-fields pt-3" name="gender" id="select" required>
                            <option value="Male" {{ $backgroundInfo && $backgroundInfo->gender === 'Male' ? 'selected' : '' }}>Male</option>
                            <option value="Female" {{ $backgroundInfo && $backgroundInfo->gender === 'Female' ? 'selected' : '' }}>Female</option>
                            <option value="Rather not say" {{ $backgroundInfo && $backgroundInfo->gender === 'Rather not say' ? 'selected' : '' }}>Rather not say</option>
                        </select>
                        </div>

                        <script>
                            $(document).ready(function() {
                                $(".custom-select").select2();
                            });
                        </script>
                        <div class="form-group">
                        <label for="name">Your child’s condition or developmental delay</label>
                            <textarea class="form-fields pt-3" placeholder="Write all your details here" name="details" cols="30" rows="10" required>{{$backgroundInfo ? $backgroundInfo->child_condition : ''}}</textarea>
                        </div>

                        <button type="submit" class="btn-pink">Next Question</button>
                    </form>

                    <div class="signin-link pt-3">
                        <p>Need a break and continue later? <a href="{{route('save_progress' , ['qno'=> 'q1'])}}" >Save progress</a></p>
                    </div>
                </div>
            </div>
        </div>

    </div>


</div>

@endsection
