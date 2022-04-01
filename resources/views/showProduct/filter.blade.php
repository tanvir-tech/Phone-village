@extends('master/master')
@section("content")
<div class="justify-content-center">


<div class="row p-5">
    <div class="col-lg-3"></div>
    <div class="col-lg-6 bg-info text-white rounded">
        <form action="filter" method="POST">
          @csrf
        <br>
        <h3 class="text-center">Filter</h3>
        <br>
    
        <input class="form-control mr-sm-2" type="number" placeholder="Higher price" name="high">
        <br>
        <input class="form-control mr-sm-2" type="number" placeholder="Lower price" name="low">
        <br>
        
        
    
        <button class="btn btn-success" type="submit">Filter</button>
        <br><br>
        </form>
      </div>
</div>
<div class="col-lg-3"></div>











@endsection