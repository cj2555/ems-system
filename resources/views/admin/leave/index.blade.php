@extends('admin.layouts.master')
@section('content')
<div class="container mt-5">
    <h2>all leave request</h2>
    <table class="table mt-5">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">from</th>
                <th scope="col">to</th>
                <th scope="col">type</th>
                <th scope="col">status</th>
                <th scope="col">update</th>
                <th scope="col">delete</th>

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
                @elseif($leave->status==1)
                <td>

                    <span class="alert alert-success">accepted</span>
                </td>
                @endif

                <td>


                    <a href="{{route('leave.edit',[$leave->id])}}">edit</a>

                </td>
                <td>

                    <button class="btn btn-danger">delete</button>
                </td>
                @endforeach

        </tbody>
    </table>
</div>
@endsection