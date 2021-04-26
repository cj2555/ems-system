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

                    <form action="{{route('permission.store')}}" method="post">@csrf
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Example select</label>

                            <select name="role_id" class="form-control @error('role_id')
                             is-invalid @enderror " id="exampleFormControlSelect1">
                                @foreach(App\Role::all() as $role)
                                <option value="{{$role->id}}">{{$role->name}}</option>
                                @endforeach

                                @error('role_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                                @enderror
                            </select>

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
                                            <td><input type="checkbox" name="name[department][can-add]" value="1"></td>
                                            <td><input type="checkbox" name="name[department][can-edit]" value="1"></td>
                                            <td><input type="checkbox" name="name[department][can-view]" value="1"></td>
                                            <td><input type="checkbox" name="name[department][can-delete]" value="1"></td>
                                            <td><input type="checkbox" name="name[department][can-list]" value="1"></td>

                                        </tr>
                                        <tr>

                                            <td>role</td>
                                            <td><input type="checkbox" name="name[role][can-add]" value="1"></td>
                                            <td><input type="checkbox" name="name[role][can-edit]" value="1"></td>
                                            <td><input type="checkbox" name="name[role][can-view]" value="1"></td>
                                            <td><input type="checkbox" name="name[role][can-delete]" value="1"></td>
                                            <td><input type="checkbox" name="name[role][can-list]" value="1"></td>

                                        </tr>permission
                                        <tr>

                                            <td>permission</td>
                                            <td><input type="checkbox" name="name[permission][can-add]" value="1"></td>
                                            <td><input type="checkbox" name="name[permission][can-edit]" value="1"></td>
                                            <td><input type="checkbox" name="name[permission][can-view]" value="1"></td>
                                            <td><input type="checkbox" name="name[permission][can-delete]" value="1"></td>
                                            <td><input type="checkbox" name="name[permission][can-list]" value="1"></td>

                                        </tr>
                                        <tr>

                                            <td>user</td>
                                            <td><input type="checkbox" name="name[user][can-add]" value="1"></td>
                                            <td><input type="checkbox" name="name[user][can-edit]" value="1"></td>
                                            <td><input type="checkbox" name="name[user][can-view]" value="1"></td>
                                            <td><input type="checkbox" name="name[user][can-delete]" value="1"></td>
                                            <td><input type="checkbox" name="name[user][can-list]" value="1"></td>

                                        </tr>





                                    </tbody>
                                </table>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>

                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection