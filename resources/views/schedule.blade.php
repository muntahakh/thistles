@if(session('schedule'))

@php
    $schedule =session('schedule');
    $days = config('days');
    $filteredSchedule = [];

@endphp

    <div class="questions-table table-content-center table-responsive">
        <table class="table-sm" border="1">
            <thead>
                <tr>
                    <th scope="col">Day</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($days as $key => $value)
                @if ($schedule->day = $key)


                <tr>
                    {{-- <td><p>{{$value}}</p></td> --}}
                    <td>
                        <a href="{{'add.support'}}"><button class="btn">Add Support</button></a>
                    </td>
                </tr>

                @endif
            @endforeach
            <input type="hidden" name="headingId" value="{{$list['data']['heading']['id']}}">
            </tbody>
        </table>
    <button type="submit" class="btn-pink form-button-pink">Compile my document</button>

    </div>
@else
<p class="text-blue pt-2">Choose days on which support is required</p>

<form action="{{route('add.schedule')}}" method="post" class="table-form">
@csrf
<div class="container">
    @foreach (config('days') as $key => $value)
    <div class="row">
        <div class="col-1">
            {{-- <input type="checkbox" name="days[]" class="form-check" value="{{$key}}"> --}}
        </div>
        <div class="col-10">
            {{-- <p>{{$value}}</p> --}}
        </div>
    </div>
    @endforeach
</div>
<input type="hidden" name="headingId" value="{{$list['data']['heading']['id']}}">

<button type="submit" class="btn-pink form-button-pink">Next</button>

</form>
@endif


{{-- <form action="{{route('add.schedule')}}" method="post" class="table-form">
    <div class="questions-table table-content-center table-responsive">
        <table class="table-sm" border="1">
            <thead>
                <tr>
                    <th scope="col">Day</th>
                    <th scope="col">What supports I need</th>
                    <th scope="col">Support Ratio</th>
                    <th scope="col">Explanantion of supports need and ratio</th>
                </tr>
            </thead>
            <tbody>
            @foreach (config('days') as $key => $value)
                <tr>
                    <td><input type="text" name="{{$key}}" value="{{$value}}" style="border: none"></td>
                    <td>
                        <div class="">
                            <input type="time" id="start-time" name="time_period" style="border: none" required> -
                            <input type="time" id="end-time" name="time_period" style="border: none" required>
                            <textarea placeholder="Support you require" name="support" cols="30"></textarea>
                        </div>
                    </td>
                    <td>
                    <div class="ratio-select" >
                        <select name="ratio" required>
                            @foreach(config('ratio') as $key => $value)
                                <option value="{{ $key }}">{{ $value }}</option>
                            @endforeach
                        </select>
                    </div>
                    </td>
                    <td>
                        <textarea  placeholder="I need [one-on-one] support because" name="explanation" cols="30"></textarea>
                        <div class="d-flex justify-content-end">
                            <button class="btn">Add more</button>
                        </div>
                    </td>
                </tr>
            @endforeach
            <input type="hidden" name="headingId" value="{{$list['data']['heading']['id']}}">
            </tbody>
        </table>
    <button type="submit" class="btn-pink form-button-pink">Compile my document</button>

    </div>
</form> --}}
