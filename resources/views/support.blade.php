@extends('questions')
@section('support')

@php
$list = session('list');
$backlist = session('backlist');
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
            @foreach ($matchingDays as $key => $day)
                <tr>
                    <td><p>{{$day}}</p></td>
                    <td>
                        <a href="{{ route('add.support',
                        ['day' => $day,
                         'dayKey' => $key]) }}"><button class="btn">Add Support</button></a>
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>

    </div>
    <a href="{{route('view.support')}}"><button type="submit" class="btn-pink form-button-pink">View</button></a>

@endsection
