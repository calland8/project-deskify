@extends('layouts/app')

@section('content')



<div class="container">
    <h1 class="display-5 fw-bold">Your Bookings:</h1>

</div>
<br>
<div class="container">
    <div class="card">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Office</th>
                    <th scope="col">Room</th>
                    <th scope="col">Desk</th>
                    <th scope="col">Date</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
</div>
<br>
<div class="container">
    <div class="row">
        <div class="d-flex justify-content-center">
            <a href="/bookings/offices" class="btn btn-primary align-content-center">Book New</a>
        </div>
    </div>
</div>
@endsection