@extends('master')
@section('content')

<div class="custom-product">
    <div class="col-sm-4">
                <div class="trending-wrapper">
                    <h3>Result for products</h3>
                    <a class="btn btn-success" href="ordernow">Order Now</a>
                    @foreach($data as $p)
                        <div class="searched-item">
                            <a href="detail/{{$p->id}}">
                            <img class="trending-img" src="{{$p->gallery}}" class="d-block w-100">
                            <div class="">
                                <h5>{{$p->name}}</h5>  
                                <h5>{{$p->description}}</h5>                  
                            </div>
                                </a>
                            </div>
                        </div>
                        <button class="btn btn-warning"><a href="/removecart/{{$p->cart_id}}">Remove from cart</a></button>
                    @endforeach


                </div>
                <a class="btn btn-success" href="ordernow">Order Now</a>
                </div>

    </div>
  
  

@endsection