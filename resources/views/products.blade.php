@extends('master')
@section('content')

<div class="custom-product">

    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            @foreach ($product as $p)
                @if ($p['id']<4)
                  <div class="carousel-item {{$p['id']==1?'active':''}}">
                    <a href="detail/{{$p['id']}}">
                    <img class="slider-img" src="{{$p['gallery']}}" class="d-block w-100"></a>
                    <div class="carousel-caption d-none d-md-block slider-text">
                       <h5>{{$p['name']}}</h5>
                        <p>{{$p['description']}}</p>
                   </div>
                 </div>
                @endif
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

      <div class="trending-wrapper">
        <h3>Trending Products</h3>
        <div class="trending-item">
          @foreach($product as $p)
                  <img class="trending-img" src="{{$p['gallery']}}" class="d-block w-100">
                  <div class="">
                     <h5>{{$p['name']}}</h5>                    
                 </div>
               </div>
          @endforeach
      </div>

      </div>

</div>
  
  

@endsection