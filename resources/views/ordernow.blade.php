@extends('master')
@section('content')
<div class="order-now py-5">
    <div class="container">
        <table class="table table-striped table-primary">
            <tbody>
                <tr>
                    <td>Amount</td>
                    <td></td>
                    <td>${{$total}}</td>
                </tr>
                <tr>
                    <td>Tax</td>
                    <td></td>
                    <td>$0</td>
                </tr>
                <tr>
                    <td>Delivery</td>
                    <td></td>
                    <td>$10</td>
                </tr>
                <tr>
                    <td>Total</td>
                    <td></td>
                    <td>${{$total + 10}}</td>
                </tr>
            </tbody>
        </table>
        <form action="/orderplace" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-6">
                <p>Address</p>
                <textarea name="address" class="w-100" cols="30" rows="2"></textarea>
                </div>
                <div class="col-md-6">
                <p>Payment Mehod</p>
                    <!-- <select name="payment" class="w-100">
                        <option value="online">Online</option>
                        <option value="cash">Cash</option>
                    </select> -->
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadioInline1" name="payment" value="Online" class="custom-control-input">
                        <label class="custom-control-label" for="customRadioInline1">Onlie</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadioInline2" name="payment" value="Cash" class="custom-control-input">
                        <label class="custom-control-label" for="customRadioInline2">Cash</label>
                    </div>
                </div>
            </div>
            <button class="btn btn-success" name="order">Order</button>
        </form>

    </div>
</div>
@endsection