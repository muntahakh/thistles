@extends('layouts.app')

@section('content')
<div class="eula-background">

    <div class="container-fluid main-home-content">

            <div class="content-center top-heading">
                <div class="center-text">
                    <h1 class="pt-2">3. Short term goals</h1>
                    <p class="text-green">15% Complete</p>
                </div>
                <div class="questions-container">
                    <form action="{{route('q4')}}" method="post">
                        @csrf
                        <div class="form-group">
                        <label for="name">Social participation</label>
                            <textarea class="text-area pt-3" placeholder="e.g. Lorem ipsum" name="details" cols="50" rows="20"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="name">Health and welfare</label>
                            <textarea class="text-area pt-3" placeholder="e.g. Lorem ipsum" name="details" cols="50" rows="20"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="name">Living arrangements</label>
                            <textarea class="text-area pt-3" placeholder="e.g. Lorem ipsum" name="details" cols="50" rows="20"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="name">Education and ongoing learning / skill development</label>
                            <textarea class="text-area pt-3" placeholder="e.g. Lorem ipsum" name="details" cols="50" rows="20"></textarea>
                        </div>



                        <button type="submit" class="btn-pink">Next Question</button>
                    </form>

                    <div class="signin-link pt-3">
                        <p>Need a break and continue later? <a href="/" >Save progress</a></p>
                    </div>
                </div>
            </div>
        </div>
            </div>

    </div>


</div>

@endsection
