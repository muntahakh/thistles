@extends('layouts.app')

@section('content')
<div class="eula-background">

    <div class="container-fluid main-home-content">
        <div class="back-icon">
            <a href="{{route('documents')}}"><img src="{{asset('svg/back.svg')}}" alt="return_back"> Back</a>
        </div>
            <div class="content-center top-heading">
                <div class="center-text">
                    <h1 class="pt-2">3. Short term goals</h1>
                    <p class="text-green">15% Complete</p>
                </div>
                <div class="questions-container">
                    <form action="{{route('q3')}}" method="post">
                        @csrf
                        <div class="form-group">
                        <label for="name">Social participation</label>
                            <textarea class="text-area pt-3" placeholder="e.g. Lorem ipsum" name="social_participation" cols="50" rows="20" required>{{ $goals ? $goals->social_participation : '' }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="name">Health and welfare</label>
                            <textarea class="text-area pt-3" placeholder="e.g. Lorem ipsum" name="health_welfare" cols="50" rows="20" required>{{ $goals ? $goals->health_welfare : '' }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="name">Living arrangements</label>
                            <textarea class="text-area pt-3" placeholder="e.g. Lorem ipsum" name="living_arrangements" cols="50" rows="20" required>{{ $goals ? $goals->living_arrangements : '' }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="name">Education and ongoing learning / skill development</label>
                            <textarea class="text-area pt-3" placeholder="e.g. Lorem ipsum" name="skill_development" cols="50" rows="20" required>{{ $goals ? $goals->skill_development : '' }}</textarea>
                        </div>

                        <button type="submit" class="btn-pink">Next Question</button>
                    </form>

                    <div class="signin-link pt-3">
                        <p>Need a break and continue later? <a href="{{route('save_progress' , ['qno'=> 'q3'])}}" >Save progress</a></p>
                    </div>
                </div>
            </div>
        </div>
            </div>

    </div>


</div>

@endsection
