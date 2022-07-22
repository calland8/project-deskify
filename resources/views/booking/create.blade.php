@extends('layouts/app')

@section('content')


<div class="container my-5">
    <div class="card">
        <div class="card-title">
            <h2> {{ $officeData->name }} -- {{ $officeData->location }}</h2>
        </div>
        <div class="card-body">
            <h5 class="card-title"></h5>
            <p class="card-text">Choose your desk:</p>
            <form method="POST" action="{{ route('booking.store') }}">
                @csrf
                <div class="row">
                    <div class="col-sm-8">
                        <div class="form-group">
                            <label for="room">Room Type</label>
                            <select class="form-control" name="room_id">
                                @foreach ($officeData->desks as $desks)
                                <option value="{{$desks->id}}">{{ $desks->room }} - {{ $desks->id }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="arrival">Arrival</label>
                            <input type="date" class="form-control" name="arrival" placeholder="03/21/2020">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="departure">Departure</label>
                            <input type="date" class="form-control" name="departure" placeholder="03/23/2020">
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-warning">Book it</button>
            </form>
        </div>
    </div>
</div>
</div>


@endsection