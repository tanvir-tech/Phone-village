<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use GuzzleHttp\Psr7\Request;
use Illuminate\Contracts\Session\Session;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[ProductController::class,'showProducts']);

// auth
Route::get('/login', function () {
    return view('auth/login');
});
Route::post('/login',[UserController::class,'login']);
Route::get('/logout',[UserController::class,'logout']);
Route::get('/registration', function () {return view('auth/registration');});
Route::post('/registration',[UserController::class,'registration']);
Route::get('/forgetPass', function () {return view('auth.forgetPass');});
Route::get('/resetPass', function () {return view('auth.resetPass');});

// product 
Route::get('/insertProduct', function () {
    return view('admin/insertProduct');
});
Route::post('/insertProduct',[ProductController::class,'insertProduct']);

Route::get('/home',[ProductController::class,'showProducts']);
Route::get('/latest',[ProductController::class,'latestProducts']);

Route::get('/search',[ProductController::class,'search']);
Route::get('category/{category}',[ProductController::class,'categoryProduct']);

Route::get('detail/{id}',[ProductController::class,'detail']);
Route::get('category/detail/{id}',[ProductController::class,'detail']);
//filter
Route::view('filter','showProduct/filter');
Route::post('/filter',[ProductController::class,'filterProduct']);


// cart
Route::post('/cart',[CartController::class,'addToCart']);

Route::get('/cartlist',[CartController::class,'cartlist']);

Route::get('removeCart/{id}',[CartController::class,'removeCart']);

Route::get('/orderNow',[CartController::class,'orderNow']);

Route::post('/placeOrder',[CartController::class,'placeOrder']);

Route::get('/orderlist',[CartController::class,'orderlist']);

