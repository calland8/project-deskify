<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Password;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.users.userView', ['users' => User::paginate(10)]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return create a new user view
        return view('admin.users.create', ['roles' => Role::all()]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // create and store new user object
        $user = User::create($request->except(['_token', 'roles']));
        //show roles
        $user->roles()->sync($request->roles);
        //send password reset so user can choose own password
        Password::sendResetLink($request->only(['email']));
        //redirect back to users
        return redirect(route('admin.users.index'));
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view(
            'admin.users.edit',
            // get the role of the user and find the correct user by id
            ['roles' => Role::all(), 'user' => User::find($id)]
        );
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //update the correct user details
        //get the first result matching id or error
        $user = User::findOrFail($id);

        $user->update($request->except(['_token', 'roles']));

        $user->roles()->sync($request->roles);

        return redirect(route('admin.users.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        //delete a user
        User::destroy($id);
        // prompt confirming user deleted 
        return back()->with('success', 'User deleted');
    }
}
