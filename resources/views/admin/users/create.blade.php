@extends("layouts.admin")

@section("content")

    <h1 class="my-5 mx-5">
        Create User
    </h1>

    <form method="post" class="mx-5" action="/admin/users">

        @csrf
        
        <div class="mb-3">
            
            <label for="name" class="form-label" >Name</label>
            <input type="text" name="name" id="name" placeholder="Enter user's full name..." class="form-control" />
        
        </div>
        <div class="mb-3">
            
            <label for="roleid" class="form-label" >Role_id</label>
            <input type="text" name="roleid" id="roleid" placeholder="Enter the role id..." class="form-control" />
        
        </div>
        <div class="mb-3">
            
            <label for="status" class="form-label" >Status</label>
            <select class="form-select">
                <option value="1" type="text" name="status1" id="status1" class="form-control">Active</option>
                <option value="0" type="text" name="status2" id="status2" class="form-control" selected >Not Active</option>
            </select>
        
        </div>
        <div class="mb-3">
            
            <label for="emaiil" class="form-label" >Email</label>
            <input type="text" name="email" id="email" placeholder="Enter the email..." class="form-control" />
        
        </div>

        <input type="submit" value="Create" class="btn btn-primary" />

    </form>

@endsection