@extends('admin.layouts.master')

@section('content')

<div class="container mt-5">
    <form action="{{route('users.store')}}" method="post">@csrf
        <div class="form-group">
            <label for="exampleFormControlNameInput1">name</label>
            <input type="text" name="name" class="form-control" id="exampleFormControlNameInput1" placeholder="your name" required="">
        </div>
        <div class="form-group">
            <label for="exampleFormControlNameInput1designation">designation</label>
            <input type="text" name="designation" class="form-control" id="exampleFormControlNameInput1designation" placeholder="your designation" required="">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Email address</label>
            <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" required="">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required="">
        </div>

        <div class="form-group">
            <label for="exampleFormControlSelect1">department</label>
            <select class="form-control" name="department_id" id="exampleFormControlSelect1" required="">
                @foreach(App\Department::all() as $department)
                <option value="{{ $department->id}}">{{ $department->name}}</option>
                @endforeach
            </select>
        </div>



        <div class="form-group">
            <label for="exampleFormControlRoleSelect1">role</label>
            <select class="form-control" name="role_id" id="exampleFormControlRoleSelect1" required="">
                @foreach(App\Role::all() as $role)
                <option value="{{ $role->id}}">{{ $role->name}}</option>
                @endforeach

            </select>
        </div>

        <div class="form-group">
            <label for="exampleFormControlRoleSelect1date">start from</label>
            <input class="form-control" name="start_form" type="date" id="exampleFormControlRoleSelect1date" required="">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

    </form>


    @endsection