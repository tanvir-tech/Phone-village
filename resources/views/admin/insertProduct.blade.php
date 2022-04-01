@extends('master/master')
@section("content")
<div class="justify-content-center">


<div class="row p-5">
    <div class="col-lg-3"></div>
    <div class="col-lg-6 bg-success text-white rounded">
        <form action="insertProduct" method="POST" enctype="multipart/form-data">
          @csrf
        <br>
        <h3 class="text-center">New product</h3>
        <br>
        <input class="form-control mr-sm-2" type="text" placeholder="Item name" name="productName">
        <br>
        <input class="form-control mr-sm-2" type="text" placeholder="Description" name="description">
        <br>
        <label for="category">Brand :</label>
        <select class="form-control col-lg-6" id="category" name="category">
          <option value="iphone">iphone</option>
          <option value="samsung">samsung</option>
          <option value="xiaomi">xiaomi</option>
          <option value="oppo">oppo</option>
          <option value="vivo">vivo</option>
          <option value="itel">itel</option>
          <option value="sony">sony</option>
          <option value="nokia">nokia</option>
          <option value="oneplus">oneplus</option>
          <option value="walton">walton</option>
      </select>
        <br>
        <input class="form-control col-lg-4" type="number" placeholder="price" name="price">
        <br>
        <input class="form-control col-lg-4" type="number" placeholder="discount" name="discount">
        <br>
        <input class="form-control col-lg-4" type="number" placeholder="quantity" name="quantity">
        <br>
            {{-- product Image  --}}
            <label for="productImage">Select an image:</label>
            <input type="file" id="productImage" name="productImage">
        <br>
        <button class="btn btn-danger" type="submit">Submit</button>
        <br><br>
        </form>
      </div>
</div>
<div class="col-lg-3"></div>



@endsection