<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;

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

Route::get('/login', function () {
    return view('login');
});

Route::post('/login',[UserController::class,'login']);
Route::get('/',[ProductController::class,'index'])->name('home');
Route::get('detail/{id}',[ProductController::class,'details']);

Route::post('add_to_cart',[ProductController::class,'addtocart']);

Route::get('/logout',function(){
    Session::forget('user');
    return redirect('login');
});

Route::get('cartlist',[ProductController::class,'cartlist']);

Route::get('removecart/{id}',[ProductController::class,'remove_cart_item']);

Route::get('ordernow',[ProductController::class,'ordernow']);

Route::post('orderplace',[ProductController::class,'order_place']);

Route::get('myorders',[ProductController::class,'myorders']);

Route::view('register','register');

Route::post('/register',[UserController::class,'register']);
