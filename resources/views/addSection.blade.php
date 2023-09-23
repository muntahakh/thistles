@extends('layouts.app')

@section('content')
<div class="eula-background">

    <div class="container-fluid main-home-content">
        <div class="back-icon">
            <a href=""><img src="{{asset('svg/back.svg')}}" alt="return_back"> Back</a>
        </div>

            <div class="content-center">
                <div class="center-text">
                    <h1 class="pt-2">Add Section</h1>
                </div>
                <div class="questions-container">
                    <form action="{{route('add.section')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="name">Section name</label>
                            <textarea class="text-area pt-3" placeholder="e.g. Lorem ipsum" name="name" cols="50" rows="20" required></textarea>
                        </div>

                        <button type="submit" class="btn-pink">Add Section</button>
                    </form>


                </div>
            </div>
        </div>
            </div>

    </div>


</div>

@endsection
