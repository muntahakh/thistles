b     @extends('layouts.app')

@section('content')
<div class="eula-background">

    <div class="container-fluid main-home-content">
        <div class="back-icon">
            <a href="{{route('q11')}}"><img src="{{asset('svg/back.svg')}}" alt="return_back"> Back</a>
        </div>
            <div class="content-center">
                <div class="center-text">
                    <h1 class="pt-2">12. Support Required (Occasional)</h1>
                    <p class="text-green">85% Complete</p>
                </div>
                <div class="questions-container">
                    <form action="{{route('metadata')}}" method="post">
                        @csrf
                        <div class="form-group">
                        <label for="name">Describe all the support required</label>
                            <textarea class="text-area big pt-3" placeholder="e.ag. Lorem ipsum" name="metadata" cols="50" rows="20" required>{{ $metadata ? $metadata->value : '' }}</textarea>
                            @if(session('error'))
                                <div class="text-red error-fs" id="alert-message">
                                    *{{ session('error') }}
                                </div>
                            @endif
                        </div>
                        <input type="hidden" name="next_route" value="q13">
                        <input type="hidden" name="current_route" value="q12">
                        <button type="submit" class="btn-pink">Next Question</button>
                    </form>

                    <div class="signin-link pt-3">
                        <p>Need a break and continue later? <a href="{{route('save_progress' , ['qno'=> 'q12'])}}" >Save progress</a></p>
                    </div>
                </div>
            </div>
        </div>
            </div>

    </div>


</div>

@endsection
