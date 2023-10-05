
<p class="text-blue pt-2">Choose days on which support is required</p>
<form action="{{route('add.schedule')}}" method="post" class="table-form">
@csrf
<div class="container">
    @foreach (config('days') as $key => $value)
    <div class="row">
        <div class="col-1">
            <input type="checkbox" name="days[]" class="form-check" value="{{$key}}">
        </div>
        <div class="col-10">
            <p>{{$value}}</p>
        </div>
    </div>
    @endforeach
</div>
<input type="hidden" name="headingId" value="{{$list['data']['heading']['id']}}">

<button type="submit" class="btn-pink form-button-pink">Next</button>

</form>






