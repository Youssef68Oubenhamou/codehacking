@extends("layouts.admin")

@section("content")

    <h1 class="my-5 mx-5">
        Users
    </h1>

    <div class="col-12" >
        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Full Name</th>
                    <th scope="col">Image</th>
                    <th scope="col">Role</th>
                    <th scope="col">Status</th>
                    <th scope="col">Email</th>
                    <th scope="col">Created At</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <th scope="row">{{$user->id}}</th>
                    <td><a href="{{ route('users.edit' , $user->id) }}">{{$user->name}}</a></td>
                    <td><img height="60" src="{{ $user->photo_id ? $user->photo->path : 'The user has no image!' }}"/></td>
                    <td>{{$user->role->name}}</td>
                    <td>{{ $user->is_active ? "Active" : "Not Active" }}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->created_at->diffForHumans()}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection