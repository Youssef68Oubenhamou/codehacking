<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $users = \App\Models\User::all() ;

        return view("admin.users.index" , compact("users")) ;

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        $roles = \App\Models\Role::all() ;

        return view("admin.users.create" , compact("roles")) ;

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        return $request->all() ;

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
        return view("admin.users.show") ;

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        
        return view("admin.users.edit") ;

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
