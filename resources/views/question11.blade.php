@extends('layouts.app')

@section('content')
<div class="eula-background">

    <div class="container-fluid main-home-content">
        <div class="back-icon">
            <a href="{{route('q10')}}"><img src="{{asset('svg/back.svg')}}" alt="return_back"> Back</a>
        </div>
            <div class="content-center">
                <div class="center-text">
                    <h1 class="pt-2">11. Support Required (Regular)</h1>
                    <p class="text-green">78% Complete</p>
                </div>
                <div class="questions-container">
                    <form action="{{route('metadata')}}" method="post">
                        @csrf
                        <div class="form-group">
                        <label for="name">Describe all the support required</label>
                            <textarea class="text-area big pt-3" placeholder="e.ag. Lorem ipsum" name="metadata" cols="50" rows="20" required>{{ $metadata ? $metadata->value : '' }}</textarea>
                        </div>
                        <input type="hidden" name="next_route" value="q12">
                        <input type="hidden" name="current_route" value="q11">
                        <button type="submit" class="btn-pink">Next Question</button>
                    </form>

                    <div class="signin-link pt-5">
                        <p>Need a break and continue later? <a href="{{route('save_progress' , ['qno'=> 'q11'])}}" >Save progress</a></p>
                    </div>
                </div>
            </div>
        </div>
            </div>

    </div>


</div>

@endsection
