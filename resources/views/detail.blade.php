@extends('master')
@section('content')
    <div class="container d-flex justify-content-center">
        <div class="card" style="width: 18rem; margin: 10px">
            <img src="{{$item['gallery']}}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Name: {{$item['name']}}</h5>
              <p class="card-text">Description: {{$item['description']}}</p>
              <p class="card-text">Price: {{$item['price']}}</p>
              <form action="/add_to_cart"  method="POST" class="d-flex justify-content-center">
                @csrf
                <input type="hidden" name="product_id" value="{{$item['id']}}">
                <button class="btn btn-primary">Add to cart</button>
              </form>
              <div class="d-flex justify-content-center mt-1">
            
                <a href="/" class="btn btn-danger">Back</a>
                
              </div>
            </div>
          </div>
    </div>
@endsection