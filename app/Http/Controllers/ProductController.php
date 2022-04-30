<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Session;

class ProductController extends Controller
{
    function index(){

        $data=Product::all();
        return view('products',['product'=>$data]);
    }

    function details($id){
        $data= Product::find($id);
        return view('detail',['data'=>$data]);
    }

    function addtocart(Request $r){

        if($r->session()->has('user')){
            $cart=new Cart;
            $cart->user_id=$r->session()->get('user')['id'];
            $cart->product_id=$r->product_id;
            $cart->save();

            return redirect()->back();
        }else{
            return redirect('login');
        }
    }

    public static function cartItem(){
        $user_id=Session::get('user')['id'];
        return Cart::where('user_id',$user_id)->count();
    }
}
