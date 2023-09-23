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
                    <form action="{{route('add.questions')}}" method="post">
                        @csrf

                        <div class="form-group">
                            <label for="name">Section name</label>
                            <select class="form-fields pt-3" name="section_name" id="select" required>
                                @foreach ($section as $sections)
                                <option value="{{$sections->name}}" >{{$sections->name}}</option>
                                @endforeach
                            </select>
                            </div>
                            <script>
                                $(document).ready(function() {
                                    $(".custom-select").select2();
                                });
                            </script>
                        <div class="form-group">
                            <label for="name">Questions</label>
                            <textarea class="text-area pt-3" placeholder="e.g. Lorem ipsum" name="question" cols="50" rows="20" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="name">Instructions</label>
                            <textarea class="text-area pt-3" placeholder="e.g. Lorem ipsum" name="instruction" cols="50" rows="20" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="name">Answer's Input type</label>
                            <select class="form-fields pt-3" name="input_type" id="select" required>
                                <option value="text" >Text</option>
                                <option value="checkbox" >Checkbox</option>
                                <option value="file">File</option>
                            </select>
                            </div>

                            <script>
                                $(document).ready(function() {
                                    $(".custom-select").select2();
                                });
                            </script>

                        <button type="submit" class="btn-pink">Add Section</button>
                    </form>


                </div>
            </div>
        </div>
            </div>

    </div>


</div>

@endsection
