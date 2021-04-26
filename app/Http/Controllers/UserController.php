<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        $users = User::all();
        return view('admin.user.list', compact('users'));
    }
    public function create()
    {
        return view('admin.register.create');
    }

    public function store(Request $request)
    {
        $this->validate(
            $request,
            [
                'name' => "required",
                'email' => "required|string|email|max:255|unique:users",
                'password' => "required|string",
                'department_id' => "required",
                'role_id' => "required",
                'start_form' => "required",
                'designation' => "required",


            ]
        );
        $data = $request->all();

        $data['password'] = bcrypt($request->password);
        User::create($data);
        return redirect()->back()->with('message', 'USER created');
    }
}
