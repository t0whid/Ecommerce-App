@extends('master')
@section("content")
<div class="custom-product">
    <div class="trending-wrapper">
        <div class="col-sm-10">
            <table class="table border border-1">

                <tbody >
                    <tr>
                        <td>Amount</td>
                        <td>{{$products}} Taka</td>
                    </tr>
                    <tr>
                        <td>Tax</td>
                        <td>{{$products * 0.15}} Taka</td>
                    </tr>
                    <tr>
                        <td>Delivery </td>
                        <td>500 Taka</td>
                    </tr>
                    <tr>
                        <td>Total Amount</td>
                        <td>{{($products+500) + ($products * .15) }} Taka</td>
                    </tr>
                </tbody>
            </table>
            <div >
            <form action="/orderplace" method="POST" >
              @csrf
                <div class="form-group">
                  <textarea name="address" placeholder="Enter your address" class="form-control" ></textarea>
                </div>
                <div class="form-group">
                  <label for="pwd">Payment Method</label> <br>
                  <input type="radio" value="cash" name="payment"> <span>Online payment</span> <br>
                  <input type="radio" value="cash" name="payment"> <span>EMI payment</span> <br>
                  <input type="radio" value="cash" name="payment"> <span>Payment on Delivery</span> <br>

                </div>
                <button type="submit" class="btn btn-info">Order Now</button>
              </form>
          </div>
        </div>
    </div>
    @endsection