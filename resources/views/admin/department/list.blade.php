@extends('admin.layouts.master')
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


            @foreach($departments as $key => $department)
            <tr>
                <th scope="row">{{$key+1}}</th>
                <td>{{$department->name}}</td>
                <td>

                    <div class="btn-group" role="group" aria-label="Basic example">
                        @if(isset(Auth::user()->role->permission['name']['department']['can-edit']))

                        <button type="button" class="btn btn-warning">edit</button>
                        <button type="button" class="btn btn-danger">delete</button>
                        @endif



                    </div>
                </td>


            </tr>
            @endforeach
        </tbody>
    </table>
</div>