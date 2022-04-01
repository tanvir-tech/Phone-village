@extends('master/master')
@section("content")


    <div class="row p-5">
<!-- col 1 -->
        <div class="col-lg-6">
            <img src="{{asset('gallery/'.$item1['gallery'])}}" alt="Product Image">
            <br>
            ID : {{$item1['id']}}
            <h2 class="text-primary">{{$item1['name']}}</h2>
            <h5 class="text-danger">{{$item1['price']}} BDT</h5>
            <p>{{$item1['description']}}</p>

            <form action="/cart" method="POST">
                @csrf
                <input type="hidden" name="product_id" value={{$item1['id']}}>
                <button class="btn btn-warning" type="submit">Add to CART</button>
                {{-- <a href="cart/{{$item1['id']}}" class="btn btn-warning btn-sm">Add to CART</a> --}}
            </form>
            <br>
            <br>
            <a href="/home" class="btn btn-info btn-sm rounded-circle">Go back</a>

        </div>
<!-- col 1 -->
        <div class="col-lg-6">
            <img src="{{asset('gallery/'.$item2['gallery'])}}" alt="Product Image">
            <br>
            ID : {{$item2['id']}}
            <h2 class="text-primary">{{$item2['name']}}</h2>
            <h5 class="text-danger">{{$item2['price']}} BDT</h5>
            <p>{{$item2['description']}}</p>

            <form action="/cart" method="POST">
                @csrf
                <input type="hidden" name="product_id" value={{$item2['id']}}>
                <button class="btn btn-warning" type="submit">Add to CART</button>
                {{-- <a href="cart/{{$item2['id']}}" class="btn btn-warning btn-sm">Add to CART</a> --}}
            </form>
            <br>
            <br>
            <a href="/home" class="btn btn-info btn-sm rounded-circle">Go back</a>

        </div>
    </div>




@endsection