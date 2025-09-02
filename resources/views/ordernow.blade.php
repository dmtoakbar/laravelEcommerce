@extends('master')
@section('content')
    <div class="container">
        <div class="row d-flex content-justify-center offset-4">
            <div class="col-8">
                <table class="table">
                    <tbody>
                        <tr>
                            <td>Amount:</td>
                            <td>$ {{$total}}</td>
                        </tr>
                        <tr>
                            <td>Tax:</td>
                            <td>$ 0</td>
                        </tr>
                        <tr>
                            <td>Delivery Charge:</td>
                            <td>$ 10</td>
                        </tr>
                        <tr>
                            <td>Total Amount:</td>
                            <td>
                                $ {{$total + 10}}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <br>
        <br>
        <form action="/orderplace" method="POST">
            @csrf
            <div class="form-group">
                <label for="address">Address:</label>
                <textarea name="address" class="form-control" id="" cols="30" rows="5"></textarea>
            </div>
            <br>
            <div class="form-group">
                <label for="payment">Paymethod method</label><br><br>
                <input type="radio" name="payment" value="online-payment" id=""> <span>Online payment</span><br><br>
                <input type="radio" name="payment" value="emi-payment" id=""> <span>EMI payment</span><br><br>
                <input type="radio" name="payment" value="cash-payment" id=""> <span>Cash on delivery</span><br><br>
            </div>
            <button type="submit" class="bnt btn-default">Buy</button>
        </form>
    </div>
@endsection