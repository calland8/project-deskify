@extends('layouts/app')
@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="jumbotron">
        <table class="table table-striped">
            <tr>
                <td>Name</td>
                <td>{{ Auth::user()->name }}</td>
            </tr>
            <tr>
                <td>Email</td>
                <td>{{ Auth::user()->email }}</td>
            </tr>

        </table>
    </div>
</div>

@endsection