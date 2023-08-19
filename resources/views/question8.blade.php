@extends('layouts.app')

@section('content')
<div class="eula-background">

    <div class="container-fluid main-home-content">

            <div class="content-center">
                <div class="center-text">
                    <h1 class="pt-2">8. Meals / Eating</h1>
                    <p class="text-green">55% Complete</p>
                </div>
                <div class="questions-container">
                    <form action="{{route('q9')}}" method="post">
                        @csrf
                        <div class="form-group">
                        <label for="name">Describe all your meals here</label>
                            <textarea class="text-area big pt-3" placeholder="e.ag. Lorem ipsum" name="details" cols="50" rows="20"></textarea>
                        </div>

                        <button type="submit" class="btn-pink">Next Question</button>
                    </form>

                    <div class="signin-link pt-5">
                        <p>Need a break and continue later? <a href="/" >Save progress</a></p>
                    </div>
                </div>
            </div>
        </div>
            </div>

    </div>


</div>

@endsection
