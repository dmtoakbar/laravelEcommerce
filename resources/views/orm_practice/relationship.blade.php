<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E COMMERCE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-5 d-flex justify-content-center" style="margin-top:50px">
                <h3>Relationship</h3>
            </div>
            <div class="row" style="margin-top: 60px">
                <div class="col-8 offset-2">
                    <table class="table">
                        <thead>
                        <th>Name</th>
                        <th>Class</th>
                        <th>Email</th>
                        <th>Subject</th>
                        <th>Status</th>
                        </thead>
                        <tbody>
                        @foreach ($student as $item)
                            <tr>
                            <td>{{$item->name}}</td>
                            <td>{{$item->class}}</td>
                            <td>{{$item->email}}</td>
                            <td>@php
                                $n = 1;
                            @endphp
                                @foreach($item->result as $result)
                                    @if (count($item->result) > 1)
                                   
                                   @if ($n < 2)
                                   @php
                                       $n = 3;
                                   @endphp
                                       {{$result->subject}}</td>
                                       <td>{{$result->status}}</td>
                                   @else
                                   <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>{{$result->subject}}</td>
                                    <td>{{$result->status}}</td>
                                </tr>
                                   @endif
                                    @else
                                    {{$result->subject}}</td>
                                    <td>{{$result->status}}</td>
                                    @endif
    
                                @endforeach
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>