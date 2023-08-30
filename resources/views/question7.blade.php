@extends('layouts.app')

@section('content')
<div class="eula-background">

    <div class="container-fluid main-home-content">
        <div class="back-icon">
            <a href="{{route('q6')}}"><img src="{{asset('svg/back.svg')}}" alt="return_back"> Back</a>
        </div>
            <div class="content-center">
                <div class="center-text">
                    <h1 class="pt-2">7. Personal Care / Living Skills</h1>
                    <p class="text-green">48% Complete</p>
                </div>
                <div class="questions-container">
                    <form action="{{route('metadata')}}" method="post">
                        @csrf
                        <div class="form-group">
                        <label for="name">Describe all your personal care challenges</label>
                            <textarea class="text-area big pt-3" placeholder="e.g. Lorem ipsum" name="metadata" cols="50" rows="20" required>{{ $metadata ? $metadata->value : '' }}</textarea>
                        </div>
                        <input type="hidden" name="next_route" value="q8">
                        <input type="hidden" name="current_route" value="q7">
                        <button type="submit" class="btn-pink">Next Question</button>
                    </form>

                    <div class="signin-link pt-5">
                        <p>Need a break and continue later? <a href="{{route('save_progress' , ['qno'=> 'q7'])}}" >Save progress</a></p>
                    </div>
                </div>
            </div>
        </div>
            </div>

    </div>


</div>

@endsection
