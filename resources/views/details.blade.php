@extends('master')
@section('content')
<div class="details p-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="{{$product['gallery']}}" class="w-100" alt="">
            </div>
            <div class="col-md-6">
                <div class="pt-3">
                    <h2>{{$product['name']}}</h2>
                    <h4>{{$product['price']}}</h4>
                    <h6>{{$product['description']}}</h6>
                    <span class="bg-info inline-block p-2 rounded text-white">{{$product['category']}}</span>
                </div>
                <div class="buttons mt-5">
                    <button class="btn btn-success">Buy Now</button>
                    <form action="/add-to-cart" method="POST" class="mt-2">
                        @csrf
                        <input type="hidden" name="product_id" value="{{$product['id']}}">
                        <button class="btn btn-primary">Add to Cart</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="p-3 float-right">
                <a href="/" class="btn btn-light ">Back to Home</a>
            </div>
        </div>
    </div>
</div>
@endsection