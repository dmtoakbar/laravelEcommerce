@extends('master')
@section('content')
<div id="carouselExampleDark" class="carousel carousel-white slide">
    <div class="carousel-indicators">
        @php
            $condition = count($products);
        @endphp
        @for ($i = 0; $i < $condition; $i++)
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="{{$i}}" {{$i==0?"class=active aria-current=true":''}}  aria-label="Slide {{$i}}"></button>
        @endfor
    </div>
    <div class="carousel-inner">
        @php
            $n=0;
        @endphp
        @foreach ($products as $item)
        @php
            $n++;
        @endphp
      <div class="carousel-item {{$n==1?'active':''}}" data-bs-interval="10000">
        <img src="{{$item['gallery']}}" height="480" class="d-block w-100" alt="...">
        <div class="carousel-caption d-md-block" style="border-radius: 60px; background-color: blue; color: white">
          <h5>{{$item['name']}}</h5>
          <p>{{$item['description']}}</p>
        </div>
      </div>
      @endforeach
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <br>
  <br>
  <div class="container d-flex">
    @foreach ($products as $item)
    <div class="card" style="width: 18rem; margin: 10px">
        <img src="{{$item['gallery']}}" height="200" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">{{$item['name']}}&nbsp;&nbsp;{{$item['price']}}</h5>
          <p class="card-text">{{$item['description']}}</p>
          <div class="d-flex justify-content-center mb-1">
            
            <a href="detail/{{$item['id']}}" class="btn btn-warning">Details</a>
            
          </div>
          <form action="/add_to_cart"  method="POST" class="d-flex justify-content-center">
            @csrf
            <input type="hidden" name="product_id" value="{{$item['id']}}">
            <button class="btn btn-primary">Add to cart</button>
          </form>
        </div>
      </div>
    @endforeach
  </div>
@endsection