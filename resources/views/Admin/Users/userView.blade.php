@extends('layouts/app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>h1. Bootstrap heading</h1>
            <a class="btn btn-sm btn-success float-right" href="{{ route('admin.users.create') }}" role="button">Create User</a>
        </div>
    </div>
</div>
<br>
<div class="container">
    <div class="card">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <th scope="row">{{ $user->id }}</th>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <a class="btn btn-sm btn-primary" href="{{ route('admin.users.edit', $user->id) }}" role="button">Edit</a>
                        <!-- this selects the correct user and not just the first user by id -->
                        <button type="button" class="btn" onclick="event.preventDefault();
                            document.getElementById('delete_user_form_{{ $user->id }}').submit()">Delete</button>

                        <form id="delete_user_form_{{ $user->id }}" action="{{ route('admin.users.destroy' , $user->id) }}" method="POST" style="display:none">
                            @csrf
                            @method("Delete")
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $users->Links()}}
    </div>
</div>
@endsection