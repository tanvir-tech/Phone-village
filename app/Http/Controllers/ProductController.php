<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{

    function insertProduct(Request $req){

        //validate
        $req->validate([
            'productName'=>'required',
            'description'=>'required',
            'category'=>'required',
            'price'=>'required',
            'productImage'=>'required|file|mimes:jpg,jpeg,bmp,png',
            'discount'=>'required',
            'quantity'=>'required'
        ]);
        
        // file
        $productImageExt = $req->productImage->extension();
        $new_productImageName = time().'_'.$req->productName.'_'.$req->category.'.'.$productImageExt;
        $req->productImage->move(public_path('gallery'), $new_productImageName);

        //form input
        $product = new Product();
        $product->name = $req->productName;
        $product->description = $req->description;
        $product->category = $req->category;
        $product->price = $req->price;
        $product->gallery = $new_productImageName;
        $product->discount = $req->discount;
        $product->quantity = $req->quantity;
        $product->sold = 0;

        $product->save();
        return redirect('/insertProduct');
        
        // return $product;
    }


    function showProducts(Request $req){
        $items = Product::all()->last()->paginate(6);
        // return $items;
        return view('showProduct/allproducts',['Products'=>$items]);
    }

    function search(Request $req){
        // return $req->input();
        $items = Product::where('name','like', '%'.$req->input('query').'%')
                        ->orWhere('description','like', '%'.$req->input('query').'%')           
                        ->orWhere('category','like', '%'.$req->input('query').'%')      
                        ->paginate(6);
        return view('showProduct/allproducts',['Products'=>$items]);
    }

    function categoryProduct($category){
        // return $category;
        $items = Product::where('category','like', '%'.$category.'%')->paginate(6);
        return view('showProduct/categoryProduct',['Products'=>$items]);

    }

    function latestProducts(){
        $items = Product::latest()->paginate(6);
        //return $items;
        return view('showProduct/allproducts',['Products'=>$items]);
    }

    function detail($id){
        $item = Product::find($id);
        return view('showProduct/productDetail',['item'=>$item]);
    }


    function filterProduct(Request $req){

        
        $items = Product::whereBetween('price', [$req->input('low'), $req->input('high')])     
                        ->paginate(6);
        return view('showProduct/allproducts',['Products'=>$items]);

    }



    
// Uncomplete
    function removeProduct($id){

        Product::destroy($id);
        return redirect('productList');
    }


}
