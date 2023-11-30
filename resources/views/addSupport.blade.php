@extends('questions')
@section('support')

@php

$list = session('list');
$backlist = session('backlist');
$day = session('day');
$daykey = session('daykey');

@endphp


<form action="{{route('add.schedule')}}" method="post" class="table-form">
@csrf
    <div class="questions-table table-content-center">
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
                <tr>
                    <td><input type="text" name="day" value="{{$day}}" style="border: none"></td>
                    <input type="hidden" name="daykey" value="{{$daykey}}">
                    <td>
                        <div class="">
                            <p>How many hours per day?</p>
                            <input type="number" name="hours" placeholder="6.." style="width: 45%; height: 25px">
                            <select name="timeofday" id="" style="width: 50%">
                                <option value="morning">Morning</option>
                                <option value="afternoon">Afternoon</option>
                                <option value="evening">Evening</option>
                                <option value="all day">All Day</option>
                            </select>
                            <textarea class="mt-2" placeholder="Support you require" name="support" cols="30"></textarea>
                        </div>
                    </td>
                    <td>
                    <div class="ratio-select">
                        <select name="ratio" required>
                            @foreach(config('ratio') as $key => $value)
                                <option value="{{ $key }}">{{ $value }}</option>
                            @endforeach
                        </select>
                    </div>
                    </td>
                    <td>
                        <textarea placeholder="I need [one-on-one] support because" name="explanation" cols="30"></textarea>
                        <div class="d-flex justify-content-end pt-2">
                            <button type="submit" class="outline-button">Add</button>
                        </div>
                    </td>
                </tr>

                @if (isset($getSchedule))
                    @foreach ($getSchedule as $key => $schedule)

                    <tr>
                        <td><p>{{$day}}</p></td>
                        <td>
                            <div class="">
                                <p>{{$schedule['hours']}} hours</p>
                                <p>{{$schedule['times_of_day']}}</p>
                                <p>{{$schedule['support']}}</p>
                            </div>
                        </td>
                        <td>
                            <p>{{$schedule['ratio']}}</p>
                        </td>
                        <td>
                            <p>{{$schedule['explanation']}}</p>
                            <div class="d-flex justify-content-end">
                                <a href="{{ route('delete.schedule', ['id' => $schedule['id']]) }}">
                                    <button type="button" class="btn">Delete</button>
                                </a>

                            </div>
                        </td>
                    </tr>

                    @endforeach
                @endif

            <input type="hidden" name="headingId" value="{{$list['data']['heading']['id']}}">
            </tbody>
        </table>

    </div>
</form>
<center><a href="{{ route('get.schedule')}}"><button class="btn-pink form-button-pink">Other Days</button></a></center>

@endsection
