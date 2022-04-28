<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

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
}
