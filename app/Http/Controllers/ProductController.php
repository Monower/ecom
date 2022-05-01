<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use Session;
use Illuminate\Support\Facades\DB;

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

    function cartList(){
        $userid=Session::get('user')['id'];

        $data=DB::table('cart')
                ->join('products','cart.product_id','=','products.id')
                ->where('cart.user_id',$userid)
                ->select('products.*','cart.id as cart_id')
                ->get();

                return view('cartlist',['data'=>$data]);
    }

    function remove_cart_item($id){
        Cart::destroy($id);
        return redirect('cartlist');
    }

    function ordernow(){
        $userid=Session::get('user')['id'];

        $data=DB::table('cart')
                ->join('products','cart.product_id','=','products.id')
                ->where('cart.user_id',$userid)
                ->sum('products.price');


                return view('ordernow',['data'=>$data]);
    }

    function order_place(Request $r){
        $userid=Session::get('user')['id'];
        $allcart=Cart::where('user_id',$userid)->get();

        foreach($allcart as $a){
            $order= new Order;
            $order->product_id=$a['product_id'];
            $order->user_id=$a['user_id'];
            $order->status="pending";
            $order->payment_method=$r->paymentop;
            $order->payment_status="pending";
            $order->address=$r->address;
            $order->save();

            Cart::where('user_id',$userid)->delete();
        }

        return redirect('/');
    }

    function myorders(){
        $userid=Session::get('user')['id'];

        $data= DB::table('orders')
                ->join('products','orders.product_id','=','products.id')
                ->where('orders.user_id',$userid)
                ->get();

        return view('myorders',['data'=>$data]);



    }
}
