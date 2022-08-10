@extends('layouts/app')

@section('content')


<div class="container my-5">
    <div class="container">

        <div class="card">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Date</th>
                        <th scope="col">Available</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($timeslots as $timeslot)
                    <tr>
                        <th scope="row">{{ $timeslot->id }}</th>
                        <td>{{ $timeslot->date }}</td>
                        @if($timeslot->taken)
                        <td>Unavailable</td>
                        @else
                        <td>Available
                            <form method="POST" action="{{ route('bookingCreate') }} ">
                                @csrf
                                <input type="text" value="{{$timeslot->id}}" name="timeslot_id" style="display: none;">
                                <input type=" text" value="{{$timeslot->desk_id}}" name="desk_id" style="display: none;">
                                <input type="text" value="{{$timeslot->date}}" name="timeslot_date" style="display: none;">
                                <input type="submit" value="book" class="btn btn-warning" />
                            </form>
                        </td>
                        @endif
                    </tr>
                    @endforeach
                </tbody>
            </table>





        </div>


        @endsection