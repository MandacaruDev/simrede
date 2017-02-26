<?php

namespace App\Http\Controllers\ScaffoldInterface;

use App\Http\Controllers\Controller;
use Hash;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

use App\User;
use Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

use Auth;

class UserController extends Controller
{

    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        if(Auth::user()->name == "Admin")
  {
        
        // $users = \App\User::all();


                    $search = \Request::get('search'); //<-- we use global request to get the param of URI
                    
                    if ($search == "") {

                        $users = User::where('name','like','%'.$search.'%')
                        ->orwhere('email','like','%'.$search.'%')
                            ->orderBy('name')
                            ->paginate(30);

                    return view('scaffold-interface.users.index', compact('users'));

                    } else {

                    $search = \Request::get('search'); //<-- we use global request to get the param of URI

                    $users = User::where('name','like','%'.$search.'%')
                    ->orwhere('email','like','%'.$search.'%')
                        ->orderBy('name')
                        ->paginate(200);

                    return view('scaffold-interface.users.index', compact('users'));
                    }

    }
}
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('scaffold-interface.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

 if(Auth::user()->name == "Admin")
  {

        $user = new \App\User();

        $user->email = $request->email;
        $user->name = $request->name;
        $user->password = Hash::make($request->password);

        $user->save();

        return redirect('users');
  }
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

         if(Auth::user()->name == "Admin")
  {
        $user = \App\User::findOrfail($id);
        $roles = Role::all()->pluck('name');
        $permissions = Permission::all()->pluck('name');
        $userRoles = $user->roles;
        $userPermissions = $user->permissions;

        return view('scaffold-interface.users.edit', compact('user', 'roles', 'permissions', 'userRoles', 'userPermissions'));
    }
    }
    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

         if(Auth::user()->name == "Admin")
  {
        $user = \App\User::findOrfail($request->user_id);

        $user->email = $request->email;
        $user->name = $request->name;
        $user->password = Hash::make($request->password);

        $user->save();

        return redirect('users');
    }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

         if(Auth::user()->name == "Admin")
  {

        $user = \App\User::findOrfail($id);

        $user->delete();

        return redirect('users');
    }
    }
    /**
     * Assign Role to user.
     *
     * @param \Illuminate\Http\Request
     *
     * @return \Illuminate\Http\Response
     */
    public function addRole(Request $request)
    {
 
 if(Auth::user()->name == "Admin")
  {

        $user = \App\User::findOrfail($request->user_id);
        $user->assignRole($request->role_name);

        return redirect('users/edit/'.$request->user_id);
    }
}

    /**
     * Assign Permission to a user.
     *
     * @param \Illuminate\Http\Request
     *
     * @return \Illuminate\Http\Response
     */
    public function addPermission(Request $request)
    {
        $user = \App\User::findorfail($request->user_id);
        $user->givePermissionTo($request->permission_name);

        return redirect('users/edit/'.$request->user_id);
    }

    /**
     * revoke Permission to a user.
     *
     * @param \Illuminate\Http\Request
     *
     * @return \Illuminate\Http\Response
     */
    public function revokePermission($permission, $user_id)
    {
 if(Auth::user()->name == "Admin")
  {
        $user = \App\User::findorfail($user_id);

        $user->revokePermissionTo(str_slug($permission, ' '));

        return redirect('users/edit/'.$user_id);
    }
    }
    /**
     * revoke Role to a a user.
     *
     * @param \Illuminate\Http\Request
     *
     * @return \Illuminate\Http\Response
     */
    public function revokeRole($role, $user_id)
    {
         if(Auth::user()->name == "Admin")
  {
        $user = \App\User::findorfail($user_id);

        $user->removeRole(str_slug($role, ' '));

        return redirect('users/edit/'.$user_id);
    }
}
}
