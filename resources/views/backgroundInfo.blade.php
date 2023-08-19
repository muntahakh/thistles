@extends('layouts.app')

@section('content')
<div class="eula-background">

    <div class="container-fluid main-home-content">
        
        <div class="pt-5">
            <div class="content-center">
                <div class="center-text">       
                    <h1 class="pt-5">1. Background information</h1>
                    <p class="text-green">0% Complete</p>
                </div>
                <div class="questions-container">
                    <form action="{{route('q2')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="name">Your child’s full name</label>
                            <input type="name" class="form-fields" placeholder="Enter Name">
                        </div>

                        <div class="form-group">
                            <label for="name">Your child’s NDIS participant number</label>
                            <input type="name" class="form-fields" placeholder="Enter Number">
                        </div>

                        <div class="form-group custom-select">
                        <label for="name">Your child’s gender</label>
                            <select class="form-fields pt-3" name="" id="select">
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Rather not say">Rather not say</option>
                            </select>
                        </div>

                        <script>
                            $(document).ready(function() {
                                $(".custom-select").select2(); 
                            });
                        </script>
                        <div class="form-group">
                        <label for="name">Your child’s condition or developmental delay</label>
                            <textarea class="form-fields pt-3" placeholder="Write all your details here" name="details" cols="30" rows="10"></textarea>
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

@endsection