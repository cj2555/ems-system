<?php

namespace App\Http\Controllers;

use App\Leave;
use Illuminate\Http\Request;

class LeaveController extends Controller
{



    public function create()
    {
        $leaves = Leave::latest()->where('user_id', auth()->user()->id)->get();
        return view('admin.leave.create', compact('leaves'));
    }

    public function store(Request $request)
    {

        $data = $request->all();
        $data['user_id'] = auth()->user()->id;
        $data['message'] = '';
        $data['status'] = 0;


        Leave::create($data);
        return redirect()->back()->with('message', 'request created');
    }


    public function edit($id)
    {
        $leave = Leave::find($id);
        return view('admin.leave.edit', compact('leave'));
    }

    public function update(Request $request, $id)
    {

        $leave = leave::find($id);
        $leave->status = $request->status;
        $leave->message = $request->message;
        $leave->save();
        return redirect()->back()->with('message', 'leave updated');
    }

    public function index()
    {
        $leaves = Leave::latest()->get();
        return view('admin.leave.index', compact('leaves'));
    }
}
