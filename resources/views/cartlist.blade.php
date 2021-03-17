<?php 
use App\Http\Controllers\ProductController;
$total = ProductController::cartItem();
?>
@extends('master')
@section('content')
<div class="cartlist py-5">
    <div class="container ">
    @if($total == 0)
        <div class="text-center">
            <span class="bg-danger inline-block p-3 text-white">Nothing to show</span>
        </div>
    @else
    <div class="order-button">
        <a href="/ordernow" class="btn btn-success ml-3">Order Now</a>
    </div>
    @foreach($products as $item)
        <div class="col-md-12 my-4 py-4  border-bottom border-">
            <div class="row">
                <div class="col-md-4">
                    <img src="{{$item->gallery}}" class="w-100" alt="">
                </div>
                <div class="col-md-4">
                    <h3 class="align-middle">{{$item->name}}</h3>
                    <h5 class="align-middle">{{$item->description}}</h5>
                </div>
                <div class="col-md-4 pt-5">
                    <a href="/removecart/{{$item->cartId}}" class="btn btn-danger float-right">Remove Item</a>
                </div>
            </div>
        </div>
    @endforeach
    @endif
    </div>
</div>
@endsection