@extends("layouts.admin")

@section("content")

    <h1 class="my-5 mx-5">
        Create User
    </h1>

    <form method="post" class="mx-5" action="/admin/users" enctype="multipart/form-data">

        @csrf
        
        <div class="mb-3">
            
            <label for="name" class="form-label" >Name</label>
            <input type="text" name="name" id="name" placeholder="Enter user's full name..." class="form-control" />
        
        </div>
        <div class="mb-3">
            
            <label for="role_id" class="form-label">Role</label>
            <select name="role_id" id="role_id" class="form-select">
                @foreach($roles as $role)
                    <option value="{{$role->id}}" name="role_id" id="role" class="form-control" value>{{ $role->name }}</option>
                @endforeach
            </select>
        
        </div>
        <div class="mb-3">
            
            <label for="status" class="form-label" >Status</label>
            <select name="is_active" id="status" class="form-select">
                <option value="1" name="is_active" id="status1" class="form-control">Active</option>
                <option value="0" name="is_active" id="status2" class="form-control" selected >Not Active</option>
            </select>
        
        </div>
        <div class="mb-3">
            
            <label for="emaiil" class="form-label" >Email</label>
            <input type="email" name="email" id="email" placeholder="Enter the email..." class="form-control" />
        
        </div>
        <div class="mb-3">
            
            <label for="password" class="form-label" >Password</label>
            <input type="password" name="password" id="password" placeholder="Enter user's password..." class="form-control" />
        
        </div>
        <div class="mb-3">
            
            <label for="photo_id" class="form-label" >Upload Your Profile Image</label>
            <input type="file" name="photo_id" id="photo_id" class="form-control" />
        
        </div>

        <input type="submit" value="Create" class="btn btn-primary" />

        @include("includes.formErrorTemplate")
        
    </form>


@endsection