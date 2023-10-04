@extends('questions')
@section('support')

@php
$list = session('list');
$backlist = session('backlist');
@endphp
<div class="table-container">
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
            @if (isset($getSchedule))
            @foreach ($getSchedule as $key => $schedule)
            <tr>
                <td><p>{{$schedule['day']}}</p></td>
                <td>
                    <div class="">
                        <p>{{$schedule['time_period']}}</p>
                        <p>{{$schedule['support']}}</p>
                    </div>
                </td>
                <td>
                    <p>{{$schedule['ratio']}}</p>
                </td>
                <td>
                    <p>{{$schedule['explanation']}}</p>
                </td>
            </tr>
            @endforeach
            @endif
        </tbody>
    </table>
</div>
</div>
<a href="/compiled"><button class="btn-pink form-button-pink">Compile My document</button></a>

@endsection
