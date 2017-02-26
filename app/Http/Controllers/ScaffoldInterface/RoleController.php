<?php

namespace App\Http\Controllers\ScaffoldInterface;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

use Auth;

class RoleController extends Controller


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
        $roles = Role::all();

        return view('scaffold-interface.roles.index', compact('roles'));
    }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

         if(Auth::user()->name == "Admin")
  {
        return view('scaffold-interface.roles.create');
    }
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
        Role::create(['name' => $request->name]);

        return redirect('roles');
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
        $role = Role::findOrFail($id);

        return view('scaffold-interface.roles.edit', compact('role'));
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
        $role = Role::findOrFail($request->role_id);

        $role->name = $request->name;

        $role->update();

        return redirect('roles');
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
        $role = Role::findOrFail($id);

        $role->delete();

        return redirect('roles');
    }
    }
}
