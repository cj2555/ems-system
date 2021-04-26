@extends('admin.layouts.master')

@section('content')

<div class="container mt-5">

    @if(Session::has('message'))
    <div class="alert alert-success">{{Session::get('message')}}</div>
    @endif

    <form action="{{route('roles.store')}}" method="post">@csrf
        <div class="form-group">
            <label for="exampleInputname1"> role name </label>
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="exampleInputname1" placeholder="Enter name">

            @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{$message}}</strong>
            </span>
            @enderror

        </div>


        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</div>

@endsection