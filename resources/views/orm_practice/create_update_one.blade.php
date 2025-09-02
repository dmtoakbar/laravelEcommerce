@extends('master')

@section('content')
<div class="container justify-content-center">
<div class="row d-flex justify-content-center">
    <h4>Add and Update by one method</h4>
    <div class="col-5">
<form action="{{route('flight.add.update', $flight->primary_id)}}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Enter your name" value="{{$flight->name}}" class="form-control" id="" required>
    <br>
    <input type="email" name="email" value="{{$flight->email}}" placeholder="Enter your email" class="form-control" id="" required>
    <br>
    <input type="text" name="password" value="{{$flight->password}}" placeholder="Enter your password" class="form-control" id="" required>
    <br>
    <button type="submit" class="btn btn-success"> Submit</button>
</form>
</div>
</div>
<br>
<br>
</div>
@endsection