@extends('master')
@section('content')
<div class="cartlist py-5">
    <div class="container ">
    @if(!Session()->has('user'))
        
    @endif
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
    </div>
</div>
@endsection