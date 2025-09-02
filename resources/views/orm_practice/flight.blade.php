@extends('master')
@section('content')
<div class="container justify-content-center">
<a href="{{route ('flight')}}" class="btn btn-primary"> Flight view</a>
 
{{$flight[0]['name']}}
<br>
<br>
<a href="{{ route('flight.edit', $flight[0]['primary_id']) }}" class="btn btn-primary"> Edit</a>
<a href="{{ route('flight.delete', $flight[0]['primary_id']) }}" class="btn btn-danger"> Delete</a>

<p>Create and update by one methdo</p>
<a href="{{ route('show.form', $flight[0]['primary_id']) }}" class="btn btn-primary"> Edit</a>
<a href="{{ route('show.form') }} " class="btn btn-success"> Add</a>
 {{-- <a href="{{ route('flight.delete') }}/{{$flight[0]['primary_id']}}" class="btn btn-danger"> Delete</a> --}}
<br>
<br>
{{$flight}}
<br>
<br>
<div class="row d-flex justify-content-center">
    <h4>Insetion form</h4>
    <div class="col-5">
<form action="/flight" method="POST">
    @csrf
<input type="text" name="name" placeholder="Enter your name" class="form-control" id="" required>
<br>
<input type="email" name="email" placeholder="Enter your email" class="form-control" id="" required>
<br>
<input type="password" name="password" placeholder="Enter your password" class="form-control" id="" required>
<br>
<button type="submit" class="btn btn-success"> Submit</button>
</form>
</div>
</div>
<br>
<br>

</div>
@endsection