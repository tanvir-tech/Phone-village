@extends('master/master')
@section("content")

<div class="container p-5">

    <h3 class="text-center text-warning">Approve notice</h3>
    <table class="table table-striped">
        <thead class="bg-info text-white">
            <tr>
                <th scope="col">Product ID</th>
                <th scope="col">Name</th>
                <th scope="col">Category</th>
                <th scope="col">Available</th>
                <th scope="col">Sold</th>
                <th scope="col">Discount</th>
                <th scope="col">Options</th>
            </tr>
        </thead>
        <tbody>
         
    @foreach ($notices as $notice)

    <tr>
        <th scope="row">{{$notice['id']}}</th>
        <td>{{$notice['title']}}</td>
        <td>{{$notice['department']}}</td>
        <td>
            <a href="approveNotice/{{$notice['id']}}" class="text-white btn btn-success">Approve</a>
        </td>
        <td>
            <a href="deleteNotice/{{$notice['id']}}" class="text-white btn btn-danger">Delete</a>
        </td>
    </tr>

    @endforeach



        </tbody>
    </table>



</div>

@endsection