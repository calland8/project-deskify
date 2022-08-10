@extends('layouts/app')

@section('content')


<div class="container my-5">
    <div class="container">

        <div class="row">
            <img src="{{ asset('extras/main-office.png') }}" class="rounded mx-auto d-block" style="width: 60%;" alt="">
        </div>

    </div>
    <br>

    <div class="row">
        @foreach ($officeData->desks as $desks)
        <div class="col-sm-4">
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">{{ $desks->room }}</h5>
                    <h5 class="card-title">Desk Number - {{ $desks->desk_number}}</h5>
                    <a href="{{ route('showTimeslots', $desks->id) }}" class="btn btn-primary">View Slots</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>


@endsection