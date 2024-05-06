@extends("layouts.admin")

@section("content")

    <h1 class="my-5 mx-5">
        Edit User
    </h1>

    <div class="row m-5">

        <div class="col-3">
    
            <img src="{{ $user->photo ? $user->photo->path : 'https://picsum.photos/200/300' }}" height="200" width="200" alt="..." class="img-thumbnail">
    
        </div>
    
        <div class="col-9">
    
            <form method="post" class="mx-5" action="{{route('users.update' , $user->id)}}" enctype="multipart/form-data">
    
                @csrf
                <input name="_method" type="hidden" value="PATCH">
                <div class="mb-3">
                    
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" id="name" value="{{ $user->name }}" placeholder="Enter user's full name..." class="form-control" />
                
                </div>
                <div class="mb-3">
                    
                    <label for="role_id" class="form-label">Role</label>
                    <select name="role_id" id="role_id" class="form-select">
                        @foreach($roles as $role)
                            @if ($user->role->name === $role->name)
                                <option value="{{$role->id}}" name="role_id" id="role" class="form-control" selected >{{ $role->name }}</option>
                            @else
                                <option value="{{$role->id}}" name="role_id" id="role" class="form-control" >{{ $role->name }}</option>
                            @endif
                        @endforeach
                    </select>
                
                </div>
                <div class="mb-3">
                    
                    <label for="status" class="form-label" >Status</label>
                    <select name="is_active" id="status" class="form-select">
                        @if ($user->is_active == 1)
                            <option value="1" name="is_active" id="status1" class="form-control" selected >Active</option>
                            <option value="0" name="is_active" id="status2" class="form-control" >Not Active</option>
                        @else
                            <option value="1" name="is_active" id="status1" class="form-control">Active</option>
                            <option value="0" name="is_active" id="status2" class="form-control" selected >Not Active</option>
                        @endif
    
                    </select>
                
                </div>
                <div class="mb-3">
                    
                    <label for="email" class="form-label" >Email</label>
                    <input type="email" name="email" id="email" value="{{ $user->email }}" placeholder="Enter the email..." class="form-control" />
                
                </div>
                <div class="mb-3">
                    
                    <label for="password" class="form-label" >Password</label>
                    <input type="password" name="password" id="password" placeholder="Enter user's password..." class="form-control" />
                
                </div>
                <div class="mb-3">
                    
                    <label for="photo_id" class="form-label" >Upload Your Profile Image</label>
                    <input type="file" name="photo_id" id="photo_id" class="form-control" />
                
                </div>
    
                <input type="submit" value="Update" class="btn btn-primary" />
                    
            </form>
    
        </div>

    </div>

    <div class="row m-5">

        @include("includes.formErrorTemplate")

    </div>

@endsection