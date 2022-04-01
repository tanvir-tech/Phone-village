@extends('master/master')
@section("content")


<div class="bg-info text-white p-5">
    <h3 class="text-warning ">Name : {{Session::get('user')['name']}}</h3>
    <br>
    <p>
    User ID : {{Session::get('user')['id']}}
    <br>
    Address : {{Session::get('user')['address']}}
    </p>
</div>

@endsection