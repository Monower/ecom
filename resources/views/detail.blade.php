@extends('master')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <img class="detail-img" src="{{$data['gallery']}}" alt="">
        </div>
        <div class="col-sm-6">
            <a href="/">Go back</a>
            <h2>{{$data['name']}}</h2>
            <h3>Price: {{$data['price']}}</h3>
            <h4>Details {{$data['description']}}</h4>
            <h4>Category: {{$data['category']}}</h4>
            <br><br>
            <form action="/add_to_cart" method="post">
                @csrf
                <input type="hidden" name="product_id" value="{{$data['id']}}">
                <button class="btn btn-primary">Add to Cart</button>
            </form>
            <br><br>
            <button class="btn btn-secondary">Buy Now</button>
            <br><br>
        </div>
    </div>



</div>
  
  

@endsection