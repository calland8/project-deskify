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
                    <!-- <form method="post" action="{{ route('showTimeslots') }}">
                        @csrf
                        <input type="text" value="{{$desks->id}}">
                        <input type="submit" value="View Dates" class="btn btn-primary">
                    </form> -->
                    <a href="/timeslots" class="btn btn-primary">View Desks</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>


@endsection