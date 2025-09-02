@extends('master')
@section('content')
<br>
<br>
<div class="row d-flex justify-content-center">
   
    <div class="col-5">
        <h4>Update form</h4>
<form action="{{ route('flight.update', $flight->primary_id) }}" method="POST">
    @csrf
<input type="text" name="name" placeholder="Enter your name" value="{{$flight->name}}" class="form-control" id="" required>
<br>
<input type="email" name="email" value="{{$flight->email}}" placeholder="Enter your email" class="form-control" id="" required>
<br>
<input type="text" name="password" value="{{$flight->password}}" placeholder="Enter your password" class="form-control" id="" required>
<br>
<button type="submit" class="btn btn-success"> Update</button>
</form>
</div>
</div>    
@endsection