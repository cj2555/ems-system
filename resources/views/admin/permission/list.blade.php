@extends('admin.layouts.master')
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-8">
            <div class="card">

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#role</th>
                            <th>action</th>



                        </tr>
                    </thead>
                    <tbody>

                        @foreach($permissions as $key => $permission)
                        <tr>

                            <td>{{$permission->role->name}}</td>
                            <td>



                                <a href="{{route('permission.edit',[$permission->id])}}"> <button type="button" class="btn btn-warning">edit</button></a>



                            </td>


                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>