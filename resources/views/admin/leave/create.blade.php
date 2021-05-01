@extends('admin.layouts.master')

@section('content')

<div class="container mt-5">
    <div class="row justify-content-center">
        @if(Session::has('message'))
        <div class="alert alert-success">{{Session::get('message')}}</div>
        @endif

        <form action="{{route('leave.store')}}" method="post">@csrf
            <div class="form-group">
                <label for="from">from:</label>
                <input type="date" id="from" name="from">
            </div>
            <div class="form-group">
                <label for="to">to:</label>
                <input type="date" id="to" name="to">
            </div>


            <div>
                <label for="type">type of leave:</label>
                <select name="type" class="form-control" id="type">
                    <option value="sickeLeave">sick leave</option>
                    <option value="annualLeave">annual leave</option>

                </select>
            </div>

            <div>
                <label for="description">description:</label>
                <input type="text" id="description" name="description">
            </div>




            <button type="submit" class="btn btn-primary">Submit</button>

        </form>

        <table class="table mt-5">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">from</th>
                    <th scope="col">to</th>
                    <th scope="col">type</th>
                    <th scope="col">status</th>

                </tr>
            </thead>
            <tbody>


                @foreach($leaves as $leave)
                <tr>
                    <th scope="row">1</th>
                    <td>{{$leave->from}}</td>
                    <td>{{$leave->to}}</td>
                    <td>{{$leave->type}}</td>
                    @if($leave->status==0)
                    <td>

                        <span class="alert alert-danger">pending</span>
                    </td>
                    @else
                    <td>

                        <span class="alert alert-success">accepted</span>
                    </td>
                    @endif
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>

@endsection