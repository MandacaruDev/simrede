<?php

namespace App\Http\Controllers\ScaffoldInterface;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

use Auth;

class PermissionController extends Controller
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
        $permissions = Permission::all();

        return view('scaffold-interface.permissions.index', compact('permissions'));
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
        return view('scaffold-interface.permissions.create');
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
        Permission::create(['name' => $request->name]);

        return redirect('permissions');
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
        $permission = Permission::findOrFail($id);

        return view('scaffold-interface.permissions.edit', compact('permission'));
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
        $permission = Permission::findOrFail($request->permission_id);

        $permission->name = $request->name;

        $permission->update();

        return redirect('permissions');
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
        $permission = Permission::findOrFail($id);

        $permission->delete();

        return redirect('permissions');
    }
    }
}
