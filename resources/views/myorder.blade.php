@extends('master')
@section('content')
<div class="search-page p-5">
    <div class="container">
    <h3 class="text-center mb-5">Orders</h3>
        <div class="row">
            @foreach($orders as $item)
            <div class="col-md-6 shadow p-3 rounded">
            
                <div class="row">
                    <div class="col-md-6">
                        <img src="{{$item->gallery}}" class="w-100" alt="">
                    </div>
                    <div class="col-md-6">
                        <h5>{{$item->name}}</h5>
                        <h6 class="text-justify">{{$item->description}}</h6>
                    </div>
                </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection