@extends('master/master')
@section("content")
<div class="justify-content-center">


<div class="row p-5">
    <div class="col-lg-3"></div>
    <div class="col-lg-6 bg-info text-white rounded">
        <form action="compare" method="POST">
          @csrf
        <br>
        <h3 class="text-center">Filter</h3>
        <br>
    
        <input class="form-control mr-sm-2" type="number" placeholder="First ID" name="id1">
        <br>
        <input class="form-control mr-sm-2" type="number" placeholder="Another ID" name="id2">
        <br>
        
        
    
        <button class="btn btn-success" type="submit">Compare</button>
        <br><br>
        </form>
      </div>
</div>
<div class="col-lg-3"></div>




@endsection