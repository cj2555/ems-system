<?php

namespace App\Http\Controllers;

use App\Permission;
use Illuminate\Http\Request;

class PermissionController extends Controller
{

    public function index()
    {
        $permissions = Permission::all();
        return view('admin.permission.list', compact('permissions'));
    }

    public function create()
    {
        return view('admin.permission.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'role_id' => 'required|unique:permissions'
        ]);
        Permission::create($request->all());
        return redirect()->back()->with('message', 'permission created');
    }

    public function edit($id)
    {

        $permission = Permission::find($id);
        return view('admin.permission.edit', compact('permission'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required'
        ]);
        $permission = Permission::find($id);
        $permission->update($request->all());
        return redirect()->back()->with('message', 'permission updated');
    }
}
