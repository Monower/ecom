@extends('master')
@section('content')

<div class="custom-product">
    <div class="col-sm-4">
                <div class="trending-wrapper">
                    <h3>My orders</h3>
                    @foreach($data as $p)
                        <div class="searched-item">
                            <img class="trending-img" src="{{$p->gallery}}" class="d-block w-100">
                            <div class="">
                                <h5>Name: {{$p->name}}</h5>  
                                <h5>Delivery Status: {{$p->status}}</h5>                  
                                <h5>Address: {{$p->address}}</h5>                  
                                <h5>Payment Status: {{$p->payment_status}}</h5>                  
                                <h5>Payment Method: {{$p->payment_method}}</h5>                  
                            </div>
                            </div>
                        </div>
                    @endforeach


                </div>
                
                </div>

    </div>
  
  

@endsection