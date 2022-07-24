@extends('layouts/app')

@section('content')


<div class="container my-5">
    <div class="row">
        <!-- Loop through offices -->
        @foreach ($offices as $office)
        <div class="col-sm-4">
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">{{ $office->name }}</h5>
                    <small class="text-muted">{{ $office->location }}</small>
                    <a href="/bookings/offices/{{ $office->id }}/desks" class="btn btn-primary">View Desks</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>


@endsection