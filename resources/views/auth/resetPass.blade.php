@extends('master/master')
@section("content")
<div class="justify-content-center">


<div class="row p-5">
    <div class="col-lg-3"></div>
    <div class="col-lg-6 bg-info text-white rounded">
        <form action="registration" method="POST">
          @csrf
        <br>
        <h3 class="text-center">Reset your password</h3>
        <br>
    
        <input class="form-control mr-sm-2" type="email" placeholder="email" name="email">
        <br>
        <input class="form-control mr-sm-2" type="password" placeholder="New password" name="password">
        <br>
        <input class="form-control mr-sm-2" type="password" placeholder="Confirm password" name="password">
        <br>


        <button class="btn btn-warning" type="submit">Save</button>
        <br><br>
        </form>
      </div>
</div>
<div class="col-lg-3"></div>











@endsection