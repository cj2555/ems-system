<?php

namespace App\Http\Controllers;

use App\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{

    public function index()
    {
        $departments = Department::all();
        return view('admin.department.list', compact('departments'));
    }

    public function create()
    {
        return view('admin.department.create');
    }

    public function store(Request $request)
    {
        $this->validate(
            $request,
            ['name' => "required|unique:departments"]
        );
        $data = $request->all();
        Department::create($data);
        return redirect()->back()->with('message', 'department created');
    }
}
