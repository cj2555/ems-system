<?php

namespace App\Http\Controllers;

use App\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::all();
        return view('admin.role.list', compact('roles'));
    }

    public function create()
    {
        return view('admin.role.create');
    }

    public function store(Request $request)
    {
        $this->validate(
            $request,
            ['name' => "required|unique:roles"]
        );
        $data = $request->all();
        Role::create($data);
        return redirect()->back()->with('message', 'role created');
    }
}
