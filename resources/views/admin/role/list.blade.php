@extends('admin.layouts.master')
@section('content')
<div class="container mt-5">

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th>name</th>
                <th>action</th>


            </tr>
        </thead>
        <tbody>


            @foreach($roles as $key => $role)
            <tr>
                <th scope="row">{{$key+1}}</th>
                <td>{{$role->name}}</td>
                <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-warning">edit</button>
                        <button type="button" class="btn btn-danger">delete</button>
                    </div>
                </td>


            </tr>
            @endforeach

        </tbody>
    </table>
</div>
@endsection