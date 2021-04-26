@extends('admin.layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Permission</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <form action="{{route('permission.update',[$permission->id])}}" method="post">@csrf
                        {{method_field('PATCH')}}
                        <div class="form-group">
                            <h3>{{$permission->role->name}}</h3>

                            <div class="mt-5">
                                <table class="table">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">permission#</th>
                                            <th scope="col">can add</th>
                                            <th scope="col">can edit</th>
                                            <th scope="col">can view</th>
                                            <th scope="col">can delete</th>
                                            <th scope="col">can list</th>

                                    </thead>
                                    <tbody>
                                        <tr>

                                            <td>department</td>
                                            <td><input type="checkbox" name="name[department][can-add]" @if(isset($permission['name']['department']['can-add'])) checked @endif value="1"></td>
                                            <td><input type="checkbox" name="name[department][can-edit]" @if(isset($permission['name']['department']['can-edit'])) checked @endif value="1"></td>
                                            <td><input type="checkbox" name="name[department][can-view]" @if(isset($permission['name']['department']['can-view'])) checked @endif value="1"></td>
                                            <td><input type="checkbox" name="name[department][can-delete]" @if(isset($permission['name']['department']['can-delete'])) checked @endif value="1"></td>
                                            <td><input type="checkbox" name="name[department][can-list]" @if(isset($permission['name']['department']['can-list'])) checked @endif value="1"></td>

                                        </tr>
                                        <tr>

                                            <td>role</td>
                                            <td><input type="checkbox" name="name[role][can-add]" @if(isset($permission['name']['role']['can-add'])) checked @endif value="1"></td>
                                            <td><input type="checkbox" name="name[role][can-edit]" @if(isset($permission['name']['role']['can-edit'])) checked @endif value="1"></td>
                                            <td><input type="checkbox" name="name[role][can-view]" @if(isset($permission['name']['role']['can-view'])) checked @endif value="1"></td>
                                            <td><input type="checkbox" name="name[role][can-delete]" @if(isset($permission['name']['role']['can-delete'])) checked @endif value="1"></td>
                                            <td><input type="checkbox" name="name[role][can-list]" @if(isset($permission['name']['role']['can-list'])) checked @endif value="1"></td>

                                        </tr>permission
                                        <tr>

                                            <td>permission</td>
                                            <td><input type="checkbox" name="name[permission][can-add]" @if(isset($permission['name']['permission']['can-add'])) checked @endif value="1"></td>
                                            <td><input type="checkbox" name="name[permission][can-edit]" @if(isset($permission['name']['permission']['can-edit'])) checked @endif value="1"></td>
                                            <td><input type="checkbox" name="name[permission][can-view]" @if(isset($permission['name']['permission']['can-view'])) checked @endif value="1"></td>
                                            <td><input type="checkbox" name="name[permission][can-delete]" @if(isset($permission['name']['permission']['can-delete'])) checked @endif value="1"></td>
                                            <td><input type="checkbox" name="name[permission][can-list]" @if(isset($permission['name']['permission']['can-list'])) checked @endif value="1"></td>
                                        </tr>
                                        <tr>

                                            <td>user</td>
                                            <td><input type="checkbox" name="name[user][can-add]" @if(isset($permission['name']['user']['can-add'])) checked @endif value="1"></td>
                                            <td><input type="checkbox" name="name[user][can-edit]" @if(isset($permission['name']['user']['can-edit'])) checked @endif value="1"></td>
                                            <td><input type="checkbox" name="name[user][can-view]" @if(isset($permission['name']['user']['can-view'])) checked @endif value="1"></td>
                                            <td><input type="checkbox" name="name[user][can-delete]" @if(isset($permission['name']['user']['can-delete'])) checked @endif value="1"></td>
                                            <td><input type="checkbox" name="name[user][can-list]" @if(isset($permission['name']['user']['can-list'])) checked @endif value="1"></td>

                                        </tr>





                                    </tbody>
                                </table>
                                <button type="submit" class="btn btn-primary">update</button>
                            </div>

                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection