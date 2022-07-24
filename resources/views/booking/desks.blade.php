@extends('layouts/app')

@section('content')


<div class="container my-5">
    <div class="row">
        @foreach ($officeData->desks as $desks)
        <div class="col-sm-4">
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">{{ $desks->room }}</h5>
                    <h5 class="card-title">Desk Number - {{ $desks->desk_number}}</h5>
                    <a href="" class="btn btn-primary">Book Now</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>


@endsection