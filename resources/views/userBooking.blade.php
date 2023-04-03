@extends('layouts/app')

@section('content')


<div class="container">

</div>
<br>
<div class="container">
    <div class="card">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Desk</th>
                    <th scope="col">Date</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($bookings as $booking)
                <tr>

                    <td>{{ $booking->desk_id }}</td>
                    <td>{{ $booking->date }}</td>
                    <td>
                        <!-- this selects the correct booking and not just the first booking by id -->
                        <button type="button" class="btn" onclick="event.preventDefault();
                            document.getElementById('delete_booking_form_{{ $booking->id }}').submit()">Delete</button>
                        <form id="delete_booking_form_{{ $booking->id }}" action="{{ route('cancelBooking' , $booking->id) }}" method="POST" style="display:none">
                            @csrf
                            @method("Delete")
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<br>
@endsection