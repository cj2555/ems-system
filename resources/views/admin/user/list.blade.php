@extends('admin.layouts.master')
<div class="container mt-5">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">name</th>
                <th scope="col">email</th>
                <th scope="col">role</th>
                <th scope="col">department</th>
                <th scope="col">start date</th>


            </tr>
        </thead>
        <tbody>

            @if(count($users)>0)
            @foreach ($users as $key=>$user)
            <tr>
                <th scope="row">{{$key+1}}</th>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->role->name}}</td>
                <td>{{$user->department->name}}</td>
                <td>{{$user->start_form}}</td>


            </tr>
            @endforeach
            @endif

        </tbody>
    </table>