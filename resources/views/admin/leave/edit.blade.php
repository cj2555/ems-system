@extends('admin.layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">update leave</div>
                @if(Session::has('message'))
                <div class="alert alert-success">{{Session::get('message')}}</div>
                @endif

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <form action="{{route('leave.update',[$leave->id])}}" method="post">@csrf
                        {{ method_field('PATCH') }}

                        <div>
                            <select name="status" id="">
                                <option value="0">pending</option>
                                <option value="1">accepted</option>
                            </select>


                        </div>

                        <div>
                            <label for="message">message:</label>
                            <input type="text" id="message" name="message">
                        </div>




                        <button type="submit" class="btn btn-primary">update</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection